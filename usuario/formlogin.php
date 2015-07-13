<form action="http://localhost/examen/phps/login.php" method="post">
    <h1> LOGIN</h1>
    <div>Nom Usuario:</div>
    <div><input name="usuario" type=text></div>
    <br>
    <div>Clave:</div><div><input name="clave" type="password"></div>
    <input type="submit" value=Acceder>
    <br>
    <a href="<?=PATHURL?>usuario/register.php" >Reg&iacute;strate</a>
</form>