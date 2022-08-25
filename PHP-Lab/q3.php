<!-- find the maximum value of in the given set[1, 2, 56, 32, 100, 23, 5] -->
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
    $a = array(1, 2, 56, 32, 100, 23, 5);
    $c = 0;
    foreach ($a as $b) { // assignment operator it means $a = $b
        if ($b > $c)
            $c = $b;
    }
    echo $c;
    ?>
</body>

</html>