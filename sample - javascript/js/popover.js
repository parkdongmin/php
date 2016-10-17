$(document).ready(function(){
  $('button').popover();
  $('a#example').popover();

var option = {
  title: 'Hello',
  content: 'Hi, Popover',
  placement: 'top',
  trigger: 'hover',
  delay: {show:1000,
         hide:1000,
       }
};
    $('a#with').popover(option);

    $('a#with').on('show.bs.popover', function(){
      console.log('a#with popover를 나타나도록 실행했다.');
    });

    $('a#with').on('shown.bs.popover', function(){
      console.log('a#with popover가 나타나도록 실행을 완료했다.');
    });

    $('a#with').on('hide.bs.popover', function(){
      console.log('a#with popover를 사라지도록 실행했다');
    });

    $('a#with').on('hidden.bs.popover', function(){
      console.log('a#with popover를 사라지도록 실행을 완료했다.');
    });

});
