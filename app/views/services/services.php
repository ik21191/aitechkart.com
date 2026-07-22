<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - AI TechKart | IT Services</title>
    <meta name="description" content="Discover AI TechKart's comprehensive IT services, including Custom Website and Mobile App Development, API Development, E-Commerce Solutions, and Cloud Services. We provide tailored digital solutions to drive business growth and enhance user experience. Contact us for innovative web and app development services.">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/tailwind.css">
</head>

<body class="bg-linear-to-tr from-[#eaab58] via-[#d3ba91] to-[#eccdad] rounded-xl antialiased">

    <!-- Navigation Bar -->
    <?php require_once __DIR__ . '/../nav-section/nav-section.php'; ?>
    <!-- Navigation Section -->

    <!-- Hero Section -->
    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center md:py-32">

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Column: Description -->
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 tracking-tight">
                    Custom Website and Mobile App Development
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">At <b>AI TechKart</b>, we are a custom Website and custom Mobile App development company, dedicated to creating high-performance responsive websites and mobile applications that fuel business growth.</p>
                <p class="text-lg text-gray-600 leading-relaxed">We don’t believe in one-size-fits-all templates. Every project is <b>100% custom-built</b> from the ground up to reflect your brand identity, meet your specific requirements, and deliver measurable results.
                    <p />
            </div>

            <!-- Right Column: Image -->
            <div class="relative w-full h-64 sm:h-96 lg:h-112.5">
                <img
                    src="images/our-service.jpg"
                    alt="Custom Website and Mobile App Development"
                    class="w-full h-full object-cover rounded-2xl shadow-xl" />
            </div>
        </div>
    </header>


    <!-- Service Section -->
    <?php require_once __DIR__ . '/service-section.php'; ?>
    <!-- Service Section -->

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