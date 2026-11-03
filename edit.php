<?php
require_once "header.php";
$movieId = $_GET['id'] ?? null;

if(isset($_POST['edit-movie'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    if(updateMovie($pdo, $movieId, $title, $date, $category, $description)) {
        $feedbackMessage = ["success", "Filmen har uppdaterats!"];

    }
    else {
        $feedbackMessage = ["error", "Något gick fel. Filmen kunde inte uppdateras."];
    }
}

$movieData = getMovieById($pdo, $movieId);

?>



<div class="container mt-4">
    <?php if(isset($feedbackMessage)): ?>
        <?php if($feedbackMessage[0] === "success"): ?>
            <div class="alert alert-success"><?php echo $feedbackMessage[1]; ?></div>
        <?php else: ?>
            <div class="alert alert-danger"><?php echo $feedbackMessage[1]; ?></div>
        <?php endif; ?>
    <?php endif; ?>
<div class="container mb-4">
            <h1 class="my-4">Redigera film</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Titel</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($movieData['namn']) ? htmlspecialchars($movieData['namn']) : ''; ?>" required>
                </div>
            <div class="mb-3">
                <label for="date" class="form-label">Datum</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo isset($movieData['datum']) ? htmlspecialchars($movieData['datum']) : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="category" name="category" value="<?php echo isset($movieData['kategori']) ? htmlspecialchars($movieData['kategori']) : ''; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Beskrivning</label>
                <textarea class="form-control" id="description" name="description"><?php echo isset($movieData['beskrivning']) ? htmlspecialchars($movieData['beskrivning']) : ''; ?></textarea>
            </div>
            <button type="submit" name="edit-movie" class="btn btn-primary">Uppdatera film</button>
        </form>
    </div>

<?php require_once "footer.php"; ?>