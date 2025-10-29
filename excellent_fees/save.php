<?php
include 'db.php';

$table = $_POST['table'] ?? '';
$id = $_POST['id'] ?? null;
$data = $_POST;
$allowedTables = ['pre_school', 'nursery_1', 'nursery_2', 'basic1', 'basic2', 'basic3', 'basic4', 'basic5'];
if (!in_array($table, $allowedTables)) {
    die("Invalid table name");
}
unset($data['table']);
if ($id) unset($data['id']);

try {
    if ($id) {
        $columns = array_keys($data);
        $placeholders = implode(", ", array_map(fn($col) => "`$col` = ?", $columns));
        $sql = "UPDATE `$table` SET $placeholders WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([...array_values($data), $id]);
    } else {
        $columns = array_keys($data);
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $sql = "INSERT INTO `$table` (" . implode(", ", $columns) . ") VALUES ($placeholders)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array_values($data));
    }

    header("Location: index.php#{$table}");
    exit;
} catch (Exception $e) {
    die("Error saving data: " . htmlspecialchars($e->getMessage()));
}
?>