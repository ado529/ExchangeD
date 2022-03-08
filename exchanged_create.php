<?php
session_start();
include("functions.php");
check_session_id();

//var_dump($_POST);
//var_dump($_FILES);
//exit();

if (
  !isset($_POST['destination']) || $_POST['destination'] == '' ||
  !isset($_POST['opentime']) || $_POST['opentime'] == ''
) {
  exit('opentimeが入力されていません');
}

$destination = $_POST['destination'];
$diary = $_POST['diary'];
$opentime = $_POST['opentime'];

if($_FILES['upfile']['error']==4){
  $save_path=null;
} else if(isset($_FILES['upfile'])&&$_FILES['upfile']['error']==0){
  $uploaded_file_name=$_FILES['upfile']['name'];
  $temp_path=$_FILES['upfile']['tmp_name'];
  $directory_path='upload/';

  $extension=pathinfo($uploaded_file_name,PATHINFO_EXTENSION);
  $unique_name=date('YmdHis').md5(session_id()).'.'.$extension;
  $save_path=$directory_path.$unique_name;

  if(is_uploaded_file($temp_path)){
    if(move_uploaded_file($temp_path,$save_path)){
      chmod($save_path,0644);
    }else{
      exit('Error:アップロードできませんでした');
    }
  }else{
    exit('Error:画像または動画がありません');
  }
}else{
  exit('Error:画像または動画が送信されていません');
}

$pdo = connect_to_db();

$sql = 'INSERT INTO diary_table(id, username, destination, diary, file, opentime, is_deleted, created_at, updated_at)
 VALUES(NULL,:username, :destination, :diary, :file, :opentime, 0, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $_SESSION["username"], PDO::PARAM_STR);
$stmt->bindValue(':destination', $destination, PDO::PARAM_STR);
$stmt->bindValue(':diary', $diary, PDO::PARAM_STR);
$stmt->bindValue(':file', $save_path, PDO::PARAM_STR);
$stmt->bindValue(':opentime', $opentime, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:exchanged_input.php");
exit();
