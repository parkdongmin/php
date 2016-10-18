$(document).ready(function(){

    var option = {
      backdrop: 'static',
      keyboard: false
    };

    $('#callModal').click(function(){
      $('#myModal').modal(option);
    });

    var obj = {name : 'Park'};
    var int = 99;
    var str = 'Hello!';

    isType(obj);
    isType(int);
    isType(str);

    function isType(target){
        //입력변수(매개변수)인 target의
        //데이터 타입을 조사해서
        //Object, String, 그외의 3가지 경우 분리해서
        //각각에 대해 콘솔에 로그를 찍어보세요.
        if (typeof(target) == 'object'){
        console.log('Object 입니다');
      } else if(typeof(target) == 'string'){
        console.log('String 입니다');
      }else{
        console.log('기타 데이터 입니다');
      }
    }

});
