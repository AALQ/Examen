<?php
include ('./phps/librerias.php');
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title><?=WEBPAGETITLE?></title>
        <link rel="stylesheet" href="estilos/css/style.css" type="text/css" />
               
    </head>
    
    <body>
        <div id="cont">
            
                <?php
                if (!isset($_SESSION["oUsuario"])){
                    include './usuario/formlogin.php';
                }
                else{
                    $oUsr=$_SESSION["oUsuario"];
                ?>
                <div id="encabezado">
                    <?php include ('./phps/menu.php'); ?>
                </div>
                    
                <div id="contenido">                
                    <h2>BIENVENIDO <span> <?=$oUsr->getNombre();?>  </span> Lo Tenemos TODO</h2>
                <?php
                    date_default_timezone_set('Chile/Continental');
                    $time = time();
                    echo date("d-m-Y (H:i:s)", $time);
                ?>
                </div>
                <a href="logout.php">Salir</a> <?php }?>
            </div>

            
            
            <div id="pie">
                <p><a>Examen DAI</a> 2015</p>
            </div>
    </body>
</html>
