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
                <th>Nome</th>
                <th>Eixo</th>
                <th>Tipo</th>
                <th>Ações</th>
                <th class="none">Descrição:</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $key => $value)
                <tr>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->search_center }}</td>
                  <td>{{ $value->type }}</td>
                  <td>
                    <ul>
                    <div class="col s2" style="margin-right:30px;margin-top:-5px !important;">
                      <li class="action-btn">
                        <a href="{{ route('categories.edit', $value->id) }}" class="waves-effect btn-floating blue">
                          <i class="material-icons">edit</i>
                        </a>
                      </li>
                    </div>
                    <div class="col s2" style="margin-top:-5px !important;">
                      <li class="action-btn">
                        <form action="{{ route('categories.destroy', $value->id) }}" method="POST">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" class="waves-effect btn-floating red">
                            <i class="material-icons">delete</i>
                          </button>
                        </form>
                      </li>
                      </div>
                    </ul>
                  </td>
                  {{--<td>{{ str_limit($value->description, $limit = 200, $end = '...') }}</td>--}}
                  <td>{{ $value->description ? $value->description : "N/A"  }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row right">
      <div class="fixed-action-btn action-btn">
        <a href="categories/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
          <i class="material-icons">add</i>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection