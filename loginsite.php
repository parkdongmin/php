<?php
include './header.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
     <h1 class="top1"><strong>로그인</strong></h1>
     <hr id="hr1">
     <ul class="nav navbar-nav">
       <form class="" method="post">
         <li class="log">
           <span id="login_form">
           <input type="text" value="" placeholder="ID" name="loginid" id="loginid">
           <input type="password" value="" placeholder="PW" name="loginpw" id="loginpw">
           <a href="#" id="submit" class="btn btn-default btn-sm goin" style="height:28px;">로그인</a>
           <a href="./signup.php" class="btn btn-success btn-sm" style="height:28px;">회원가입</a>
           </span>
           <div id="user_info" class="hide">
             <span style="margin-left:230px;">환영합니다 <span id="user_id"><span> </span></span> 님 /
             <span>등급 : <span id="user_role"><span></span></span>
             <!-- <span>등록일 : <span id="user_timestamp"><span></span></span> -->
               <a href="./logout.php" class="btn btn-info btn-sm goin" style="height:20px; padding-top:1px;"><p style="font-size:11px;">로그아웃</p></a>
           </div>
             <span class="error_msg hide">일치하는 회원정보가 없습니다.</span>
           </ul>
         </li>
       </form>

     </ul>
   </body>
   <script src="./lib/jquery-3.1.1.min.js"></script>
   <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="./js/login.js"></script>
 </html>
