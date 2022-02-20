<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <?php 
        include_once('layouts/head.php');
    ?>
</head>

<body>
    <?php 
        include_once('layouts/header.php');
    ?>
    <main>
        <section class="heading-bg">
            <h1 class="text-center">
                Contact Us
            </h1>
        </section>
        <section class="bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="d-flex flex-column mb-lg-0 mb-4">
                            <div class="d-flex flex-row align-items-start">
                                <i class="bi bi-envelope-open text-purple fs-3"></i>
                                <div class="ms-3">
                                    <h4>
                                        Email & Phone
                                    </h4>
                                    <p class="mb-2">
                                        info@boffinbrains.com
                                    </p>
                                    <p class="m-0">
                                        +91-9012800500
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-row align-items-start">
                                <i class="bi bi-geo-alt text-purple fs-3"></i>
                                <div class="ms-3">
                                    <h4>
                                        Our Location
                                    </h4>
                                    <p>
                                        1st Floor, Karkee Complex,
                                        Near Nirmala Convent School, Kathgodam, Haldwani,
                                        Distt- Nainital Uttarakhand
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <form id="enquiryForm" method="post" action="server.php">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail Address*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-5">
                                        <textarea name="message" rows="7" style="resize: none;" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-primary mb-4">
                                Send Message
                            </button>
                        </form>
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
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php 
        include_once('layouts/footer.php');
    ?>
</body>

</html>