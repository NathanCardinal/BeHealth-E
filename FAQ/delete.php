<?php
    include("FonctionHeader.php");
    require "connect.php";
	if(isset($_POST["delete"])){
		$id_to_delete = mysqli_real_escape_string($conn,$_POST["id_to_delete"]);
		$sql = "DELETE FROM faq WHERE FAQ_ID = $id_to_delete";
		
		if(mysqli_query($conn,$sql)){
			header("Location: FAQGestion.php");
		}
		else {
			echo "query error ".mysqli_error($conn);
		}
	}

	if(isset($_GET['id'])){
		
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = "SELECT * FROM faq WHERE FAQ_ID = $id";
		
		$result = mysqli_query($conn, $sql);

		$FAQ = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);
	}
	else echo "Erreur de connexion";
?>




<!DOCTYPE html>
<html>

<div>
	<body>
    <form>
      <p class="Profil">Question</p>
      <div class="entourage">
          <div class="photo">
        <img src="../Vue/Image/FAQs-amico.png" alt="Logo connexion"width="325px" height="305px" align='top'/>
    </div>
          <div class= "entouragePetit">
          <div class="NOM">
            <label>Question</label>
           </div>
          <div class="Case">
		 	 <p><?php echo $FAQ['Question']; ?></p>
          </div>
        </div>

        <div class= "entouragePetit">
          <div class="Prenom">
            <label>Réponse</label>
          </div>
          <div class="Case" >
		  		<?php echo $FAQ['Réponse']; ?></p> 
          </div>
        </div>
 </form>


	<?php if($FAQ): ?>
		<form action="FAQDetails.php" method="POST">
			<input type="hidden" name="id_to_delete" value="<?php echo $FAQ["FAQ_ID"]?>">
			<input type="submit" name="delete" value="Supprimer la question"> <br><br>
		</form>


	<?php else: ?>
			<h5>Personne ne correspond à cet id</h5>
	<?php endif ?>

	<a id="Modifier" href="FAQModifier.php?id=<?php echo htmlspecialchars($FAQ["FAQ_ID"])?>">Modifier</a>

	<br> <br> <br> <br> <br>
  </body>
</div>
</html>

