<?php
function addMovie($pdo, $title, $year, $category, $description) {
    try {
        $sql = "INSERT INTO sedda_filmer (namn, datum, kategori, beskrivning) VALUES (:title, :year, :category, :description)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['title' => $title, 'year' => $year, 'category' => $category, 'description' => $description]);
        return true;
    } catch (PDOException $e) {
        //Här kanske vi skulle skriva errorn till loggen istället, så att inte användaren ser den tekniska datanecho 
        //echo "Error: " . $e->getMessage();
        return false;
    }
}

?>