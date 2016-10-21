<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inr</title>
  </head>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/inr.css">

  <body>

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
</section>
<section class="container">

  <h1 class="top1"><strong>인사말</strong></h1>
  <hr id="hr1">
  <img src="./img/inrimg" alt="" width="530px; height:530px;" id="inrimg">
  <strong style="font-size:30px;">Southledge에 방문해주셔서 감사합니다</strong><br>
  <article class="inrtext">
    <p>저희 홈페이지를 찾아 주시는 모든 분들이 편안한 휴식과 즐거운 시간을 즐길 수<br> 있도록 최선을 다하겠습니다.
    저희 Southledge는 쾌적한 환경과 즐거움을 느낄 수<br> 있도록 항상 준비되어 있습니다. 이용후기를 통해 개선 할 부분은
    빠르게 보완하여 <br>찾아주는 분들에게 최상의 서비스를 제공하도록 노력하겠습니다.
    Southledge에서<Br> 시원한 해풍과 낚시의 손맛으로 스트레스를 잊으셨음 좋겠습니다</p>
  </article>

</section>
<br>
<br>
<br>
  <button type="button" class="btn btn-info inrbtn" onclick="location.href='./index.php'";>홈으로</button>
<br>
<br>
<br>




  </body>
  <script src="./lib/jquery-3.1.1.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</html>
