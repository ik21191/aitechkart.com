<section id="contact">
    <div class="container">
        <h2 class="section-title">Send us your requirements</h2>

        <div class="contact-grid">
            <!-- Contact Form Component -->
            <form id="jsonForm" class="contact-form" action="#" method="POST" onsubmit="event.preventDefault();">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="number">Contact Number</label>
                    <input type="tel" name="number" id="number" required placeholder="10 Digit mobile number" pattern="[0-9]{10}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" required placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="description" rows="5" maxlength="150" required
                        placeholder="Please provide a brief description about your requirement."></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
                <p id="responseOutput"></p>
            </form>

            <!-- Embedded Google Map Component -->
            <div class="map-container">
                <!-- Swap out the src URL below with your custom map embed link -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.9358393359726!2d77.17455029999999!3d28.721463399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d012210e1e763%3A0x44c4ab342ea71a83!2sSaii%20Tech%20Solutions!5e0!3m2!1sen!2sin!4v1779353043552!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
</section>