@component('layout')
@slot('title')
    Usuarios
@endslot
@slot('content')
    <h1>{{ $title }}</h1>

    <p><a href="{{route('users.create')}}">
            Crear
        </a></p>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <td>Nick</td>
                    <td>Correo</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Edad</td>
                    <td>Sexo</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>
            </thead>
            <tbody id="bodytable">
            {{--@section('tablas')@endsection--}}
            @include('users.tabla')

            </tbody>
        </table>
    </div>
@endslot
@endcomponent

{{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
        {{--$("#bodytable").on('click',"button#cut",function () {--}}
            {{----}}
        {{--})--}}
    {{--})--}}
{{--</script>--}}

