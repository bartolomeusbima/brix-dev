document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("newsletter-form");
    const emailInput = document.getElementById("newsletter-email");
    const formFields = document.getElementById("form-fields");
    const thankYouMsg = document.getElementById("thank-you-msg");

    if (!form || !emailInput) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const email = emailInput.value;
        const formData = new URLSearchParams({ email });

        fetch("subscribe.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            if (result === "success") {
                formFields.style.display = "none";
                thankYouMsg.style.display = "block";
            } else {
                alert(result);
            }
        })
        .catch(() => {
            alert("Connection failed. Please try again.");
        });
    });
});
