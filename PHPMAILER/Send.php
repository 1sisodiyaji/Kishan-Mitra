<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMAILER/src/Exception.php';
require '../PHPMAILER/src/PHPMailer.php';
require '../PHPMAILER/src/SMTP.php';

if(isset($_POST["email"])){
    $mail = new PHPMailer(true);
    $email = $_POST['email'];
    
    $mail -> isSMTP();
    $mail ->Host = 'smtp.gmail.com';
    $mail ->SMTPAuth = true;
    $mail ->Username = '637golusingh@gmail.com';
    $mail -> Password = 'rxlsvziifbcowwfz';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;

    try {
        $mail->setFrom('637golusingh@gmail.com', 'Kishan-Mitra');
    } catch (Exception $e) {
    }
    try {
        $mail->addAddress($email);
    } catch (Exception $e) {
    }
    $mail->isHTML(true);
    $mail->Subject = $_POST["type"];
    $mail->Body = $_POST["message"];

    if ($mail->send()){
        echo 'Email Send;';
    }else{
        echo 'Email Send Error.';
    }
}
?>