<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessió</title>
</head>
<body>
    <div>
        <h3>Formulari d'inici de sessió</h3>
        <form action="" method="post"> 
            
            <label for="email">Correu:</label>
            <input type="email" name="email"><br>

            <laber for="password">Contrasenya:</laber>
            <input type="password" name="password" minlength="8"><br>

            <input type="submit" name="enter" value="Entrar">
        </form>
        <a href="{{ route('signup') }}">Registra't</a>
    </div>
</body>
</html>