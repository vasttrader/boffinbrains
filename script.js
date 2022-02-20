function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)

    );
}

function fetchServices() {
    fetch("./data.json").then(response => {
        return response.json();
    }).then(data => {
        const serviceEl = document.getElementById('services');
        data.services.map(({ title, icon, color, description }) => {
            serviceEl.innerHTML += `
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
                <div class="bg-white rounded-3 text-center p-4 focus-shadow mb-4">
                    <div class="bg-light avatar mx-auto mb-3" style="color: ${color}">
                        ${icon}
                    </div>
                    <h4>
                        ${title}
                    </h4>
                    <p class="line-height text-muted m-0">
                        ${description}
                    </p>
                </div>
            </div>
        `;
        })
    });
}

function fetchAbout() {
    fetch("./data.json").then(response => {
        return response.json();
    }).then(data => {
        const aboutEl = document.getElementById('about');
        data.about.map(({ title, icon, description }) => {
            aboutEl.innerHTML += `
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
                <div class="rounded-3 text-center p-4 shadow-sm mb-lg-0 mb-4 focus-color">
                    <div class="bg-light avatar mx-auto mb-3 text-purple">
                        ${icon}
                    </div>
                    <h4>
                        ${title}
                    </h4>
                    <p class="line-height m-0">
                        ${description}
                    </p>
                </div>
            </div>
        `;
        })
    });
}

function dynamicCount() {
    const content = document.querySelector('#statistics');
    const counters = document.querySelectorAll('.statisticsValue');
    const speed = 200;
    document.addEventListener(
        'scroll',
        (e) => {
            isInViewport(content) ? counters.forEach(counter => {
                const animate = () => {
                    const value = +counter.getAttribute('data-value');
                    const data = +counter.innerText;

                    const time = value / speed;
                    if (data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 80);
                    } else {
                        counter.innerText = value;
                    }
                }

                animate();
            }) : counters.forEach(counter => counter.innerText = 0);
        },
        { passive: true }
    );
}