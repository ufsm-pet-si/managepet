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
                                <th>Instituição</th>
                                <th>Presenças</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->type }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->matricula }}</td>
                                <td>{{ $value->instituition }}</td>

                                <td>
                                    <input type="checkbox" name="cadastro" value="a1" id="{{$value->matricula}}">
                                    <label for="{{$value->matricula}}"></label>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <div class="row" style="padding-top: 20px;">
                <div class="col s12">
                    <button class="btn blue accent-2" type="submit" name="action">Salvar
                    </button>
                    <button class="btn grey" type="submit" name="action">Cancelar
                    </button>
                </div>
            </div>
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
