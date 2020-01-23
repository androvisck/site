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
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>dRAD - Ensino </title>
		<link rel="stylesheet" href="CSS/style2.css">
		</br><?php echo utf8_decode($row1['titulo']) . " ". utf8_decode($row1['nome']);?> | <a href="vip.php">Voltar</a></br></br><hr>
	</head>
	<body>
		<div style="height:2500px;">
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="">
						<h1>Pesquisa</h1>
						<table style="width: 100%;table-layout:fixed">
							<tr><td align="left"></td></tr>
							<tr><td style="width:100px">2.1 - Docente permanente em programa stricto sensu na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='201.php';" /></td></tr>
							<tr><td>2.2 - Docente colaborador(a) em programa stricto sensu na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='202.php';" /></td></tr>
							<tr><td>2.3 - Bolsista de Produtividade em Pesquisa (PQ) ou de Produtividade em Desenvolvimento Tecnológico e Extensão Inovadora (DT) do CNPq.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='203.php';" /></td></tr>
							<tr><td>2.4 - Líder de grupo de pesquisa cadastrado no CNPq e certificado pela UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='204.php';" /></td></tr>
							<tr><td>2.5 - Pesquisador(a) em grupo de pesquisa cadastrado no CNPq e certificado pela UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='205.php';" /></td></tr>
							<tr><td>2.6 - Coordenação de projeto de pesquisa cadastrado no SISPG COM fomento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='206.php';" /></td></tr>
							<tr><td>2.7 - Participação em projeto de pesquisa cadastrado no SISPG COM fomento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='207.php';" /></td></tr>
							<tr><td>2.8 - Coordenação de projeto de pesquisa cadastrado no SISPG COM fomento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='208.php';" /></td></tr>
							<tr><td>2.9 - Participação em projeto de pesquisa cadastrado no SISPG COM fomento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='209.php';" /></td></tr>
							<tr><td>2.10 - Coordenação de projeto de pesquisa cadastrado no SISPG SEM fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='210.php';" /></td></tr>
							<tr><td>2.11 - Participação em projeto de pesquisa cadastrado no SISPG SEM fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='211.php';" /></td></tr>
							<tr><td>2.12 - Coordenação de projeto de pesquisa institucional da UPE com financiamento externo.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='212.php';" /></td></tr>
							<tr><td>2.13 - Participação em projeto de pesquisa institucional da UPE com financiamento externo.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='213.php';" /></td></tr>
							<tr><td>2.14 - Coordenação de subprojeto de pesquisa institucional da UPE com financiamento externo.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='214.php';" /></td></tr>
							<tr><td>2.15 - Participação em subprojeto de pesquisa institucional da UPE com financiamento externo.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='215.php';" /></td></tr>
							<tr><td>2.16 - Publicação científica em periódico indexado - qualis A1.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='216.php';" /></td></tr>
							<tr><td>2.17 - Publicação científica em periódico indexado - qualis A2.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='217.php';" /></td></tr>
							<tr><td>2.18 - Publicação científica em periódico indexado - qualis B1.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='218.php';" /></td></tr>
							<tr><td>2.19 - Publicação científica em periódico indexado - qualis B2.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='219.php';" /></td></tr>
							<tr><td>2.20 - Publicação científica em periódico indexado - qualis B3.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='220.php';" /></td></tr>
							<tr><td>2.21 - Publicação científica em periódico indexado - qualis B4.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='221.php';" /></td></tr>
							<tr><td>2.22 - Publicação científica em periódico indexado - qualis B5.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='222.php';" /></td></tr>
							<tr><td>2.23 - Publicação científica em periódico indexado - qualis C ou sem qualis.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='223.php';" /></td></tr>
							<tr><td>2.24 - Publicação técnica e artística em periódico não indexado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='224.php';" /></td></tr>
							<tr><td>2.25 - Publicação de livro com ISBN.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='225.php';" /></td></tr>
							<tr><td>2.26 - Publicação de capítulo de livro com ISBN.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='226.php';" /></td></tr>
							<tr><td>2.27 - Publicação de trabalho completo em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='227.php';" /></td></tr>
							<tr><td>2.28 - Publicação de resumo expandido em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='228.php';" /></td></tr>
							<tr><td>2.29 - Publicação de resumo em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='229.php';" /></td></tr>
							<tr><td>2.30 - Depósito de patente.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='230.php';" /></td></tr>
							<tr><td>2.31 - Registro de patente.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='231.php';" /></td></tr>
							<tr><td>2.32 - Premiação de trabalho científico ou literário.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='232.php';" /></td></tr>
							<tr><td>2.33 - Participação em banca de avaliação em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='233.php';" /></td></tr>
							<tr><td>2.34 - Participação em conselho editorial.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='234.php';" /></td></tr>
							<tr><td>2.35 - Revisor(a) de periódico indexado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='235.php';" /></td></tr>
							<tr><td>2.36 - Participação, como consultor(a) ad hoc, em comitê e conselho científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='236.php';" /></td></tr>
							<tr><td>2.37 - Participação como Membro de Comitê Técnico (TPC - Technical Program Chair) ou Comissão Científica em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='237.php';" /></td></tr>
							<tr><td>2.38 - Revisor(a) de artigos submetidos em eventos científicos.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='238.php';" /></td></tr>
							<tr><td>2.39 - Organização de evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='239.php';" /></td></tr>
							<tr><td>2.40 - Participação em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='240.php';" /></td></tr>
							<tr><td>2.41 - Orientação concluída de iniciação científica aprovada em edital, bolsista ou voluntário.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='241.php';" /></td></tr>
							<tr><td>2.42 - Ministrante de curso ou minicurso em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='242.php';" /></td></tr>
							<tr><td>2.43 - Apresentação de trabalho, palestra ou mesa redonda em evento científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='243.php';" /></td></tr>
							<tr><td>2.44 - Presidência de Banca Avaliadora, Coordenação de Fórum ou Simpósio em Evento Científico.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='244.php';" /></td></tr>
						</table>					
					</form>
				</div>
			</div>
		</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>