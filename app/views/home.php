<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI TechKart - Custom Web & Mobile App Development</title>
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