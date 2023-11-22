<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre d'usuari</title>
</head>
<body>
    <div>
        <h3>{{$v1}} {{$v2}} {{$v3}}</h3>
        <form action="registre.php" method="post">
            <label for="name">Nom:</label>
            <input type="text" name="name"><br>

            <label for="surname">Cognom:</label>
            <input type="text" name="surname"><br>

            <label for="rol">Triar</label>
                <select name="rol">
                    <optgroup>
                        <option value="Alumnat">Alumne</option>
                        <option value="Professorat">Professorat</option>
                    </optgroup>
                </select><br>
            
            <label for="password">Contrasenya:</label>
            <input type="password" name="password" minlength="8"><br>

            <label for="email">Correu:</label>
            <input type="email" name="email"><br>

            <laber for="active">Actiu:</laber>
            <input type="checkbox" name="active"><br>

            <br><input type="submit" name="enter" value="Registrar">
        </form>
        
    </div>
</body>
</html>