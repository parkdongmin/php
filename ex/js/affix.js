$(document).ready(function(){

  $('#myAffix').affix({
  offset: {
    top: 150,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
});

});


});
