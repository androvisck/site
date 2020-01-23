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
		<div style="height:1550px;">
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="">
						<h1>Extensão</h1>
						<table style="width: 100%;table-layout:fixed">
							<tr><td align="left"></td></tr>
							<tr><td style="width:100px">4.1 - Reitor(a) ou Vice-Reitor(a).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='401.php';" /></td></tr>
							<tr><td>4.2 - Pró-Reitor(a).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='402.php';" /></td></tr>
							<tr><td>4.3 - Diretor(a) ou Vice‐Diretor(a) de Unidade de Educação ou de Educação e Saúde ou Superintendente do Complexo Hospitalar.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='403.php';" /></td></tr>
							<tr><td>4.4 - Coordenação de gestão central, chefia de gabinete da reitoria, coordenação de NCTI (Núcleo de Comunicação e Tecnologia da Informação), CPA (Comissão Própria de Avaliação), Gestor Executivo das Unidades de Educação e Saúde e CPCA (Comissão Permanente de Co</td><td><input type="button" value="Inserir" onclick="javascript: location.href='404.php';" /></td></tr>
							<tr><td>4.5 - Gerência vinculada à coordenação de gestão central.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='405.php';" /></td></tr>
							<tr><td>4.6 - Coordenador(a) Setorial de Unidade de Educação ou de Educação e Saúde.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='406.php';" /></td></tr>
							<tr><td>4.7 - Coodernador(a) ou vice-coordenador(a) de curso graduação ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='407.php';" /></td></tr>
							<tr><td>4.8 - Coodernador(a) ou vice-coordenador(a) de curso graduação ou pós-graduação lato sensu, exclusivamente na modalidade EA.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='408.php';" /></td></tr>
							<tr><td>4.9 - Coordenador(a) de cursos de especialização lato sensu DENTRO da carga horária contratual.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='409.php';" /></td></tr>
							<tr><td>4.10 - Coordenador(a) de programa de residência na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='410.php';" /></td></tr>
							<tr><td>4.11 - Membro de Comissão/Comitê/Núcleo, formalmente designado(a) no âmbito da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='411.php';" /></td></tr>
							<tr><td>4.12 - Membro de Conselho/Comissão/Comitê/Núcleo, formalmente designado(a) para representação da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='412.php';" /></td></tr>
							<tr><td>4.13 - Membro titular dos Conselhos da UPE (CEPE, CONSUN ou CGA).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='413.php';" /></td></tr>
							<tr><td>4.14 - Membro suplente dos Conselhos da UPE (CEPE, CONSUN ou CGA).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='414.php';" /></td></tr>
							<tr><td>4.15 - Participação como membro nas câmaras consultivas dos Conselhos Superiores.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='415.php';" /></td></tr>
							<tr><td>4.16 - Participação em comissão organizadora de concurso público na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='416.php';" /></td></tr>
							<tr><td>4.17 - Participação em banca examinadora de concurso público dentro da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='417.php';" /></td></tr>
							<tr><td>4.18 - Participação em banca examinadora de concurso público fora da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='418.php';" /></td></tr>
							<tr><td>4.19 - Gerência (Supervisão) de divisão interna às unidades de estágio, pesquisa, pós-graduação ou extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='419.php';" /></td></tr>
							<tr><td>4.20 - Assessoria de Relações Internacionais na Gestão Central.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='420.php';" /></td></tr>
							<tr><td>4.21 - Presidente ou Vice-presidente da entidade representativa docente.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='421.php';" /></td></tr>
							<tr><td>4.22 - Membro Titular da Diretoria de entidade representativa docente.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='422.php';" /></td></tr>
							<tr><td>4.23 - Representante nas Unidades de Educação formalmente designado pela entidade sindical.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='423.php';" /></td></tr>
							<tr><td>4.24 - Coordenação de laboratórios didáticos, de informática ou de ensino.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='424.php';" /></td></tr>
							<tr><td>4.25 - Coordenação de Programa Institucional.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='425.php';" /></td></tr>
							<tr><td>4.26 - Coordenação de Núcleo Docente Estruturante ou Núcleo Docente Estruturante Assistencial.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='426.php';" /></td></tr>
						</table>					
					</form>
				</div>
			</div>
		</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>