<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI TechKart - Custom Web & Mobile App Development</title>
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body style="background-color: #f4f4f4;">
    <!-- Navigation Bar -->
    <?php require_once __DIR__ . '/nav-section/nav-section.php'; ?>
    <!-- Navigation Section -->

    <section id="404" class="services-section">
        <div class="container">
            <h2 class="section-title"><?= htmlspecialchars($response) ?></h2>
            <!--<p style="text-align: center; margin-top: 20px; margin-bottom: 40px;">You have been verified.</p>-->
        </div>
    </section>

    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center md:py-32">
        <p class="mt-6 text-lg sm:text-xl text-slate-600 max-w-2xl mx-auto">
            <?= htmlspecialchars($response) ?>
        </p>

    </header>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
    <!-- Footer Section -->

</body>

</html>