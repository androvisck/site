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

	// var_dump($row1)
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Administração - dRAD </title>
		<link rel="stylesheet" href="CSS/style1.css">
	</head>
<tr></br>Olá, <?php $s1 = '! | '; echo utf8_encode($row1['nome']);echo "$s1";echo "<a href='sair.php'>Sair</a>";?></br></br></tr><hr>
	<body>
		<div class="content">
			<div style="height:400px;">
				<a class="links" id="paracadastro"></a>
				<!--FORMULÁRIO DE CADASTRO-->
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="" ></br>
						<h1>Cadastro</h1>
						<table>
							<tr>
								<td style="width: 300px;"> 
									<input type="button" value="Novo usuário" onclick="javascript: location.href='cad_admin.php';"/> 
								</td>
								
								<td style="width: 300px;"> 
									<input type="button" value="Novo administrador" onclick="javascript: location.href='add_admin.php';"/> 
								</td>
							</tr>
							<tr>
								<td style="width: 300px;"> 
									<input type="button" value="Usuários" onclick="javascript: location.href='user_admin.php';"/> 
								</td>
								
								<td style="width: 300px;"> 
									<input type="button" value="Administradores" onclick="javascript: location.href='adm_admin.php';"/> 
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</div><footer>Desenvolvido por: ajf@poli.br</footer></body>	</body>
</html>