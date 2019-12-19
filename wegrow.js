$(document).ready(function(){
  $(".burger").on("click", function (){
    $("nav li").toggleClass("open");
  });
});