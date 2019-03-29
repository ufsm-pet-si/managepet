@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <div class="divider"></div>
        <div id="hoverable-table">
            <h4 class="header">Participantes</h4>
            <div class="row">
                <div class="col s12">
                    <div id="table-buttons" class="row"></div>
                    <table class="layout display responsive-table bordered" id="table_participants">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>E-mail</th>
                                <th>Matrícula</th>
                                <th>Ações</th>
                                <th>Instituição</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->type }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->matricula }}</td>

                                <!--
                                <td>
                                    <input type="checkbox" name="presenca1" value="a1" id="a1">
                                    <label for="a1"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca1" value="a2" id="a2">
                                    <label for="a2"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca1" value="a3" id="a3">
                                    <label for="a3"></label>
                                </td>
                                -->
                                <td>
                                    <ul>
                                        <div class="col s2" style="margin-right:30px;margin-top:-5px !important;">
                                            <li class="action-btn">
                                                <a href="{{ route('participantes.edit', $value->id) }}" class="waves-effect btn-floating blue">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                            </li>
                                        </div>
                                        <div class="col s2" style="margin-top:-5px !important;">
                                            <li class="action-btn">
                                                <form action="{{ route('participantes.destroy', $value->id) }}" method="POST">
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
                                <td>{{ $value->instituition }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--
            <div class="row" style="padding-top: 20px;">
                <div class="col s12">
                    <button class="btn blue accent-2" type="submit" name="action">Salvar
                    </button>
                    <button class="btn grey" type="submit" name="action">Cancelar
                    </button>
                </div>
            </div>
-->
        <div class="row right">
            <div class="fixed-action-btn action-btn" id="form-participante">
                <a href="participantes/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 