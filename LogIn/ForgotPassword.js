function UpdatePass(){
    const email = document.getElementById('typeEmail').value;
    const pass =  document.getElementById('typePassword').value;
    const Conpass =  document.getElementById('typePassword2').value;
    const message = document.getElementById('message');

    if(email === ""){
        message.textContent ="Please Fill Your Email";
    }else  if(pass === ""){
        message.textContent ="Please Fill Your password";
    }else  if(Conpass === ""){
        message.textContent ="Please Fill Your Confirmation Password";
    }else  if(pass === Conpass){
        message.textContent ="Please Fill Same Password";
    }else{
        $.ajax({
            url: '../ajax/updatePass.php',
            method: 'POST',
            data: {
                email: email,
                pass : pass
            },
            success: function (response) {
                console.log("Response from server: " + response);
                if (response.status === "success") {
                    console.log("Updated");
                    window.location.href = "Index.php";
                } else {
                    console.log(" NOt Entered" +response.message);
                    message.textContent = "Update failed. Please check your credentials.";
                }
            },
            error: function (xhr, status, error) {
                message.textContent = "Error occurred during the AJAX request";
            }
        });
    }
    event.preventDefault();
}