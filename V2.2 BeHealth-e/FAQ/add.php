<?php
 
    // connect with database
    $conn = new PDO("mysql:host=localhost;dbname=behealthe", "root", "");
 
    // check if insert form is submitted
    if (isset($_POST["submit"]))
    {
        // create table if not already created
        $sql = "CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
            question TEXT NULL,
            answer TEXT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $statement = $conn->prepare($sql);
        $statement->execute();
 
        // insert in faqs table
        $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([
            $_POST["question"],
            $_POST["answer"]
        ]);
    }
 
    // [query to get all FAQs]
    $sql = "SELECT * FROM faqs";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $faqs = $statement->fetchAll();
?>
<!-- include bootstrap, font awesome and rich text library CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../richtext/richtext.min.css" />
 
<!-- include jquer, bootstrap and rich text JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="richtext/jquery.richtext.js"></script>

<!-- layout for form to add FAQ -->
<div class="flex-default-container">
    <div class="screen">
        <div>
            <h3 id="titre" class="titre">FAQ Admin</h3>
        </div>
 
            <!-- for to add FAQ -->
            <form method="POST" action="add.php">
 
                <!-- question -->
                <div class="flex-container">
                    <label class="labels">Enter Question</label>
                    <input type="text" name="question" class="form-control" required />
                </div>
 
                <!-- answer -->
                <div class="flex-container">
                    <label class="labels">Enter Answer</label>
                    <textarea name="answer" id="answer" class="form-control" required></textarea>
                </div>
 
                <!-- submit button -->
                <div class="publish-button">
                    <input type="submit" name="submit" class="add-button" value="Add FAQ" />
                </div>
            </form>
    </div>
    </div>

</div>

<link rel="stylesheet" type="text/css" href="../FAQ/FAQ_Admin.css"/>