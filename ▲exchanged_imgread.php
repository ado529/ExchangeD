<?php
session_start();
include("functions.php");
check_session_id();

$user_id = $_SESSION['id'];
$username = $_SESSION['username'];

$pdo = connect_to_db();

$sql = 'SELECT file FROM diary_table WHERE opentime <= CURDATE() ORDER BY opentime DESC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


$output = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>画像一覧表示</title>
</head>

<body>


<?php echo $output;?>

</body>

</html>