<?php include("Includes/Header.php") ?>


<div class="container my-3">
	<div class="row">
	    <div class="col-12"> 
	      <h2 class="h3 text-white bg-success mt-3 mb-5 p-3 rounded-top mx-auto">Nova Disciplina</h2>
	      <div class="Resultado"></div>
	    </div>
	 </div>
	 <form name="FormDisciplina" id="FormDisciplina" method="post" action="Controllers/ControllerDisciplina.php" class="mb-3">
	 	<div class="form-group">
	      <label for="topic">Nome da Disciplina</label>
	      <input type="text" class="form-control" id="nome" name="nome" required>
	    </div>
	    <div class="form-group">
	      <label for="topic">Nome do Professor</label>
	      <input type="text" class="form-control" id="professor" name="professor" required>
	    </div>
	    <div class="form-group">
	      <label for="topic">E-mail do Professor</label>
	      <input type="text" class="form-control" id="email" name="email" required>
	    </div>
	    <input type="submit" class="btn btn-success" value="Cadastrar">
	 </form>

</div>

<?php include("Includes/Footer.php") ?>