<!-- Program to check if given number is odd or even -->

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
        Enter a number: <input type="text" name="number" required> <br><br>
        <input type="submit" value="Submit" name="check">
    </form>

    <?php
    extract($_REQUEST);
    if (isset($check)) {
        if ($number % 2 == 0) {
            echo ' The number ' . $number . ' is even number ';
        } else {
            echo ' The number ' . $number . ' is odd number ';
        }
    }

    ?>

</body>

</html>