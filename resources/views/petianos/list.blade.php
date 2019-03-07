@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <div class="divider"></div>
            <div id="hoverable-table">
                <h4 class="header">Petianos</h4>
                <div class="row">
                    <div class="col s12">
                        <table class="layout display responsive-table bordered" id="table_petianos">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ações</th>
                                <th>E-mail</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($petianos as $key => $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <ul>
                                        <div class="col s2">
                                        <li class="action-btn">
                                            <a href="petianos/show({{ $value->id }})" class="waves-effect btn-floating blue">
                                            <i class="material-icons">edit</i>
                                            </a>
                                        </li>
                                        </div>
                                        <div class="col s2">
                                        <li class="action-btn">
                                            <a href="petianos/destroy({{ $value->id }})" class="waves-effect btn-floating red">
                                            <i class="material-icons">delete</i>
                                            </a>
                                        </li>
                                        </div>
                                        </ul>
                                    </td>
                                    <td>{{ $value->email }}</td>
                                </tr>
                                @endforeach
                                </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row right">
                <div class="fixed-action-btn action-btn" id="form-petiano">
                    <a href="petianos/create" class="btn-floating blue accent-2 btn-large waves-effect waves-light right">
                        <i class="material-icons">add</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

    {{--<script type="text/javascript" src="js/custom-script.js"></script>--}}
