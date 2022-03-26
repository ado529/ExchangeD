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
  <title>account_act</title>
</head>

<body class="bg-purple-500">

  <div class="text-center font-semibold">
    <p class="text-2xl text-white tracking-wider p-2">日記を書きましょう！</p>
  </div>

  <form action="account_act.php" method="POST">
    <div class="text-center font-semibold">
      <input type="hidden" name="username" value="<?php echo $_SESSION["username"];?>">
      <button class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">ＧＯ</button>
    </div>
    </div>
  </nav>

</body>

</html>