<?php

function connect_to_db()
{
  $dbn = 'mysql:dbname=heroku_2e76e0d5089a4a2;charset=utf8mb4;port=3306;host=us-cdbr-east-05.cleardb.net';
  $user = 'bef601ecd22a42';
  $pwd = 'b4c7eda6';

  //$dbn = 'mysql:dbname=exchanged;charset=utf8mb4;port=3306;host=localhost';
  //$user = 'root';
  //$pwd = '';

  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
  }
}

function check_session_id()
{
  if (
    !isset($_SESSION["session_id"]) ||
    $_SESSION["session_id"] != session_id()
  ) {
    header("Location:todo_login.php");
    exit();
  } else {
    session_regenerate_id(true);
    $_SESSION["session_id"] = session_id();
  }
}