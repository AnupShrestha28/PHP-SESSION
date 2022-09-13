<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <!-- <button>Submit</button> -->
        <button type="button" class="btn btn-dark">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // print_r($_POST);
        // echo "<br>";
        // echo $_POST["email"];
        // echo "<br>";
        // echo $_POST["password"];

        $email = $_POST['email'];
        $pass = $_POST['password'];



        // database create garni yaha bata
        $conn = new mysqli("localhost:3307", "root", "", "login_auth"); // localhost, username, password, databaseName

        if ($conn->connect_error) { // check if connection is success or not
            die("$conn->connect_error");
        }

        // start login process from here

        echo "db connect success"; // success bhayo bhane yo line print garde

        $sql = "SELECT * FROM user WHERE email ='$email' and password ='$pass'";
        $result = $conn->query($sql);


        print_r($result);


        $row = $result->fetch_assoc();
        echo "</pre>";
        print_r($row);
        echo "</pre>";

        $db_email = $row['email'];
        $db_pass = $row['password'];

        if ($pass ===  $db_pass && $email === $db_email) {
            echo "Successfully Login";
        } else {
            echo "Try Again!";
        }
    }
    ?>

</body>

</html>