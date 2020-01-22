<?php
	require_once "../Negocio/Usuario.php";
	if(isset($_POST['login']) && isset($_POST['password'])){

		$user=new Usuario();
		$user->setLogin($_POST['login']);
		$user->setPassword($_POST['password']);
		$isUser = $user->isUser($user->getLogin(),$user->getPassword());
		
		if($isUser){
			$showRol=$user->showRol();
			
			echo "El usuario ".$user->getLogin()." tiene el rol ".$showRol;
		}else{
			echo "no eres usuario";
		}
	}
?>
