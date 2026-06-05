document.getElementById('jsonForm').addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent page reload

    const form = e.target;
    const formData = new FormData(form);

    // Convert FormData to a standard object
    const data = Object.fromEntries(formData.entries());

    // Select the output paragraph
    const outputParagraph = document.getElementById('responseOutput');
    outputParagraph.textContent = ""; // Optional loading text

    try {
        const response = await fetch('./php/process.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json' // Tell PHP you're sending JSON
            },
            body: JSON.stringify(data) // Send JSON string
        });

        //TODO : Remove below line and uncomment the line after that to get actual response from server
        //const result = await response.json();
        result = '{"status":"success","message":"Thanks for contacting us, we will revert you soon."}';
        result = JSON.parse(result);
        // Show the message from your PHP script inside the paragraph
        outputParagraph.textContent = result.message;

        // Reset all input fields if the server request was successful
        if (response.ok) {
            form.reset();
        }

        //For debug
        //console.log('Server Response:', result);
    } catch (error) {
        console.error('Error:', error);
    }
});

// Popup functionality starts here
document.addEventListener("DOMContentLoaded", () => {
    const closeBtn = document.getElementById("closePopupBtn");
    const overlay = document.getElementById("popupOverlay");
    const ctaLink = document.getElementById("popupCtaLink");

    // Function to open popup
    const openPopup = () => {
        overlay.classList.add("active");
        document.body.style.overflow = "hidden"; // Prevents background page scrolling
    };

    // Function to close popup
    const closePopup = () => {
        overlay.classList.remove("active");
        document.body.style.overflow = ""; // Restores background page scrolling
    };

    // Automatically trigger after 2 seconds
    setTimeout(openPopup, 500);

    // Close the popup when the user clicks the "Contact Us" link
    ctaLink.addEventListener("click", () => {
        closePopup();
    });

    // Event Listeners for closing the popup elsewhere
    closeBtn.addEventListener("click", closePopup);

    overlay.addEventListener("click", (e) => {
        if (e.target === overlay) {
            closePopup();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && overlay.classList.contains("active")) {
            closePopup();
        }
    });
});


//Popup functionality ends here