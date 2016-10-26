<?php
include './header.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>South Iedge</title>
  </head>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">

  <body>
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
        <h3 class="panel-title">인사말 <span class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="color:#000000;"></span></h3>

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
  <script src="./js/login.js"></script>
</html>
