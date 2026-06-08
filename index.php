<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI TechKart - Custom Web & Mobile App Development</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Section -->
    <?php include 'header.php'; ?>
    <!-- Header Section -->

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="grid-layout">
                <div class="card">
                    <div class="card-icon">💻</div>
                    <h3>Web Design</h3>
                    <p>Crafting stunning, user-friendly digital layouts built to convert target audiences.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🚀</div>
                    <h3>Development</h3>
                    <p>Writing clean, efficient, and semantic frontend code optimized for speed.</p>
                </div>
                <div class="card">
                    <div class="card-icon">📈</div>
                    <h3>SEO Optimization</h3>
                    <p>Boosting your online visibility with modern search engine strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- expertise Section -->
    <?php include 'expertise.php'; ?>
    <!-- expertise Section -->

    <!-- Contact Section -->
     <?php include 'contact.php'; ?>
    <!-- Contact Section -->

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
    <!-- Footer Section -->

    <!-- The Popup Overlay (Hidden by default, launches automatically) -->
    <div id="popupOverlay" class="popup-overlay">
        <!-- The Popup Box -->
        <div class="popup-box">
            <button id="closePopupBtn" class="close-btn" aria-label="Close popup">&times;</button>
            <div class="popup-content">
                <h2>Exclusive Offer! 🔥</h2>
                <p>Get 50% discount on your first engagement with us. Don't miss out on this limited-time deal!</p>

                <!-- Link pointing to your contact section -->
                <a href="#contact" id="popupCtaLink" class="cta-btn">Contact Us Now</a>
            </div>
        </div>
    </div>

    <script src="custom.js"></script>
</body>

</html>