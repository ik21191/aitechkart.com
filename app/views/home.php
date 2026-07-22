<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI TechKart - Custom Website & Mobile App Development</title>
    <meta name="description" content="AI TechKart is a leading software development company specializing in Custom Website and Mobile App Development. We create tailored digital solutions that drive business growth and enhance user experience. Contact us for innovative website and mobile app development services.">
    <meta name="author" content="AI TechKart">
    <meta name="copyright" content="AI TechKart">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "AI TechKart",
            "url": "https://www.aitechkart.com",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-8802529677",
                "contactType": "customer service",
                "email": "contact@aitechkart.com",
                "availableLanguage": "en"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "D-2B, Rana Partap Road, Adarsh Nagar",
                "addressLocality": "New Delhi",
                "postalCode": "110033",
                "addressCountry": "IN"
            },
            "service": [{
                    "@type": "Service",
                    "name": "Custom Website and Custom Mobile App Development",
                    "description": "Tailored web design and mobile application development built to match your specific business requirements."
                },
                {
                    "@type": "Service",
                    "name": "API Development",
                    "description": "Secure, scalable, and robust API development and integration services to seamlessly connect your platforms."
                },
                {
                    "@type": "Service",
                    "name": "E-Commerce",
                    "description": "End-to-end e-commerce solutions, online store creation, and secure payment gateway integrations."
                },
                {
                    "@type": "Service",
                    "name": "Cloud Solutions",
                    "description": "Reliable cloud migration, architecture design, deployment, and cloud infrastructure management."
                }
            ]
        }
    </script>

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/tailwind.css">
</head>

<body class="bg-linear-to-tr from-[#eaab58] via-[#d3ba91] to-[#eccdad] rounded-xl antialiased">

  <!-- Navigation Bar -->
    <?php require_once __DIR__ . '/nav-section/nav-section.php'; ?>
  <!-- Navigation Section -->

  <!-- Hero Section -->
  <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center md:py-32">
    <h1 class="text-3xl sm:text-6xl font-extrabold text-slate-900 tracking-tight max-w-3xl mx-auto">
      Custom Website and Mobile App Development</h1>
    <p class="mt-6 text-lg sm:text-xl text-slate-600 max-w-2xl mx-auto">
      We turn your vision into powerful, user-friendly digital solutions. Specializing in <b>custom website
        development</b> and <b>custom mobile app development</b>, we build tailored software that stands out, performs
      exceptionally, and grows with your business.
    </p>
    <div class="mt-10 flex justify-center gap-4">
      <a href="#contact"
        class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-indigo-700 transition">Get
        Started</a>
    </div>
  </header>

  <!-- Service Section -->
    <?php require_once __DIR__ . '/services/service-section.php'; ?>
  <!-- Service Section -->

  <!-- about-us Section -->
    <?php require_once __DIR__ . '/about-us/about.php'; ?>
    <!-- about-us Section -->

    <!-- Contact Section -->
    <?php include 'contact.php'; ?>
    <!-- Contact Section -->

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
    <!-- Footer Section -->

    <!--Overlay section-->
    <?php require_once __DIR__ . '/overlay.php'; ?>
    <!--Overlay section-->

    <script src="js/custom.js"></script>

</body>

</html>