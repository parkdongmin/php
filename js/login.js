$(document).ready(function(){
  var userinfo = {};
  $.ajax({
    url: 'login_check.php',
    dataType : 'json'
  }).done(function(response){
    userinfo = response;
    if(userinfo.is_logged){

      $('#user_id').html(userinfo.user_id);
      $('#user_role').html(userinfo.role);
      $('#user_timestamp').html(userinfo.timestamp);

      $('#user_info').removeClass('hide');
      $('#login_form').addClass('hide');
      $('.log .error_msg').addClass('hide');
    }
  });

    $('#submit').on('click', function(){
      $.ajax({
        url : 'login.php',
        method : 'POST',
        data : {
          loginid : $('#loginid').val(),
          loginpw : $('#loginpw').val()
        },
        dataType : 'json'
      }).done(function(response){
        // 1. 로그인 -> 회원정보
        // $('.log .goin').html('회원정보');
        if (response.hasOwnProperty('user_id') == true){
            $('#user_id').html(response.user_id);
            $('#user_role').html(response.role);
            $('#user_timestamp').html(response.timestamp);

            $('#user_info').removeClass('hide');
            $('#login_form').addClass('hide');
            $('.log .error_msg').addClass('hide');
        } else{
          // var msg = '<p class="text-danger">일치하는 사용자 정보가 없습니다.</p>'
          // $('.log').prepend(msg)
          $('.log .error_msg').removeClass('hide');
        }
      });
    });

    // 2. 로그인 폼 태그 -> 회원정보를 표시하는 태그
    // console.log(response);
});
// var userinfo = '<span>ID : ' + response.user_id +' '+ '</span>';
// userinfo += '<span>권한 : ' + response.role +' '+ '</span>';
// userinfo += '<span>등록일 : ' + response.timestamp +' '+ '</span>';
// userinfo += '<a href="./logout.php" class="btn btn-default btn-sm goin" style="height:28px;">로그아웃</a>';
