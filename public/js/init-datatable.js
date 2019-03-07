function initDataTable($table, nameSing, namePlural) {
  $.fn.dataTable.moment('DD/MM/YYYY');
  var table = $table.DataTable({
    responsive: true,
    ordering: true,
    order: [[ 0, "desc" ]],
    language: {
      sEmptyTable: `Nenhum registro de ${nameSing} cadastrado`,
      sInfo: `Mostrando de _START_ até _END_ de _TOTAL_ ${namePlural}`,
      sInfoEmpty: `Mostrando 0 até 0 de 0 ${namePlural}`,
      sInfoFiltered: `(Filtrados de _MAX_ ${namePlural})`,
      sInfoPostFix: "",
      sInfoThousands: ".",
      sLengthMenu: "_MENU_ resultados por página",
      sLoadingRecords: "Carregando...",
      sProcessing: "Processando...",
      sZeroRecords: `Busca não retornou resultados`,
      sSearch: "Pesquisar",
      oPaginate: {
        sNext: "Próximo",
        sPrevious: "Anterior",
        sFirst: "Primeiro",
        sLast: "Último"
      },
      oAria: {
        sSortAscending: ": Ordenar colunas de forma ascendente",
        sSortDescending: ": Ordenar colunas de forma descendente"
      },
      buttons: {
        copyTitle: 'Dados copiados!',
        copySuccess: {
            _: '%d linhas copiadas',
            1: '1 linha copiada'
        }
      }
    }
  });

  var buttons = new $.fn.dataTable.Buttons(table, {
    buttons: [
      { extend: 'colvis', text: '<i class="left material-icons">visibility</i> Visibilidade' },
      { extend: 'print', exportOptions: { columns: [ ':visible' ] }, text: '<i class="left material-icons">print</i> Imprimir' },        
      { extend: 'copyHtml5', exportOptions: { columns: [ ':visible' ] }, text: '<i class="left material-icons">content_copy</i> Copiar' },
      { extend: 'csvHtml5', exportOptions: { columns: [ ':visible' ] }, text: '<i class="left material-icons">view_week</i> CSV' },
      { extend: 'pdfHtml5', exportOptions: { columns: [ ':visible' ] }, text: '<i class="left material-icons">picture_as_pdf</i> PDF' }, 
    ]
  }).container().appendTo($('#table-buttons'));

  // Datatable select issues fix (init and on click)
  $('select').addClass("browser-default");
  $('select').formSelect();
  $("select").change(function() {
    var t = this;
    var content = $(this).siblings('ul').detach();
    setTimeout(function () {
        $(t).parent().append(content);
        $("select").material_select();
    }, 200);
  });
}
