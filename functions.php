<?php
include 'db.php';

function getPresentsFromDatabase($gender) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM presents WHERE gender = ?");
    $stmt->execute([$gender]);
    return $stmt->fetchAll();
}
?>
