<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>ExchangeDユーザー登録画面</title>
</head>

<body>
  <form action="user_register_act.php" method="POST">
    <fieldset>
      <legend>ExchangeDユーザー登録画面</legend>
      <div class="text-4xl text-green-500 text-center font-semibold">
        username: <input type="text" name="username">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div class="bg-indigo-700 font-semibold text-white py-2 px-4 rounded">
        <button>登録</button>
      </div>
      <a href="user_login.php">or login</a>
    </fieldset>
  </form>

</body>

</html>