<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user" method="POST">
        @csrf
        <input type="text" name="user" placeholder="Enter User Name">
        <input type="text" name="Password" placeholder="Enter Password ">
        <button type="submit">Login</button>

    </form>
</body>
</html>