<?php
session_start();
include('functions.php');
check_session_id();

//var_dump($_POST);
//exit();

if (
  !isset($_POST['parent']) || $_POST['parent'] == '' ||
  !isset($_POST['child']) || $_POST['child'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$parent = $_POST["parent"];
$child = $_POST["child"];

$pdo = connect_to_db();

$sql = 'INSERT INTO relation_table(id, username, parent, child, created_at, updated_at) VALUES(NULL, :username, :parent, :child, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $_SESSION["username"], PDO::PARAM_STR);
$stmt->bindValue(':parent', $parent, PDO::PARAM_STR);
$stmt->bindValue(':child', $child, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:account.php");
exit();
