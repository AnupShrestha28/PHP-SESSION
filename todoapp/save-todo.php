<?php

include('./db_config.php');
// require('./db_config.php');

if($_SERVER['REQUEST_METHOD']==="POST"){
//     echo"<pre>";
// print_r($_POST);
// echo"</pre>";

$todo_item=$_POST['todo'];
echo " You have entered " . $todo_item . " in the list ";
}

?>