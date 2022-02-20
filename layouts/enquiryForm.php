<section class="bg-light" id="enquiryFormWrapper">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="mb-lg-0 mb-4 py-5">
                    <h2 class="h1 fw-bold">
                        How May We Help You!
                    </h2>
                    <p class="text-muted line-height mb-5">
                        Let us know your ideas and then just sit back relax. We will turn them into reality.
                        Just write us you message & our consultant will contact you asap.
                    </p>
                    <!-- Errors -->
                    <?php
                        if(isset($_COOKIE["error"])){
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                            <?=$_COOKIE["error"]?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        }
                    ?>
                    <!-- Success -->
                    <?php
                        if(isset($_COOKIE["success"])){
                    ?>
                        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                            <?=$_COOKIE["success"]?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        }
                    ?>
                    <form id="enquiryForm" method="post" action="server.php">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="E-mail Address*" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <select name="services" class="form-select" required>
                                        <option value="">
                                            Select Service Required
                                        </option>
                                        <option value="Website Designing">
                                            Website Designing
                                        </option>
                                        <option value="E-commerce">
                                            E-commerce
                                        </option>
                                        <option value="Online Applications">
                                            Online Applications
                                        </option>
                                        <option value="Digital Branding">
                                            Digital Branding
                                        </option>
                                        <option value="Digital Marketing">
                                            Digital Marketing
                                        </option>
                                        <option value="Bulk SMS">
                                            Bulk SMS
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-5">
                                    <textarea name="message" rows="7" style="resize: none;" class="form-control"
                                        placeholder="Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary" id="enquiryFormBtn">
                            Submit Now
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="py-5">
                    <img src="./images/contact-img.png" alt="Contact Us Graphic" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>