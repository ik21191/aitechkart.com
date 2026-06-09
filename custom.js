document.getElementById('jsonForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevents standard full page reload

    const overlay = document.getElementById('loadingOverlay');
    const modal = document.getElementById('responseModal');
    const modalHeader = document.getElementById('modalHeader');
    const responseText = document.getElementById('responseText');

    // Step 1: Immediately show the intermediate screen
    overlay.style.display = 'flex';

    const form = e.target;
    const formData = new FormData(form);

    // Convert FormData to a standard object
    const data = Object.fromEntries(formData.entries());

    //Pass data to backend script
    fetch('/send-query', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json' // Tell PHP you're sending JSON
        },
        body: JSON.stringify(data) // Send JSON string
    })
    .then(response => {
        return response.json(); // Map response payload to object
    })
    .then(data => {
        //Clear intermediate loader, parse response into final popup
        overlay.style.display = 'none';

        if (data.status === 'success') {
            modalHeader.style.color = '#28a745'; 
        } else {
            modalHeader.style.color = '#dc3545'; 
        }

        responseText.textContent = data.message;
        modal.style.display = 'flex';
    })
    .catch(error => {
        // Emergency state handling if server drops or errors out
        overlay.style.display = 'none';
        modalHeader.style.color = '#dc3545';
        modalHeader.textContent = "Error Occurred";
        responseText.textContent = "Could not process your request at this time. Please try again later.";
        modal.style.display = 'flex';
        console.error('Fetch operation error:', error);
    });
});

// Close logic for popup handling
function closeModal() {
    document.getElementById('responseModal').style.display = 'none';
    document.getElementById('jsonForm').reset(); // Clear input fields
}

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

    // Automatically trigger after 500 milliseconds
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