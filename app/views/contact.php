<section id="contact" class="py-7 dark:bg-slate-900 lg:py-24 border-t border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="mx-auto max-w-2xl text-center mb-12 lg:mb-1">
            <h2 class="text-3xl font-bold text-center text-slate-900 mb-1">Get in Touch</h2>
            <p class="py-5 text-lg text-slate-600 text-center">We'd love to hear from you. Send us your requirements and we'll get back to you as soon as possible.</p>
        </div>

        <!-- Grid Wrapper for Map & Form -->
        <div class="grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-2 lg:grid-cols-2">

            <!-- Left Side: Interactive Map Container -->
            <div
                class="w-full h-112.5 md:h-full lg:h-full min-h-100 overflow-hidden rounded-2xl bg-slate-200 dark:bg-slate-800 shadow-md">
                <!-- Replace src with your specific Google Maps embed URL -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.173785885508!2d77.17079897409833!3d28.722689279983392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d012210e1e763%3A0x44c4ab342ea71a83!2sAI%20TechKart!5e1!3m2!1sen!2sin!4v1781699493508!5m2!1sen!2sin"
                    class="w-full h-full border-0 dark:invert-[0.9] dark:hue-rotate-180" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="rounded-2xl bg-white p-8 shadow-md dark:bg-slate-800 sm:p-10">
                <form id="jsonForm" action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault();">

                    <!-- Name Input Field -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-900 dark:text-white">Full Name</label>
                        <div class="mt-2.5">
                            <input type="text" name="name" id="name" required placeholder="Your Name"
                                class="block w-full rounded-md border border-slate-300 bg-white px-3.5 py-2 text-slate-900 placeholder-slate-400 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        </div>
                    </div>

                    <div>
                        <label for="number" class="block text-sm font-semibold text-slate-900 dark:text-white">Contact Number</label>
                        <div class="mt-2.5">
                            <input type="tel" name="number" id="number" autocomplete="tel" required placeholder="10 Digit mobile number" pattern="[0-9]{10}"
                                class="block w-full rounded-md border border-slate-300 bg-white px-3.5 py-2 text-slate-900 placeholder-slate-400 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        </div>
                    </div>

                    <!-- Email Input Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-900 dark:text-white">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email" required placeholder="Your Email"
                                class="block w-full rounded-md border border-slate-300 bg-white px-3.5 py-2 text-slate-900 placeholder-slate-400 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-semibold text-slate-900 dark:text-white">Subject</label>
                        <div class="mt-2.5">
                            <input type="text" name="subject" id="subject" required placeholder="Subject"
                                class="block w-full rounded-md border border-slate-300 bg-white px-3.5 py-2 text-slate-900 placeholder-slate-400 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        </div>
                    </div>

                    <!-- Message Textarea -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-900 dark:text-white">Your Message</label>
                        <div class="mt-2.5">
                            <textarea name="description" id="message" rows="5" required maxlength="150" placeholder="Please provide a brief description about your requirement."
                                class="block w-full rounded-md border border-slate-300 bg-white px-3.5 py-2 text-slate-900 placeholder-slate-400 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500"></textarea>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div>
                        <button type="submit"
                            class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400">
                            Send Message
                        </button>
                        <p id="responseOutput"></p>
                    </div>

                </form>
            </div>

            <!-- Overlay section when sending contact us query start here-->
            <!-- 1. Intermediate Processing HTML Screen (Initially Hidden) -->
            <div id="loadingOverlay" class="overlay">
                <div class="spinner"></div>
                <h2>Please don't close or reload the page, sending query....</h2>
            </div>

            <!-- 2. Final Response Popup Modal (Initially Hidden) -->
            <div id="responseModal" class="modal">
                <div class="modal-content">
                    <h3 id="modalHeader">Thanks for contacting us!</h3>
                    <p id="responseText"></p>
                    <button type="button" onclick="closeModal()">Close</button>
                </div>
            </div>
            <!-- Overlay section when sending contact us query ends here-->
        </div>
    </div>
</section>