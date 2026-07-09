<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Information - AI TechKart</title>
    <meta name="description" content="AI TechKart is a leading software development company specializing in Custom Website and Mobile App Development. We create tailored digital solutions that drive business growth and enhance user experience. Contact us for innovative web and app development services.">
    <link rel="stylesheet" href="css/tailwind.css">
</head>

<body class="bg-white text-slate-800 antialiased">
    <!-- Navigation Bar -->
    <?php require_once __DIR__ . '/../nav-section/nav-section.php'; ?>
    <!-- Navigation Section -->


    <!-- Hero Section -->
    <header class="bg-amber-300 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center md:py-32">

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Column: Description -->
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 tracking-tight">
                    Our Journey
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed text-justify ">We are a creative and technology-driven development company, dedicated to delivering high-quality <b>custom website development</b> and <b>mobile app development</b> solutions. With a passion for clean code, modern design, and seamless user experiences, we help startups, SMEs, and established brands transform their ideas into robust digital products.</p>
                <p class="text-lg text-gray-600 leading-relaxed text-justify ">Whether you need a sleek corporate website, a high-performance e-commerce platform, or a feature-rich mobile app for iOS and Android, we handle the entire process — from strategy and design to development, testing, and ongoing support.
                    <p />
            </div>

            <!-- Right Column: Image -->
            <div class="relative w-full h-64 sm:h-96 lg:h-112.5">
                <img
                    src="images/about-us.jpg"
                    alt="Team collaboration working on digital products"
                    class="w-full h-full object-cover rounded-2xl shadow-xl" />
            </div>
        </div>
    </header>

    <!--About Us Section -->
    <?php require_once __DIR__ . '/about.php'; ?>
    <!-- About Us Section -->

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