<?php
    class OrdenDeCompra {
        
        private $pIdOC;
        private $pFechaEmision;
        private $pTotalOC;
        private $pEstado;
        private $pIdUsuario;
        
        function __construct($idoc=NULL,$fechaemision=NULL,$totalOC=NULL,$estado=NULL,$idusuario=NULL) {
            $this->pIdOC = $idoc;
            $this->pFechaEmision = $fechaemision;
            $this->pTotalOC = $totalOC;
            $this->pEstado = $estado;
            $this->pIdUsuario = $idusuario;
        }
        
        function getPIdOC() {
            return $this->pIdOC;
        }

        function getPFechaEmision() {
            return $this->pFechaEmision;
        }

        function getPTotalOC() {
            return $this->pTotalOC;
        }

        function getPEstado() {
            return $this->pEstado;
        }

        function setPIdOC($pIdOC) {
            $this->pIdOC = $pIdOC;
        }

        function setPFechaEmision($pFechaEmision) {
            $this->pFechaEmision = $pFechaEmision;
        }

        function setPTotalOC($pTotalOC) {
            $this->pTotalOC = $pTotalOC;
        }

        function setPEstado($pEstado) {
            $this->pEstado = $pEstado;
        }
        
        function getPIdUsuario() {
            return $this->pIdUsuario;
        }

        function setPIdUsuario($pIdUsuario) {
            $this->pIdUsuario = $pIdUsuario;
        }
        
        
        /***** FUNCIONES  *****/
        function SeleccionaOrdenCompra(){
            if (!$this->querysel){
                    $db=dbconnect();
                    $sqlsel="select id_oc,fecha_emision,total_oc,estado,id_usuario from orden_compras order by fecha_emision";
                    
                    $this->querysel=$db->prepare($sqlsel);
		
                    $this->querysel->execute();
                }
		
		$registro = $this->querysel->fetch();
		if ($registro){
			return new self($registro['id_oc'], $registro['fecha_emision'], $registro['total_oc'], $registro['estado'], $registro['id_usuario']);			
		}
		else {
			return false;
			
		}
	}
	
	function Elimina($idoc){
	
		$db=dbconnect();
		
			$sqldel="delete from productos where idoc=:id";
	
			$querydel=$db->prepare($sqldel);
			
			$querydel->bindParam(':id',$idoc);
			
			$valaux=$querydel->execute();
	
		return $valaux;
	}


    }
?>
