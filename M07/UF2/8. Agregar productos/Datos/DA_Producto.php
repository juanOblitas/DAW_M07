
<?php

require_once 'Conexion.php';

class DataProducto {

	const TABLA = 'productos';
	public function Insertar($nombre, $seccion,$descripcion,$precio,$url) {

    	$conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' VALUES(null, :nombre,:seccion,:descripcion,:precio,:url)');
        $consulta->bindParam(':nombre', $nombre);	
        $consulta->bindParam(':seccion', $seccion);
        $consulta->bindParam(':descripcion', $descripcion);
        $consulta->bindParam(':precio', $precio);
        $consulta->bindParam(':url', $url);
        $resultado = $consulta->execute();
        $conexion = null;//cierra la conexion
	    return $resultado;
    }

    public function Modificar($id,$nombre, $seccion,$descripcion,$precio,$url) {

        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, seccion=:seccion, descripcion=:descripcion,
         precio=:precio, url=:url WHERE id=:id');
        $consulta->bindParam(':id', $id);
        $consulta->bindParam(':nombre', $descripcion);
        $consulta->bindParam(':seccion', $seccion);
        $consulta->bindParam(':descripcion', $descripcion);
        $consulta->bindParam(':precio', $precio);
        $consulta->bindParam(':url', $url);
        $resultado= $consulta->execute();
		$conexion = null;
		return $resultado;
    }

    public function Eliminar($id){

        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $resultado=$consulta->execute();
        $conexion = null;
        return $resultado;
    }


}

?>