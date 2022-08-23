<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello World!</h1>
    <h3>
        @if ($name != '')
            My name is {{ $name }} {{ $lastname }}
        @endif 
    </h3>
    <h4>
        Wanna see some cool photos of my fav cities? <a href="{{ route('cities') }}">Check it!</a> 
        <a href=""></a>
    </h4>
    <span>no it's not a virus don't worry</span>
</body>
</html>