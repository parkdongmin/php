$(document).ready(function(){

$(function(){
  $('#myTab a:last').tab('show')
});

    $('a[data-toggle="tab"]').on('show.bs.tab', function (event) {

    $(event.target).prepend('<i class="fa fa-home" aria-hidden="true"></i></a>'); //newly activated tab
    $(event.relatedTarget).find('i').remove(); //newly activated tab

    // var href = $(event.target).attr('href');
    // console.log(href);
    // console.log($(href).html());
  });
  $('#myTab').on('shown.bs.tab', function (event) {
    $(event.target).find('i').css('display' , 'inline');
    $(event.relatedTarget).find('i').css('display','none');
      });
});
