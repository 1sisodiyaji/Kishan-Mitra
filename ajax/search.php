<?php
include '../dbConnect.php';

$response = ['type' => 'error', 'message' => 'An unexpected error occurred.'];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (empty($_POST['searchItem'])) {
        $response['message'] = 'Please enter your search item';
    } else {
        $searchItem = mysqli_real_escape_string($link, $_POST['searchItem']);

        $query = "SELECT item_name, Item_Price FROM `price_list` WHERE item_name = '$searchItem'";
        $resQuery = mysqli_query($link, $query);

        if ($resQuery) {
            $row = mysqli_fetch_assoc($resQuery);
            if ($row) {
                $response = ['type' => 'success', 'display1' => $row['item_name'], 'display2' => $row['Item_Price']];
            } else {
                $response['message'] = 'Item not found';
            }
        } else {
            $response['message'] = 'Failed to execute the query: ' . mysqli_error($link);
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
