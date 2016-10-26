<?php

include './database.php';

$title = $_GET['title'];
$user_id = $_GET['author'];
$content = $_GET['content'];
$notice = (isset($_GET['notice'])) ? $_GET['notice'] : '';


if( $notice == 'on') {
  $notice = 1;
} else{
  $notice = 0;
}

/* Data 조회를 위한 Query 작성 */
$stmt = $conn->prepare("INSERT INTO board (title,content,user_id,notice) VALUES ('$title', '$content', '$user_id', '$notice')");
/* Query 실행 */
$stmt->execute();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/listin.css">
        <link rel="stylesheet" href="./css/write.css">
        <link rel="stylesheet" href="./css/inr.css">
          <section class="container">
            <!-- 슬라이드  -->

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="./img/img1" alt="slide1">
                  <div class="carousel-caption">
                    플라이 낚시 특유의 손맛
                  </div>
                </div>
                <div class="item">
                  <img src="./img/img2" alt="slide2">
                  <div class="carousel-caption">
                    고기가 모여드는 물길을 제압하라!
                  </div>
                </div>
                <div class="item">
                  <img src="./img/img3" alt="slide3">
                  <div class="carousel-caption">
                    만선의 꿈을 위하여!
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>


         <br><br><br>

            <nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgb(39, 34, 60);">
      <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php" style="color:#ffffff;  padding-left:230px;">South ledge</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li style="background-color:rgb(39, 34, 60);"><a href="./index.php" style="color:#ffffff;">홈<span class="sr-only">(current)</span></a></li>
            <ul class="nav navbar-nav">
              <li style="background-color:rgb(39, 34, 60);"><a href="./inr.php" style="color:#ffffff;">인사말<span class="sr-only">(current)</span></a></li>
              <li style="background-color:rgb(39, 34, 60);"><a href="./list.php" style="color:#ffffff;">게시판<span class="sr-only">(current)</span></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#ffffff;">바다용품<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">바다 낚시대</a></li>
                <li><a href="#">바다바늘</a></li>

              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#ffffff;">중층용품<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">중층내림 낚시대</a></li>
                <li><a href="#">중층바늘</a></li>

              </ul>
            </li>
          </ul>


          <ul class="nav navbar-nav navbar-left">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#ffffff;">민물용품<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">민물 낚시대</a></li>
                <li><a href="#">민물바늘</a></li>

              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      </div>
      </nav>
      <h1 class="top1"><strong>성공적으로 등록되었습니다.</strong></h1>
      <br><br><br>
      <hr id="hr1">
      <button type="button" class="btn btn-default listinbtn" onclick="location.href='./list.php'">목록으로 돌아가기</button>

      </section>
      <br><br>
  </body>
</html>
