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
	// var_dump($row1);
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
	$item = '2.';
	$result = "SELECT * FROM banco WHERE iduser LIKE '%".$iduser."%' AND item LIKE '".$item."%' AND ano LIKE '%".$ano."%' ORDER BY item, ano DESC, semestre ASC";

	$resultado ="";
	$resultado = mysqli_query($conexao, $result);
	
	// resultado da consulta (valor inteiro)
	$cont=0;
	$row_orientacoes ="";
	while($row_orientacoes = mysqli_fetch_assoc($resultado))
	{
		$cont++ +1;
		$html0 .= '<tr><td align=center>'.$cont . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['item'] . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['nome'] .';<br>'. $row_orientacoes['nome1'] .';<br>'. $row_orientacoes['nome2'] . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['ano'] . "</td>";
		$html0 .= '<td align=center>'.$row_orientacoes['semestre'] . "</td>";
	}
	$html0 .= '</tbody>';
	$html0 .= '</table>';


//////////////////////////////////////////////////////////////////////////////////////////

	echo '<html>';
		echo '<head>';
		echo '<link type="text/css" rel="stylesheet" media="screen" href="CSS/tabela.css"/>';
		echo '<h1 style="text-align: center;">Pesquisa</h1>';			
			echo $titulo;
			echo ' '. $nome;
			echo ' '. $sobrenome;
			echo ' - Matricula: '. $matricula;
			echo '</head>';
		echo '<body>';
			echo $html0;
			echo '<div style="page-break-after: always;"></div>';
		echo '</body>';
	echo '</html>';

//////////////////////////////////////////////////////////////////////////////////////////	
	
	$resultado1 ="";
	$result ="";
	$result = "SELECT * FROM banco WHERE iduser LIKE '%".$iduser."%' AND item LIKE '".$item."%' AND ano LIKE '%".$ano."%' ORDER BY item, ano DESC, semestre ASC";
	$resultado1 = mysqli_query($conexao, $result);
	while($row = mysqli_fetch_assoc($resultado1))
	{		
		if (!empty($row['foto']))
		{
			echo '<img src="data:image;base64,'.base64_encode($row['foto'] ).'" alt="Image" style= "width: 100%; height: auto;" >';
		}else{
			echo '<object data="data:application/pdf;base64,'.base64_encode($row["pdf"]).'" type="application/pdf" style="height:1500px;width:100%"></object>';
		}
	}

	echo '<div style="page-break-after: always;"></div>';
	
?>