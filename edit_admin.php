<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: admin.php');
		exit;
	}
	$iduser=$_SESSION['id'];
	
	$sql="SELECT * FROM admin WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();	

	// endereço de retorno salvo
	$prev = $_SESSION["prev"];
	// echo $prev;
	
	// $matricula = $_SESSION["matricula"];
	$matricula=$_GET['matricula'];
	// var_dump($matricula);	
	// $id=$_GET['id'];
	$row2="";
	include_once("conexao.php");
	$sqli="SELECT * FROM admin WHERE matricula= $matricula";
	$result=$mysqli->query($sqli);
	$row2=mysqli_fetch_assoc($result);
	$id=$row2['id'];
	// var_dump($row2);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Administração - dRAD </title>
		<link rel="stylesheet" href="CSS/style.css">
	</head>
	<tr></br><?php echo utf8_encode($row1['nome']);?> | <a href="adm_admin.php">Voltar</a></br></br></tr><hr>
	<body>
		<div class="content">
			<div style="height:650px;">
				<a class="links" id="paracadastro"></a>
				<!--FORMULÁRIO DE CADASTRO-->
				<div id="cadastro">
					<form method="post" action=""> 
						<h1>Editar Cadastro</h1>
						<input type="hidden" name="id" value="<?php echo $row2['id'];?>">

						<p> 
							<label for="nome"></label>
							<input id="nome" name="nome" required="required" type="text" placeholder="Nome" maxlength="30" value="<?php echo utf8_encode($row2['nome']);?>"/>
						</p>

						<p> 
							<label for="sobrenome"></label>
							<input id="sobrenome" name="sobrenome" required="required" type="text" placeholder="Sobrenome" maxlength="30" value="<?php echo utf8_encode($row2['sobrenome']);?>"/>
						</p>
						
						<p> 
							<label for="matricula"></label>
							<input id="matricula" name="matricula" required="required" type="text" placeholder="Digite a Matrícula ou CPF" maxlength="20" value="<?php echo $row2['matricula'];?>"/>
						</p>

						<p> 
							<label for="lotacao"></label>
							<input id="lotacao" name="lotacao" required="required" type="text" placeholder="Lotação (Unidade / Departamento)" maxlength="80" value="<?php echo utf8_encode($row2['lotacao']);?>"/>
						</p>

						<p> 
							<label for="titulo"></label>
							<input id="titulo" name="titulo" required="required" type="text" placeholder="Título" maxlength="30" value="<?php echo utf8_encode($row2['titulo']);?>"/>
						</p>

						<p> 
							<label for="email"></label>
							<input id="email" name="email" required="required" type="email" placeholder="E-mail" maxlength="40" value="<?php echo $row2['login'];?>"/>
						</p>

						<p> 
							<input name="salvar" type="submit" value="Salvar"/> 
						</p>

						<?php
							if(isset($_POST["salvar"]))
							{
								session_start();
								$matricula = $_GET['matricula'];
								$_SESSION['matricula'] = $matricula;

								// Create connection
								include 'conn.php';
								$conn = OpenCon();
								
								// Check connection
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
								
								$nome = utf8_decode($_POST['nome']);
								$sobrenome = utf8_decode($_POST['sobrenome']);
								$titulo = utf8_decode($_POST['titulo']);
								$lotacao = utf8_decode($_POST['lotacao']);
								$matricula = $_POST['matricula'];
								$login = $_POST['email'];
								
								$sql = "UPDATE admin SET nome='$nome', sobrenome='$sobrenome', matricula='$matricula', titulo='$titulo', lotacao='$lotacao', login='$login' WHERE id='$id'";

								if ($conn->query($sql) === TRUE) {
									echo "Atualizado com Sucesso!";
								} else {
									echo "Erro: " . $conn->error;
								}
								//auto refresh da página p/ mostar valores atualizados
								echo "<meta http-equiv='refresh' content='0'>";
							$conn->close();
							}
						?>
				
						<p class="link">
							<?php echo "<a href='senha_adm.php?matricula=" . $row2['matricula'] . "'>Alterar a Senha</a>"; ?>
						</p>

					</form>
				</div>
			</div>
		</div>
	</body>
</div><footer>Desenvolvido por: ajf@poli.br</footer></body>	</body>
</html>