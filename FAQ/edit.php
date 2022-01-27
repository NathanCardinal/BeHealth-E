<?php
	include('connect.php');
	include("FonctionHeader.php");
	$question = $answer = '';
	$errors = array('question' => '', 'answer' => '');


if(isset($_POST['submit'])){

		// Verification question
		if(empty($_POST['question'])){
			$errors['question'] = 'question requise';
		}

		// Verification answer
		if(empty($_POST['answer'])){
			$errors['answer'] = 'answer requise ';
		}

 	

		if(isset($_GET['id'])){
			$id = mysqli_real_escape_string($conn, $_GET['id']);
			$sql1 = "SELECT * FROM faq WHERE FAQ_ID = $id";
			$result = mysqli_query($conn, $sql1);
			$personne = mysqli_fetch_assoc($result);
		}


		if(array_filter($errors)){
 		} else {
			$question = mysqli_real_escape_string($conn, $_POST['question']);
			$answer = mysqli_real_escape_string($conn, $_POST['answer']);


			$sql = "UPDATE `faq` SET `question` = '$question', `answer` = '$answer' WHERE `faq`.`FAQ_ID` = $id";

			if(mysqli_query($conn, $sql)){
				header('Location: FAQGestion.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
		}
}
?>

<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../FAQ/FAQ_Admin.css"/>

<!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>

<div class="flex-default-container">
    <div class="screen">
        <div>
            <h3 id="titre" class="titre">FAQ Admin</h3>
        </div>
 
            <!-- add FAQ -->
            <form method="POST" action="edit.php">

                hidden ID field of FAQ
                <input type="hidden" name="id" value="<?php echo $faq['id']; ?>" required />
 
                <!-- question -->
                <div class="flex-container">
                    <label class="labels">Enter question</label>
                    <input type="text" name="question" class="form-control" value="<?php echo $faq['question']; ?>"required />
                </div>
 
                <!-- reponse -->
                <div class="flex-container">
                    <label class="labels">Enter Answer</label>
                    <textarea name="answer" id="answer" class="form-control" required><?php echo $faq['answer']; ?></textarea>
                </div>
 
                <!-- submit button -->
                <div class="publish-button">
                    <input type="submit" name="submit" class="add-button" value="Edit FAQ" />
                </div>
            </form>
        </div>
    </div>

