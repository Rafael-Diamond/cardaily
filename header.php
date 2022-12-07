<?php
	session_start();
	error_reporting(0);
?>

<header>
			<div class="wrapper">
				<h1 class="logo">CarDaily</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="account.php">Login</a></li>
						<li><a href="login.php">Login Administrador</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="status.php">Ver status</a></li>
								<li><a href="message_admin.php">Contatar Suporte</a></li>
								<li><a href="admin/logout.php">Sair</a></li>
							</ul>
					<?php
						}
					?>
				</nav>
			</div>
		</header>