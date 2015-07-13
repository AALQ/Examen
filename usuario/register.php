<?php
    include '../phps/librerias.php';
?>
<html>
    <head>
        <title><?=WEBPAGETITLE?></title>
        <link href="../estilos/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="group">
            <form action="../phps/registro.php" method="POST">
                
                <center><h2><em>Formulario de Registro</em></h2>
                <table >
                    <tr><td><label for="Usuario">Usuario <span><em>(requerido)</em></span></label></td>
                <td><input type="text" name="login_usuario" class="form-input" required/></td></tr>
                    
                    <tr><td><label for="pass1">Password <span><em>(requerido)</em></span></label></td>
                    <td><input type="password" name="pass1" class="form-input" required/></td></tr>
                    
                    <tr><td><label for="pass2">Repita Password <span><em>(requerido)</em></span></label></td>
                    <td><input type="password" name="pass2" class="form-input" required/></td></tr>
                    
                    <tr><td><label for="nombre">Nombre <span><em>(requerido)</em></span></label></td>
                    <td><input type="text" name="nombre" class="form-input" required/></td></tr>
                    
                    <tr><td><label for="apellido">Apellido <span><em>(requerido)</em></span></label></td>
                    <td><input type="text" name="apellido" class="form-input" required/></td></tr>
                    
                    <tr><td><label for="email">Email <span><em>(requerido)</em></span></label></td>
                    <td><input type="email" name="email" class="form-input" /></td></tr>
                    
                    <tr><td><label for="edad">Edad <span><em>(requerido)</em></span></label></td>
                        <td><input type="text" name="edad" class="form-input" required/></td></tr>
                    
                    <tr><td><label for="fecha_nac">Fecha Nacimiento<span><em>(requerido)</em></span></label></td>
                        <td><input type="date" name="nacimiento" class="form-input" required/></td></tr>
                    
                    <tr><td><center> <input class="form-btn" name="submit" type="submit" value="Enviar Datos" /></center></td></tr>
                </table></center>
            </p>
            </form>
        </div>
        <a href="http://localhost/examen">Volver al inicio</a>
    </body>
</html>

