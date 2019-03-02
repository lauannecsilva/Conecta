<?php 
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>

<div class="container my-3">
	<div class="row">
		<div class="col- mt-3">
			<?php
				$crud2=new ClassCrud();
			 	$idDisc2=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
			 	$BFetch2=$crud2->selectDB(
			 			"*",
			 			"disciplina",
			 			"where id=?",
			 			array($idDisc2)
			 	);
			 	$Fetch2=$BFetch2->fetch(PDO::FETCH_ASSOC);
			 	?>
			 	<h2 class="h5 text-white bg-success mb-0 p-4 rounded-top">Conteúdo de <?php echo $Fetch2['nome']; ?></h2>
			 <table class="table table-striped table-light table-borderless table-responsive-lg">
		        <tbody>
		          <tr>
		            <td>
		              <div><p class="h6 mx-auto d-block"><?php echo $Fetch2['professor']; ?></p></div>
		              <h3 class="h6"><p><?php echo $Fetch2['email']; ?></p></h3>
		            </td>
		          </tr>
		        </tbody>
		      </table>
		</div>
		</div>
		<div class="row">
		<div class="col-12 mt-3">
			<a href="<?php echo "MaterialNovo.php?id={$Fetch2['id']}"; ?>" class="btn btn-success font-weight-bold mb-3">Novo Material</a>
		      <table class="table table-striped table-borderless table-light table-responsive-lg">
		        <thead class="thead-dark">
		          <tr>
		            <th scope="col" class="text-light">Descrição</th>
		            <th scope="col" class="text-light">Link</th>
		            <th scope="col" class="text-light">Data de Upload</th>
		            <th scrop="col" class="text-light">Ações</th>
		          </tr>
		        </thead>
		        <tbody>
		      <?php
			 	$crud=new ClassCrud();
			 	$idDisc=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
			 	$BFetch=$crud->selectDB(
			 			"*",
			 			"material",
			 			"where id_Disciplina=?",
			 			array($idDisc)
			 	);
			 	while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
			?>
		          <tr>
		            <td>
		              <div><p><?php echo $Fetch['titulo']; ?></p></div>
		            </td>
		            <td>
		              <h3 class="h6"><a href="<?php echo $Fetch['link']; ?>" class="text-success"><?php echo $Fetch['link']; ?></a></h3>
		            </td>
		            <td>
		              <div><?php echo $Fetch['data_Upload']; ?></div>
		            </td>
		            <td>
		            <div class="btn-group">
		              <a href="<?php echo "Controllers/ControllerMaterialDeletar.php?id={$Fetch['id']}"; ?>" class="Deletar btn btn-danger btn-sm">Deletar</a>
		              <a href="<?php echo "MaterialEditar.php?id={$Fetch['id']}"; ?>" class="btn btn-primary btn-sm">Editar</a>
		            </div>
		            </td>
		          </tr>
		        
		      <?php
		  		}
		  		?>	
		  	</tbody>
		      </table>	
		</div>
	</div>
</div>
<?php include("Includes/Footer.php") ?>
