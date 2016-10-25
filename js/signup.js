$(document).ready(function(){
  $('#okay').on('click',function(){
var id = $('#id').val();
var password = $('#password').val();

if(id && password){
  $('#signup').submit();
}
  });
  $('#password_check').on('keyup',function(){
    if($('#password').val() == $(this).val()){
      $('#okay').removeClass('disabled');
      $('#check_msg').html('비밀번호가 확인되었습니다');
      $('#check_msg').removeClass('text-danger');
      if(!$('#check_msg').hasClass('text-success')){
      $('#check_msg').addClass('text-success');
    };
    } else {
      if(!$('#okay').hasClass('disabled')){
        $('#okay').addClass('disabled');
      }
      $('#check_msg').html('비밀번호가 일치하지 않습니다');
      $('#check_msg').removeClass('text-success');

      if(!$('#check_msg').hasClass('text-danger')){
        $('#check_msg').addClass('text-danger');
      };
    };
  });
});
