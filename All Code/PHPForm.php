<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPForm</title>

</head>

<body>
    <div>
        <form action="index.php" method="post">
            <label for="Name">Name:</label><br>
            <input type="text" name="name"><br><br>
            <label for="Password">Password:</label><br>
            <input type="password" name="pass"><br>
            <input type="submit" value="login">
        </form>
    </div>
    <br><br>
    <?php
    if (isset($_POST["name"]) && isset($_POST["pass"])) {
        $name = $_POST["name"];
        $pass = $_POST["pass"];

        echo "Your name is " . $name . "<br>";
        echo "Your password is " . $pass . "<br>";
    }
    ?>

</body>

</html>
