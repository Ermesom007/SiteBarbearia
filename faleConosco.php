<?php

// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';

?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Fale conosco </h3>

		<form action="trabalhe.php" method="POST">
		

			


				
		<h4 class="light"> Mensagem </h4>

				<div class="input-field col s12">
					<select class="form-control" name="bairro">

       							

			      				<option>Sugestão</option>

			      				<option>Duvida?</option>

			      				<option>Reclamação</option>

       			   </select>
			      	<label for="bairro">Assunto</label>
			      
			    </div>



				
							
				 
				        <div class="input-field col s12">
				          <textarea id="textarea1" class="materialize-textarea"></textarea>
				          <label for="textarea1">Escreva Aqui</label>
				        </div>
				  	

		
		<h4 class="light" > Contato Para Resposta </h4>


				<div class="input-field col s4" >
					 <select class="form-control" name="tipoContato">
					 	<option value="telefone">Telefone</option>
					 	<option value="telefone">Email</option>
					 	<option value="telefone">Via Whatsapp</option>


				   </select>
				     <label for="tipoContato">Tipo</label>
				</div>

        <div class="input-field col s8">
          <input type="text" class="form-control" name="Telefone" maxlength="11"/>
           
        </div>

        <div class="input-field col s4" >
					 <select class="form-control" name="tipoContato">
		              	<option value="telefone">Telefone</option>
		              	<option value="telefone">Email</option>
		              	<option value="telefone">Via Whatsapp</option>
				   </select>
				     <label for="tipoContato">Tipo</label>
				</div>

        <div class="input-field col s8">
          <input type="text" class="form-control" name="Telefone" maxlength="11"/>
           
        </div>	

		<button type="submit" value="voltar" name="btn-cadastrar" class="btn"> Enviar </button>
			<button  name="btn.." class="btn red"> Cancelar </button>
		</form>
		
	</div>
</div>


<?php 
// Footer 
include_once 'includes/footer.php';
 ?>	