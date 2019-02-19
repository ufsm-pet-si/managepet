@extends('layouts.app')
@section('content')
  
<!--start container-->
<div class="container">
  <div class="section">
    <div class="divider"></div>
    <div class="section">
      <div class="row">
        <div class="col s12">
          <div id="flight-card" class="card">
            <div class="card-header blue accent-1">
              <div class="card-title">
                <h5 class="flight-card-title center">Agenda</h5>
              </div>
            </div>  
            <div class="col s12">
              <div id="full-calendar">
                <div id="calendar" class="calendar"></div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection



