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
  <title>search</title>
</head>

<body>
  
  <legend class="text-white">search</legend>

  <?php
  include("navigation.php");
  ?>


  <fieldset class="text-center font-semibold">

    <div class="text-2xl text-purple-300 tracking-wider p-5">
      search:<input type="text" id="search" class="border border-purple-500 text-purple-500">
    </div>
    <div class="flex justify-center text-center font-semibold">
      <table class="text-purple-300 p-2">
        <thead>
          <tr>
            <th>日付</th>
            <th>　　writer</th>
            <th>　　diary</th>
          </tr>
        </thead>
        <tbody id="result">
          <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        </tbody>
      </table>

    </div>
    
  </fieldset>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    $('#search').on('input', function (e) {
      console.log(e.target.value);
      const searchWord = e.target.value;
      const requestUrl = "ajax_get.php";

      axios
       .get(`${requestUrl}?searchword=${searchWord}`)
       .then(function(response){
         console.log(response);
         const array=[];
         response.data.forEach(function(x){
           array.push(`<tr><td>${x.updated_at}</td><td>　　　${x.writer}</td><td>　　　${x.diary}</td><td><img src='${x.file}'height='5px'></td><tr>`);
         });

         $('#result').html(array);
         
       })
       .catch(function(error){
         console.log(error);
       })
    });  
  </script>

  <?php
  include("footer.php");
  ?>
</body>

</html>