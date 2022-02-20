<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Digital Marketing | Website Design Company Uttarakhand</title>
    <?php 
        include_once('layouts/head.php');
    ?>
</head>

<body>
    <?php 
        include_once('layouts/header.php');
    ?>
    <main>
        <section class="bg-primary d-flex align-items-center full-width mb-5 overflow-hidden">
            <div class="w-100 d-flex flex-md-row flex-column">
                <div class="container-md d-flex justify-content-center align-items-center">
                    <div class="flex-lg-shrink-0 flex-shrink-1">
                        <p class="h5 mb-4 letter-spacing">
                            IT Consulting, Designing & Marketing
                        </p>
                        <h1 class="display-5 fw-bold mb-4">
                            Undergo Digital Innovation
                            <br>
                            with our expertise.
                        </h1>
                        <p>
                            Your website is more than just a piece of online software—it's your product &amp;
                            <br>
                            one of the most important ways through which you'll engage with your end-users.
                            <br>
                            You can't afford to get it wrong.
                        </p>
                        <a class="d-inline-block btn-light" href="#enquiryFormWrapper">
                            Let's work together !
                        </a>
                    </div>
                </div>
                <img src="./images/home-img.png" alt="Home Graphic" class="img-fluid d-xl-block d-none">
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="mb-lg-0 mb-4">
                            <img src="./images/about-img.png" alt="About Us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <h2 class="h1 fw-bold">
                            Blurring the gap between creativity and technology.
                        </h2>
                        <p class="text-muted line-height mb-5">
                            We at
                            <strong>BoffinBrains</strong>,
                            <em>just don't develop websites, we develop businesses</em>.
                            We help your business to shake hands with latest trends and technologies while being
                            focused in turning your ideas into Reality. Cutting it short, We are a one stop shop for
                            all your digital requirements like
                            <strong>Website Designing, E-commerce Development, Digital marketing, SEO, Social Media
                                marketing, Online Software Development.</strong>
                        </p>
                        <a class="btn-primary" href="services.php">
                            Check Our Services
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light">
            <div class="container py-5">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">
                        Our Services
                    </h2>
                    <div class="divider">
                        <i class="fa-solid fa-rocket fa-xl"></i>
                    </div>
                    <p class="text-muted mb-5">
                        Do you want a Ferrari that just sits there, or do you want one that goes 0-60MPH in less than 3
                        seconds?
                        <br>
                        Discover our wide range of services below here.
                    </p>
                </div>
                <div class="row" id="services">
                    <!-- Dynamic data -->
                </div>
            </div>
        </section>
        <section class="bg-purple">
            <div class="container py-5">
                <div class="row" id="statistics">
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4 py-md-5 py-3 text-center text-white">
                            <div class="statisticsValue display-6 fw-bold" data-value="20">
                                <!-- Dynamic Count -->
                            </div>
                            <div class="h3">
                                Happy Clients
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4 py-md-5 py-3 text-center text-white">
                            <div class="statisticsValue display-6 fw-bold" data-value="22">
                                <!-- Dynamic Count -->
                            </div>
                            <div class="h3">
                                Projects Done
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="py-md-5 py-3 text-center text-white">
                            <div class="statisticsValue display-6 fw-bold" data-value="13">
                                <!-- Dynamic Count -->
                            </div>
                            <div class="h3">
                                Experience
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php 
        include_once('layouts/enquiryForm.php');
    ?>
    <?php 
        include_once('layouts/footer.php');
    ?>
</body>
<script>
    // Dynamic Numbers Count
    dynamicCount();

    // Services Fetch
    fetchServices()
</script>

</html>