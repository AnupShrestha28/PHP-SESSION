<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    print_r($_POST);
    echo "<br>";
    echo $_POST["name"];
    echo "<br>";
    echo $_POST["email"];
    echo "<br>";
    echo $_POST["password"];
    ?>
</body>

</html>