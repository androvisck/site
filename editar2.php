<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: index.php');
		exit;
	}
	$iduser=$_SESSION['id'];
	
	$sql="SELECT id, nome, matricula, titulo FROM usuarios WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();	
	
	$id=$_GET["id"];
	$row2="";
	include_once("conexao.php");
	$sqli="SELECT * FROM banco WHERE id= $id";
	$resultado_foto=$mysqli->query($sqli);
	$row2=mysqli_fetch_assoc($resultado_foto);
	
	// endereço de retorno salvo
	$prev = $_SESSION["prev"];
	// echo $prev;
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> dRAD - Editar </title>
		<link type="text/css" rel="stylesheet" media="screen" href="CSS/style1.css"/>
	</head><br>
	<?php echo utf8_decode($row1['titulo']) . " ". utf8_decode($row1['nome']);?> | <a href="<?php printf($prev);?>">Voltar</a></br></br><hr>
	<body>
		<div class="container" >
			<div class="content">
				<div id="vip" style="margin:auto" align=center>
					<h2><strong>EDIÇÃO</strong></h2>
						<form action="" name="CadastroAlunos" type="text" method="post" enctype="multipart/form-data">
							<table>
								<input type="hidden" name="id" value="<?php echo $row2['id'];?>">
								<tr>
									<td><input type="text" name="ano" placeholder="Ano" value="<?php echo $row2['ano'];?>"></td>
									<td><input type="text" name="semestre" placeholder="Semestre" value="<?php echo $row2['semestre'];?>"></td>
									<td><label for='selecao-arquivo'>Selecionar um arquivo &#187;</label>
												<input id='selecao-arquivo' type="file" value="Gerar Relatório" name="image"/></td>									
								</tr>
								<tr><input type="text" name="nome" value="<?php if(!empty($row2['nome'])){$a=explode('  ',$row2['nome']); echo $b=$a[1] ;}?>"></td>
								<tr><input type="text" name="nome1" value="<?php if(!empty($row2['nome1'])){$c=explode('  ',$row2['nome1']); echo $d=$c[1] ;}?>"></td>
							</table>
							<table width="200px">	
								<tr width="200px">
									<td><input type="submit" value="Salvar" name="salvar"/></td>
								</tr>
							</table>					
						</form>

					<?php
						$msg="";$arquivo="";
						if(isset($_POST["salvar"]))
						{		
							include 'conn.php';
							$conexao = OpenCon();

							$n1 = $_POST['nome'];
							$nome = $a[0] . '  ' . $n1;
							$n2 = $_POST['nome1'];
							$nome1 = $c[0] . '  ' . $n2;

							$ano = $_POST['ano'];
							$semestre = $_POST['semestre'];	
							
							if(!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) 
							{
								$arquivo= addslashes(file_get_contents($_FILES['image']['tmp_name']));
							}
							if($arquivo == "")
								{
									$sql_code ="UPDATE banco SET nome='$nome', nome1='$nome1', ano='$ano', semestre='$semestre', modificado=NOW() WHERE id='$id'";
									mysqli_query($conexao, $sql_code);
									$msg="Registro editado com sucesso!";
								}else
								{
								if(isset($_FILES['image']))
								{
									$imagem=addslashes(file_get_contents($_FILES['image']['tmp_name']));

									$tmp = explode('.', $_FILES['image']['name']);
									$extensao = end($tmp);
									$novo_nome=md5(time())."." .$extensao; //define o nomedo arquivo
									$diretorio = "upload/";//define o diretorio para onde enviaremos o arquivo

									//TESTA A EXTENSÃO DO ARQUIVO
									if(!preg_match('/^image\/(?:jpg|jpeg|png)$/i', $_FILES['image']['type'])){;
										$sql_code1 ="UPDATE banco SET nome='$nome', nome1='$nome1', ano='$ano', semestre='$semestre', foto = NULL, pdf = '$imagem', modificado=NOW() WHERE id='$id'";
										mysqli_query($conexao, $sql_code1);
										
										if(move_uploaded_file($_FILES['image']['tmp_name'],$diretorio .".". $novo_nome)){
											$msg="Arquivo enviado com sucesso!";
										}else{
											$msg="Falha ao enviar o arquivo!";
										}
									}else{										
										$sql_code1 ="UPDATE banco SET nome='$nome', nome1='$nome1', ano='$ano', semestre='$semestre', foto = '$imagem', pdf = NULL, modificado=NOW() WHERE id='$id'";
										mysqli_query($conexao, $sql_code1);
										
										if(move_uploaded_file($_FILES['image']['tmp_name'],$diretorio .".". $novo_nome)){
											$msg="Arquivo enviado com sucesso!";
										}else{
											$msg="Falha ao enviar o arquivo!";
										}
									}
								}
							}
							//auto refresh da página p/ mostar valores atualizados
							echo "<meta http-equiv='refresh' content='0'>";
						}
					?></br>
					<?php if($msg != false) echo "<p> $msg </p>"; ?>
				</div>
			</div>
		</div><!-- aqui fechamos a div conteudo -->				
	</body>
	</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>