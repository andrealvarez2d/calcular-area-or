<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el área de un octágono regular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/calcular.png">
</head>
<body>
    <h1 style="text-align: center;">Calcular el área de un octágono regular</h1>
    <div class="position-absolute top-50 start-50 translate-middle">
        <form action="calcular.php" method="post">
        <table>
            <tr>
                <td><p>Perímetro:</p></td>
                <td><input type="text" name="perimetro"></td>
            </tr>
            <tr>
                <td><p>Apotema:</p></td>
                <td><input type="text" name="apotema"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="Calcular"></td>
                <td><input type="reset" name="btn" value="Limpiar"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>