<?php
	session_start();//conversa com todos os containes deixando os paremetros em comum com todos
	$_SESSION['passou']; //cria o array passou
	if ((!isset($_SESSION['passou'])) || (!$_SESSION['passou']='s')) {//verifica se a session foi criada para 		evitar um acesso direto e verifica se o array passou tem o valor s para que possa continar o login 
		header('Location:index.php?login=erro2');//envia para a pagina de login com o get login com o valor de erro2
	}

	$listaUsuarios = array(// criando lista de usuarios
	array('id'=>1,'email'=>'adm@gmail.com','senha'=>'123','idPerfil' =>'1'),
	array('id'=>2,'email'=>'usu@gmail.com','senha'=>'123','idPerfil' =>'1'),
	array('id'=>3,'email'=>'davi@gmail.com','senha'=>'123','idPerfil' =>'2'),
	array('id'=>4,'email'=>'ju@gmail.com','senha'=>'123','idPerfil' =>'2')
	);
	$perfil = array(1=>'ADM',2=>'USER');
	$idUsuario =null;
	$usuarioPerfilId = null;
	$usuarioAutentica = false;
	$email = $_POST['email'];//recebendo usuario da pagina de login
	$senha = $_POST['senha'];


	foreach ($listaUsuarios as $value) {
		if (($email == $value['email']) &&($senha == $value['senha'])) { //Verifica se o usuario e senha informados são compativeis com os registrados
			$usuarioAutentica = true;
			$idUsuario = $value['id'];
		}
	}

	if ($usuarioAutentica) {//
		
		$_SESSION['passou'] = 's';//define a session  passou como s se o usuaria e senha forem devidos
		$_SESSION['id'] = $idUsuario;
		$_SESSION['idPerfil']= $usuarioPerfilId;
		header('Location:home.php');//redireciona para home php
	} else {
		header('Location:index.php?login=erro');//redireciona para pagina de login enviando o GET login com o erro
		$_SESSION['passou'] = 'n';//define a session  passou como n se o usuaria e senha forem indevidos
	}
?>