<?php 

class Usuario{
	private $sloginusuario;
	private $spasswordusuario;
	private $snombreusuario;
        private $sapellidousuario;
        private $scorreousuario;
	private $sedadusuario;
        private $sfechanacimiento;
        private $sidperfil;
        
	function __construct($sloguser,$spass,$snomusr){
            $this->sloginusuario=$sloguser;
            $this->spasswordusuario=  md5($spass);
            $this->snombreusuario = $snomusr;        
            /*$this->sapellidousuario = $sape;
            $this->scorreousuario = $semail;
            $this->sedadusuario = $sedad;
            $this->sfechanacimiento = $nacimento;
            $this->sidperfil = $idperfil;¨*/
	}
        
	function getSloginusuario() {
            return $this->sloginusuario;
        }

        function getSpasswordusuario() {
            return $this->spasswordusuario;
        }

        function getSnombreusuario() {
            return $this->snombreusuario;
        }

        function getSapellidousuario() {
            return $this->sapellidousuario;
        }

        function getScorreousuario() {
            return $this->scorreousuario;
        }

        function getSedadusuario() {
            return $this->sedadusuario;
        }

        function getSfechanacimiento() {
            return $this->sfechanacimiento;
        }

        function getSidperfil() {
            return $this->sidperfil;
        }

        function setSloginusuario($sloginusuario) {
            $this->sloginusuario = $sloginusuario;
        }

        function setSpasswordusuario($spasswordusuario) {
            $this->spasswordusuario = $spasswordusuario;
        }

        function setSnombreusuario($snombreusuario) {
            $this->snombreusuario = $snombreusuario;
        }

        function setSapellidousuario($sapellidousuario) {
            $this->sapellidousuario = $sapellidousuario;
        }

        function setScorreousuario($scorreousuario) {
            $this->scorreousuario = $scorreousuario;
        }

        function setSedadusuario($sedadusuario) {
            $this->sedadusuario = $sedadusuario;
        }

        function setSfechanacimiento($sfechanacimiento) {
            $this->sfechanacimiento = $sfechanacimiento;
        }

        function setSidperfil($sidperfil) {
            $this->sidperfil = $sidperfil;
        }

                
        function CreaUsuario(){
            
        }
                
                
	function VerificaUsuario(){
		$db=dbconnect();
		/*Definici�n del query que permitira ingresar un nuevo registro*/
		$sqlsel="select login_usuario from usuarios
		where login_usuario=:usr";

		/*Preparaci�n SQL*/
		$querysel=$db->prepare($sqlsel);

		/*Asignaci�n de parametros utilizando bindparam*/
		$querysel->bindParam(':usr',$this->sloginusuario);
		
		$datos=$querysel->execute();
		
		if ($querysel->rowcount()==1)return true; else return false;

	}

	function VerificaAcceso(){
		$db=dbconnect();
		/*Definici�n del query que permitira ingresar un nuevo registro*/
		$sqlsel="SELECT concat(nombre_usuario,' ', apellido_usuario) 
                    FROM usuarios
                    WHERE  login_usuario=:usr and password=:pwd";

		/*Preparaci�n SQL*/
		$querysel=$db->prepare($sqlsel);

		/*Asignaci�n de parametros utilizando bindparam*/
		$querysel->bindParam(':usr',$this->sloginusuario);
		$querysel->bindParam(':pwd',$this->spasswordusuario);

		$datos=$querysel->execute();

		if ($querysel->rowcount()==1){
			$this->snombreusuario=$querysel->fetchColumn();
			return true;
		}
		else{
			return false;
		}
	}

}
?>