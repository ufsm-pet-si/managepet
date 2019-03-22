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
                <h5 class="flight-card-title center">{{ isset($petiano) ? 'Editar Petiano(a)' : 'Novo(a) Petiano(a)' }}</h5>
              </div>
            </div>
              @if(isset($petiano))
                <form action="{{ route('petianos.update', $petiano['id']) }}" method="POST" class="col s12" style="padding-top: 20px">
                @method('PUT')
              @else
                <form action="{{ route('petianos.store') }}" method="POST" class="col s12">
              @endif
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <input id="nome-petiano" name="name" type="text" class="validate" value="{{ old('name', isset($petiano) ? $petiano->name : '') }}" required>
                  <label for="nome-petiano">Nome</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email-petiano" name="email" type="email" class="validate" value="{{ old('email', isset($petiano) ? $petiano->email : '') }}" required>
                  <label for="email-petiano">Email</label>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s12">
                    <input id="senha" name="password" type="password" class="validate" value="{{ old('password', isset($petiano) ? '' : '') }}" required>
                    <label for="senha">{{ isset($petiano) ? 'Nova Senha' : 'Senha' }} </label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s12">
                    <input id="rep_senha" name="password" type="password" class="validate" value="{{ old('password', isset($petiano) ? '' : '') }}" required>
                    <label for="rep_senha">Repetir Senha</label>
                  </div>
              </div>
              <div class="row" style="padding-bottom: 20px;">
                <div class="col s12">
                  @if(!isset($petiano))
                      <input type="hidden" name="type" value="Petiano" checked />
                      <input type="checkbox" id="task1" name="type" value="Admin" />
                      <label for="task1">{{ isset($petiano) ? 'Tornar Administrador' : 'Administrador' }}
                        <a href="#" class="secondary-content">
                        </a>
                      </label>
                  @else
                      @if($petiano->type == "Petiano")
                          <input type="hidden" name="type" value="Petiano" checked />
                          <input type="checkbox" id="task1" name="type" value="Admin" />
                          <label for="task1"> Tornar Administrador(a)
                            <a href="#" class="secondary-content">
                            </a>
                          </label>
                      @else
                          <input type="hidden" name="type" value="Petiano"/>
                          <input type="checkbox" id="task1" name="type" value="Admin" checked/>
                          <label for="task1"> Tornar Administrador(a)
                            <a href="#" class="secondary-content">
                            </a>
                          </label>
                      @endif
                  @endif
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

@endsection
