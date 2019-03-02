<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Conecta</title>
    <link rel="stylesheet" type="text/css" href="CSS/loginestilo.css"> 
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	

  </head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="Assets/Artboard 1.svg" id="icon"  />
    </div>

    <!-- Login Form -->
    <form action="Home.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Matricula">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="ENTRAR" >
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="cadastro.php" >Cadastre-se !</a> <br>
      <a class="underlineHover" href="esqueceusenha.php">Esqueceu a Senha ?</a>
    </div>

  </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>