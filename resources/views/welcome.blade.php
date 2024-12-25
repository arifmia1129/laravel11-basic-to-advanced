<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learing Laravel</title>
</head>
<body>
    <h1>Welcome to my learing journey with Laravel</h1>

    <p>My routes:</p>
    <ul>
        <li>
            <a href="{{ route('about.me') }}">About Me</a>
        </li>
        <li>
            <a href="{{ route('user.details', [
            'id'=> 1,
            'role'=> 'Admin'
            ]) }}">User Info</a>
        </li>
    </ul>
</body>
</html>