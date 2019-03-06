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
                <h5 class="flight-card-title center">Edição de Atividade</h5>
              </div>
            </div>
            <div class="col s12" style="padding-top: 20px">
              <form action="{{ route('atividades.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="input-field col s12">
                    <input id="titulo-atividade" type="text" name="titulo">
                    <label for="titulo-atividade">Título</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
                    <label for="descricao">Descrição</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m6">
                  <label>Categoria</label>
                    <select id="categoria" name="categoria" class="browser-default">
                      <option value="" disabled selected>Escolha a categoria</option>
                      @foreach($categories as $key => $value)
                        <option value="{{ $value->category }}">{{ $value->category }}</option>
                        @endforeach
                    </select>
                  </div>            
                </div>
                <div class="row">
                  <div class="input-field col s3">
                    <input id="data" name="data" type="date">
                    <label for="data">Data</label>
                  </div>
                  <div class="input-field col s3">
                    <input id="hora" name="hora_inicio" type="text"/>
                    <label for="hora">Hora início</label>
                  </div>
                  <div class="input-field col s3">
                    <input id="duracao" name="duracao" type="text"/>
                    <label for="duracao">Duração total</label>
                  </div>
                </div>

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