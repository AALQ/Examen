<?php
include ('librerias.php');

if(isset($_POST['submit'])){
    if($_POST['login_usuario'] == '' 
            or $_POST['pass1'] == '' 
            or $_POST['pass2'] == '' 
            or $_POST['nombre'] == '' 
            or $_POST['apellido'] == '' 
            or $_POST['email'] == '' 
            or $_POST['edad'] == '' 
            or $_POST['nacimiento'] == '' 
            ) {
        echo 'Por favor llene todos los campos.';
    } else {
        $sql = 'SELECT * FROM usuarios';
        $rec = mysql_query($sql);
        $verificar_usuario = 0;
        while($result = mysql_fetch_object($rec)) {
            if($result->usuario == $_POST['login_usuario']) {
                $verificar_usuario = 1;
                }
            }
            if($verificar_usuario == 0) {
                if($_POST['pass1'] == $_POST['pass2']) {
                    $usuario = $_POST['login_usuario'];
                    $password = md5($_POST['pass1']);
                    $nombre_usuario = $_POST['nombre'];
                    $apellido_usuario = $_POST['apellido'];
                    $correo_usuario = $_POST['email']; 
                    $edad_usuario = $_POST['edad'];
                    $fechanacimiento_usuario = $_POST['nacimiento'];
                    
                    $sql = "INSERT INTO usuarios (login_usuario,pass_usuario,nombre_usuario,apellido_usuario,correo_usuario,edad_usuario,fecha_nacimiento)
                            VALUES ('$usuario', '$password', '$nombre_usuario', '$apellido_usuario', '$correo_usuario,$edad_usuario','$fechanacimiento_usuario')";
                    mysql_query($sql);
                    
                    echo 'Usted se ha registrado correctamente.';
//                    header('Location:ok.html');
                    } else {
                        echo 'Las claves no son iguales, intente nuevamente.';
                        }
                        } else {
                            echo 'Este usuario ya ha sido registrado anteriormente.';
                            }
                            }
                            }?>
