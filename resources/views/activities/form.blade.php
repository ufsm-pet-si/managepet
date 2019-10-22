@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <!--Basic Form-->
    <div id="basic-form" class="section">
      <!-- if there are creation errors, they will show here -->
      <div class="row">
        <div class="col s12">
          <div id="flight-card" class="card">
            <div class="card-header blue accent-1">
              <div class="card-title">
              @if(isset($activity))
                <h5 class="flight-card-title center">Editar Edição de Atividade</h5>
                </div>
              </div>
                <form action="{{ route('atividades.update', $activity['id']) }}" method="POST" class="col s12" style="padding-top: 20px">
                {{ method_field('PUT') }}
              @else
                <h5 class="flight-card-title center">Nova Edição de Atividade</h5>
                </div>
              </div>
                <form action="{{ route('atividades.store') }}" method="POST" class="col s12" style="padding-top: 20px">
              @endif
              {{ csrf_field() }}
            <div class="col s12" style="padding-top: 20px">
              <form action="{{ route('atividades.store') }}" method="POST" id="form_atividade">
                {{ csrf_field() }}
                <div class="row">
                  <div class="input-field col s12">
                    <input id="title" type="text" name="title" value="{{ isset($activity) ? $activity->title : ''}}">
                    <label for="title">Título</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="description" name="description" class="materialize-textarea">{{ isset($activity) ? $activity->description : ''}}</textarea>
                    <label for="description">Descrição</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="speaker" type="text" name="speaker" value="{{ isset($activity) ? $activity->speaker : ''}}">
                    <label for="speaker">Palestrante</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m6">
                  <label>Categoria</label>
                    <select id="category_id" name="category_id" required class="browser-default">
                      <option value="" disabled selected>Escolha a categoria</option>
                      @foreach($categories as $key => $value)
                        <option value="{{ $value->id }}"> {{ $value->name }}</option>
                        @endforeach
                    </select>
                  </div>            
                </div>
                <br />
                <div id="list_dates">
                  <h5>Data(s) da atividade</h5>
                    <div class="row" id="row_1">
                      <div class="input-field col s3">
                        <input name="date_1" type="date">
                      </div>
                      <div class="input-field col s3">
                        <input name="start_hour_1" type="text"/>
                        <label for="start_hour_1">Hora início</label>
                      </div>
                      <div class="input-field col s3">
                        <input name="duration_1" type="text"/>
                        <label for="duration_1">Duração total</label>
                      </div>
                      <div class="input-field col s3">
                        <button type="button" class="btn green waves-effect" id="add_date">
                            <i class="material-icons">add</i>
                        </button>
                      </div>
                    </div>
                </div>
                <input type="hidden" value="1" name="number_days" id="number_days" />
                <div class="row" style="padding-bottom: 20px;">
                  <div class="col s12">
                    <button class="btn blue accent-2 waves-effect waves-light right" type="submit" name="action">Salvar
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
