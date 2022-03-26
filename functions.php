<?php

function connect_to_db()
{
  //$dbn = 'mysql:dbname=heroku_23c399267c9873f;charset=utf8mb4;port=3306;host=us-cdbr-east-05.cleardb.net';
  //$user = 'bf372b7567c4a6';
  //$pwd = 'bd57bb55';

  $dbn = 'mysql:dbname=exchanged;charset=utf8mb4;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';

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