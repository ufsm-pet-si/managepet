@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <div class="divider"></div>
            <div id="hoverable-table">
                <h4 class="header">Petianos PET  @if (!Auth::guest()) {{ Auth::user()->pet }} @endif</h4>
                <div class="row">
                    <div class="col s12">
                    @if (!Auth::guest())
                    <div id="table-buttons" class="row"></div>
                        <table class="layout display responsive-table bordered" id="table_petianos">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ações</th>
                                <th>E-mail</th>
                                <th>PET</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($petianos as $key => $value)
                                        @if($value->pet ==  Auth::user()->pet )
                                            <tr>
                                                <td>{{ $value->name }}</td>
                                                <td>
                                                    <ul>
                                                    <div class="col s2">
                                                    <li class="action-btn">
                                                        <a href="{{ route('petianos.edit', $value->id) }}" class="waves-effect btn-floating blue">
                                                        <i class="material-icons">edit</i>
                                                        </a>
                                                    </li>
                                                    </div>
                                                    <div class="col s2">
                                                    <li class="action-btn">
                                                        <form action="{{ route('petianos.destroy', $value->id) }}" method="POST">
                                                          {{ method_field('DELETE') }}
                                                          {{ csrf_field() }}
                                                          <button type="submit" class="waves-effect btn-floating red">
                                                            <i class="material-icons">delete</i>
                                                          </button>
                                                        </form>
                                                    </li>
                                                    </div>
                                                    <div class="col s2">
                                                        @if($value->type == "Petiano")
                                                            <li class="action-btn">
                                                                <i class="material-icons">person</i>
                                                            </li>
                                                        @else
                                                            <li class="action-btn">
                                                                <i class="material-icons" style="color:royalblue ">person</i>
                                                            </li>
                                                        @endif
                                                    </div>
                                                    </ul>
                                                </td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->pet }}</td>
                                            </tr>
                                        @endif
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                    @else
                    faça login
                    @endif 
                </div>
            </div>
            <div class="row right">
                <div class="fixed-action-btn action-btn" id="form-petiano">
                    <a href="petianos/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
                        <i class="material-icons">add</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection