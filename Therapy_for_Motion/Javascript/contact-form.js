document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission
    let formData = {
      name: document.getElementById("floatingSelect").value,
      email: document.getElementById("floatingInputValue").value,
      message: document.getElementById("floatingTextarea").value,
    };

    fetch("Server_Side/send-email.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
    })
      .then((response) => response.text())
      .then((data) => {
        alert("Email sent successfully!");
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
