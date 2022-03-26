<?php
session_start();
include('functions.php');
check_session_id();

//var_dump($_POST);
//exit();

$username = $_POST["username"];

$pdo = connect_to_db();

$sql = 'SELECT * FROM relation_table WHERE username=:username';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($record);
//exit();

$_SESSION["parent"] = $record["parent"];
$_SESSION["child"] = $record["child"];

header("Location:exchanged_input.php");
exit();
