function Login() {
    const email = document.getElementById('loginName').value;
    const pass = document.getElementById('loginPassword').value;
    const message = document.getElementById('message');

    if (email === "") {
        message.textContent = "Please Enter the email first!";
    } else if (pass === "") {
        message.textContent = "Please Enter the password";
    } else {
        $.ajax({
            url: '../ajax/Login.php',
            method: 'POST',
            data: {
                email: email,
                pass : pass
            },
            success: function (response) {
               console.log("Response from server: " + response);
                if (response.status === "success") {
                    console.log("Entered");
                   window.location.href = "../DashBoard.php";
                } else {
                    console.log(" Not Entered" +response.message);
                    message.textContent = "Login failed. Please check your credentials.";
                }
            },
            error: function (xhr, status, error) {
                message.textContent = "Error occurred during the AJAX request";
            }
        });
    }
    event.preventDefault();
}

function Register() {
    const name = document.getElementById('registerName').value;
    const email = document.getElementById('registerEmail').value;
    const pass = document.getElementById('registerPassword').value;
    const message = document.getElementById('message2');

    if (name === "") {
        message.textContent = "Please Enter the name!";
    } else if (email === "") {
        message.textContent = "Please Enter  the email first!";
    } else if (pass === "") {
        message.textContent = "Please Enter  the password first!";
    }else {
        $.ajax({
            url: '../ajax/Register.php',
            method: 'POST',
            data: {
                name:name,
                email: email,
                pass: pass
            },
            success: function (response) {
                console.log("Response from server: " + response);

                if (response === "success") {
                    console.log("Successfully Registered");
                    window.location.href = "Login.php";
                } else {
                    message.textContent = "Registration failed. Please check your credentials.";
                    message.textContent = "";
                }
            },
            error: function (xhr, status, error) {
                message.textContent = "Error occurred during the AJAX request";
            }
        });
    }
    event.preventDefault();
}