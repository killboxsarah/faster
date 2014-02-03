$(function(){
      $('#Grid').mixitup();
      $('#Grid').hide();
      $(".button.filter").click($('#Grid').show());
      $(".sticky-element").sticky({ topSpacing: 0});
});