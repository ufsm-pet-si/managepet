@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <div id="hoverable-table">
      <h4 class="header">Atividades</h4>
      <div class="row">
        <div class="col s10">
          <table class="highlitgh" id="lista_atividades">
            <thead>
              <tr>
                <th>Título</th>
                <th>Eixo</th>
                <th>Categoria</th>
                <th>Data</th>
              </tr>
            </thead>
            <tbody>
            @foreach($activities as $key => $value)
              <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->search_center }}</td>
                <td>{{ $value->category }}</td>
                <td>?</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <div class="col s2 right">
          <div style="position: relative; height: 70px;">
            <div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; right: 60px;">
              <a class="btn-floating btn-large red">
                <i class="material-icons">menu</i>
              </a>
              <ul>
                <li class="action-btn" id="list-participantes">
                  <a href="#" class="btn-floating yellow darken-1">
                    <i class="material-icons">check_box</i>
                  </a>
                </li>
                <li class="action-btn">
                  <a href="#" class="btn-floating red">
                    <i class="material-icons">delete</i>
                  </a>
                </li>
                <li class="action-btn">
                  <a href="#" class="btn-floating blue">
                    <i class="material-icons">edit</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="row right">
      <div class="fixed-action-btn action-btn" id="form-atividades" >
        <a href="/atividades/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
          <i class="material-icons">add</i>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
{{--<script type="text/javascript" src="js/custom-script.js"></script>--}}