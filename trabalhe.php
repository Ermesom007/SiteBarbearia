<?php 
						
						if ($_POST) {
							
							$BTN = $_POST['btn-cadastrar'];


							if ($BTN == 'voltar') {
									session_start();
									$_SESSION['mensagem'] = "Responderemos o mais breve possivel, Obrigado";
									header('Location: index.php');	
							}
									
									header('Location: index.php');	
							

						}



 ?>