<?php
session_start();
include('functions.php');
check_session_id();

//var_dump($_POST);
//exit();

$pdo = connect_to_db();

$sql = 'SELECT * FROM diary_table WHERE username=:username';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $_SESSION["username"], PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetchall(PDO::FETCH_ASSOC);

//var_dump($record);
//exit();

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

  <fieldset class="text-center font-semibold">
    <legend class="text-4xl text-purple-300 p-5"><?php echo $_SESSION["username"];?>さんの日記</legend>
    <div class="text-2xl text-purple-300 tracking-wider p-5">
      親: <input type="text" value="<?= $_SESSION["parent"] ?>">さん
    </div>
    <div class="text-2xl text-purple-300 tracking-wider p-5">
      子: <input type="text" value="<?= $_SESSION["child"] ?>">さん      
    </div>

    <a href="user_logout.php"><span class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">　　logout　　</span></a>


  </fieldset>

  <?php
  include("footer.php");
  ?> 

</body>

</html>
