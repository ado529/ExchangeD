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
  <legend class="text-white">HOME</legend>

  <?php
  include("navigation.php");
  ?> 
        
  <form action="exchanged_create.php" method="POST" enctype="multipart/form-data">
    <fieldset  class="text-center font-semibold">
      <div class="w-full block flex justify-center text-2xl text-purple-300 tracking-wider p-5">
        <select name="writer" class="text-center text-purple-500">
          <option value = "<?php echo $_SESSION["child"];?>"><?php echo $_SESSION["child"];?></option>
          <option><?php echo $_SESSION["parent"];?></option>
        </select>
        <p class="text-center">の日記</p>
      </div>      
      <div class="text-purple-500">
        <textarea name="diary" rows="10" cols="50" wrap="hard" placeholder="diary"></textarea>
      </div>
      <div class="text-purple-500">
        <input type="file" name="upfile" accept="image/*,video/*" capture="camera" />
      </div>
      <div>
        <button class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition">submit</button>
      </div>
    </fieldset>
  </form>

  <?php
  include("footer.php");
  ?>

</body>

</html>