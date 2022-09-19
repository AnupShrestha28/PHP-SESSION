<?php
include 'db_config.php';
$id = $_GET['id'];

$sql = "DELETE FROM todos WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: ./index.php");
}
