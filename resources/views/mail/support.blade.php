<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Support Inquiry</title>
</head>

<body>
    <h1>New Support Question from {{ $user->name }}</h1>
    <p>from: {{ $user->email }}</p>
    <p>{{ $msg }}</p>
</body>

</html>