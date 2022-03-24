<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>ExchangeD日記入力画面（HOME）</title>
</head>

<body>
  <legend>ExchangeD日記入力画面（HOME）</legend>
  <div  class="md:flex">
    <ul class="md:flex  md:justify-center">
      <li class="border-b md:border-none"><a href="exchanged_input.php" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded">HOME</a></li>
      <li class="border-b md:border-none"><a href="未user_ajax.php" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded">一覧</a></li>
      <li class="border-b md:border-none"><a href="ajax_search.html" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded">検索</a></li>
      <li class="border-b md:border-none"><a href="未user_自然言語.php" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded">自然言語</a></li>
      <li class="border-b md:border-none"><a href="使い方説明.php" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded">ExchangeDについて</a></li>
      <li class="border-b md:border-none"><a href="未user_アカウント管理" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded"> 管理画面</a></li>
      <li><a href="#" class="block px-8 py-2 my-4 hover:bg-gray-600 rounded">お問い合わせ</a></li>
      <li><p class="block px-8 py-2 my-4 bg-gray-600 rounded"><?php echo $_SESSION["username"];?>さんでログイン中</p></li>
    </ul>
  </div>
        
  <form action="exchanged_create.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <div  class="md:flex">
        Dear　
        <select name= "destination">
          <option value = "me">me</option>
          <option value = "parent">parent</option>
          <option value = "family">family</option>
          <option value = "all">all</option>
        </select>
      </div> 
      
      <div>
        <textarea name="diary" rows="3" cols="50" wrap="hard" placeholder="diary"></textarea>
      </div>
      <div>
        <input type="file" name="upfile" accept="image/*,video/*" capture="camera" />
      </div>
      <div>
        opentime　 <input type="datetime-local" name="opentime">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>