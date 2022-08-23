<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
</head>
<body>
    <img src="https://www.italia.it/content/dam/tdh/it/interests/lazio/roma/roma-in-48-ore/media/20220127150143-colosseo-roma-lazio-shutterstock-756032350.jpg.transform/w_1600/h_900/image.jpeg" alt="" width="33%">
    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/bologna-01-1531212414.jpg" alt="" width="33%">
    <img src="https://www.artribune.com/wp-content/uploads/2022/03/Piazza-del-Popolo.jpg" alt="" width="33%">
    <h2>In Order (ltr)</h2>
    <ul>
        @foreach($cities as $city)
            <li>
                <h3>{{$city}}</h3>
            </li>
        @endforeach
    </ul>
    <h4>back to <a href="{{ route('home') }}">Home</a></h4>
</body>
</html>