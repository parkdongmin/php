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


    <!-- FAQ -->
    <br>
    <section class="faq1">
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" >
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="true" aria-controls="collapseOne">
          자주 묻는 질문 <span class="badge">3</span></a>
        </a>
      </h4>
    </div>
  </div>

    <section class="faq">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="">


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          대구 낚시를 할 때에 팁이있나요??<span class="label label-primary">NEW</span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        대구 낚시를 할때 미끼로 쓰이는 오징어 내장은 현지의 낚시 전용 쇼핑몰에서 구매하면 좋습니다.
        대구는 살짝만 상해도 미끼를 물지 않기 때문에 깨끗한 미끼로 바꾸는 것이 좋기 때문이죠
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          방어가 잘잡히는 시간때는 언제인가요?? <span class="label label-primary">NEW</span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        마지막으로 방어 낚시하는 데 최적의 물때는 사리때이며,
        방어는 캄캄한 새벽부터 이른아침까지 하룻동안 먹이 섭취량의 반 이상을 먹으므로
        미명부터 해 뜨고 한 시간 이내까지가 방어 바다낚시의 가장 좋은 시간대 라고 합니다.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          민어 잡이의 장소로는 어떤곳이 있나요?? <span class="label label-primary">NEW</span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        민어 잡이의 인기장소로는 남해서부 해남군 삼마도, 어불도 주변과
        서해남부 영관 군 및 부안군 격포, 고군산도도 지역이 손꼽히고 있습니다.
        <p id="con">서해남부는 7월,8월 서해남부는 9월 10월이 민어 낚시의 시즌이에요</p>
      </div>
    </div>
  </div>
</div>
</section>
</section>
<!-- 인사말 -->
  <section class="get">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">인사말 <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span></h3>

      </div>
      <div class="panel-body getpb">
        <strong style="font-size:15px;">Southledge에 방문해주셔서 감사합니다</strong><br>
        <p>저희 홈페이지를 찾아 주시는 모든 분들이 편안한 휴식과 즐거운 시간을 즐길 수 있도록 최선을 다하겠습니다.<br>
        저희 Southledge는 쾌적한 환경과 즐거움을 느낄 수 있도록 항상 준비되어 있습니다.<Br> 이용후기를 통해 개선 할 부분은
        빠르게 보완하여 찾아주는 분들에게 최상의 서비스를 제공하도록 노력하겠습니다.
        <button type="button" class="btn btn-info indexbtn" onclick="location.href='./inr.php'">자세히보기</button>
      </p>
      </div>
    </div>
  </section>

  <section class="get2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">최근 게시물 <span class="label label-warning">NEW</span></h3>
      </div>
      <div class="panel-body getpb2">
        <p>민어 잡이의 장소로는 어떤곳이 있나요??</p>
        <hr>
        <p>방어가 잘잡히는 시간때는 언제인가요??</p>
        <hr>
        <p>대구 낚시를 할 때에 팁이있나요??</p>
        <hr>
        <p>Southledge에 방문해주셔서 감사합니다</p>
      </div>

    </div>
  </section>




  </body>

  <script src="./lib/jquery-3.1.1.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</html>
