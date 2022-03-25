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

  <?php
  include("navigation.php");
  ?> 
        
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

  <?php
  include("footer.php");
  ?>

</body>

</html>