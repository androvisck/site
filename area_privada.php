<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: index.php');
		exit;
	}
	$iduser=$_SESSION['id'];
	
	$sql="SELECT id, nome, titulo FROM usuarios WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>dRAD - Formulários </title>
		<link rel="stylesheet" href="CSS/style2.css">
		<tr></br>Olá, <?php $s1 = '! | '; echo utf8_encode($row1['titulo'] . " " . $row1['nome']);echo "$s1";echo "<a href='sair.php'>Sair</a>";?></br></br></tr><hr>
	</head>
	<body>
		<div class="container" >
			<div class="content">
				<div id="vip" style="margin:auto auto" align=center>
					<form method="post" action="">
						<h1>Formulários</h1>
						<table style="width: 100%;table-layout:fixed">
							<tr><td align="left"><strong>1 - Dimensão Ensino</strong></td></tr>
							<tr><td>1.1 - Até 4 horas semanais de aula, na graduação e/ou pós-graduação stricto sensu.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='101.php';" /></td></tr>
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
							<tr><td>1.29 - Coordenação de Projeto de Ensino COM fomento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='.129.php';" /></td></tr>
							<tr><td>1.30 - Participação em Projeto de Ensino COM fomento da UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='130.php';" /></td></tr>
							<tr><td>1.31 - Coordenação de Projeto de Ensino COM fomento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='131.php';" /></td></tr>
							<tr><td>1.32 - Participação em Projeto de Ensino COM fomento externo à UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='132.php';" /></td></tr>
							<tr><td>1.33 - Coordenação de Projeto de Ensino SEM fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='133.php';" /></td></tr>
							<tr><td>1.34 - Participação em Projeto de Ensino SEM fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='134.php';" /></td></tr>
							<tr><td>1.35 - Orientação de monitoria de componente curricular ou módulo, desde que selecionado em edital da unidade.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='135.php';" /></td></tr>
							<tr><td>1.36 - Participação em Núcleo Docente Estruturante ou Núcleo Docente Estruturante Assistencial.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='136.php';" /></td></tr>
							<tr><td>1.37 - Coordenação/regência de disciplina, componente curricular ou módulo (apenas, quando houver mais de dois professores por disciplina, componente curricular ou módulo).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='137.php';" /></td></tr>
							<tr><td>1.38 - Participação em banca examinadora* - TCC de graduação, especialização ou residência.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='138.php';" /></td></tr>
							<tr><td>1.39 - Participação em banca de exame de qualificação de mestrado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='139.php';" /></td></tr>
							<tr><td>1.40 - Participação em banca de exame de qualificação de doutorado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='140.php';" /></td></tr>
							<tr><td>1.41 - Participação em banca examinadora - defesa de mestrado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='141.php';" /></td></tr>
							<tr><td>1.42 - Participação em banca examinadora - defesa de doutorado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='142.php';" /></td></tr>
							<tr><td>1.43 - Docente avaliador(a) de curso de graduação ou pós-graduação (INEP, CEE-PE, CAPES).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='143.php';" /></td></tr>
							<tr><td>1.44 - Produção de vídeo aulas, desde que certificada pela UPE ou como parte de projetos em órgãos de fomento.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='144.php';" /></td></tr>
							<tr><td>1.45 - Docente em Formação sem afastamento, níveis mestrado ou doutorado.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='145.php';" /></td></tr>
							<tr><td>1.46 - Participação como avaliador ad hoc em projetos de ensino.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='146.php';" /></td></tr>

							<tr><td><br><br></td></tr>

							<tr><td align="left"><strong>2 - Dimensão Pesquisa</strong></td></tr>
							<tr><td>2.1 - Docente permanente em programa stricto sensu na UPE.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='201.php';" /></td></tr>
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

							<tr><td><br><br></td></tr>

							<tr><td align="left"> <strong>3 - Dimensão Extensão</strong></td></tr>
							<tr><td>3.1 - Participação, como consultor(a) ad hoc, em comitês e afins, na área de extensão.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='301.php';" /></td></tr>
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

							<tr><td><br><br></td></tr>

							<tr><td align="left"><strong>4 - Dimensão Gestão</strong></td></tr>
							<tr><td>4.1 - Reitor(a) ou Vice-Reitor(a).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='401.php';" /></td></tr>
							<tr><td>4.2 - Pró-Reitor(a).</td><td><input type="button" value="Inserir" onclick="javascript: location.href='402.php';" /></td></tr>
							<tr><td>4.3 - Diretor(a) ou Vice-Diretor(a) de Unidade de Educação ou de Educação e Saúde.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='403.php';" /></td></tr>
							<tr><td>4.5 - Gerência vinculada à coordenação de gestão central.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='404.php';" /></td></tr>
							<tr><td>4.4 - Coordenação de gestão central, chefia de gabinete da reitoria, coordenação de NCTI (Núcleo de Comunicação e Tecnologia da Informação), CPA (Comissão Própria de Avaliação) e CPCA (Comissão Permanente de Concursos Acadêmicos.</td><td><input type="button" value="Inserir" onclick="javascript: location.href='405.php';" /></td></tr>
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