<!DOCTYPE html>
<html lang="en">
<head>
	<title>CarDaily Alugar</title>
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
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'R$'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Modelo: '.$rws['car_type'];?></a>
						</h1>
						<h2>Nome do carro/Modelo: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				<h3>Preencha para alugar <?php echo $rws['car_name'];?>. </h3>
				<?php
					if($_SESSION['email'] && ($_SESSION['pass'])){
				?>
				<form method="post">
					<table>
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
							<td>Local:</td>
							<td>
							    <select name="location">
									<option> Selecionar local de busca </option>
									<option> São Paulo </option>
									<option> Santos </option>
									<option> Guarulhos </option>
									<option> Congonhas </option>
							    </select>
					        </td>
						</tr>
						<tr>
							<td>Sexo:</td>
							<td>
								<select name="gender">
									<option> Selecionar sexo </option>
									<option> Homem </option>
									<option> Mulher </option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center"><input type="submit" name="save" value="Enviar pedido"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
						
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Pedido feito. Aguarde aprovação!\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Erro no pedido!\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Felix Kiamba.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>