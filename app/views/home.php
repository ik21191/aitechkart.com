<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI TechKart - Custom Website & Mobile App Development</title>
    <meta name="description" content="AI TechKart is a leading software development company specializing in Custom Website and Mobile App Development. We create tailored digital solutions that drive business growth and enhance user experience. Contact us for innovative web and app development services.">
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
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #f4f4f4;">
    <!-- Header Section -->
    <?php include 'header.php'; ?>
    <!-- Header Section -->

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container hero-content">
            <h1>Crafting Digital Experiences That Drive Results</h1>
            <p>We turn your vision into powerful, user-friendly digital solutions. Specializing in custom website development and mobile app development, we build tailored software that stands out, performs exceptionally, and grows with your business.
            </p>
            <a href="#contact" class="btn">Get Started</a>
        </div>
    </section>

    <!-- Services Section -->
    <?php require_once __DIR__ . '/services/service-section.php'; ?>
    <!-- Services Section -->

    <!-- about-us Section -->
    <?php require_once __DIR__ . '/about-us/about.php'; ?>
    <!-- about-us Section -->

    <!-- Contact Section -->
    <?php include 'contact.php'; ?>
    <!-- Contact Section -->

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
    <!-- Footer Section -->

</body>

</html>