<?php
	require_once 'CLASSES/adm.php';
	$u= new admin;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Administração - dRAD </title>
		<link rel="stylesheet" href="CSS/style3.css">
		<tr></br><?php echo "<a href='index.php'>Usuário</a>";?></br></br></tr><hr>
	</head>
	<body>
	</br></br></br></br></br></br>
	<div class="container" >
		<a class="links" id="paralogin"></a>		
		<div class="content">      
		  <!--FORMULÁRIO DE LOGIN-->
			<div id="login">
				<form method="post" action=""> 
				 <h1>Módulo de Administração</h1> 
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>
				  <p> 
					<label for="email"></label>
					<input id="email" name="login" required="required" type="email" placeholder="Login"/>
				  </p>
				   
				  <p> 
					<label for="senha"></label>
					<input id="senha" name="senha" required="required" type="password" placeholder="Senha" /> 
				  </p> 
					<p> 
						<input type="submit" value="Entrar" /> 
					</p>
					
					<p class="link">
						<a href="index.php">Usuário</a>
					</p>
				</form>
			</div>
		</div>
		<?php
		if(isset($_POST['login']))
			{
				$login =addslashes( $_POST['login']);
				$senha=addslashes( $_POST['senha']);
				// verificar se está preenchido
				if(!empty($login) && !empty($senha))
				{
					$u->conectar("projeto","localhost","root","");
					if($u->msgErro =="")
					{
					if($u->logar($login,$senha))
					{
						header('Location: home_admin.php');
					}
					else
					{
						?>
						<div class="msg-erro">
							Login ou senha inválidos!
						</div>
						<?php
					}
				}
				else
				{
					?>
					<div class="msg-erro">
						<?php echo "Erro: ".$u->msgErro;?>
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					Preencha todos os campos!
				</div>
				<?php
			}
		}
		?>	
	</body>	
</div><footer>Desenvolvido por: ajf@poli.br</footer></body>	</body>	
</html>