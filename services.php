<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>
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
                Our Services
            </h1>
        </section>
        <section class="bg-light">
            <div class="container py-5">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">
                        Our Services
                    </h2>
                    <p class="text-muted mb-5">
                        We are provide wide range of custom services all domains like portfolios, medical,
                        education,industries etc.
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
    fetchServices();
</script>

</html>