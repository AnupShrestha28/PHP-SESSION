<!-- Factorial of a given number using recursion -->
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
        <table border="0">
            <tr>
                <td> <input type="text" name="num" value="" placeholder="Enter a number" /> </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Submit" /> </td>
            </tr>
        </table>
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
    if (isset($_POST['submit'])) { // isset function returns true if variable exists otherwise return false
        $n = $_POST['num'];
        $x = Factorial($n);
        echo "Factorial of number " . $n . " is: " . $x;
        return 0;
    }
    ?>
</body>

</html>