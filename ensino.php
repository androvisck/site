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
		<div style="height:2600px;">
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="">
						<h1>Ensino</h1>
						<table style="width: 100%;table-layout:fixed">
							<tr><td align="left"></td></tr>
							<tr><td style="width:100px">1.1 - Até 4 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td style="width:20px"><input type="button" value="Inserir" onclick="javascript: location.href='101.php';" /></td></tr>
							<tr><td>1.2 - 5 a 8 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='102.php';" /></td></tr>
							<tr><td>1.3 - 9 a 12 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='103.php';" /></td></tr>
							<tr><td>1.4 - 13 a 16 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='104.php';" /></td></tr>
							<tr><td>1.5 - 17 a 20 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='105.php';" /></td></tr>
							<tr><td>1.6 - 21 a 24 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='106.php';" /></td></tr>
							<tr><td>1.7 - 25 a 28 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='107.php';" /></td></tr>
							<tr><td>1.8 - Até 4 horas semanais de aula, na graduação e/ou pós-graduação lato sensu exclusivamente na modalidade EAD.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='108.php';" /></td></tr>
							<tr><td>1.9 - Acima de 4 horas semanais de aula, na graduação e/ou pós-graduação lato sensu exclusivamente na modalidade EAD.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='109.php';" /></td></tr>
							<tr><td>1.10 - Docência em cursos de especialização lato sensu DENTRO da carga horária contratual, incluindo a modalidade EAD e/ou programas de residência na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='110.php';" /></td></tr>
							<tr><td>1.11 - Supervisão de estágio de estudantes de graduação da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='111.php';" /></td></tr>
							<tr><td>1.12 - Orientação de estágio de estudantes de graduação da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='112.php';" /></td></tr>
							<tr><td>1.13 - Orientação concluída de TCC de graduação na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='113.php';" /></td></tr>
							<tr><td>1.14 - Orientação em andamento de TCC de graduação na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='114.php';" /></td></tr>
							<tr><td>1.15 - Orientação concluída de dissertação de mestrado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='115.php';" /></td></tr>
							<tr><td>1.16 - Orientação em andamento de dissertação de mestrado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='116.php';" /></td></tr>
							<tr><td>1.17 - Orientação concluída de tese de doutorado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='117.php';" /></td></tr>
							<tr><td>1.18 - Orientação em andamento de tese de doutorado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='118.php';" /></td></tr>
							<tr><td>1.19 - Orientação de TCC de cursos de especialização lato sensu DENTRO da carga horária contratual, incluindo a modalidade EAD e/ou programas de residência na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='119.php';" /></td></tr>
							<tr><td>1.20 - Coorientação concluída de TCC de graduação na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='120.php';" /></td></tr>
							<tr><td>1.21 - Coorientação concluída de dissertação de mestrado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='121.php';" /></td></tr>
							<tr><td>1.22 - Coorientação em andamento de dissertação de mestrado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='122.php';" /></td></tr>
							<tr><td>1.23 - Coorientação concluída de tese de doutorado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='123.php';" /></td></tr>
							<tr><td>1.24 - Coorientação em andamento de tese de doutorado na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='124.php';" /></td></tr>
							<tr><td>1.25 - Coorientação concluída de dissertação de mestrado fora da UPE (pontuar apenas se o professor não tiver vínculo com a outra IES).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='125.php';" /></td></tr>
							<tr><td>1.26 - Coorientação concluída de tese de doutorado fora da UPE (pontuar apenas se o professor não tiver vínculo com a outra IES).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='126.php';" /></td></tr>
							<tr><td>1.27 - Coorientação de TCC de cursos de especialização lato sensu DENTRO da carga horária contratual, incluindo a modalidade EAD e/ou programas de residência na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='127.php';" /></td></tr>
							<tr><td>1.28 - Supervisão de estágio docente de estudante de stricto sensu da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='128.php';" /></td></tr>
							<tr><td>1.29 - Coordenação de Projeto de Ensino COM fomento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='129.php';" /></td></tr>
							<tr><td>1.30 - Participação em Projeto de Ensino COM fomento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='130.php';" /></td></tr>
							<tr><td>1.31 - Coordenação de Projeto de Ensino COM fomento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='131.php';" /></td></tr>
							<tr><td>1.32 - Participação em Projeto de Ensino COM fomento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='132.php';" /></td></tr>
							<tr><td>1.33 - Coordenação de Projeto de Ensino SEM fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='133.php';" /></td></tr>
							<tr><td>1.34 - Participação em Projeto de Ensino SEM fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='134.php';" /></td></tr>
							<tr><td>1.35 - Orientação de monitoria de componente curricular ou módulo, desde que selecionado em edital da unidade.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='135.php';" /></td></tr>
							<tr><td>1.36 - Participação em Núcleo Docente Estruturante ou Núcleo Docente Estruturante Assistencial.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='136.php';" /></td></tr>
							<tr><td>1.37 - Coordenação/regência de disciplina, componente curricular ou módulo (apenas, quando houver mais de dois professores por disciplina, componente curricular ou módulo).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='137.php';" /></td></tr>
							<tr><td>1.38 - Participação em banca examinadora - TCC de graduação, especialização ou residência.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='138.php';" /></td></tr>
							<tr><td>1.39 - Participação em banca de exame de qualificação de mestrado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='139.php';" /></td></tr>
							<tr><td>1.40 - Participação em banca de exame de qualificação de doutorado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='140.php';" /></td></tr>
							<tr><td>1.41 - Participação em banca examinadora - defesa de mestrado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='141.php';" /></td></tr>
							<tr><td>1.42 - Participação em banca examinadora - defesa de doutorado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='142.php';" /></td></tr>
							<tr><td>1.43 - Docente avaliador(a) de curso de graduação ou pós-graduação (INEP, CEE-PE, CAPES).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='143.php';" /></td></tr>
							<tr><td>1.44 - Produção de vídeo aulas, desde que certificada pela UPE ou como parte de projetos em órgãos de fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='144.php';" /></td></tr>
							<tr><td>1.45 - Docente em Formação sem afastamento, níveis mestrado ou doutorado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='145.php';" /></td></tr>
							<tr><td>1.46 - Participação como avaliador ad hoc em projetos de ensino.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='146.php';" /></td></tr>
						</table>					
					</form>
				</div>
			</div>
		</div><footer>Desenvolvido por: ajf@poli.br</footer></body>
</html>