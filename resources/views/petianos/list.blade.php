@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
        @if (!Auth::guest())
            <div class="divider"></div>
            <div id="hoverable-table">
                <h4 class="header">Petianos</h4>
                <div class="row">
                    <div class="col s12">
                    
                        <div id="table-buttons" class="row"></div>
                            <table class="layout display responsive-table bordered" id="table_petianos">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    @if (Auth::user()->type == "Admin" )
                                        <th>Ações</th>
                                    @endif 
                                    <th>E-mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($petianos as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                    @if (Auth::user()->type == "Admin" )
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
                                                    @endif
                                                    <td>{{ $value->email }}</td>
                                                </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                         
                    </div>
                </div>
                @if (Auth::user()->type == "Admin" )
                <div class="row right">
                    <div class="fixed-action-btn action-btn" id="form-petiano">
                        <a href="petianos/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                </div>
                @endif
            @else
                faça login
            @endif
        </div>
    </div>
@endsection