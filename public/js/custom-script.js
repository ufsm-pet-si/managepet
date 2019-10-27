$(document).ready(function () {
  var days = 1;


  $('select').material_select();
  
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left'
    });
  });

  $("#add_date").on('click', function(){
    days++;
    $('#number_days').val(days);
    $("#list_dates").append(`
      <div class="row" id="row_${days}">
        <div class="input-field col s3">
          <input name="date_${days}" type="date">
        </div>
        <div class="input-field col s3">
          <input name="start_hour_${days}" type="text"/>
          <label for="start_hour_${days}">Hora início</label>
        </div>
        <div class="input-field col s3">
          <input name="duration_${days}" type="text"/>
          <label for="duration_${days}">Duração total</label>
        </div>
        <div>
          <a id="replicar_${days}" class="link replicar">Replicar hora e duração</a>
        </div>
      </div> 
      `);
  });

  $(document).on("click", ".replicar", function() {
    var rowId = ($(this).attr('id')).replace('replicar_', '');
    var previousRowId = Number(rowId) - 1;
    var $previousRow = $(`#row_${previousRowId}`);
    var start_hour = $previousRow.find(`input[name='start_hour_${previousRowId}']`).val();
    var duration = $previousRow.find(`input[name='duration_${previousRowId}']`).val();
    var $currentRow = $(`#row_${rowId}`);
    $currentRow.find(`input[name='start_hour_${rowId}']`).val(start_hour);
    $currentRow.find(`input[name='duration_${rowId}']`).val(duration);
  });

});
