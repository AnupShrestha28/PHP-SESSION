<!-- Program to swap two numbers in php  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Before Swapping:<br>";
    $a = 1;
    $b = 2;
    echo "a = $a<br>";
    echo "b = $b<br><br>";

    echo "After swapping:<br>";
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "a = $a<br>";
    echo "b = $b<br>";
    ?>

    <!-- algorithm -->
    <!-- Suppose there are two numbers 1 and 2. -->
    <!-- a=1(first number) , b= 2(second number) -->
    <!-- Swapping Logic:  -->
    <!-- a = a + b = 1 +2 = 3 b = a - b = 3 - 2 = 1 a = a -b = 3 - 1 = 2 -->
    <!-- and the numbers are swapped  -->


</body>

</html>