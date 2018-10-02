$(document).ready(function () {
  $(".item-menu").click(function () {
    var page = $(this).attr('id');
    $("#content").load(page + ".html");
    $('.item-menu').removeClass('active');
    $(this).addClass('active');
  })

  $(".action-btn").click(function () {
    var page = $(this).attr('id');
    $("#content").load(page + ".html");
  })

  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left'
    });
  });
});
