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
                  <h5 class="flight-card-title center">Certificados</h5>
                </div>
              </div>
              <div class="card-body col s12">
                <form action="{{ route('listCertificates') }}" method="POST" style="padding-top: 20px">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s9">
                      <input id="matricula" type="text" name="matricula" value="{{ isset($matricula) ? $matricula : ''}}">
                      <label for="matricula">Matrícula</label>
                    </div>
                    <div class="col s3" style="margin-top: 30px;">
                      <button type="submit" class="btn btn-primary right">Pesquisar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if(isset($activities))
      <div class="row">
        <div class="col s12">
          <table class="layout display responsive-table bordered">
            <thead>
                <tr>
                    <th>Atividade</th>
                    <th>Palestrante</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($activities as $key => $value)
              <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->speaker }}</td>
                <td>{{ str_limit($value->description, $limit = 50, $end = '...') }}</td>
                <td>
                  <a taget="_blank" href="{{ route('getCertificate', ['matricula' => $matricula, 'activity_id' => $value->id]) }}" class="waves-effect btn-floating blue">
                    <i class="material-icons">picture_as_pdf</i>
                  </a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
      @endif
      @if(isset($error))
        <span style="color: red;">{{ $error }}</span>
      @endif
    </div>
  </div>
</div>
@endsection