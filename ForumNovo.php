<?php 
include("Includes/Header.php");
?>

<div class="container my-3">
  <nav class="breadcrumb">
    <a href="Forum.php" class="breadcrumb-item text-success">Índice do Forum</a>
    <a href="ForumDisc.php" class="breadcrumb-item text-success">Disciplina</a>
    <span class="breadcrumb-item active ">Novo Tópico</span>
  </nav>
  <div class="row">
    <div class="col-12"> 
      <h2 class="h4 text-white bg-success mb-3 p-4 rounded-top">Novo Tópico</h2>
    </div>
  </div>
  <form class="mb-3">
    <div class="form-group">
      <label for="topic">Tópico</label>
      <input type="text" class="form-control" id="topic" placeholder="De um titulo a seu tópico" required>
    </div>
    <div class="form-group">
      <label for="comment">Comentário</label>
      <textarea class="form-control" id="comment" rows="10" placeholder="Escreva aqui seu texto." required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
    <button type="reset" class="btn btn-danger">Apagar</button>
  </form>
</div>
<?php 
include("Includes/Footer.php");
?>

