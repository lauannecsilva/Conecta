<?php 
include("Includes/Header.php");
include("Class/ClassCrud.php"); 
	//edição de dados
	$crud = new ClassCrud();
	$idMat=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
	$BFetch=$crud->selectDB("*","material","where id=?",array($idMat));
	$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
	$titulo=$Fetch['titulo'];
	$link=$Fetch['link'];
?>
<div class="container my-3">
	<div class="row">
	    <div class="col-12"> 
	      <h2 class="h4 text-white bg-success mb-3 p-4 rounded-top">Editar Material</h2>
	      <div class="Resultado"></div>
	    </div>
	 </div>
	 <form name="FormMaterial" id="FormMaterial" method="post" 
	 		action="<?php echo "Controllers/ControllerMaterialEditar.php?id={$idMat}"; ?>" class="mb-3">
	 	<div class="form-group">
	      <label for="topic">Descrição do Material</label>
	      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo ?>" required>
	    </div>
	    <div class="form-group">
	      <label for="topic">Link do Material</label>
	      <input type="text" class="form-control" id="link" name="link" value="<?php echo $link ?>" required>
	    </div>
	    <input type="submit" class="btn btn-success" value="Editar">
	 </form>

</div>

