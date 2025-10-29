<?php
include 'db.php';


$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? '';


$allowedTables = ['pre_school', 'nursery_1', 'nursery_2', 'basic1', 'basic2', 'basic3', 'basic4', 'basic5'];
if (!in_array($table, $allowedTables)) {
    die("Invalid table name");
}


$stmt = $pdo->prepare("DELETE FROM `$table` WHERE id = ?");
$stmt->execute([$id]);


header("Location: index.php#{$table}");
exit;
?>