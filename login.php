<?php
  include './database.php';

  $id = $_POST['loginid'];
  $pw = md5($_POST['loginpw']);

  $sql = 'SELECT * FROM user WHERE user_id = "'.$id.'" AND user_pw = "'.$pw.'" ';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $user = $stmt->fetchAll();

  if (count($user) > 0){
    $result = $user[0];
  } else {
    $result = array();
  }

  echo json_encode($result);

 ?>
