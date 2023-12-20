<?php
include_once '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST['email'] == NULL || $_POST['pass'] === NULL || $_POST['name'] === NULL) {
        echo json_encode(['status' => 'error', 'message' => 'Incomplete form data']);
    } else {
        $username = mysqli_real_escape_string($link, $_POST["email"]);
        $password = $_POST["pass"];


        $query =" UPDATE `user_login` SET `password`='$password', WHERE username ='$username'";

        $resQuery = mysqli_query($link, $query);

        if ($resQuery) {
           $response = (['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update data']);
        }
    }
}
?>
