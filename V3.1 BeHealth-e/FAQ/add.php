<?php
 
    // connexion database
    $conn = mysqli_connect("mysql:host=localhost:8889;dbname=behealthe", "root", "root");
 
    // verif si form esst submit
    if (isset($_POST["submit"]))
    {
        // creation de la table si n'existe pas
        $sql = "CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
            question TEXT NULL,
            answer TEXT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $statement = $conn->prepare($sql);
        $statement->execute();
 
        // insertion dans la table de faq
        $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([
            $_POST["question"],
            $_POST["answer"]
        ]);
    }
 
    // recup toutes les faq en ordre (plus récent vers plus ancien)
    $sql = "SELECT * FROM faqs ORDER BY id DESC";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $faqs = $statement->fetchAll();
?>





<!-- css et fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../FAQ/FAQ_Admin.css"/>

 
<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>

<div class="flex-default-container">
    <div class="screen">
        <div>
            <h3 id="titre" class="titre">FAQ Admin</h3>
        </div>
 
            <!-- form pour add FAQ -->
            <form method="POST" action="add.php">
 
                <!-- question -->
                <div class="flex-container">
                    <label class="labels">Enter Question</label>
                    <input type="text" name="question" class="form-control" required />
                </div>
 
                <!-- reponse -->
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




<!-- montre toutes les faqs ajoutées -->
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($faqs as $faq): ?>
                <tr>
                    <td><?php echo $faq["id"]; ?></td>
                    <td><?php echo $faq["question"]; ?></td>
                    <td><?php echo $faq["answer"]; ?></td>
                    <td>
                        <!-- edit button -->
                        <a href="edit.php?id=<?php echo $faq['id']; ?>"
                        class="far fa-edit">
                            Edit
                        </a>

                        <!-- form de delete -->
                        <form method="POST" action="delete.php" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir effacer cette FAQ ?');">
                            <input type="hidden" name="id" value="<?php
                                echo $faq['id']; ?>" required/>
                            <input type="submit" value="Delete" class="fas fa-trash" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>





</div>
