
<?php
?>
<div class="container "
     style="width: 100vw; height: 90vh; display:flex; justify-content: center; align-items: center; ">
    <div class="container border  border-danger  bg-dark rounded-8 bg-secondary p-4" style=" padding:20px;  height:400px; width:600px; margin:auto">
        <h4 class="text-light text-center mt-2">Raise an issue…</h4>
        <form action="Send.php" method="post" class="mb-4">
            <div class="form-group my-4">
                <small class="text-danger">Email : </small>
                <input type="email" class="form-control bg-black text-danger border-black" id="email" name="email"
                       placeholder="Enter Your Email">
            </div>
            <div class="form-group mb-4">
                <small class="text-danger">Issue</small>
                <select class="form-control bg-dark text-danger bg-black border-black" id="type"  name="type">
                    <option>Product</option>
                    <option>Logistic</option>
                    <option>Pricing</option>
                    <option>Feedback</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <small class="text-danger">Description</small>
                <textarea  class="form-control bg-dark border-black text-danger"
                           id="message" name="message" placholder="Enter Some Info"  rows="3"></textarea>
            </div>
            <div class="form-group mb-4">
                <div class="row mb-4 ">
                    <div class="col-4"></div>
                    <div class="col-4 mt-4">
                        <button type="submit" class="btn btn-danger text-center"
                                name="sendEmail" onclick="send()">SEND
                        </button>
                    </div>
                    <div class="col-4"></div>
                </div>
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