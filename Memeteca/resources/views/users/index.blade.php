@extends('layout')
@section('title','usuarios')
@section('content')
    <h1>{{ $title }}</h1>

    <a onclick="addForm()" class="btn btn-sm btn-success pull-right"><span class="oi oi-plus"></span> Add New</a>

    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Nick</th>
                    <th>Correo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
{{--            @include('users.tabla')--}}
            </tbody>
        </table>
        @include('users.form')
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
           listar = function () {
            var table = $('#users-table').dataTable({
                processing: true,
                serverSide: true,
                ajaxSource: "{{ route('todos') }}",
                columns: [
                    {data: "id"},
                    {data: "name"},
                    {data: "email"},
                    // {data: 'Action', orderable: false, searchacle: false}
                    {
                        defaultContent: "" +
                        "<button type='button' class='ver btn btn-info' data-toogle='modal' data-target='#modalVer'><span class='oi oi-eye'></span></button>\t" +
                        "<button type='button' class='editar btn btn-success' data-toggle='modal' data-target='#modalEditar' ><span class='oi oi-loop-circular'></span></button>\t" +
                        "<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><span class='oi oi-x'></span></button>"
                    },

                ],
            });
            obtener_editar_data("#users-table tbody",table);
        };

            //obtener pa editar

            var obtener_editar_data=function (tbody, table) {
                $(tbody).on('click','button.editar',function () {
                    var data =document.getElementById('#users-table').row($(this).parents("tr")).data();
                    console.log(data);
                })
            }

            
            // form con modal
            function addForm() {
                save_method='add';
                $("input[name_method]").val('POST');
                $("#modal-form").modal('show');
                $("#modal-form form")[0].reset();
                $(".modal-title").text("Crear Contacto");
                $("#insertbutton").text("Agrega Usuario")
            }

            $(function () {
                $("modal-form form").on('submit',function (e) {
                    if (!e.isDefaultPrevented()){
                        var id=$("#id").val();
                        if (save_method == "add") url="{{ url('users') }}";
                        else url="{{ url('users').'/' }}"+id;
                        $.ajax({
                            url: url,
                            type:"POST",
                            data: new FormData($("modal-form form")[0]),
                            contentType:false,
                            processData:false,
                            success: function (data) {
                                $("#modal-form").modal('hide');
                                table1.ajax.reload();
                                swal({
                                    title: "Good Job",
                                    text: "Ypu Clicked the button",
                                    icon: "success",
                                    button: "Great!",
                                });
                            },
                            error: function (data) {
                                swal({
                                   title:"Ops",
                                    text:data.message,
                                    type:'error',
                                    timer:'1500',
                                });
                            }
                        });
                        return false;
                    }
                })
            })
    //aqui va el de editar

        function editForm(id) {
            save_method="edit";
            $("input[name_method]").val('PATCH');
            $("#modal-form form")[0].reset();
            $.ajax({
                url:"{{ route('users') }}" + id +"/edit",
                type:"GET",
                dataType:JSON,
                success: function (data) {
                    $("#modal-form").modal('show');
                    $(".modal-title").text('Edit Contact');
                    $("#insertbutton").text('Update Contact');
                    $("#id").val(data.id);
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#password").val(data.password);
                    $("#Nombre_Real").val(data.Nombre_Real);
                    $("#Apellido_Paterno").val(data.Apellido_Paterno);
                    $("#Apellido_Materno").val(data.Apellido_Materno);
                    $("#Edad").val(data.Edad);
                    $("#sex_id").val(data.sex_id);
                }, error: function () {
                    alert('not working properly')
                }
            })

        }

        listar();
        });
    </script>

@endsection
