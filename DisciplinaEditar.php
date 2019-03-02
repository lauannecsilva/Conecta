<?php 
include("Includes/Header.php");
include("Class/ClassCrud.php"); 
	//edição de dados
	$crud = new ClassCrud();
	$idDisc=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
	$BFetch=$crud->selectDB("*","disciplina","where id=?",array($idDisc));
	$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
	$nome=$Fetch['nome'];
	$professor=$Fetch['professor'];
	$email=$Fetch['email'];
?>


<div class="container my-3">
	<div class="row">
	    <div class="col-12"> 
	      <h2 class="h3 text-white bg-success mt-3 mb-5 p-3 rounded-top mx-auto">Editar Disciplina</h2>
	      <div class="Resultado"></div>
	    </div>
	 </div>
	 <form name="FormDisciplina" id="FormDisciplina" method="post" action="Controllers/ControllerDisciplinaEditar.php<?php echo "?id={$idDisc}"?>" class="mb-3">
	 	<div class="form-group">
	      <label for="topic">Nome da Disciplina</label>
	      <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>" required>
	    </div>
	    <div class="form-group">
	      <label for="topic">Nome do Professor</label>
	      <input type="text" class="form-control" id="professor" name="professor" value="<?php echo $professor ?>" required>
	    </div>
	    <div class="form-group">
	      <label for="topic">E-mail do Professor</label>
	      <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" required>
	    </div>
	    <input type="submit" class="btn btn-success" value="Editar">
	 </form>

</div>

<?php include("Includes/Footer.php") ?>