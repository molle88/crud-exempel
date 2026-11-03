<?php
	require_once "config.php";
	require_once "functions.php";

    if(isset($_POST['submit-book'])) {
        $title = $_POST['title'];
        $year = $_POST['year'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        if(addMovie($pdo, $title, $year, $category, $description)) {
            $feedbackMessage = ["success", "Filmen har lagts till!"];
        }
        else {
            $feedbackMessage = ["error", "Något gick fel. Filmen kunde inte läggas till."];
        }
    }
	
	?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedda filmer</title>
    
    <!-- Bootstrap 5 CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer">   
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="container mt-4">
        <?php if(isset($feedbackMessage)): ?>
            <?php if($feedbackMessage[0] === "success"): ?>
                <div class="alert alert-success"><?php echo $feedbackMessage[1]; ?></div>
            <?php else: ?>
                <div class="alert alert-danger"><?php echo $feedbackMessage[1]; ?></div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="container">
            <h1 class="my-4">Lägg till film</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Titel</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
            <div class="mb-3">
                <label for="year" class="form-label">Datum</label>
                <input type="date" class="form-control" id="year" name="year" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Beskrivning</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button type="submit" name="submit-book" class="btn btn-primary">Lägg till film</button>
        </form>
    </div>

    <!-- Bootstrap 5 JavaScript (Bundle sisältää myös Popperin) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js" integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script></body>
</body>
</html>
