<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - AI TechKart | IT Services</title>
    <meta name="description" content="Discover AI TechKart's comprehensive IT services, including Custom Website and Mobile App Development, API Development, E-Commerce Solutions, and Cloud Services. We provide tailored digital solutions to drive business growth and enhance user experience. Contact us for innovative web and app development services.">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #f4f4f4;">
    <!-- Header Section -->
    <?php require_once __DIR__ . '/../header.php'; ?>
    <!-- Header Section -->

    <!-- Company Story -->
    <!--TODO: Make a separate css class -->
    <section class="story-section">
        <div class="container story-grid">
            <div class="story-text">
                <h2>Custom Website and Mobile App Development</h2>
                <p>At <b>AI TechKart</b>, we are a custom Website and custom Mobile App development company, dedicated to creating high-performance responsive websites and mobile applications that fuel business growth.</p>
                <p>We don’t believe in one-size-fits-all templates. Every project is <b>100% custom-built</b> from the ground up to reflect your brand identity, meet your specific requirements, and deliver measurable results.
                    <p />
            </div>
            <div>
                <img class="story-img" src="images/our-service.jpg" alt="Custom Website and Mobile App Development">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <?php require_once __DIR__ . '/service-section.php'; ?>
    <!-- Services Section -->

    <!--Tech section-->
    <?php require_once __DIR__ . '/../html-section/tech-section.php'; ?>
    <!--Tech section-->

    <!-- Contact Section -->
    <?php require_once __DIR__ . '/../contact.php'; ?>
    <!-- Contact Section -->

    <!-- Footer Section -->
    <?php require_once __DIR__ . '/../footer.php'; ?>
    <!-- Footer Section -->

    <!--Overlay section-->
    <?php require_once __DIR__ . '/../overlay.php'; ?>
    <!--Overlay section-->

    <script src="js/custom.js"></script>

</body>

</html>