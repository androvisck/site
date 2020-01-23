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
	// $ano=date('Y');
	$nome = utf8_encode($row1['nome']);
	$usuario = $row1['nome'];
	$titulo = $row1['titulo'];
	$ano="";
	
	// salvar endereço de retorno
	$prev = $_SERVER['HTTP_REFERER'];
	$_SESSION['prev'] = $prev;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>dRAD | Ensino</title>
		<link type="text/css" rel="stylesheet" media="screen" href="CSS/style1.css"/>
	</head><br>
	<?php echo utf8_decode($row1['titulo']) . " ". utf8_decode($row1['nome']);?> | <a href="vip.php">Voltar</a></br></br><hr>
	<body>
		<div class="container" >
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<h1>Ensino - Gerar Relatório</h1>

								<form name="ano" type="text" method="POST" enctype="multipart/form-data"/>
										<input type="text" placeholder="Digite o Ano e pressione ENTER" name="ano">
										<input type="hidden" value="<?php echo $ano;?>" />
								</form>

								<form style="width: 200px;" name="impressao" type="text" method="POST" enctype="multipart/form-data" value="<?php echo $ano;?>" action="i_ensino.php" target="_blank"/>
										<input type="submit" value="Imprimir" name="imprimir"/>
								</form>

					<div id="conteudo-right">
						<?php
						$row="";
						
						if(isset($_POST['ano']))
						{
							include 'conn.php';
							$conexao = OpenCon();
							
							$ano = $_POST['ano'];
							$_SESSION['ano'] = $ano;
							$item = '1.';
							$iduser = $row1['id'];
							$result = "SELECT * FROM banco WHERE iduser LIKE '%".$iduser."%' AND item LIKE '".$item."%' AND ano LIKE '%".$ano."%' ORDER BY item, ano DESC, semestre ASC";
								//WHERE paginas.pagina_conteudo LIKE %nome% OR (paginas.pagina_nome LIKE %nome%)
							$res=mysqli_query($conexao,$result);
							
							while($row=mysqli_fetch_array($res)){
							   ?><table><br><hr>
									<tr>
										<td align="left"><?php 
															if (!empty($row['foto'])){
																echo '<img src="data:image;base64,'.base64_encode($row['foto'] ).'" alt="Image" style= "width: 200px; height: 200px;" >';
															}else{
																echo '<object data="data:application/pdf;base64,'.base64_encode($row["pdf"]).'" type="application/pdf" style="height:300px;width:100%"></object>';
															}																
														?><br></td>
										<td align="left"><?php 	
											$var1 = $row["item"];
											$var2 = $row["nome"];
											$var3 = $row["nome1"];
											$var4 = $row["nome2"];
											$var5 = $row["ano"];
											$var6 = $row["semestre"];
											$varZ = sprintf("<b>Item: </b>%s<br>%s<br>%s<br>%s<br> <b>ANO: </b>%s<br> <b>SEMESTRE: </b>%s", $var1, $var2, $var3, $var4, $var5, $var6, $row["item"]);
											echo $varZ;
										?></td><br>
									</tr>
									<tr><td><br>
									<?php echo "<a href='editar3.php?id=" . $row['id'] . "'>Editar</a>"; ?>				
									<?php echo " | "; ?>				
									<?php echo "<a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Deseja mesmo apagar o registro?');\">Apagar</a>"; ?>
									<?php echo " | "; ?>				
									<?php echo "<a target = '_blank' href='download.php?id=" . $row['id'] . "'>Download</a>"; ?>	
									</td></tr>
									<br>
								</table>
							   <?php	//caso precise criar link imprimir <?php echo "<a href='upload4.php' target = '_blank'>Imprimir</a>
							}
						}					
						?>	
					</div>					
				</div>
			</div>
		</div><!-- aqui fechamos a div conteudo -->			
	</body>
	</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>