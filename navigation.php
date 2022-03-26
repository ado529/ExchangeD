<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>navigation</title>
</head>

<body class="bg-white">

  <nav class="flex items-center justify-between flex-wrap bg-purple-500 p-4">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <img src="ribon.png" alt="" class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54">
      <span class="font-semibold text-xl tracking-tight">ExchangeD</span>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <a href="exchanged_input.php" class="block mt-4 lg:inline-block lg:mt-0 text-purple-300 hover:text-white mr-4">HOME</a>
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-purple-300 hover:text-white mr-4"><?php echo $_SESSION["parent"];?>のページ</a>
        <a href="list.php" class="block mt-4 lg:inline-block lg:mt-0 text-purple-300 hover:text-white mr-4">List</a>
        <a href="ajax_search.php" class="block mt-4 lg:inline-block lg:mt-0 text-purple-300 hover:text-white mr-4">search</a>
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-purple-300 hover:text-white mr-4">自然言語</a>
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-purple-300 hover:text-white mr-4">ExchangeDについて</a>
      </div>

      <div class="lg:mt-0">
        <a href="account_management.php" class="shadow-lg px-2 py-1  bg-purple-300 text-lg text-white font-semibold rounded  hover:bg-purple-700 hover:shadow-sm hover:translate-y-0.5 transform transition"><?php echo $_SESSION["username"];?>さんでログイン中</a>
      </div>
    </div>
  </nav>

</body>

</html>