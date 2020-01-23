<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: index.php');
		exit;
	}
	$iduser=$_SESSION['id'];

	$sql="SELECT * FROM usuarios WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();	
	
	// $id=$_GET["id"];
	$id=$row1["id"];
	// printf($id);
	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> dRAD - Perfil </title>
		<link type="text/css" rel="stylesheet" media="screen" href="CSS/style.css"/>
	</head><br>
	<?php echo utf8_decode($row1['titulo']) . " ". utf8_decode($row1['nome']);?> | <a href="vip.php">Voltar</a></br></br><hr>
	<body>
		<div class="content">
			<div style="height:650px;">
				<a class="links" id="paracadastro"></a>
				<!--FORMULÁRIO DE CADASTRO-->
				<div id="cadastro">
					<form method="post" action=""> 
						<h1>Perfil</h1>
						<input type="hidden" name="id" value="<?php echo $row1['id'];?>">
						<p> 
							<label for="nome"></label>
							<input id="nome" name="nome" required="required" type="text" placeholder="Nome" value="<?php echo utf8_decode($row1['nome']);?>" maxlength="30"/>
						</p>

						<p> 
							<label for="sobrenome"></label>
							<input id="sobrenome" name="sobrenome" required="required" type="text" placeholder="Sobrenome" value="<?php echo utf8_decode($row1['sobrenome']);?>" maxlength="30"/>
						</p>
						
						<p> 
							<label for="matricula"></label>
							<input id="matricula" name="matricula" required="required" type="text" placeholder="Matrícula ou CPF" value="<?php echo $row1['matricula'];?>" maxlength="30"/>
						</p>

						<p> 
							<label for="lotacao"></label>
							<input id="lotacao" name="lotacao" required="required" type="text" placeholder="Lotação (Unidade / Departamento)" maxlength="80" value="<?php echo utf8_decode($row1['lotacao']);?>"/>
						</p>
						
						<p> 
							<label for="titulo"></label>
							<input id="titulo" name="titulo" required="required" type="text" placeholder="Título" value="<?php echo utf8_decode($row1['titulo']);?>" maxlength="30"/>
						</p>

						<p> 
							<label for="email"></label>
							<input id="email" name="email" required="required" type="email" placeholder="E-mail" value="<?php echo $row1['email'];?>" maxlength="40"/> 
						</p>

						<p> 
							<input name="salvar" type="submit" value="Salvar"/> 
						</p>
						
						<p class="link">
							<?php echo "<a href='' onclick=\"return confirm('Por favor, entre em contato com o administrador (adm@adm.com)');\">Alterar Senha?</a>"; ?>
						</p>
					</form>
					 <?php
						$msg="";
						if(isset($_POST["salvar"]))
						{
							// Create connection
							include 'conn.php';
							$conn = OpenCon();
							
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
							
							$nome = utf8_encode($_POST['nome']);
							$sobrenome = utf8_encode($_POST['sobrenome']);
							$titulo = utf8_encode($_POST['titulo']);
							$lotacao = utf8_encode($_POST['lotacao']);
							$matricula = $_POST['matricula'];
							$email = $_POST['email'];
							
							$sql = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', matricula='$matricula', lotacao='$lotacao', titulo='$titulo', email='$email' WHERE id='$id'";

							if ($conn->query($sql) === TRUE) {
								$msg="Atualizado com sucesso!";
							} else {
								$msg="Erro: " . $conn->error;
							}
							//auto refresh da página p/ mostar valores atualizados
							echo "<meta http-equiv='refresh' content='0'>";
						$conn->close();
						}
					?>
					<?php if($msg != false) echo "<p> $msg </p>"; ?>
				</div>
			</div>
		</div><!-- aqui fechamos a div conteudo -->				
	</body>
	</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>