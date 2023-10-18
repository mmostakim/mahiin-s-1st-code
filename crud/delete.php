<?php
include "./database.php";
$obj = new Database();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($obj->delete('user', "id=$id")) {
        // Redirect to the user table page after successful deletion
        header("Location: usertable.php");
        exit();
    } else {
        echo "Failed to delete data";
    }
}
?>
