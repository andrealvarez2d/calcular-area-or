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
    <?php
    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        $perimetro = $_POST['perimetro'];
        $apotema = $_POST['apotema'];
        $area = NULL;

        if(!empty($perimetro) && !empty($apotema)){

            if(is_numeric($perimetro) && is_numeric($apotema)){
                $area = $perimetro * $apotema;
                $area = $area / 2;
                echo '<p>El valor del perímetro es de: '. $perimetro, ' cm</p><br/>';
                echo '<p>El valor del apotema es de: '. $apotema, ' cm</p><br/>';
                echo '<p>El valor del área es de: '. $area, ' cm²</p><br/>';
                echo '<form action="index.php" method="post">';
                echo '<td><input type="submit" name="btn" value="Regresar"></td>';
            }else{
                echo '<p>Ingrese un valor numérico</p><br/>';
                echo '<form action="index.php" method="post">';
                echo '<td><input type="submit" name="btn" value="Regresar"></td>';
            }
        }else {
            echo '<p>Ingrese un valor</p><br/>';
            echo '<form action="index.php" method="post">';
            echo '<td><input type="submit" name="btn" value="Regresar"></td>';
        }
    }
    ?>
    </div>
</body>
</html>