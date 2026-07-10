<nav class="bg-white fixed top-0 left-0 w-full z-50 shadow-sm border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <div class="text-xl font-bold text-indigo-600"><a href="/">AI TechKart</a></div>

        <!-- Desktop Navigation Links (Kept original logic) -->
        <div class="hidden md:flex space-x-8 font-medium">
            <a href="/" class="text-slate-600 hover:text-indigo-600 transition">Home</a>
            <a href="/our-services" class="text-slate-600 hover:text-indigo-600 transition">Services</a>
            <a href="/about-us" class="text-slate-600 hover:text-indigo-600 transition">About Us</a>
            <a href="/blog" class="text-slate-600 hover:text-indigo-600 transition">Blogs</a>
            <a href="/contact-us" class="text-slate-600 hover:text-indigo-600 transition">Contact Us</a>
        </div>

        <div class="hidden md:block">
            <a href="#contact" class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Get
                Started</a>
        </div>

        <!-- Mobile Menu Button (Visible ONLY on small screens) -->
        <div class="md:hidden flex items-center">
            <button id="menu-btn"
                class="relative w-6 h-5 flex flex-col justify-between items-center group focus:outline-none"
                aria-label="Toggle Menu">
                <!-- Top Line -->
                <span id="line-top"
                    class="w-full h-0.5 bg-slate-600 rounded transform transition duration-300 ease-in-out origin-left"></span>
                <!-- Middle Line -->
                <span id="line-mid" class="w-full h-0.5 bg-slate-600 rounded transition duration-200 ease-in-out"></span>
                <!-- Bottom Line -->
                <span id="line-bot"
                    class="w-full h-0.5 bg-slate-600 rounded transform transition duration-300 ease-in-out origin-left"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu (Hidden by default via "hidden" class) -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-white border-t border-slate-200 px-4 pt-2 pb-4 space-y-2 shadow-inner">
        <a href="/" class="block text-slate-600 hover:text-indigo-600 font-medium py-2">Home</a>
        <a href="/our-services" class="block text-slate-600 hover:text-indigo-600 font-medium py-2">Services</a>
        <a href="/about-us" class="block text-slate-600 hover:text-indigo-600 font-medium py-2">About Us</a>
        <a href="/blog" class="block text-slate-600 hover:text-indigo-600 font-medium py-2">Blogs</a>
        <a href="/contact-us" class="block text-slate-600 hover:text-indigo-600 font-medium py-2">Contact Us</a>
        <a href="#contact" onclick="toggleMobileMenu()"
            class="w-full mt-2 bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Get
            Started</a>
    </div>
</nav>