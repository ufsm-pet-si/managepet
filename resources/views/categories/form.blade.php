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
                <h5 class="flight-card-title center">{{ isset($category) ? 'Editar Categoria da Atividade' : 'Nova Categoria de Atividade' }}</h5>
              </div>
            </div>
              @if(isset($category))
                <form action="{{ route('categories.update', $category['id']) }}" method="POST" class="col s12" style="padding-top: 20px">
                @method('PUT')
              @else
                <form action="{{ route('categories.store') }}" method="POST" class="col s12" style="padding-top: 20px">
              @endif
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <input id="nome-categoria" name="name" type="text" class="validate" value="{{ old('name', isset($category) ? $category->name : '') }}">
                  <label for="nome-categoria">Nome da categoria</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="descricao-categoria" name="description" class="materialize-textarea validate">{{ old('description', isset($category) ? $category->description : '') }}</textarea>
                  <label for="descricao-categoria">Descrição</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m6">Eixo:
                  <input id="ensino" type="radio" name="search_center" value="Ensino" checked>
                  <label for="ensino">Ensino</label>
                  <input id="pesquisa" type="radio" name="search_center" value="Pesquisa">
                  <label for="pesquisa">Pesquisa</label>
                  <input id="extensao" type="radio" name="search_center" value="Extensão">
                  <label for="extensao">Extensão</label>
                </div>
                <br/><br/>
                <div class="col s12 m6">Tipo de atividade:
                  <input id="externa" type="radio" name="type" value="Externa" checked>
                  <label for="externa">Externa</label>
                  <input id="interna" type="radio" name="type" value="Interna">
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
          @if ($errors->any())
            <div class="alert alert-danger" style="color:red;margin-left:5px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>* {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  $(function() {
    @if(isset($category))
      $(":radio[name='search_center'][value='{{ $category->search_center }}']").prop("checked", true);
      $(":radio[name='type'][value='{{ $category->type }}']").prop("checked", true);
    @endif
    $(":radio[name='search_center'][value='{{ old('search_center') }}']").prop("checked", true);
    $(":radio[name='type'][value='{{ old('type') }}']").prop("checked", true);
  });
</script>
  @endsection
