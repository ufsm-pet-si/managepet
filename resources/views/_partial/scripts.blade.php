
<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('/vendors/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendors/jquery/jquery-ui.min.js') }}"></script>
<!--app js-->
<script src="{{ asset('js/app.js') }}" defer></script>
<!--materialize js-->
<script type="text/javascript" src="{{ asset('vendors/materialize/materialize.min.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<!-- Moment.js and Fullcalendar -->
<script src="{{ asset('/vendors/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/vendors/moment/pt-br.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
<!-- custom schedule script -->
<script type="text/javascript" src="{{ asset('js/schedule-script.js') }}"></script>

{{----}}
{{----}}
<script>
    // inicialização do painel de navegação lateral para dispositivos móveis
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
</script>

<script>
    // inicialização do dropdown do menu do usuário
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });
</script>