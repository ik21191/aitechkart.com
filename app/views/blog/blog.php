<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - AI TechKart</title>
    <meta name="description" content="AI TechKart is a leading software development company specializing in Custom Website and Mobile App Development. We create tailored digital solutions that drive business growth and enhance user experience. Contact us for innovative web and app development services.">
    <meta name="author" content="AI TechKart">
    <meta name="copyright" content="AI TechKart">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body style="background-color: #f4f4f4;">
    <!-- Header Section -->
    <?php require_once __DIR__ . '/../header.php'; ?>
    <!-- Header Section -->

    <section class="blog-section">
        <!-- Main Section Info -->
        <div class="blog-header">
            <h2>Latest Insights</h2>
            <p>Stay updated with our newest updates, trends, and tutorials.</p>
        </div>

        <!-- Article Collection Flex Box / Grid Layout -->
        <div class="blog-grid">
            
            <!-- Article Card One -->
            <article class="blog-card">
                <div class="blog-image">
                    <span class="blog-tag">Technology</span>
                    <!-- Replace with your actual image path -->
                    <img src="/images/blog/ssl.png" alt="Web Development Desk Setup">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>June 12, 2026</span>
                        <span>•</span>
                        <span>5 Min Read</span>
                    </div>
                    <h3 class="blog-title">
                        <a href="/blog/importance-of-ssl">Importance of SSL</a>
                    </h3>
                    <p class="blog-excerpt">
                        SSL stands for <strong>Secure Sockets Layer</strong>. It is the standard security technology for establishing an encrypted link between a web server (where the website lives) and a browser (like Chrome or Firefox).
                    </p>
                    <a href="/blog/importance-of-ssl" class="blog-link">Read Article &#8594;</a>
                </div>
            </article>

            <!-- Article Card Two -->
            <article class="blog-card">
                <div class="blog-image">
                    <span class="blog-tag">Technology</span>
                    <img src="/images/blog/jwt.png" alt="JWT Authorization & Authentication Concept">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>June 13, 2026</span>
                        <span>•</span>
                        <span>10 Min Read</span>
                    </div>
                    <h3 class="blog-title">
                        <a href="/blog/jwt-use-and-how-to">JWT(JSON Web Token) - Use & How To</a>
                    </h3>
                    <p class="blog-excerpt">
                        Learn exactly what JWTs are, how they work, and how to implement them securely in your applications...
                    </p>
                    <a href="/blog/jwt-use-and-how-to" class="blog-link">Read Article &#8594;</a>
                </div>
            </article>

            <!-- Article Card Three -->
            <article class="blog-card">
                <div class="blog-image">
                    <span class="blog-tag">UI/UX Design</span>
                    <img src="/images/blog/responsive.png" alt="Advantage of responsive website design">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>June 05, 2026</span>
                        <span>•</span>
                        <span>6 Min Read</span>
                    </div>
                    <h3 class="blog-title">
                        <a href="/blog/advantage-of-responsive-website">Advantage of Responsive Website Design</a>
                    </h3>
                    <p class="blog-excerpt">
                        A responsive website is essential for ensuring your blog looks great and functions perfectly across all devices. By automatically adjusting ...
                    </p>
                    <a href="/blog/advantage-of-responsive-website" class="blog-link">Read Article &#8594;</a>
                </div>
            </article>

        </div>
    </section>

    <!-- Footer Section -->
    <?php require_once __DIR__ . '/../footer.php'; ?>
    <!-- Footer Section -->

</body>

</html>