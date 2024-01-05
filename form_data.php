<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        echo $_POST["first_name"];
        echo $_POST["last_name"];
    }
    ?>
    <h1>Fill this form</h1>
    <form method="post">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>