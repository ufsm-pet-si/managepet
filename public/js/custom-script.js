$(document).ready(function () {

  $('select').material_select();
  
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left'
    });
  });

  $("#add_date").on('click', function(){
    $("#list_dates").append(
      "<div class='row'><div class='input-field col s3'>"+
      "<input name='data' type='date'></div>"+
      "<div class='input-field col s3'>"+
      "<input name='hora_inicio' id='hora_inicio' type='text'/>"+
      "<label>Hora início</label></div>"+
      "<div class='input-field col s3'>"+
      "<input name='duracao' id='duracao' type='text'/>"+
      "<label>Duração total</label></div>"+
      "<div><a href='#' id='replicar'>Replicar hora e duração</a></div></div>"
    );
  });
});
