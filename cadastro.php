<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="CSS/cadastroestilo.css"/>
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
    <form action="login.php">
      <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Nome">
      <input type="text" id="fone" class="fadeIn third" name="telefone" placeholder="Numero Celular">
      <input type="" id="periodo" class="fadeIn third" name="periodo" placeholder="2º Período" disabled="">
      <input type="email" id="email" class="fadeIn third" name="email" placeholder="Email">
      <input type="password" id="senha" class="fadeIn third" name="password" placeholder="Senha">
      <input type="password" id="senha" class="fadeIn third" name="password" placeholder="Confirmar Senha">
      <input type="submit" class="fadeIn fourth" value="ENTRAR" >
    </form>

  </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>