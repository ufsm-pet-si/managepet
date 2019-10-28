@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <div class="divider"></div>
        <form action="{{ route('subscription.store', ['activityId' => $activityId]) }}" method="POST">
            {{ csrf_field() }}
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
                                    <th>Cadastrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($participants as $participant)
                                <tr>
                                    <td>{{ $participant->name }}</td>
                                    <td>{{ $participant->type }}</td>
                                    <td>{{ $participant->email }}</td>
                                    <td>{{ $participant->matricula }}</td>
                                    <td>{{ $participant->instituition }}</td>
                                    <td>
                                        @if (in_array($participant->id, $participantsSubscripted))
                                            <input checked type="checkbox" name="subscriptions[]" value="{{ $participant->id }}" id="{{ $participant->matricula }}">
                                            <label for="{{ $participant->matricula }}"></label>
                                        @else
                                            <input type="checkbox" name="subscriptions[]" value="{{ $participant->id }}" id="{{ $participant->matricula }}">
                                            <label for="{{ $participant->matricula }}"></label>
                                        @endif
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
                    <button class="btn blue accent-2" type="submit">Salvar
                    </button>
                    <!-- <button class="btn grey" type="cancel" name="action">Cancelar
                    </button> -->
                </div>
            </div>
        </form>

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
