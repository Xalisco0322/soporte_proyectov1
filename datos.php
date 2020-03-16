<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <?php

    $conexion=mysqli_connect('localhost','root','','grupoit') or die ('Error en la base de datos');                       

    $sql="INSERT INTO registro VALUES(null,
                                    '".$_POST["empresa"]."',
                                    '".$_POST["nombre"]."',
                                    '".$_POST["grupo"]."',
                                    '".$_POST["serie"]."',
                                    '".$_POST["imei"]."',
                                    '".$_POST["sim"]."',
                                    '".$_POST["linea"]."',
                                    '".$_POST["alias"]."',
                                    '".$_POST["placas"]."',
                                    '".$_POST["fecha"]."',
                                    '".$_POST["plataforma"]."')";

    $resultado=mysqli_query($conexion,$sql) or die ('Error en el query');

    mysqli_close($conexion);

    echo 'EMPRESA: '.$_POST["empresa"].'<br>';

    echo 'NOMBRE DEL SOLICITANTE: '.$_POST["nombre"].'<br>';

    echo 'GRUPO EN PLATAFORMA: '.$_POST["grupo"].'<br>';

    echo 'SERIE: '.$_POST["serie"].'<br>';

    echo 'IMEI: '.$_POST["imei"].'<br>';

    echo 'SIM: '.$_POST["sim"].'<br>';

    echo 'LINEA: '.$_POST["linea"].'<br>';

    echo 'ALIAS: '.$_POST["alias"].'<br>';

    echo 'PLACAS: '.$_POST["placas"].'<br>';

    echo 'FECHA: '.$_POST["fecha"].'<br>';

    echo 'PLATAFORMA: '.$_POST["plataforma"];

    echo '<br>';
    echo '<br>';
    echo '<script type="text/javascript">alert("Registro de alta enviado");</script>';

    ?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script> 
    
    <a class="btn btn-primary" href="instalacion.html" role="button"> Regresar </a>
    <input type="image" src="" name="Submit" value="">
    <a class="btn btn-primary" role="button" href="javascript:window.print()"> Imprimir
    </a> 
</body>
</html>
