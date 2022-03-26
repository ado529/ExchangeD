<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>ExchangeDユーザーログアウト後</title>
</head>

<body class="bg-purple-500 text-center font-semibold">
  <p class="text-4xl text-white tracking-wider p-5">ご利用ありがとうございました。</p>
  <p class="text-2xl text-white tracking-wider p-5">またのご利用お待ちしております</p>
  <a href="user_login.php"><span class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">　　loginはこちら　　</span></a>
  
  <?php
  include("footer.php");
  ?> 

</body>

</html>