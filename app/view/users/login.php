<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?=URLROOT?>/users/login" method="post">
        <input type="text" name="name">
        <input type="password" name="password">
        <button>Submit</button>
    </form>
</body>
</html>