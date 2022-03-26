<?php
session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

$sql = 'SELECT * FROM diary_table WHERE username=:username ORDER BY updated_at DESC';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $_SESSION["username"], PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($record);
//exit();

$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["updated_at"]}</td>
      <td>　　　{$record["writer"]}</td>
      <td>　　　{$record["diary"]}</td>
      <td><img src='{$record["file"]}'height='5px'></td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>List</title>
</head>

<body class="bg-white">
  <legend class="text-white">List</legend>

  <?php
  include("navigation.php");
  ?>

  <fieldset class="flex justify-center text-center font-semibold">
    <table>
      <thead class="text-purple-300 p-2">
        <tr>
          <th>日付</th>
          <th>writer</th>
          <th>diary</th>
        </tr>
      </thead>
      <tbody class="text-purple-700 p-2">
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>