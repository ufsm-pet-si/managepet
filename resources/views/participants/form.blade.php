@extends('layouts.app')

@section('content')
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
                                <h5 class="flight-card-title center">Novo(a) participante</h5>
                            </div>
                        </div>
                        <form class="col s12" style="padding-top: 20px">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nome-participante" type="text" class="validate" name='name'>
                                    <label for="nome-participante">Nome</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email-participante" type="email" class="validate" name='email'>
                                    <label for="email-participante">E-mail</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="tipo" type="text" class="validate" name='tipo'>
                                    <label for="tipo">Tipo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="instituicao" type="text" class="validate" name='instituition'>
                                    <label for="instituicao">Instituição</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="matricula" type="text" class="validate" name='matricula'>
                                    <label for="matricula">Matrícula</label>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 20px;">
                                <div class="input-field col s12">
                                    <input id="curso" type="text" class="validate" name='curso'>
                                    <label for="curso">Curso</label>
                                    <button class="btn blue accent-2 waves-effect waves-light right" type="submit"
                                            name="action">Salvar
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
