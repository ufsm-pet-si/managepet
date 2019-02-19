@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section">
            <div class="divider"></div>
            <div id="hoverable-table">
                <h4 class="header">Participantes Atividade</h4>
                <div class="row">
                    <div class="col s10">
                        <table class="highlitgh" id="lista_atividades">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>E-mail</th>
                                <th>Matrícula</th>
                                <th>Dia 1</th>
                                <th>Dia 2</th>
                                <th>Dia 3</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Isabella</td>
                                <td>Aluno</td>
                                <td>isakis@inf.ufsm.br</td>
                                <td>123456789</td>
                                <td>
                                    <input type="checkbox" name="presenca1" value="a1" id="a1">
                                    <label for="a1"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca1" value="a2" id="a2">
                                    <label for="a2"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca1" value="a3" id="a3">
                                    <label for="a3"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Joel</td>
                                <td>Aluno</td>
                                <td>jfsilva@inf.ufsm.br</td>
                                <td>123456789</td>
                                <td>
                                    <input type="checkbox" name="presenca2" value="a4" id="a4">
                                    <label for="a4"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca2" value="a5" id="a5">
                                    <label for="a5"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca2" value="a6" id="a6">
                                    <label for="a6"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>João Vitor</td>
                                <td>Aluno</td>
                                <td>jvmeller@inf.ufsm.br</td>
                                <td>123456789</td>
                                <td>
                                    <input type="checkbox" name="presenca3" value="a7" id="a7">
                                    <label for="a7"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca3" value="a8" id="a8">
                                    <label for="a8"></label>
                                </td>
                                <td>
                                    <input type="checkbox" name="presenca3" value="a9" id="a9">
                                    <label for="a9"></label>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s2 right">
                        <div style="position: relative; height: 70px;">
                            <div class="fixed-action-btn horizontal"
                                 style="position: absolute; display: inline-block; right: 60px;">
                                <a class="btn-floating btn-large red">
                                    <i class="material-icons">menu</i>
                                </a>
                                <ul>
                                    <li class="action-btn">
                                        <a href="#" class="btn-floating red">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </li>
                                    <li class="action-btn">
                                        <a href="#" class="btn-floating blue">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 20px;">
                <div class="col s12">
                    <button class="btn blue accent-2" type="submit" name="action">Salvar
                    </button>
                    <button class="btn grey" type="submit" name="action">Cancelar
                    </button>
                </div>
            </div>
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
{{--<script type="text/javascript" src="js/custom-script.js"></script>--}}