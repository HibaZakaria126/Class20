<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submition</title>
</head>

<body>
    <h1>Submition Page</h1>
    <?php
    if ($_POST['username'] && $_POST['email'] && $_POST['age'] && $_POST['password'] && $_POST['confirm_password']) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
    }
    ?>

    <h2 style="color:red">
        User Name: <?= $username ?> <br>
        Email: <?= $email ?> <br>
        Age: <?= $age ?> <br>
        Pass Word: <?= $password ?> <br>
        Confirm PassWord: <?= $confirm_password ?> <br>
    </h2>

</body>

</html>