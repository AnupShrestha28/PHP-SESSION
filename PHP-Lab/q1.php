<!-- Check whether given number is prime or not -->

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
        Enter a Number: <input type="text" name="input"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_POST) {
        $input = $_POST['input'];  // this line is used to collect form data after submitting an HTML form with method="post".
        for ($i = 2; $i <= $input - 1; $i++) {
            if ($input % $i == 0) {
                $value = True;
            }
        }
        if (isset($value) && $value) { // isset function returns true if variable exists otherwise return false
            echo 'The Number ' . $input . ' is not prime';
        } else {
            echo 'The Number ' . $input . ' is prime';
        }
    }
    ?>


</body>

</html>