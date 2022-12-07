<!DOCTYPE html>
<html lang="en">
<head>
	<title>CarDaily</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">ACHE O CARRO DOS SEUS SONHOS</h2>
			</section>
	</section><!--  end hero section  -->

	<section class="search">
		<div class="wrapper">
		<div id="fom" align="center">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold;">Área de Cadastro</h3>
			<table height="250">
						<tr>
							<td>Nome:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Telefone:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Cadastrar"></td>
						</tr>
					</table>
			</form>
			<?php
				if(isset($_POST['save'])){
					include 'includes/config.php';
					$fname = $_POST['fname'];
					$id_no = $_POST['id_no'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					
					$qry = "INSERT INTO client (fname,id_no,email,phone,status)
					VALUES('$fname','$id_no','$email','$phone','Disponível')";
					$result = $conn->query($qry);
					if($result == TRUE){
						echo "<script type = \"text/javascript\">
									alert(\"Registrado com sucesso!\");
									window.location = (\"account.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Registro com erro. Tente novamente!\");
									window.location = (\"signup.php\")
									</script>";
					}
				}
			?>
			</div>
		</div>

	</section><!--  end search section  -->
	
</body>
</html>