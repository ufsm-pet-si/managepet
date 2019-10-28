@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <div class="divider"></div>
        <form action="{{ route('presence.store', ['activityId' => $activityId]) }}" method="POST">
            {{ csrf_field() }}
        <div id="hoverable-table">
            <h4 class="header">Presenças dos participantes</h4>
            <div class="row">
                <div class="col s12">
                    <div id="table-buttons" class="row"></div>
                    <table class="layout display responsive-table bordered" id="table_participants">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Matrícula</th>
                                <th>Presenças</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $participant)
                            <tr>
                                <td>{{ $participant->name }}</td>
                                <td>{{ $participant->matricula }}</td>
                                <td>
                                @foreach($activityDays as $day)
                                    @if (in_array($day->id . '_' . $participant->id, $participantsPresences))
                                        <input checked type="checkbox" name="presences[]" value="{{ $day->id . '_' . $participant->id }}" id="{{ $day->id . $participant->id }}">
                                        <label title="{{ $day->date }}" for="{{ $day->id . $participant->id }}"></label>
                                    @else
                                        <input type="checkbox" name="presences[]" value="{{ $day->id . '_' . $participant->id }}" id="{{ $day->id . $participant->id }}">
                                        <label title="{{ $day->date }}" for="{{ $day->id . $participant->id }}"></label>
                                    @endif
                                @endforeach
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
                <!-- <button class="btn grey" type="submit" name="action">Cancelar
                </button> -->
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
