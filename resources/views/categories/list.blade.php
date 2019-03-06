@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <div id="hoverable-table">
      <h4 class="header">Categorias Atividades</h4>
      <div class="row">
        <div class="col s12">
        <div id="table-buttons" class="row"></div>
          <table class="layout display responsive-table bordered" id="table_categories">
            <thead>
              <tr>
                <th>Categoria</th>
                <th>Eixo</th>
                <th>Ações</th>
                <th>Descrição</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $key => $value)
                <tr>
                  <td>{{ $value->category }}</td>
                  <td>{{ $value->search_center }}</td>
                  <td>
                    <ul>
                    <div class="col s2">
                      <li class="action-btn">
                        <a href="categorias/show({{ $value->id }})" class="waves-effect btn-floating blue">
                          <i class="material-icons">edit</i>
                        </a>
                      </li>
                    </div>
                    <div class="col s2">
                      <li class="action-btn">
                        <a href="categorias/destroy({{ $value->id }})" class="waves-effect btn-floating red">
                          <i class="material-icons">delete</i>
                        </a>
                      </li>
                      </div>
                    </ul>
                  </td>
                  <td>{{ $value->description }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row right">
      <div class="fixed-action-btn action-btn">
        <a href="categorias/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
          <i class="material-icons">add</i>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection