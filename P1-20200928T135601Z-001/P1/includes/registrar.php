<?php
include("./gestionBD.php");

function handler($pdo,$table)
{
    $datos = $_REQUEST;
    if (count($_REQUEST) < 6) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (nombre, apellidos, direccion, ciudad, cp, foto)
                        VALUES (?,?,?,?,?,?)";
                       
    echo $query;
    try { 
        $a=array($_REQUEST['userName'], $_REQUEST['surname'],$_REQUEST['address'],$_REQUEST['city'],$_REQUEST['zip_code'],$_REQUEST['foto_file']);
        print_r ($a);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_REQUEST['userName'], $_REQUEST['surname'],$_REQUEST['address'],$_REQUEST['city'],$_REQUEST['zip_code'],$_REQUEST['foto_file']));
        if (1>$a)echo "InCorrecto";
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = "a_cliente";
var_dump($_POST);
handler( $pdo,$table);
?>