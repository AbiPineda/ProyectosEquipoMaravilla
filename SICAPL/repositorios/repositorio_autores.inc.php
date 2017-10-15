<?php 
	/**
	* 
	*/
	class Repositorio_autores 
	{
		
		public static function insertarAutor($conexion, $autor){
			 $autor_insertado = false;
       if (isset($conexion)) {
            try {
                
               
                 
                $nombre = $autor->getNombre();

                $apellido = $autor->getApellido();
                $nacimiento = $autor->getNacimiento();            
                $biografia = $autor->getBiografia();
                
                
                $sql = 'INSERT INTO autores(nombre,apellido,nacimiento,biografia)'
                        . ' values (:nombre,:apellido,:nacimiento,:biografia)';
                                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                
                
                
                
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':nacimiento', $nacimiento, PDO::PARAM_STR);
                $sentencia->bindParam(':biografia', $biografia, PDO::PARAM_STR);
                                             
                
                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
		}

		public function ObtenerUltimo($conexion)
		{
			$ultimo=1;
			if (isset($conexion)) {
				try {
				$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES
WHERE TABLE_SCHEMA = 'diseno1' 
AND TABLE_NAME = 'autores'";

				 foreach ($conexion->query($sql) as $row) {	
				 	$ultimo=$row[0];
				 }
				} catch (PDOException $ex) {
					print 'ERROR: ' . $ex->getMessage();
				}
			}
			return $ultimo;
		}
	}
 ?>