@extends('layouts.app')

@section('content')
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <!--Basic Form-->
    <div id="basic-form" class="section">
      <div class="row">
        <div class="col s12">
          <div id="flight-card" class="card">
            <div class="card-header blue accent-1">
              <div class="card-title">
                <h5 class="flight-card-title center">Nova Categoria de Atividade</h5>
              </div>
            </div>
            <form action="{{ route('categorias.store') }}" method="POST" class="col s12" style="padding-top: 20px">
            {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s12">
                  <input id="categoria-atividade" name="categoria" type="text" class="validate">
                  <label for="categoria-atividade">Categoria</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="descricao-categoria" name="descricao" class="materialize-textarea validate"></textarea>
                  <label for="descricao-categoria">Descrição</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <label>Eixo</label>
                  <input type="radio" name="eixo" value="Ensino">
                  <label for="ensino">Ensino</label>
                  <input type="radio" name="eixo" value="Pesquisa">
                  <label for="pesquisa">Pesquisa</label>
                  <input type="radio" name="eixo" value="Extensão">
                  <label for="extensao">Extensão</label>
                </div>
              </div>
              <div class="row" style="padding-bottom: 20px;">
                <div class="col s12">
                  <button class="btn blue accent-2 waves-effect waves-light right" type="submit" name="action">Salvar
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection