<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Benvingut/da admin</h2>
    <div>
        <a href="{{ route('centres') }}" >CENTRES</a><span><b> | </b></span> 
        <a href="{{ route('professorat') }}" >PROFESSORAT</a><span><b> | </b></span>
        <a href="{{ route('alumnat') }}" >ALUMNAT</a>
    </div>
    <br><a href="{{route('signin')}}">Log Out </a>
</body>
</html>