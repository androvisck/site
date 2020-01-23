<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: index.php');
		exit;
	}
	$iduser=$_SESSION['id'];
	
	$prev = $_SERVER["REQUEST_URI"];
	$_SESSION['prev'] = $prev;
	
	$sql="SELECT id, nome, matricula, titulo FROM usuarios WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();
	//var_dump($row1);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>dRAD | Dimensão Gestão</title>
		<link type="text/css" rel="stylesheet" media="screen" href="CSS/style1.css"/>
	</head><br>
	<?php echo utf8_decode($row1['titulo']) . " ". utf8_decode($row1['nome']);?> | <a href="gestao.php">Voltar</a></br></br><hr>
	<body>
		<div class="container" >
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<h2>4.20 - Assessoria de Relações Internacionais na Gestão Central.</h2>
						<form action="" name="CadastroAlunos" type="text" method="post" enctype="multipart/form-data">
							<table>
								<tr>
									<td><input type="text" name="ano"  placeholder="Ano"></td>
									<td><input type="text" name="semestre"  placeholder="Semestre" maxlength="1"/></td>
									<td><label for='selecao-arquivo'>Selecionar um arquivo &#187;</label>
												<input id='selecao-arquivo' type="file" value="" name="image"/></td>
								</tr>
								<tr><input type="text" name="nome"  placeholder="Assessoria"/></tr>
							</table>
							<table width="400px">	
								<tr width="400px">
									<td width="200px"><input type="submit" value="Carregar" name="carregar"/></td>
									<td width="200px"><input type="submit" value="Mostrar" name="mostra"/></td>
								</tr>
							</table>					
						</form>
						<?php // onclick="window.open('upload4.php', '_blank');"  
							$msg="";
							$item ='4.20';
							if(isset($_POST["carregar"]))
							{								
								if(($_FILES['image']['size'] == 0) || (empty($_POST['ano'])) || (empty($_POST['semestre'])))
								{
									$msg="Preencha todos os campos!";
								}else{
									include 'conn.php';	$conexao = OpenCon();
									$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
									
									$iduser= $row1['id'];
									$ano = $_POST['ano'];
									$n1 = $_POST['nome'];
									$nome = '<b>Assessoria:</b>' . '  ' . $n1;
									$semestre = $_POST['semestre'];	
									
									$tamanho_permitido = 80000000; //10 MB
									//TESTA O TAMANHO DO ARQUIVO
									if($_FILES['image']['size'] > $tamanho_permitido){
										$msg= "Erro - arquivo muito grande!";
										exit();
									}
									$tmp = explode('.', $_FILES['image']['name']);
									$extensao = end($tmp);
									$novo_nome=md5(time()) ."." .$extensao; //define o nomedo arquivo
									$diretorio = "upload/";//define o diretorio para onde carregarremos o arquivo
									
									//TESTA A EXTENSÃO DO ARQUIVO
									if(!preg_match('/^image\/(?:jpg|jpeg|png)$/i', $_FILES['image']['type'])){;
										// $extensao=strtolower(end(explode('.',$_FILES['image']['name'])));//pega a extensao do arquivo
										
										$sql_code ="INSERT INTO banco (iduser, item, ano, semestre, nome, pdf, arquivo) VALUES('$iduser', '$item', '$ano', '$semestre', '$nome', '$image', '$novo_nome')";
										$varX=mysqli_query($conexao, $sql_code);
										// echo $varX;
										if(move_uploaded_file($_FILES['image']['tmp_name'],$diretorio. $novo_nome)){
											$msg="Arquivo carregado com sucesso!";
										}else{
											$msg="Falha ao carregar o arquivo!";
										}
										// echo 'PDF';
										// echo $extensao;
									}else{										
										$sql_code ="INSERT INTO banco (iduser, item, ano, semestre, nome, foto, arquivo) VALUES('$iduser', '$item', '$ano', '$semestre', '$nome', '$image', '$novo_nome')";
										$varX=mysqli_query($conexao, $sql_code);										
										if(move_uploaded_file($_FILES['image']['tmp_name'],$diretorio. $novo_nome)){
											$msg="Arquivo carregado com sucesso!";
										}else{
											$msg="Falha ao carregarr o arquivo!";
										}
									}
								}
							}					
							if(isset($_POST["mostra"]))
							{
								include 'conn.php';	$conexao = OpenCon();
								$iduser= $row1['id'];
								$result = "SELECT * FROM banco WHERE iduser LIKE '%".$iduser."%' AND item LIKE '".$item."%' ORDER BY item, ano DESC, semestre ASC";
								$res=mysqli_query($conexao,$result);
								// var_dump($res);
								while($row=mysqli_fetch_array($res)){
								   ?><table><br><hr>
										<tr>
										<td align="left"><?php 
															if (!empty($row['foto'])){
																echo '<img src="data:image;base64,'.base64_encode($row['foto'] ).'" alt="Image" style= "width: 200px; height: 200px;" >';
															}else{
																echo '<object data="data:application/pdf;base64,'.base64_encode($row["pdf"]).'" type="application/pdf" style="height:200px;width:100%"></object>';
															}																
														?><br></td>
											<td><?php 
													$var1 = utf8_encode(utf8_decode($row["nome"]));
													$var3 = $row["ano"];
													$var4 = $row["semestre"];
													$varZ = sprintf("%s<br> <b>Ano: </b>%s<br> <b>Semestre: </b>%s", $var1, $var3, $var4);
													echo $varZ;
													// var_dump(explode('  ', $var1));
												?>
											</td><br>
										</tr>
										<tr><td><br>
										<?php echo "<a href='editar1.php?id=" . $row['id'] . "'>Editar</a>"; ?>				
										<?php echo " | "; ?>				
										<?php echo "<a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Deseja mesmo apagar o registro?');\">Apagar</a>"; ?>
										<?php echo " | "; ?>				
										<?php echo "<a  target = '_blank' href='download.php?id=" . $row['id'] . "'>Download</a>"; ?>
										
										</td></tr>
										<br>
									</table>
								   <?php	//caso precise criar link imprimir <?php echo "<a href='upload4.php' target = '_blank'>Imprimir</a>
								}
							}
						?>			
					<?php if($msg != false) echo "<p> $msg </p>"; ?>
				</div>
			</div>
</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>