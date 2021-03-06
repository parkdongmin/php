<?php
include './database.php';

  session_start();
  $is_logged = $_SESSION['is_logged'];

/* Data 조회를 위한 Query 작성 */
$stmt = $conn->prepare('SELECT * FROM board ORDER BY notice DESC, id DESC');

/* Query 실행 */
$stmt->execute();
/* 조회한 Data를 배열(Array) 형태로 모두 저장 */
$list = $stmt->fetchAll();

//username
/* Data 조회를 위한 Query 작성 */
$user = $conn->prepare('SELECT * FROM user');

/* Query 실행 */
$user->execute();
/* 조회한 Data를 배열(Array) 형태로 모두 저장 */
$user_name = $user->fetchAll();


/* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
// foreach($list as $item) {
//     echo $member['name']." / ".$member['year']." / ".$member['address']."<br>";
// }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/list.css">
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
        <li style="background-color:rgb(39, 34, 60);" class="active"><a href="./list.php" style="color:#ffffff;">게시판<span class="sr-only">(current)</span></a></li>

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

  <h1 class="top1"><strong>게시판</strong></h1>

  <?php if($is_logged && $_SESSION['role'] == 0 || $is_logged && $_SESSION['role'] == 9) { ?>
    <button type="button" class="btn btn-default listbtn" onclick="location.href='./listwrite.php'">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
      글쓰기</button>
    <?php } else{ ?>
<br>  <br>
      <?php } ?>
  <br>
  <hr id="hr1">
  <table class="table table-striped">
    <thead>
      <th width="10%;">No.</th>
      <th>제목</th>
      <th>작성자</th>
      <th>작성일</th>
    </thead>
    <tbody>

      <?php foreach($list as $item) { ?>


        <?php if($item['notice'] > 0){ ?> <tr class="info"> <?php } else { ?>
          <tr>
      <?php } ?>
          <td>
          <?php if($item['notice'] > 0){ ?><span class="label label-info">공지</span><?php } else { ?>
            <?php  echo $item['id'] ?>
        <?php } ?>
          </td>
          <td>
              <?php
                $stmt = $conn->prepare('SELECT * FROM reply WHERE list_id='.$item['id']);
                $stmt->execute();
                $reply_count = $stmt->fetchAll();
              ?>
            <?php if($is_logged && $_SESSION['role'] == 0 || $is_logged && $_SESSION['role'] == 9) { ?>
              <a href="./listin?id=<?php echo $item['id']?>"><?php echo $item['title'] ?></a>
            <?php } else{ ?>
              <a href="./listin?id=<?php echo $item['id']?>"><?php echo $item['title'] ?></a>
              <?php } ?>
            <?php if (count($reply_count) > 0) : ?>
              <span class="badge"><?php echo count($reply_count)?></span>
            <?php endif; ?>

              <?php if($item['notice'] > 0){ ?><span class="label label-danger">HOT</span><?php } else { ?>
              <?php if(strtotime("now-24hour") < strtotime($item['timestamp'])){ ?><span class="label label-danger">NEW</span><?php } ?>
          <?php } ?>
          </td>
          <td><?php echo $item['user_id'] ?></td>
          <td><?php echo $item['timestamp'] ?></td>
        </tr>
      <?php } ?>


    </tbody>



  </table>
  <br>
  <tfoot>
    <nav style="margin-left:450px;">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </tfoot>

  </article>

</section>
  </body>
  <script src="./lib/jquery-3.1.1.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</html>
