<?php

// connexion a la  database
$conn = mysqli_connect("mysql:host=localhost:8889;dbname=behealthe", "root", "root");

// verif si faq existe
$sql = "SELECT * FROM faqs WHERE id = ?";
$statement = $conn->prepare($sql);
$statement->execute([
    $_REQUEST["id"]
]);
$faq = $statement->fetch();

if (!$faq)
{
    die("FAQ non trouvée");
}

// verif si la edit form est submit
if (isset($_POST["submit"]))
{
    // update la faq dans la database
    $sql = "UPDATE faqs SET question = ?, answer = ? WHERE id = ?";
    $statement = $conn->$prepare($sql);
    $statement->execute([
        $_POST["question"];
        $_POST["answer"];
        $_POST["id"];
    ]);

    // repartir sur la page d'origine
    header("Location: " . $_SERVER["HTTP_REFERER"]);
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
                    <label class="labels">Enter Question</label>
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

