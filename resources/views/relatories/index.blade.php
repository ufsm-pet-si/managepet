@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <!--Basic Form-->
    <div id="basic-form" class="section">
      <div class="row">
        <div class="col s12">
          <div id="flight-card" class="card">
            <div class="card-header blue accent-1">
              <div class="card-title">
                <h5 class="flight-card-title center">Relatórios</h5>
              </div>
            </div>
            <div class="col s12">
              <div class="row">
                <!-- <div class="col s6 m6 l6">
                  <div class="card-panel light-blue accent-2 white-text center" id="Acessos" onclick="modalChart();">
                    <h5><i class="material-icons small">person_outline</i> Acessos</h5>
                    <h5>566</h5>
                    <h6><i class="material-icons small">expand_less</i> 15% from yesterday</h6>
                  </div>
                </div> -->

                <div class="col s6 m6 l6">
                  <div class="card-panel  light-blue accent-2 white-text center">
                    <h5><i class="material-icons small">person_outline</i> Nº de Petianos</h5>
                    <h5>{{count($petianos) }}</h5>
                  </div>
                </div>

                <div class="col s6 m6 l6">
                  <div class="card-panel teal accent-4 white-text center">
                    <h5><i class="material-icons small">person_outline</i>  Nº de Participantes</h5>
                    <h5>{{count($participantes) }}</h5>
                  </div>
                </div>

                <div class="col s6 m6 l6">
                  <div class="card-panel orange darken-2 white-text center">
                    <h5> Nº de Edições</h5>
                    <h5>{{count($activities) }}</h5>
                  </div>
                </div>

                <div class="col s6 m6 l6">
                  <div class="card-panel red white-text center" id="Acessos" onclick="modalChart();">
                    <h5>Gráfico</h5>
                    <h5>(Diversos)</h5>
                  </div>
                </div>

                <!-- Modal Structure -->
                <div class="col s12 m12 l12">
                  <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content">
                      <h4>Gráfico de informações</h4>
                      <div class="card">
                        <div class="chart-container" style="width: 100%; height: auto">
                          <canvas id="chartAcessos"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Retornar</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById('chartAcessos');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Atividades', 'Participantes', 'Petianos '],
        datasets: [{
          label: 'Informações',
          data: [{{count($activities) }}, {{count($participantes) }},{{count($petianos) }}],
          backgroundColor: ['#FF0', '#FF0000', 'blue'],
          borderColor: '#80d',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var modalAcessos = document.getElementById('Acessos');
    modalAcessos.style.cursor = 'pointer';
    function modalChart() {
      $("#modal1").modal('open');
    }

    // Abrir modais padrão
    $(document).ready(function () {
      $('.modal').modal();
    });
  </script>
  @endsection
