<?php 
	if ($_POST) {
		session_start();

			echo "funciona";
			echo "<pre>";
			echo print_r($_POST);
			echo "</pre>";	

			$LOGIN = $_POST['email'];
			$SENHA = $_POST['senha'];
			$LOGIN = $_POST['email1'];
			$SENHA = $_POST['senha1'];
			$LOGIN = $_POST['email2'];
			$SENHA = $_POST['senha2'];
			$BTN = $_POST['btn-logar'];
			$CORTE = $_POST['action'];
			echo $LOGIN;
			echo $SENHA;
			echo $CORTE;

			if ($CORTE == 'corte') {
				$_SESSION['mensagem'] = "SEU CORTE FOI AGENDADO";
				header('Location: cortes.php');
			}else{

						if ($BTN =='logar') {
							if ($LOGIN == '' & $SENHA == '') {
									
									$_SESSION['mensagem'] = "BEM VINDO USUARIO";

									header('Location: index.php');

									echo "login CORRETO";
							}else{
								echo "login INCORRETO";
								$_SESSION['mensagem'] = "email e / ou senha incorreto(s)";
									header('Location: index.php');

							}
						}elseif ($BTN == 'faleConosco') {
								$_SESSION['mensagem'] = 'BEM VINDO USUARIO';
								header('Location: faleConosco.php');	
							
						}
						elseif ($BTN == 'trabalheConosco') {
								$_SESSION['mensagem'] = 'BEM VINDO USUARIO';
								header('Location: trabalheConosco.php');	
							
						}

						
				}
			
	}	
	

 ?>