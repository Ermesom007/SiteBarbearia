 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Barbearia Black Beard</title>

      
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

        <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Font awesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

      <!--javaScrips-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="Script/carrosel.js"></script>


    </head>

    <body>

      <?php
// Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>  

<script>
  // Mensagem
  window.onload = function() {
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
  };
</script>

<?php
endif;
session_unset();
?>

      
  <div id="modal1" class="modal">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
    <h4>Entre para obter mais Informações</h4>
    <br>

    <form action="logar.php" method="POST">

      <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="text" name="email" id="name">
        <label for="name">E-mail</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" name="senha" id="pass">
        <label for="pass">Senha</label>
      </div>
      <br>

      <div class="left" style="margin-left:20px;">
        <input type="checkbox" id="check">
        <label for="check">Lembrar Senha</label>
      </div>
      <br>
      
      <div class="right" style="margin-left:20px; ">
        
          <a href="#cadastrar" class="modal-trigger">Não tem um Acesso? Crie um</a>

      </div>
      <br>      
      <button type="submit" name="btn-logar" value="logar" class="btn btn-large s6">Login</button>
      

      
    </form>
  </div>
</div>

<div id="modalFaleConosco" class="modal">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
    <h4>Entre para acessar: Fale conosco</h4>
    <br>

    <form action="logar.php" method="POST">

      <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="text" name="email" id="name">
        <label for="name">E-mail</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" name="senha" id="pass">
        <label for="pass">Senha</label>
      </div>
      <br>

      <div class="left" style="margin-left:20px;">
        <input type="checkbox" id="check">
        <label for="check">Lembrar Senha</label>
      </div>
      <br>
      
      <div class="right" style="margin-left:20px; ">
        
          <a href="#cadastrar" class="modal-trigger">Não tem um Acesso? Crie um</a>

      </div>
      <br>      
      <button type="submit" name="btn-logar" value="faleConosco" class="btn btn-large s6">Login</button>
      

      
    </form>
  </div>
</div>

<div id="modalTrabalheConosco" class="modal">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
    <h4>Entre para acessar: Trabalhe Conosco</h4>
    <br>

    <form action="logar.php" method="POST">

      <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="text" name="email" id="name">
        <label for="name">E-mail</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" name="senha" id="pass">
        <label for="pass">Senha</label>
      </div>
      <br>

      <div class="left" style="margin-left:20px;">
        <input type="checkbox" id="check">
        <label for="check">Lembrar Senha</label>
      </div>
      <br>
      
      <div class="right" style="margin-left:20px; ">
        
          <a href="#cadastrar" class="modal-trigger">Não tem um Acesso? Crie um</a>

      </div>
      <br>      
      <button type="submit" name="btn-logar" value="trabalheConosco" class="btn btn-large s6">Login</button>
      

      
    </form>
  </div>
</div>


 <div id="cadastrar" class="modal">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
    <h4>Cadastro</h4>
    <br>

    <form action="logar.php">

      <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="text" id="name">
        <label for="name">Nome Completo</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="text" id="name">
        <label for="name">E-mail</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" id="pass">
        <label for="pass">Crie uma Senha</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" id="pass">
        <label for="pass">Confirme a Senha</label>
      </div>
      <br>

      
      <br>      
      <input type="submit" value="cadastrar" class="btn btn-large s2">
      

      
    </form>
  </div>
</div>












 <div id="saibaMaisCursos" class="modal">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
  <div class="row">
  <div class="col s12 m6 push-m3">


    <h4>Informacões sobre o curso</h4>
    <br>

    <form action="logar.php" method="POST">
        <div class=""> 
        <p> Curso: Barba Simples </p>  
        <p> Data de Inicio: 12/06/2019 </p>
        <p> Data de Conclusão: 18/06/2019 </p>
        <p> Vagas: 30 vagas</p>
        <p> Valor: R$150,00 </p>
         <p>Descrição: Neste curso os alunos aprenderão a detalhar da melhor maneira as curvas de uma barba digna de respeito</p>
          <p>OBS: PARA REALIZAR A INSCRIÇÃO DO CURSO DIRIGA - SE A NOSSO ESTABELECIMENTO, ENDEREÇO NO RODAPE DA PAGINA, SE NAO FOR POSSIVEL A VISITA AO ESTABELECIMENTO NOS LIGUE TELEFONE TAMBÉM CONSTA NO RODAPE DA PAGINA, OBRIGADO.</p>

          <table>
                    <tr>
                      <td><i class="fas fa-map-marker-alt"></i></td>
                      <td>Avenida Presidente Keneddy Nº27, Praia Grande SP</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-phone"></i></td>
                      <td>(13) 3044 4057</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-envelope"></i></td>
                      <td>blackbeard@company.com</td>
                    </tr>
                    

                </table>
          </div>
      
    </form>
  </div></div>
  </div>
</div>










 <div id="cortes" class="modal">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
  <div class="row">
  <div class="col s12 m6 push-m3">


    <h4>Agende Seu Corte</h4>
    <br>

    <form action="logar.php" method="POST">

      <div class="input-field col s8">
        
        <select name="name">
            <option value="">ROMULO MERO</option>
            <option value="">RICARDO OLIVEIRA</option>
            <option value="">MARCUS PERA</option>
        </select>
        <label for="name">BARBEIRO </label>
      </div>
      <br>

      <div class="input-field col s8">
        
        <input type="date" name="data" id="data">
        <label for="data">Qual o melhor dia Para Voce?</label>
      </div>
      <br>

      <div class="input-field col s8">
        
        <input type="Time" name="tempo" id="tempo">
        <label for="tempo">Agende um Horario</label>
      </div>
      <br>
        <br>    
      <br>    
<br>    
      <br>    

      <br>    
      <br>    

       <button style="margin-top: 100px;" class="btn black text-center waves-effect waves-light" type="submit" value="corte" name="action">Agendar
              <i class="material-icons right">send</i>
          </button>
      

      
    </form>
  </div></div>
  </div>
</div>












     
      
<nav class="black">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><img src="imagens/logo.jpg" width="50px" height="50px" />Black Beard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        <li><a href="cursos.php">Cursos</a></li>
        <li><a href="cortes.php">Cortes</a></li>
        <?php if(isset($_SESSION['acesso'])) { ?>
              <li><a href="faleConosco.php">Fale Conosco(L)</a></li>
              <li><a href="trabalheConosco.php">Trabalhe Conosco(L)</a></li>
         <?php }else{ ?>

               <li><a href="#modalFaleConosco" class="modal-trigger">Fale Conosco</a></li>
               <li><a href="#modalTrabalheConosco" class="modal-trigger">Trabalhe Conosco</a></li>   
          <?php   } ?>
        <li><a href="#modal1" class="modal-trigger"><i class="material-icons prefix">person</i></a></li>
        
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
        <li><a href="cursos.php">Cursos</a></li>
        <li><a href="cortes.php">Cortes</a></li>
       <?php
            session_start();
        if(isset($_SESSION['mensagem'])) { ?>
              <li><a href="faleConosco.php">Fale Conosco</a></li>
              <li><a href="trabalheConosco.php">Trabalhe Conosco</a></li>
         <?php }else{ ?>

               <li><a href="#modal1" class="modal-trigger">Fale Conosco</a></li>
               <li><a href="#modal1" class="modal-trigger">Trabalhe Conosco</a></li>   
          <?php   } ?>
        <li><a href="#modal1" class="modal-trigger">Login</a></li>
  </ul>