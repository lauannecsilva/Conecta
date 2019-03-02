<?php 
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>

<div class="container my-3">
	
	<a href="DisciplinaNovo.php" class="btn btn-success font-weight-bold">Nova Disciplina</a>
	
	<div class="row">
		<div class="col-12 my-3">
			<div class="containerdiv">
			<?php
				$crud=new ClassCrud();
				$BFetch=$crud->selectDB(
						"*",
						"disciplina",
						"",
						array()
				);

				while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
			?>
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="Assets/undraw_server_status_5pbv.svg" width="100px" height="200px" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title text-center"><?php echo $Fetch['nome']; ?></h5>
							<p class="card-text"></p>
	    					<a href="<?php echo "Material.php?id={$Fetch['id']}"; ?>" class="btn btn-outline-success mx-auto d-block font-weight-bold">Acessar</a>
	    					<div class="btn-group">
	    					<a href="<?php echo "Controllers/ControllerDisciplinaDeletar.php?id={$Fetch['id']}"; ?>" class="Deletar btn btn-outline-danger btn-sm mt-3 mb-0 mr-2">Deletar</a>
	    					<a href="<?php echo "DisciplinaEditar.php?id={$Fetch['id']}"; ?>" class="btn btn-outline-info btn-sm mt-3 mb-0">Editar</a>
	    					</div>
						</div>
					</div>
			<?php
				}
			?>	
			</div>
		</div>
	</div>
</div>
<?php include("Includes/Footer.php") ?>
