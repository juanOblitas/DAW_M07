<?php
	/*Insertaremos un usuario con un password encriptado */



	require_once "../Negocio/Usuario.php";
	/*$user2=new Usuario(null,'Juan','oblitas','administrador');
	$user2->Insertar();*/
	$user2=new Usuario();
	$user2->setLogin('Juan');
	//echo $user2->getHash();
	if(isset($_POST['login']) && isset($_POST['password'])){

		$user=new Usuario();
		$user->setLogin($_POST['login']);
		$user->setPassword($_POST['password']);
		$isUser = $user->isUser();
		
		if($isUser){
			$showRol=$user->showRol();
			
			echo "El usuario ".$user->getLogin()." tiene el rol ".$showRol;
		}else{
			echo "no eres usuario";
		}
	}
?>
