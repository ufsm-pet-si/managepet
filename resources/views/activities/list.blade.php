@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <div id="hoverable-table">
      <h4 class="header">Atividades</h4>
      <div class="row">
        <div class="col s12">
        <div id="table-buttons" class="row"></div>
          <table class="layout display responsive-table bordered" id="table_activities">
            <thead>
              <tr>
                <th>Título</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Ações</th>
                <th>Descrição</th>
              </tr>
            </thead>
            <tbody>
            @foreach($activities as $key => $value)
              <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->date }}</td>
                <td>{{ $value->category }}</td>
                <td>
                    <ul>
                    <div class="col s2">
                      <li class="action-btn">
                        <a href="participants" class="waves-effect btn-floating orange">
                          <i class="material-icons">check_box</i>
                        </a>
                      </li>
                      </div>
                    <div class="col s2">
                      <li class="action-btn">
                        <a href="atividades/show({{ $value->id }})" class="waves-effect btn-floating blue">
                          <i class="material-icons">edit</i>
                        </a>
                      </li>
                      </div>
                    <div class="col s2">
                      <li class="action-btn">
                        <a href="atividades/destroy({{ $value->id }})" class="waves-effect btn-floating red">
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
      <div class="fixed-action-btn action-btn" id="form-atividades" >
        <a href="/atividades/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
          <i class="material-icons">add</i>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

