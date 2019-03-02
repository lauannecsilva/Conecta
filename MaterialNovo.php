<?php include("Includes/Header.php");
$idDisc2=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<div class="container my-3">
	<div class="row">
	    <div class="col-12"> 
	      <h2 class="h4 text-white bg-success mb-3 p-4 rounded-top">Novo Material</h2>
	      <div class="Resultado"></div>
	    </div>
	 </div>
	 <form name="FormMaterial" id="FormMaterial" method="post" 
	 		action="<?php echo "Controllers/ControllerMaterial.php?id={$idDisc2}"; ?>" class="mb-3">
	 	<div class="form-group">
	      <label for="topic">Descrição do Material</label>
	      <input type="text" class="form-control" id="titulo" name="titulo" required>
	    </div>
	    <div class="form-group">
	      <label for="topic">Link do Material</label>
	      <input type="text" class="form-control" id="link" name="link" required>
	    </div>
	    <input type="submit" class="btn btn-success" value="Cadastrar">
	 </form>

</div>

<?php include("Includes/Footer.php") ?>