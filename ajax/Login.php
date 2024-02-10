<?php
include_once '../dbConnect.php';


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!isset($_POST['email']) || !isset($_POST['pass'])) {
        $response = ['status' => 'error', 'message' => 'Incomplete form data'];
    } else {
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $passwordQuery = "SELECT password FROM `user_login` WHERE username = '$email'";
        $resQuery = mysqli_query($link, $passwordQuery);

        if ($resQuery) {
            if ($row = mysqli_fetch_assoc($resQuery)) {
                $hashedPassword = $row['password'];

                if (password_verify($pass, $hashedPassword)) {
                    $response = ['status' => 'success', 'message' => 'Password Matched'];
                } else {
                    $response = ['status' => 'error', 'message' => 'Password did not match. Please try again.'];
                    header("location : '../DashBoard.php' ");
                    exit;

                }
            } else {
                $response = ['status' => 'error', 'message' => 'User not found. Kindly register first.'];
            }
        } else {
            $response = ['status' => 'error', 'message' => 'Error in the query.'];
        }

    }
    header('Content-Type: application/json');
    echo json_encode($response);


}
?>
