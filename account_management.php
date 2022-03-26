<?php
session_start();
include('functions.php');
check_session_id();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>account_management</title>
</head>

<body class="bg-white">
  <legend class="text-white">account_management</legend>

  <?php
  include("navigation.php");
  ?>

  <fieldset class="text-center font-semibold">
    <legend class="text-4xl text-purple-300 p-5"><?php echo $_SESSION["username"];?>さんの登録内容</legend>
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