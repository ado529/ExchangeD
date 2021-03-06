<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>ExchangeDユーザー登録画面</title>
</head>

<body class="bg-purple-500">
  <form action="user_register_act.php" method="POST">
    <fieldset class="text-center font-semibold">
      <legend class="text-4xl text-white p-5">ExchangeDへようこそ!</legend>
      <p class="text-2xl text-white tracking-wider p-2">ユーザー登録をしてご利用下さい</p>
      <div class="text-2xl text-white tracking-wider p-5">
        username: <input type="text" name="username" class="border border-purple-500 text-purple-500">
      </div>
      <div class="text-2xl text-white tracking-wider p-5">
        password: <input type="text" name="password" class="border border-purple-500 text-purple-500">
      </div>
      <p class="text-purple-300">一度登録すると変更出来ません</p>
      <div class="p-5">
        <button class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">　　register　　</button>
      </div>
      <p class="text-white tracking-wider p-3">or</p>
      <a href="user_login.php"><span class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">　　login　　</span></a>
    </fieldset>
  </form>
  
  <?php
  include("footer.php");
  ?> 

</body>

</html>