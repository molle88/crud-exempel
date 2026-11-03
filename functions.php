<?php
function addMovie($pdo, $title, $date, $category, $description) {
    try {
        $sql = "INSERT INTO sedda_filmer (namn, datum, kategori, beskrivning) VALUES (:title, :date, :category, :description)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['title' => $title, 'date' => $date, 'category' => $category, 'description' => $description]);
        return true;
    } catch (PDOException $e) {
        //Här kanske vi skulle skriva errorn till loggen istället, så att inte användaren ser den tekniska datanecho 
        //echo "Error: " . $e->getMessage();
        return false;
    }
}

function getAllMovies($pdo) {
    try {
        $sql = "SELECT * FROM sedda_filmer";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        //Här kanske vi skulle skriva errorn till loggen istället, så att inte användaren ser den tekniska datanecho 
        //echo "Error: " . $e->getMessage();
        return [];
    }
}

function getMovieById($pdo, $id) {
    try {
        $sql = "SELECT * FROM sedda_filmer WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    } catch (PDOException $e) {
        //Här kanske vi skulle skriva errorn till loggen istället, så att inte användaren ser den tekniska datanecho 
        //echo "Error: " . $e->getMessage();
        return null;
    }
}

function updateMovie($pdo, $id, $title, $date, $category, $description) {
    try {
        $sql = "UPDATE sedda_filmer SET namn = :title, datum = :date, kategori = :category, beskrivning = :description WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['title' => $title, 'date' => $date, 'category' => $category, 'description' => $description, 'id' => $id]);
        return true;
    } catch (PDOException $e) {
        //Här kanske vi skulle skriva errorn till loggen istället, så att inte användaren ser den tekniska datanecho 
        //echo "Error: " . $e->getMessage();
        return false;
    }
}

?>