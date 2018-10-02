@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <div class="divider"></div>
            <div id="hoverable-table">
                <h4 class="header">Petianos</h4>
                <div class="row">
                    <div class="col s10">
                        <table class="highlitgh" id="lista_petianos">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Usuário</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Isabella</td>
                                <td>isakis@inf.ufsm.br</td>
                                <td>isakis</td>
                            </tr>
                            <tr>
                                <td>Joel</td>
                                <td>jfsilva@inf.ufsm.br</td>
                                <td>jfsilva</td>
                            </tr>
                            <tr>
                                <td>João Vitor</td>
                                <td>jvmeller@inf.ufsm.br</td>
                                <td>jvmeller</td>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row right">
                <div class="fixed-action-btn action-btn" id="form-petiano">
                    <a href="#" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
                        <i class="material-icons">add</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

    {{--<script type="text/javascript" src="js/custom-script.js"></script>--}}
