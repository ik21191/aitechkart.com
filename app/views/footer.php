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
<a href="https://wa.me/918802529677?text=Hi"
  class="wa-floating-btn"
  target="_blank"
  rel="noopener noreferrer">

  <!-- Embedded clean SVG icon -->
  <svg class="wa-icon" viewBox="0 0 24 24">
    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397 0 11.948 0c3.179.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.239 3.48 8.421-.003 6.597-5.339 11.945-11.89 11.945-2.003-.001-3.973-.51-5.714-1.478L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.747 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.623-1.023-5.086-2.885-6.948C16.512 2.006 14.053.98 11.43.98c-5.437 0-9.863 4.374-9.867 9.802-.001 1.63.435 3.22 1.262 4.63l-.994 3.635 3.723-.975zM17.9 14.127c-.318-.16-1.877-.925-2.162-1.03-.284-.105-.49-.156-.697.16-.207.314-.799 1.03-.978 1.24-.18.207-.36.233-.678.073-1.055-.529-1.785-1.01-2.493-2.227-.188-.323.189-.299.54-.997.058-.116.029-.217-.015-.317-.044-.099-.392-.947-.537-1.295-.143-.343-.288-.297-.393-.302-.103-.005-.221-.005-.339-.005-.119 0-.311.045-.474.223-.163.178-.62.607-.62 1.48s.634 1.716.723 1.835c.088.119 1.248 1.905 3.025 2.673.422.182.751.291 1.008.373.424.135.811.116 1.116.07.34-.051 1.048-.429 1.196-.842.149-.413.149-.767.104-.841-.045-.074-.163-.117-.481-.277z" />
  </svg>

  <span class="wa-text">Chat with us</span>
</a>



<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  const lineTop = document.getElementById('line-top');
  const lineMid = document.getElementById('line-mid');
  const lineBot = document.getElementById('line-bot');

  menuBtn.addEventListener('click', () => {
    // 1. Toggle the mobile menu container dropdown
    mobileMenu.classList.toggle('hidden');

    // 2. Animate the individual layout bars into an "X" shape
    lineTop.classList.toggle('rotate-45');
    lineTop.classList.toggle('translate-x-1');

    lineMid.classList.toggle('opacity-0'); // Fades middle line out

    lineBot.classList.toggle('-rotate-45');
    lineBot.classList.toggle('translate-x-1');
  });
</script>

<!-- Multi-Column Footer Section -->
<footer class="bg-gray-900 text-gray-400 py-12 px-6 sm:px-12 border-t border-gray-800">
  <div class="max-w-7xl mx-auto">
    <!-- Top Section: Brand & Multi-column Links -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 pb-10 border-b border-gray-800">

      <!-- Brand & Info Column (Spans 2 columns on larger screens) -->
      <div class="lg:col-span-2">
        <a href="#" class="text-white text-2xl font-bold flex items-center gap-2">
          <!-- Sample Logo Icon -->
          <!--
          <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          -->
          <span class="font-bold text-indigo-600">AI TechKart</span>
        </a>
        <p class="mt-4 max-w-sm text-sm leading-relaxed">
          We design and develop premium custom websites and mobile apps that help ambitious businesses stand out. From concept to launch and beyond, we deliver tailored digital solutions that are fast, secure, and built to scale.
        </p>
      </div>

      <!-- Column 1: Products -->
      <div>
        <h3 class="text-white font-semibold text-sm tracking-wider uppercase mb-4">Quick Links</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="/" class="hover:text-white transition-colors duration-200">Home</a></li>
          <li><a href="/our-services" class="hover:text-white transition-colors duration-200">Services</a></li>
          <li><a href="/about-us" class="hover:text-white transition-colors duration-200">About Us</a></li>
          <li><a href="/blog" class="hover:text-white transition-colors duration-200">Blog</a></li>
          <li><a href="/contact" class="hover:text-white transition-colors duration-200">Contact</a></li>
        </ul>
      </div>

      <!-- Column 2: Support -->
      <div>
        <h3 class="text-white font-semibold text-sm tracking-wider uppercase mb-4">Contact Us</h3>
        <ul class="space-y-2 text-sm">
          <li class="hover:text-white transition-colors duration-200">D-2B, Rana Partap Road, Adarsh Nagar, New Delhi - 110033, India</li>
          <li><a href="tel:+918802529677" class="hover:text-white transition-colors duration-200">+91 8802529677</a></li>
          <li><a href="mailto:contact@aitechkart.com" class="hover:text-white transition-colors duration-200">contact@aitechkart.com</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Section: Copyright & Social Links -->
    <div class="mt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
      <p>&copy; 2026 AI TechKart. All rights reserved.</p>

      <!-- Social Icons Panel -->
      <div class="flex items-center gap-6">
        <a href="#" class="hover:text-white transition-colors duration-200" aria-label="Twitter">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
          </svg>
        </a>
        <a href="#" class="hover:text-white transition-colors duration-200" aria-label="GitHub">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.008.069-.008 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>