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
        <input type="text" name="num" placeholder="Enter a number"> <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

    function Factorial($number)
    {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }

    if (isset($_POST['submit'])) {
        $n = $_POST['num'];
        $x = Factorial($n);
        echo ' Factorial of number ' . $n . ' is: ' . $x;
        return 0;
    }

    ?>

</body>

</html>