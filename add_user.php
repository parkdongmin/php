<?php
  include './database.php';

  $id = $_POST['id'];
  $password = md5($_POST['password']);

  $sql = 'SELECT * FROM user WHERE id="'.$id.'" ';
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $check_user = $stmt->fetchAll();

  if(count($check_user) > 0){
    echo '<script>alert("해당 아이디가 이미 존재합니다.")</script>';
    echo '<script>location.href="./signup.php";</script>';
  } else {
  $sql = 'INSERT INTO user (user_id, user_pw, role) VALUES ("'.$id.'","'.$password.'", 9)';
  $stmt=$conn->prepare($sql);
  $check_add_user = $stmt->execute();
};
  if($check_add_user){
  echo '<script>alert("회원가입에 성공했습니다. 로그인하세요.")</script>';
   echo '<script>location.href="/";</script>';
} else{
  echo '<script>alert("회원가입에 실패했습니다. 다시 시도해주세요.")</script>';
   echo '<script>location.href="./signup.php";</script>';
    }

 ?>
