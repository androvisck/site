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
		<div style="height:1850px;">
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="">
						<h1>Extensão</h1>
						<table style="width: 100%;table-layout:fixed">
							<tr><td align="left"></td></tr>
							<tr><td style="width:100px">3.1 - Participação, como consultor(a) ad hoc, em comitês e afins, na área de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='301.php';" /></td></tr>
							<tr><td>3.2 - Participação em comissão de avaliação de projetos de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='302.php';" /></td></tr>
							<tr><td>3.3 - Participação em conselho editorial de periódico de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='303.php';" /></td></tr>
							<tr><td>3.4 - Revisor(a) de periódicos de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='304.php';" /></td></tr>
							<tr><td>3.5 - Organização de evento de extensão (congresso, seminário, ciclo de debates, festival, campanha, espetáculo, recital, concerto, show, exposição, feira, salão mostra, lançamento, campeonato, torneio, olimpíada, entre outros).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='305.php';" /></td></tr>
							<tr><td>3.6 - Participação em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='306.php';" /></td></tr>
							<tr><td>3.7 - Participação, como Membro de Comitê Técnico (TPC - Technical Program Chair), em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='307.php';" /></td></tr>
							<tr><td>3.8 - Revisor(a) de artigos submetidos em eventos de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='308.php';" /></td></tr>
							<tr><td>3.9 - Publicação de trabalho completo em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='309.php';" /></td></tr>
							<tr><td>3.10 - Publicação de resumo expandido em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='310.php';" /></td></tr>
							<tr><td>3.11 - Publicação de resumo em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='311.php';" /></td></tr>
							<tr><td>3.12 - Coordenação de PROJETO de extensão cadastrado na PROEC e COM financimento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='312.php';" /></td></tr>
							<tr><td>3.13 - Participação em PROJETO de extensão cadastrado na PROEC e COM financimento sda UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='313.php';" /></td></tr>
							<tr><td>3.14 - Coordenação de PROGRAMA de extensão cadastrado na PROEC e COM financiamento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='314.php';" /></td></tr>
							<tr><td>3.15 - Participação de PROGRAMA de extensão cadastrado na PROEC e COM financiamento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='315.php';" /></td></tr>
							<tr><td>3.16 - Coordenação de PROJETO de extensão cadastrado na PROEC e COM financiamento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='316.php';" /></td></tr>
							<tr><td>3.17 - Participação em PROJETO de extensão cadastrado na PROEC e COM financiamento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='317.php';" /></td></tr>
							<tr><td>3.18 - Coordenação de PROGRAMA de extensão cadastrado na PROEC e COM financiamento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='318.php';" /></td></tr>
							<tr><td>3.19 - Participação de PROGRAMA de extensão cadastrado na PROEC e COM financiamento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='319.php';" /></td></tr>
							<tr><td>3.20 - Coordenação de PROJETO de extensão cadastrado na PROEC e SEM financiamento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='320.php';" /></td></tr>
							<tr><td>3.21 - Participação em PROJETO de extensão cadastrado na PROEC e SEM financiamento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='321.php';" /></td></tr>
							<tr><td>3.22 - Coordenação de PROGRAMA de extensão cadastrado na PROEC e SEM financiamento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='322.php';" /></td></tr>
							<tr><td>3.23 - Participação em PROGRAMA de extensão cadastrado na PROEC e SEM financiamento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='323.php';" /></td></tr>
							<tr><td>3.24 - Publicação e outro produto acadêmico decorrente de ação de extensão, mesmo aquele(a) destinado(a) a instrumentalizá-la.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='324.php';" /></td></tr>
							<tr><td>3.25 - Docência de curso de extensão cadastrado na Unidade de Educação e/ou na PROEC DENTRO da carga horária contratual.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='325.php';" /></td></tr>
							<tr><td>3.26 - Coordenação de curso de extensão cadastrado na Unidade e/ou na PROEC DENTRO da carga horária contratual.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='326.php';" /></td></tr>
							<tr><td>3.27 - Premiação de trabalho técnico, cultural e esportivo.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='327.php';" /></td></tr>
							<tr><td>3.28 - Apresentação de trabalho, palestra ou mesa redonda em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='328.php';" /></td></tr>
							<tr><td>3.29 - Ministrante de curso ou minicurso em evento de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='329.php';" /></td></tr>
							<tr><td>3.30 - Orientação concluída de iniciação a extensão (PIBIEXT), aprovada em edital, bolsista ou voluntário(a).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='330.php';" /></td></tr>
							<tr><td>3.31 - Participação em Ação/Projeto/Programa Institucional: de Área, de Gestão do PIBID CAPES, Observatório Educacional, Rede Cedes e Programa de Educação Tutorial nas diversas áreas (PET) e similares, desde que aprovada por algum colegiado da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='331.php';" /></td></tr>
						</table>					
					</form>
				</div>
			</div>
		</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>