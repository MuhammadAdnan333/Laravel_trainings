<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    {{URL::current()}}
    <br>
    <a href="{{URL::to('/home')}}">Home</a>
    <br>
    <a href="{{URL::to('/aboutUs')}}">AboutUs</a>
    <br>
    {{URL::previous()}}
</body>
</html>