<?php

class Repositorio_categoria {

    public static function insertar_categoria($conexion, $categoria) {

        $categoria_insertada = false;
        if (isset($conexion)) {
            try {
                $codigo_cat = $categoria->getCodigo_tipo();
                $nombre = $categoria->getNombre();


                $sql = 'INSERT INTO categoria(codigo_tipo,nombre)'
                        . ' values (:codigo_tipo,:nombre)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                
                $accion = 'se registro la siguiente tipo de activos: ' . $nombre ; 
                self::insertar_bitacora($conexion, $accion);

                $sentencia->bindParam(':codigo_tipo', $codigo_cat, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $categoria_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $categoria_insertada;
    }

    public static function lista_categorias($conexion) {
        $lista_categorias = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from categoria";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $categoria = new Categoria();
                        $categoria->setCodigo_tipo($fila['codigo_tipo']);
                        $categoria->setNombre($fila['nombre']);

                        $lista_categorias[] = $categoria;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }

        return $lista_categorias;
    }

    public static function obtener_categoria($conexion, $cod) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT nombre from categoria where codigo_tipo = '$cod'";

                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_newcod_categoria($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                        COUNT( categoria.codigo_tipo)
                        FROM
                        categoria
                        ";

                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                
                if (($r / 10) < 1) {
                    $cod =  "CEJ-001-00" . ($r+1) ;
                } else {
                    if (($r / 10) < 10) {
                        $cod =  "CEJ-001-0" .($r+1) ;
                    } 
                }
                return $cod ;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    
    public static function obtener_nombre_categoria($conexion, $cod) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT nombre from tipo_activo where codigo_tipo = '$cod'";

                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $r;
    }

       public static function insertar_bitacora($conexion, $accion) {
        $administrador_insertado = false;
        if (isset($conexion)) {
            try {
                $administrador = $_SESSION['user'];
                ini_set('date.timezone', 'America/El_Salvador');
                $hora = date("Y/m/d ") . date("h:i:s");

                $sql = "INSERT INTO bitacora (codigo_administrador, accion, fecha) VALUES ('$administrador', '$accion', '$hora');";

                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $administrador_insertado = $sentencia->execute();

                echo 'la bitacora ha sido guardada';
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
}


?>