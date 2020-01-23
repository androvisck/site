<?php
	include("conexao.php");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('Location: index.php');
		exit;
	}
	$iduser=$_SESSION['id'];
	
	$sql="SELECT id, matricula, nome, sobrenome, titulo FROM usuarios WHERE id= '$iduser'";
	$resultado=$mysqli->query($sql);
	$row1=$resultado->fetch_assoc();
// var_dump($row1);
	$iduser = $row1['id'];	
	$matricula = $row1['matricula'];
	$nome = utf8_decode($row1['nome']);
	$sobrenome = utf8_decode($row1['sobrenome']);
	$titulo = $row1['titulo'];
	
	$ano = $_SESSION["ano"];

	include 'conn.php';
	$conexao = OpenCon();
	
	// $ano = $_POST['ano'];
	$html0 ='';
	$html0 = '<table width="100%" page-break-inside:auto border=1>';	
	$html0 .= '<thead>';
	$html0 .= '<tr>';
	$html0 .= '<td style=width:50px align=center><strong>Ordem</strong></td>';
	$html0 .= '<td style=width:50px align=center><strong>Item</strong></td>';
	$html0 .= '<td align=center><strong>Descrição</strong></td>';
	$html0 .= '<td style=width:45px align=center><strong>Ano</strong></td>';
	$html0 .= '<td style=width:65px align=center><strong>Semestre</strong></td>';
	$html0 .= '</tr>';
	$html0 .= '</thead>'
	;
	$html0 .= '<tbody>';
	// efetuando um select na tabela
	$result ="";
	$item = '4.';
	$result = "SELECT * FROM banco WHERE iduser LIKE '%".$iduser."%' AND item LIKE '".$item."%' AND ano LIKE '%".$ano."%' ORDER BY item, ano DESC, semestre ASC";
	$resultado ="";
	$resultado = mysqli_query($conexao, $result);
	
	// resultado da consulta (valor inteiro)
	$cont=0;
	$row_orientacoes ="";
	while($row_orientacoes = mysqli_fetch_assoc($resultado)){
		$cont++ +1;
		$html0 .= '<tr><td align=center>'.$cont . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['item'] . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['nome'] . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['ano'] . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['semestre'] . "</td>";
	}
	$html0 .= '</tbody>';
	$html0 .= '</table>';

//////////////////////////////////////////////////////////////////////////////////////////	
	$html = "";
	$cont1=0;	
	$html = '<table  class="beta" width="100%" border=1px>';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td  class="count" align=center> </td>';
	$html .= '</tr>';	
	$html .= '</thead>';
	
	$html .= '<tbody>';	
	$resultado1 ="";
	$result ="";
	$result = "SELECT * FROM banco WHERE iduser LIKE '%".$iduser."%' AND item LIKE '".$item."%' AND ano LIKE '%".$ano."%' ORDER BY item, ano DESC, semestre ASC";
	$resultado1 = mysqli_query($conexao, $result);
	while($row_orientacoes1 = mysqli_fetch_assoc($resultado1)){		
	$cont1++ +1;

	$html .= '<tr><td align=center>'. '<img src="data:image;base64,'.base64_encode($row_orientacoes1['foto'] ).'" alt="Image" style= "width: 700px;" >' . "</td></tr>";
	}

	$html .= '</tbody>';
	$html .= '</table>';

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<html>
				<head>
				<link type="text/css" rel="stylesheet" media="screen" href="CSS/tabela.css"/>
				<h1 style="text-align: center;">Gestão</h1>				
					'. $titulo .'
					'. $nome .'
					'. $sobrenome .'
					- Matricula: '. $matricula .'.
					</head>
				<body>
					'. $html0 .'
					'. "<div style='page-break-after: always;'></div>" .'
					'. $html .'
				</body>
			</html>
		');

	//Renderizar o html
	$dompdf->render();
	
	//Configurar página
	$dompdf->setPaper('A4','portrait');
	
	//Exibibir a página
	$dompdf->stream(
		"relatorio_dRAD.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>