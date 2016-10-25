<?php
include './database.php';

    $list_id = $_GET['id'];
    // $_POST['id'];



    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('SELECT * FROM board where id='.$list_id);
    /* Query 실행 */
    $stmt->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $item = $stmt->fetchAll();

    /* Data 조회를 위한 Query 작성 */
    $stmt_reply = $conn->prepare('SELECT * FROM reply WHERE list_id='.$list_id.' ORDER BY id DESC');
    /* Query 실행 */
    $stmt_reply->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $reply_list = $stmt_reply->fetchAll();


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>listin</title>
  </head>
  <body>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/listin.css">
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

    <h1 class="top1"><strong>게시판</strong></h1>
    <button type="button" class="btn btn-default listinbtn" onclick="location.href='./list.php'">
      <i class="fa fa-bars" aria-hidden="true"></i>
      목록</button>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-default btn-md listinbtn2" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-trash-o" aria-hidden="true"></i>
      삭제
    </button>
    <a href="./modify.php?id=<?php echo $item[0]['id']?>">  <button type="submit" class="btn btn-default listinbtn3">
      <i class="fa fa-eraser" aria-hidden="true"></i>수정</button></a>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">게시물 삭제</h4>
          </div>
          <div class="modal-body">
            정말 삭제하시겠습니까?
          </div>
          <div class="modal-footer">
            <form class="" action="./delete.php" method="get">
              <input type="hidden" name="id" value="<?php echo $item[0]['id']?>"
              <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
            <button type="submit" class="btn btn-primary">삭제</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <br><br>
    <hr id="hr1">
    <table class="table table-striped">
      <thead>
        <th>제목 : <?php echo $item[0]['title']?></th>
      </thead>
      <tbody>
        <td>작성자 : <?php echo $item[0]['author']?></td>
        <td>작성일 : <?php echo $item[0]['timestamp']?></td>
      </tbody>
      <tbody>
        <td colspan="4"><Br><br><Br><br><p style="font-size:20px;">
        <?php echo $item[0]['content']?>
        </p><Br><br><Br><br></td>
      </tbody>
    </table>
    <br>
    </article>
  </section>

  <section class="container">
    <form id="insert_reply" action="./insert_reply.php" method="get">
    <h3><i class="fa fa-bell" aria-hidden="true"></i> 댓글(Reply)</h3>
    <br>
    <div class="row">
        <div class="col-sm-3">
        <!-- 댓글 작성자 -->
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">작성자</span>
        <input type="text" class="form-control" placeholder="이름을 입력해주세요." aria-describedby="basic-addon1" name="reply_author">
      </div>
        </div>
        <div class="col-sm-7">
        <!-- 댓글 내용 -->
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">댓글</span>
        <input type="text" class="form-control" placeholder="댓글을 입력해주세요." aria-describedby="basic-addon1" name="reply_content">
        </div>
        </div>
        <div class="col-sm-0">
        <!-- 확인 버튼 -->
        <button type="submit" class="btn btn-info"><i class="fa fa-paper-plane" aria-hidden="true"></i> 전송</button>
        </div>
    </div>
<br><Br>
  <input type="hidden" name="board_id" value="<?php echo $item[0]['id']?>">
  </form>
  <hr>
  </section>

    <section class="container" style="padding-bottom:50px;">
      <table class="table table-striped">
        <thead>
          <tr>
            <th width="15%">작성자 <i class="fa fa-sort-desc" aria-hidden="true"></i></th>
            <th width="70%">내용 <i class="fa fa-sort-desc" aria-hidden="true"></i></th>
            <th width="30%" style=" text-align:right;">작성일 <i class="fa fa-sort-desc" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($reply_list) > 0) { ?>
          <?php foreach($reply_list as $reply_item) { ?>
          <tr>

            <td>
              작성자 : <?php echo $reply_item['author'] ?></td>
            <td>내용 : <?php echo $reply_item['content'] ?>
              <?php if(strtotime("now-24hour") < strtotime($reply_item['timestamp'])){ ?><span class="label label-danger">NEW</span><?php } ?>
            </td>
            <td style="text-align:right;">작성일 : <?php echo $reply_item['timestamp'] ?></td>
          </tr>
        </tbody>
      <?php } ?>
      <?php } else { ?>
              <tr>
                <td colspan="3" class="text-center">
                  등록된 댓글이 없습니다.
                </td>
              </tr>
        <?php } ?>
        </table>

    </section>

  </body>

  <script src="./lib/jquery-3.1.1.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/listin.js"></script>
</html>
