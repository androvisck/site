<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: index.php');
		exit;
	}
	$iduser=$_SESSION['id'];

	$sql="SELECT * FROM admin WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();	
	$id=$row1["id"];
	// printf($id);
	// var_dump($row1['senha']);
	
	// $matricula=$_SESSION['matricula'];
	$matricula=$_GET['matricula'];
	// var_dump($matricula);	
	// $id=$_GET['id'];
	$row2="";
	include_once("conexao.php");
	$sqli="SELECT * FROM usuarios WHERE matricula= $matricula";
	$result=$mysqli->query($sqli);
	$row2=mysqli_fetch_assoc($result);
	$id=$row2['id'];
	$_SESSION['matricula']=$row2['matricula'];
	//var_dump($row2);;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> dRAD - Perfil </title>
		<link type="text/css" rel="stylesheet" media="screen" href="CSS/style.css"/>
	</head><br>
	<?php echo utf8_encode($row1['nome']);?> | <?php echo "<a href='edit_user.php?matricula=" . $row2['matricula'] . "'>Voltar</a></br></br>";?>

	<body>
		<div class="content">
			<div class="container" >
				<a class="links" id="paracadastro"></a>
				<!--FORMULÁRIO DE CADASTRO-->
				<div id="cadastro">
					<form method="POST" action=""> 
						<input type="hidden" name="id" value="<?php echo $row1['id'];?>">

						<p>
							<h1>Nova Senha</h1>
							<input id="senha" name="senha" required="required" type="password" placeholder="Digite a nova senha"maxlength="15"/>
							<input id="confsenha" name="confsenha" required="required" type="password" placeholder="Confirme sua nova senha" maxlength="15"/>
						</p>
						
						<p> 
							<input name="salvar" type="submit" value="Salvar"/> 
						</p>

					</form>
					 <?php
						if(isset($_POST["salvar"]))
						{
							// Create connection
							include 'conn.php';
							$conn = OpenCon();
							
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
						
							$senha = $_POST['senha'];
							$confsenha = $_POST['confsenha'];
							
							if($senha==$confsenha)
							{
								$senha = md5($_POST['senha']);
								$sql = "UPDATE usuarios SET senha='$senha' WHERE id='$id'";

								if ($conn->query($sql) === TRUE) {
									echo "Senha salva com sucesso!";
								} else {
									echo "Erro: " . $conn->error;
								}
								//auto refresh da página p/ mostar valores atualizados
								//echo "<meta http-equiv='refresh' content='0'>";
								$conn->close();							
							}
						}
					?>
				</div>
			</div>
		</div><!-- aqui fechamos a div conteudo -->				
	</body>
	</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>