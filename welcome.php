<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank you for submitting</h1>
    <p>
        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo 'Welcome,'.$username.'<br>Your password is: '.$password;
        }
        ?>
    </p>
</body>
</html>