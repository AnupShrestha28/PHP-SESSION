<!-- Program to print number patterns -->
<!-- 12345678 -->
<!-- 1234567 -->
<!-- 123456 -->
<!-- 12345 -->
<!-- 1234 -->
<!-- 123 -->
<!-- 12 -->
<!-- 1 -->


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
    for ($i = 8; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br>";
    }
    ?>

    <!-- Algorithm -->
    <!-- Used for loop and assigned 1 to 8 and check i is greater =1 -->
    <!-- decrease first row from 8 to 1 -->
    <!-- increment the second row from 1 to <= first row current value -->
    <!-- display the values of second row -->
    <!-- outside first row use br tag -->
</body>

</html>