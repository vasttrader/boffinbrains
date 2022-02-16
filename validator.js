validator = function (formId, buttonId, url, validatingFields, id = null) {
    $('input[type=tel]').prop("pattern", "[0-9]{1,3}");
    $(buttonId).on("click", (e) => {
        e.preventDefault();
        let message = '';
        let errors = [];
        let regex = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        let fd = new FormData();
        if (typeof (validatingFields) === 'object') {
            validatingFields.map((object) => {
                let element = $(`#${object.id}`);
                if (object.type === 'email') {
                    if (object.required === false) {
                        fd.append(object.id, element.val());
                    } else if (element.val() && regex.test(element.val())) {
                        fd.append(object.id, element.val());
                    } else {
                        errors.push(`#${object.id}`);
                    }
                } else if (object.type === 'file') {
                    if (object.required === false) {
                        fd.append(object.id, element[0].files[0]);
                    } else if (element.val()) {
                        fd.append(object.id, element[0].files[0]);
                    } else {
                        errors.push(`#${object.id}`);
                    }
                } else if (object.type === 'tinyMCE') {
                    if (object.required === false) {
                        fd.append(object.id, tinymce.get(object.id).getContent());
                    } else if (tinymce.get(object.id).getContent()) {
                        fd.append(object.id, tinymce.get(object.id).getContent());
                    } else {
                        errors.push(".tox-tinymce");
                    }
                } else {
                    if (object.required === false) {
                        fd.append(object.id, element.val());
                    } else if (element.val()) {
                        fd.append(object.id, element.val());
                    } else {
                        errors.push(`#${object.id}`);
                    }
                }
            });
            if (errors.length === 0) {
                if (id) {
                    fd.append('id', id); // Updating ID
                }
                $.ajax({
                    type: "POST",
                    url,
                    data: fd,
                    dataType: "json",
                    cache: false,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('body').append(`
                        <div id="backdropElement" style="position: absolute;
                                width: 100%;
                                height: 100%;
                                top: 0;
                                left: 0;
                                background: #00000030;
                                pointer-events: none;
                                z-index: 99999;
                                display:grid;
                                place-items:center"
                            >
                            <div class="spinner-border text-purple" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        `);
                    },
                    success: function (response) {
                        $('#backdropElement').remove();
                        Data = JSON.parse(JSON.stringify(response));
                        $(formId)[0].reset();
                        if (Data["redirect"]) {
                            setTimeout(() => {
                                window.location.href = Data["redirect"];
                            }, Data["redirectDelay"] ? Data["redirectDelay"] : 1000)
                        }
                        if (Data["message"]) {
                            Snackbar.show({
                                text: Data["message"],
                                textColor: '#fff',
                                pos: 'bottom-right',
                                actionText: 'Dismiss',
                                actionTextColor: '#fff',
                                backgroundColor: Data["error"] ? '#dc3545' : '#198754'
                            });
                        }
                    },
                    error: function (response) {
                        $('#backdropElement').remove();
                        Data = JSON.parse(JSON.stringify(response));
                        console.log(Data);
                        if (Array.isArray(Data.responseJSON)) {
                            Data.responseJSON.map((object) => {
                                object.errors.map((error) => {
                                    message += `
                                    <p>
                                        ${error}
                                    </p>
                                    `;
                                })
                            })
                        } else {
                            $.each(Data.responseJSON.errors, (key, value) => {
                                value.map((error) => {
                                    message += `
                                    <p>
                                        ${error}
                                    </p>
                                    `;
                                })
                            })
                        }
                        Snackbar.show({
                            text: message,
                            textColor: '#fff',
                            pos: 'bottom-right',
                            actionText: 'Dismiss',
                            actionTextColor: '#fff',
                            backgroundColor: '#dc3545'
                        });
                        setTimeout(() => {
                            location.reload();
                        }, 8000);
                    },
                });
            } else {
                errors.map((item) => {
                    $(item).addClass('border border-danger');
                })
                validatingFields.map((object) => {
                    if (object.hasOwnProperty("message")) {
                        if ($.inArray(`#${object.id}`, errors) !== -1) {
                            message += `
                                <p class="mb-1">
                                    ${object.message}
                                </p>
                            `;
                        }
                        if (($.inArray(".tox-tinymce", errors) !== -1) && object.type === 'tinyMCE') {
                            message += `
                                <p class="mb-1">
                                    ${object.message}
                                </p>
                            `;
                        }
                    }
                });
                Snackbar.show({
                    text: message,
                    textColor: '#fff',
                    pos: 'bottom-right',
                    actionText: 'Dismiss',
                    actionTextColor: '#fff',
                    backgroundColor: '#dc3545'
                });
                setTimeout(() => {
                    errors.map((item) => {
                        $(item).removeClass('border border-danger');
                    })
                    errors = [];
                }, 5000);
            }
        } else {
            throw new Error('Validating fields must be of type Array Objects having id and type.');
        }
    });
};