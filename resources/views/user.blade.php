<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
</head>
<body>
    
    <h1>HI from User Blade</h1>
    <h1>User Name is : {{$name}}</h1>
    <h2>{{$user['name']}}</h2>
    <h2>{{$user['email']}}</h2>
    <h2>{{$user['phone']}}</h2>
</body>
</html>
