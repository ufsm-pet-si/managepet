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
                <h4 class="flight-card-title center">Novo(a) Petiano</h4>
              </div>
            </div>
            <form action="<?php echo e(route('petianos.store')); ?>" method="POST" class="col s12">
              {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s12">
                  <input id="nome-petiano" name="name" type="text" class="validate">
                  <label for="nome-petiano">Nome</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email-petiano" name="email" type="email" class="validate">
                  <label for="email-petiano">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="usuario" type="text" class="validate">
                  <label for="usuario">Usuário</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="senha" name="password" type="password" class="validate">
                  <label for="senha">Senha</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="rep_senha" name="password" type="password" class="validate">
                  <label for="rep_senha">Repetir Senha</label>
                </div>
              </div>
              <div class="row" style="padding-bottom: 20px;">
                <div class="col s12">
                    <input type="checkbox" id="task1" />
                    <label for="task1">Administrador
                      <a href="#" class="secondary-content">
                      </a>
                    </label>
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
