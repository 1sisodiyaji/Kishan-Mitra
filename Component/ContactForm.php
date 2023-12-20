
<?php
?>
<div class="container "
     style="width: 100vw; height: 90vh; display:flex; justify-content: center; align-items: center; ">
    <div class="container border  border-success  rounded-8 bg-secondary " style=" padding:20px;  height:400px; width:600px; margin:auto">
        <h4 class="text-light text-center">Raise an issue…</h4>
        <form action="Send.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Enter Your Email" style="background: rgb(124, 166, 208);">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Issue </label>
                <select class="form-control" id="type"  name="type"
                        style="background: rgb(124, 166, 208);">
                    <option>Product</option>
                    <option>Logistic</option>
                    <option>Pricing</option>
                    <option>Feedback</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Description :-</label>
                <textarea style="background: rgb(124, 166, 208);" class="form-control"
                          id="message" name="message"   rows="3"></textarea>
            </div>
            <div class="text-center py-3">
                <button type="button" class="btn btn-primary" name="sendEmail" onclick="send()">Send</button>
            </div>

        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function send() {
        const email = document.querySelector('#email').value;
        const type = document.querySelector('#type').value;
        const message = document.querySelector('#message').value;
        const notice = document.querySelector('.error-message');
        console.log(email);


        if(email === ""){
            notice.textContent= "Please Enter Your Email..";
        }else if( type === ""){
            notice.textContent = "Please Enter the Type Of Problem";
        }else if( message === ""){
            notice.textContent = "Please Enter the Your Problem briefly..";
        }else {

            $.ajax({
                url: '../../PHPMAILER/Send.php',
                method: 'POST',
                data: {
                    email: email,
                    type: type,
                    message: message,
                },
                success: function (response) {
                    console.log("Response from server: " + response);

                    // Assuming the server response contains information about successful login
                    if (response === "success") {
                        console.log("Successfully Email Sent");
                    } else {
                        message.textContent = "Email failed. Please check your credentials.";
                    }
                },
                error: function (xhr, status, error) {
                    message.textContent = "Error occurred during the AJAX request";
                }
            });
        }

    }
</script>