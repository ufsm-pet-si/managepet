
<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('vendors/jquery/jquery-ui.min.js') }}"></script>
<!-- jQuery Toast -->
<script type="text/javascript" src="{{ asset('vendors/jquery/jquery.toast.min.js') }}"></script>
<!--app js-->
<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
<!--materialize js-->
<script type="text/javascript" src="{{ asset('vendors/materialize/materialize.min.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<!-- Moment.js and Fullcalendar -->
<script src="{{ asset('vendors/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('vendors/moment/pt-br.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
<!-- custom schedule script -->
<script type="text/javascript" src="{{ asset('js/schedule-script.js') }}"></script>
<!-- datatable scripts -->
<script src="{{ asset('vendors/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables/datetime-moment.js') }}"></script>
<!-- TODO: refatoracao -> mover cada script para a pagina que necessita dele (nao ha necessidade de carregar todos aqui) -->
<script src="{{ asset('js/init-datatable.js') }}"></script>

{{-- asset('js/list-'. Request::path() .'.js') // change the code below for this line when normalize route names --}} 
@switch(Request::path())
    @case('categories')
        <script src="{{ asset('js/list-categories.js') }}"></script>
        @break
    @case('petianos')
        <script src="{{ asset('js/list-petianos.js') }}"></script>
        @break
    @case('participantes')
        <script src="{{ asset('js/list-participants.js') }}"></script>
        @break
    @case('atividades')
        <script src="{{ asset('js/list-activities.js') }}"></script>
        @break                
@endswitch

<script>
    $(function() {
        @if (Session::has('message'))
            <!-- used to show any messages -->
            const mapHeaders = {
                'success': 'Sucesso',
                'error': 'Erro',
                'warning': 'Atenção',
                'information': 'Alerta'
            }
            $.toast({
                heading: mapHeaders['{{ Session::get('message.type') }}'],
                text: '{{ Session::get('message.text') }}',
                showHideTransition: 'slide',
                icon: '{{ Session::get('message.type') }}'
            });
        @endif
        
        // inicialização do painel de navegação lateral para dispositivos móveis
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems);
        });
    });
</script>