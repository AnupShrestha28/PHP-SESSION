<?php

include('./db_config.php');
// require('./db_config.php');

if($_SERVER['REQUEST_METHOD']==="POST"){
//     echo"<pre>";
// print_r($_POST);
// echo"</pre>";

$todo_item=$_POST['todo'];
echo " You have entered " . $todo_item . " in the list ";

$sql = "INSERT INTO todo_list(`title`) VALUES('$todo_item')";
$result = $conn->query($sql);
header('location: ./index.php');

}

?>