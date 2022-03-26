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
  <title>ExchangeD relation登録画面</title>
</head>

<body class="bg-purple-500">
  <form action="relation_act.php" method="POST">
    <fieldset class="text-center font-semibold">
      <legend class="text-4xl text-white p-5">ようこそ<?php echo $_SESSION["username"];?>さん</legend>
      <p class="text-purple-300">名前を登録して下さい</p>
      <div class="text-2xl text-white tracking-wider p-5">
        親: <input type="text" name="parent" class="border border-purple-500 text-purple-500">
      </div>
      <div class="text-2xl text-white tracking-wider p-5">
        子: <input type="text" name="child" class="border border-purple-500 text-purple-500">
      </div>
      <p class="text-purple-300">一度登録すると変更出来ません</p>
      <div class="p-5">
        <button class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">　　register　　</button>
      </div>
    </fieldset>
  </form>
  
  <?php
  include("footer.php");
  ?> 

</body>

</html>