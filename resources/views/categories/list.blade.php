@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <div id="hoverable-table">
      <h4 class="header">Categorias Atividades</h4>
      <div class="row">
        <div class="col s10">
          <table class="highlitgh" id="lista_atividades">
            <thead>
              <tr>
                <th>Categoria</th>
                <th>Eixo</th>
                <th>Descrição</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $key => $value)
                <tr>
                  <td>{{ $value->category }}</td>
                  <td>{{ $value->search_center }}</td>
                  <td>{{ $value->description }}</td>
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
      <div class="fixed-action-btn action-btn" id="form-categorias">
        <a href="categorias/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
          <i class="material-icons">add</i>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection