<?php

    require_once "header.php";

    if(isset($_POST['submit-movie'])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        if(addMovie($pdo, $title, $date, $category, $description)) {
            $feedbackMessage = ["success", "Filmen har lagts till!"];
        }
        else {
            $feedbackMessage = ["error", "Något gick fel. Filmen kunde inte läggas till."];
        }
    }

    if(isset($_GET['delete']) && $_GET['delete'] === 'true' && isset($_GET['id'])) {
        $movieIdToDelete = $_GET['id'];
       if(deleteMovie($pdo, $movieIdToDelete)) {
            $feedbackMessage = ["success", "Filmen har tagits bort!"];
        } else {
            $feedbackMessage = ["error", "Något gick fel. Filmen kunde inte tas bort."];
        }
        
    }

    $allMovies = getAllMovies($pdo);
	
	?>

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
                <label for="date" class="form-label">Datum</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Beskrivning</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button type="submit" name="submit-movie" class="btn btn-primary">Lägg till film</button>
        </form>
    </div>

    <div class="container">
        <?php
        if(empty($allMovies)) {
            echo "<p>Inga filmer hittades.</p>";
        } else {
            echo "<h2 class='my-4'>Alla filmer</h2>";
        }
        foreach($allMovies as $movie) {
            echo "<div class='card my-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . htmlspecialchars($movie['namn']) . "</h5>";
            echo "<p class='card-text'>Datum: " . htmlspecialchars($movie['datum']) . "</p>";
            echo "<p class='card-text'>Kategori: " . htmlspecialchars($movie['kategori']) . "</p>";
            echo "<p class='card-text'>Beskrivning: " . htmlspecialchars($movie['beskrivning']) . "</p>";
            echo "<a href='edit.php?id=" . $movie['id'] . "' class='btn btn-warning me-2'>Redigera</a>";
            echo "<a href='?delete=true&id=" . $movie['id'] . "' class='btn btn-danger' onclick=\"return confirm('Är du säker på att du vill ta bort denna film?');\">Ta bort</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

 <?php require_once "footer.php"; ?>
