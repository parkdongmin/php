<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>메인 홈페이지</title>
      </head>
      <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="./css/style.css">

      <body>

          <section class="container">
            <img src="./img/logo" alt="" width="300px;" id="logo">

            <form class="navbar-form navbar-left search" role="search">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="검색어를 입력해주세요.">
           </div>
           <button type="submit" class="btn btn-default">검색</button>
         </form>
         <br><br><br><br><br><br><br>

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

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
    </nav>




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
</section>
<br>
<section class="container">

  <h1 class="top1"><strong>회원가입</strong></h1>
  <hr id="hr1">

    <table class="table table-striped">
      <form class="" action="./add_user.php" method="post">
      <thead>
        <th>아이디</th>
        <th width="85%;"><input type="text" size="20" id="id" name="id" placeholder="아이디를 입력해주세요." class="form-control" style="width:210px;"></th>
      </thead>
      <thead>
        <th>비밀번호</th>
        <th><input type="text" size="30" id="password" name="password" placeholder="비밀번호를 입력해주세요." class="form-control" style="width:210px;"></th>
      </thead>
      <thead>
        <th>비밀번호 확인</th>
        <th><input type="text" size="30" id="password_check" name="passwordcheck" placeholder="비밀번호 다시 입력해주세요." class="form-control" style="width:210px;"></th>
      </thead>
      <thead>
      <th>
        <p class="help-block" id="check_msg"></p>
      </th>
    </thead>
    </table>
    <button type="submit" id="okay" name="button">확인</button>
  <!-- <a href="#" class="btn btn-danger writebtn1 disabled" id="okay" style="margin-left:530px;">확인</a> -->
  </form>
  </section>
    <Br>  <Br>
  </body>
    <script src="./lib/jquery-3.1.1.min.js"></script>
  <script src="./js/signup.js"></script>
</html>
