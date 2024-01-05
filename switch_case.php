<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 3;
    switch ($x) {
        case '1':
            echo "X is equal to 1";
            break;
        case '2':
            echo "X is equal to 2";
            break;
        case '3':
            echo "X is equal to 3";
            break;
        default:
            echo "Sorry We can't proccess your request";
            break;
    }
    ?>
</body>

</html>