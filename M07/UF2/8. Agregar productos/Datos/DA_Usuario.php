
<?php



require_once 'Conexion.php';

class DataUser {

	const TABLA = 'usuarios';
    //id, login, password, rol
	public function Insertar($login, $password,$rol) {

    	$conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' VALUES(null, :login,:password,:rol)');
        $consulta->bindParam(':login', $login);	
        $password= password_hash($password, PASSWORD_DEFAULT);
        $consulta->bindParam(':password', $password);
        $consulta->bindParam(':rol', $rol);
        $resultado = $consulta->execute();
        $conexion = null;//cierra la conexion
	    return $resultado;
    }



    public function Modificar($id,$login, $password,$rol) {

        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET login = :login, password=:password, rol=:rol WHERE id=:id');
        $consulta->bindParam(':id', $id);
        $consulta->bindParam(':login', $rol);
        $password= password_hash($password, PASSWORD_DEFAULT);
        $consulta->bindParam(':password', $password);
        $consulta->bindParam(':rol', $rol);
        $resultado= $consulta->execute();
		$conexion = null;
		return $resultado;
    }

    public function Eliminar($login){

        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE login = :login');
        $consulta->bindParam(':login', $login);
        $resultado=$consulta->execute();
        $conexion = null;
        return $resultado;
    }

    //Metodo que verifica si es usuario o no.
    public function isUser($login,$password){

        $conexion = new Conexion();
        $consulta=$conexion->prepare('SELECT COUNT(*) FROM '. self::TABLA . ' WHERE login=:login');
        $consulta->bindParam(':login', $login);
        $hash = $this-> getHash($login);
        $password = password_verify($password,$hash);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion=null;
        foreach ($registro as $value) {
            if($value[0]==1 && $password)
                return 1;
        }
        return 0;
    }

    public function getHash($login){
        $conexion = new Conexion();
        $consulta=$conexion->prepare('SELECT password FROM '. self::TABLA . ' WHERE login=:login');
        $consulta->bindParam(':login', $login);
        $consulta->execute();
        $resultado = $consulta->fetch();
        return $resultado[0];
    }


    public function showRol($login){

        $conexion = new Conexion();
        $consulta=$conexion->prepare('SELECT rol FROM '. self::TABLA . ' WHERE login=:login');
        $consulta->bindParam(':login', $login);
        //$consulta->bindParam(':password', $password);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion=null;
        return $registro['rol'];
    }

    /*
    public function seekByEmail($email){

        $conexion = new Conexion();
        $consulta=$conexion->prepare('SELECT * FROM '. self::TABLA . ' WHERE email=:email');
        $consulta->bindParam(':email', $email);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion=null;
        return $registro;
    }
    */

}

?>