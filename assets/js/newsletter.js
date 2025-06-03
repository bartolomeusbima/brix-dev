document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("newsletter-form");
    const emailInput = document.getElementById("newsletter-email");
    const formFields = document.getElementById("form-fields");
    const thankYouMsg = document.getElementById("thank-you-msg");

    if (!form || !emailInput) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const email = emailInput.value;

        fetch("subscribe.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({ email })
        })
            .then((res) => res.text())
            .then((resText) => {
                if (
                    resText.includes("Thanks") ||
                    resText.includes("success") ||
                    resText.includes("subscribed")
                ) {
                    formFields.style.display = "none";
                    thankYouMsg.style.display = "block";
                } else {
                    alert("Oops! Something went wrong.\n" + resText);
                }
            })
            .catch(() => {
                alert("Connection failed. Please try again later.");
            });
    });
});
