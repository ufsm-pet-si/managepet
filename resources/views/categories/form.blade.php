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
              @if(isset($category))
                <form action="{{ route('categorias.update', $category['id']) }}" method="POST" class="col s12" style="padding-top: 20px">
                {{ method_field('PUT') }}
              @else
                <form action="{{ route('categorias.store') }}" method="POST" class="col s12" style="padding-top: 20px">
              @endif
              {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s12">
                  <input id="nome-categoria" name="nome" type="text" class="validate" value="{{ isset($category) ? $category->name : ''}}">
                  <label for="nome-categoria">Nome da categoria</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="descricao-categoria" name="descricao" class="materialize-textarea validate">{{ isset($category) ? $category->description : ''}}</textarea>
                  <label for="descricao-categoria">Descrição</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m6">Eixo:
                  <input id="ensino" type="radio" name="eixo" value="Ensino" checked>
                  <label for="ensino">Ensino</label>
                  <input id="pesquisa" type="radio" name="eixo" value="Pesquisa">
                  <label for="pesquisa">Pesquisa</label>
                  <input id="extensao" type="radio" name="eixo" value="Extensão">
                  <label for="extensao">Extensão</label>
                </div>
                <br/><br/>
                <div class="col s12 m6">Tipo de atividade:
                  <input id="externa" type="radio" name="tipo" value="Externa" checked>
                  <label for="externa">Externa</label>
                  <input id="interna" type="radio" name="tipo" value="Interna">
                  <label for="interna">Interna</label>
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
@if(isset($category))
  <script>
    $(function() {
      $(":radio[name='eixo'][value='{{ $category->search_center }}']").prop("checked", true);
      $(":radio[name='tipo'][value='{{ $category->type }}']").prop("checked", true);
    });
  </script>
@endif
@endsection