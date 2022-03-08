<?php
include('functions.php');

//var_dump($_GET);
//exit();

$pdo = connect_to_db();

$sql = 'SELECT file FROM diary_table WHERE opentime <= CURDATE() ORDER BY opentime DESC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);
//exit();

echo json_encode($result);
exit();
