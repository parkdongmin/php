$(document).ready(function(){

    $('#loadingBtn').on('click', function () {
      var $btn = $(this).button('loading')
      // business logic...
      setTimeout(function(){
        $btn.button('reset')
      }, 2000);
    });

$('#check label.btn.active').removeClass('btn-primary').addClass('btn-success');

//체크박스 버튼 클릭 이벤트 코드
$('#check label.btn').on('click',function(){
  if($(this).hasClass('active')){
    $(this).removeClass('btn-success').addClass('btn-primary');
  } else{
    $(this).removeClass('btn-primary').addClass('btn-success');
  }
});


$('#radio label.btn.active').removeClass('btn-primary').addClass('btn-success');

//라디오 버튼 클릭 이벤트 코드
$('#radio label.btn').on('click',function(){
  //이미 기존에 활성화된 버튼의 클래스를 원래대로 만들어준다.
  $('#radio label.btn.btn-success').removeClass('btn-success').addClass('btn-primary');
  $(this).removeClass('btn-primary').addClass('btn-success');
});




//
// $('.btn-primary').on('click', function () {
//  if($(this).hasClass('btn-primary')){
//    $(this).addClass('btn-success');
//    $(this).removeClass('btn-primary');
//  }else{
//    $(this).addClass('btn-primary');
//    $(this).removeClass('btn-success');
//  };
// });





});
