<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessió</title>
</head>
<body>
    <div>
        <h3>{{ $v1 }} {{ $v2 }} {{ $v3 }} {{ $v4 }}</h3>
        <form action="login.php" method="post">
            <label for="email">Correu:</label>
            <input type="email" name="email"><br>

            <laber for="password">Contrasenya:</laber>
            <input type="password" name="password" minlength="8"><br>

            <input type="submit" name="enter" value="Entrar">
        </form>
        
    </div>
</body>
</html>