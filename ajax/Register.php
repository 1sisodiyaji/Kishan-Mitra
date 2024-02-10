<?php
include_once '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST['email'] == NULL || $_POST['pass'] === NULL || $_POST['name'] === NULL) {
        echo json_encode(['status' => 'error', 'message' => 'Incomplete form data']);
    } else {
        $username = mysqli_real_escape_string($link, $_POST["email"]);
        $password = password_hash($_POST["pass"], PASSWORD_DEFAULT); // Hash the password
        $name = mysqli_real_escape_string($link, $_POST["name"]);

        $query = "INSERT INTO `user_login`(`username`, `password`, `name`) VALUES ('$username','$password','$name')";
        $resQuery = mysqli_query($link, $query);

        if ($resQuery) {
            $response = ['status' => 'success', 'message' => 'Successfully Registered'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to Register data'];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
