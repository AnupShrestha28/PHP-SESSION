<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>

<body>
    <?php
    function evaluate($name, $attendance, $hygiene, $rating)
    {
        if ($attendance < 80) {
            echo "$name, You are fired from Rojan Kirana Pasal";
        } else if ($hygiene < 50) {
            echo "$name, You are fired from Rojan kirana Pasal";
        } else if ($rating < 2) {
            echo "$name, You are fired from Rojan kirana Pasal";
        } else {
            echo "Not fired for now";
        }
    }

    evaluate("Kusal Karki", 90, 70, 3);
    ?>
</body>

</html>