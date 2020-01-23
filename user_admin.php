<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: admin.php');
		exit;
	}
	$iduser=$_SESSION['id'];
	
	$prev = $_SERVER["REQUEST_URI"];
	$_SESSION['prev'] = $prev;
	
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
	<tr></br><?php echo utf8_encode($row1['nome']);?> | <a href="home_admin.php">Voltar</a></br></br></tr><hr>
	<body>
		<div class="content">
			<div style="min-height: 700px">
				<a class="links" id="paracadastro"></a>
				<!--FORMULÁRIO DE CADASTRO-->
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="" ></br>
						<h1>Usuários</h1>
						<p style="width: 350px;"> 
							<input type="text" name="matricula"  placeholder="Matrícula do usuário"/> 
						</p>
						<?php
							$row="";
								
							if(isset($_POST['matricula']))
							{															
								$matricula = $_POST['matricula'];
								$_SESSION['matricula'] = $matricula;
							
								// $conexao = mysqli_connect("localhost", "root", "", "projeto");
								include 'conn.php';
								$conexao = OpenCon();
								
								$result = "SELECT * FROM usuarios WHERE matricula LIKE '%".$matricula."%' ORDER BY id DESC";
								$res=mysqli_query($conexao,$result);
								
								while($row=mysqli_fetch_array($res)){
								   ?><table cellspacing="10"><br><hr>
										<tr> 
											<td align="left"><?php echo '<img src="data:image;base64,'.base64_encode($row['imagem'] ).'" alt="Image" style= "width: 200px; height: 200px;" >';?><br></td>
											<td></td>
											<td align="left"><?php
												$var1 = $row["id"];
												$var2 = utf8_decode($row["nome"]);
												$var3 = utf8_decode($row["sobrenome"]);
												$var4 = $row["matricula"];
												$var5 = utf8_decode($row["lotacao"]);
												$var6 = utf8_decode($row["titulo"]);
												$var7 = $row["email"];
												$varZ = sprintf("<b>Nome: </b>%s<br> <b>Sobrenome: </b>%s<br> <b>Matrícula: </b>%s<br> <b>Lotação: </b>%s<br> <b>Título: </b>%s<br> <b>E-mail: </b>%s", $var2, $var3, $var4, $var5, $var6, $var7);
												echo $varZ;
											?></td><br>
										</tr>
										<tr><td><br><th colspan="2">
										<?php echo "<a href='edit_user.php?matricula=" . $row['matricula'] . "'>Editar</a>"; ?>
										<?php echo " | "; ?>				
										<?php echo "<a href='apag_user.php?matricula=" . $row['matricula'] . "' onclick=\"return confirm('Deseja mesmo apagar o registro?');\">Apagar</a>"; ?>
										</td></tr></th>
										<br>
									</table>
								   <?php
								}
							}					
						?>	
					</form>
				</div>
			</div>
		</div>
	</body>
</div><footer>Desenvolvido por: ajf@poli.br</footer></body>	</body>
</html>