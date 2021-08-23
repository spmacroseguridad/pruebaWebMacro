$(function(){
  $('[data-toggle="tooltip"]').tooltip()
})

$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
