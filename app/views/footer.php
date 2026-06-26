<!--
<! Elfsight WhatsApp Chat | Untitled WhatsApp Chat
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-05332476-3cc6-4289-ab77-865c09077237" data-elfsight-app-lazy></div>
-->

<!-- Responsive WhatsApp Button with Pulse Effect -->
<style>
  .wa-floating-btn {
    position: fixed;
    bottom: 24px;
    right: 24px;
    background-color: #25D366;
    color: #ffffff;
    text-decoration: none;
    font-family: Arial, sans-serif;
    font-size: 15px;
    font-weight: bold;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 20px;
    border-radius: 50px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    z-index: 9999;
    transition: transform 0.2s ease, background-color 0.2s ease;
    /* Links the pulse animation below */
    animation: wa-pulse 2s infinite;
  }

  .wa-floating-btn:hover {
    background-color: #20ba5a;
    transform: scale(1.05);
    /* Pauses pulse effect on hover for a cleaner desktop feel */
    animation-play-state: paused;
  }

  .wa-icon {
    width: 24px;
    height: 24px;
    fill: #ffffff;
  }

  /* Pulse Animation Keyframes */
  @keyframes wa-pulse {
    0% {
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4), 0 0 0 0 rgba(37, 211, 102, 0.4);
    }
    70% {
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.2), 0 0 0 15px rgba(37, 211, 102, 0);
    }
    100% {
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4), 0 0 0 0 rgba(37, 211, 102, 0);
    }
  }

  /* Responsive styling: Hides text on small mobile screens */
  @media (max-width: 480px) {
    .wa-floating-btn {
      padding: 14px;
      bottom: 16px;
      right: 16px;
    }
    .wa-text {
      display: none;
    }
  }
</style>

<!-- Your customized WhatsApp Link -->
<a href="https://wa.me/918802529677?text=hi" 
   class="wa-floating-btn" 
   target="_blank" 
   rel="noopener noreferrer">
  
  <!-- Embedded clean SVG icon -->
  <svg class="wa-icon" viewBox="0 0 24 24">
    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397 0 11.948 0c3.179.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.239 3.48 8.421-.003 6.597-5.339 11.945-11.89 11.945-2.003-.001-3.973-.51-5.714-1.478L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.747 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.623-1.023-5.086-2.885-6.948C16.512 2.006 14.053.98 11.43.98c-5.437 0-9.863 4.374-9.867 9.802-.001 1.63.435 3.22 1.262 4.63l-.994 3.635 3.723-.975zM17.9 14.127c-.318-.16-1.877-.925-2.162-1.03-.284-.105-.49-.156-.697.16-.207.314-.799 1.03-.978 1.24-.18.207-.36.233-.678.073-1.055-.529-1.785-1.01-2.493-2.227-.188-.323.189-.299.54-.997.058-.116.029-.217-.015-.317-.044-.099-.392-.947-.537-1.295-.143-.343-.288-.297-.393-.302-.103-.005-.221-.005-.339-.005-.119 0-.311.045-.474.223-.163.178-.62.607-.62 1.48s.634 1.716.723 1.835c.088.119 1.248 1.905 3.025 2.673.422.182.751.291 1.008.373.424.135.811.116 1.116.07.34-.051 1.048-.429 1.196-.842.149-.413.149-.767.104-.841-.045-.074-.163-.117-.481-.277z"/>
  </svg>
  
  <span class="wa-text">Chat with us</span>
</a>



<!-- Multi-Column Footer Section -->
<footer class="footer">
    <div class="container footer-grid">
        <!-- Column 1: About/Logo -->
        <div class="footer-col">
            <h3>AI TechKart</h3>
            <p>We design and develop premium custom websites and mobile apps that help ambitious businesses stand out. From concept to launch and beyond, we deliver tailored digital solutions that are fast, secure, and built to scale.</p>
        </div>
        <!-- Column 2: Quick Links -->
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/our-services">Services</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact-us">Contact</a></li>
            </ul>
        </div>
        <!-- Column 3: Contact Info -->
        <div class="footer-col">
            <h4>Contact Us</h4>
            <ul class="contact-info">
                <li>📍 D-2B, Rana Partap Road, Adarsh Nagar, New Delhi - 110033, India</li>
                <li>📞 <a href="tel:+918802529677">+91 8802529677</a></li>
                <li>✉️ <a href="mailto:contact@aitechkart.com">contact@aitechkart.com</a></li>
            </ul>
        </div>
    </div>
    <!-- Bottom Copyright bar -->
    <div class="footer-bottom">
        <p>&copy; 2026 AI TechKart. All rights reserved.</p>
    </div>
</footer>