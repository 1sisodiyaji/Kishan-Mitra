<?php
include_once '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!isset($_POST['email']) || !isset($_POST['pass'])) {
        $response = ['status' => 'error', 'message' => 'Incomplete form data'];
        echo"error";
    } else {
        $email = mysqli_real_escape_string($link, $_POST["email"]);
        $pass = $_POST["pass"];

        $usernameQuery = "SELECT username, password FROM `user_login` WHERE username = '$email'";
        $stmt = mysqli_prepare($link, $usernameQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $username, $dbPassword);

            if (mysqli_stmt_fetch($stmt)) {
                // Compare the entered password with the stored hashed password
                if (password_verify($pass, $dbPassword)) {
                    $response = ['status' => 'success', 'message' => 'Successfully Logged In'];
                } else {
                    $response = ['status' => 'error', 'message' => 'Incorrect password'];
                }
            } else {
                $response = ['status' => 'error', 'message' => 'User not found'];
            }

            mysqli_stmt_close($stmt);
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to prepare statement'];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
