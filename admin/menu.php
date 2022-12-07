<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">CarDaily Suporte</a></h1>
			<div id="top-navigation">
				Bem-vindo <a href="#"><strong>Administrador</strong></a>
				<span>|</span>
				<a href="#">Ajuda</a>
				<span>|</span>
				<a href="#">Configurações de perfil</a>
				<span>|</span>
				<a href="logout.php">Sair</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Gerenciamento de veículos</span></a></li>
			    <li><a href="client_requests.php"><span>Pedidos de contrato</span></a></li>
			    <li><a href="index.php"><span>Memsagens</span></a></li>
			    <li><a href="#"><span>Serviços de controle</span></a></li>
			</ul>
		</div>