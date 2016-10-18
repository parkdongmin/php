$(document).ready(function(){

  $('#myAffix').affix({
  offset: {
    top: 70,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
});

});
