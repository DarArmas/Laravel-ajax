<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="assets/img/utld_logo.png" style="width:100px; height: 60px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Animales</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mantenimiento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Propietarios</a>
          <a class="dropdown-item" href="#">Medicos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Citas</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" 
                aria-controls="home" aria-selected="true">Lista de animales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" 
                aria-controls="profile" aria-selected="false">Agregar animal</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table id="tabla-animal" class="table table-hover">
                <thead>
                  <td>ID</td>
                  <td>NOMBRE</td>
                  <td>ESPECIE</td>
                  <td>GENERO</td>
                  <td>ACCIONES</td>
                </thead>

              </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h3>Agregar nuevo animal</h3>
              <form id="registro-animal">
                @csrf
                <div class="form-group">
                  <label for="txtNombre">Nombre</label>
                  <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="selEspecie">Especie</label>
                  <select class="form-control" id="selEspecie" name="selEspecie">
                    <option value="Gato">Gato</option>
                    <option value="Perro">Perro</option>
                    <option value="Ave">Ave</option>
                    <option value="Otros">Otros</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Genero</label>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rbGeneroMacho" name="rbGenero" value="Macho" class="custom-control-input">
                    <label class="custom-control-label" for="rbGeneroMacho">Macho</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rbGeneroHembra" name="rbGenero" value="Hembra" class="custom-control-input">
                    <label class="custom-control-label" for="rbGeneroHembra">Hembra</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar animal</button>
            </form>
            </div>
        </div>


<!-- MOdal para editar datos STATIC BACKDROP (QUE NO PUEDA CERRARLO SI DA CLICK FUERA) -->
<!-- Modal EDITAR -->
<div class="modal fade" id="animal_edit_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Animal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form id="animal_edit_form">
                @csrf
                <div class="form-group">
                  <label for="txtNombre">Nombre</label>
                  <input type="text" class="form-control" id="txtNombre2" name="txtNombre2" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="selEspecie">Especie</label>
                  <select class="form-control" id="selEspecie2" name="selEspecie2">
                    <option value="Gato">Gato</option>
                    <option value="Perro">Perro</option>
                    <option value="Ave">Ave</option>
                    <option value="Otros">Otros</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Genero</label>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rbGeneroMacho2" name="rbGenero" value="Macho" class="custom-control-input">
                    <label class="custom-control-label" for="rbGeneroMacho">Macho</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rbGeneroHembra2" name="rbGenero" value="Hembra" class="custom-control-input">
                    <label class="custom-control-label" for="rbGeneroHembra">Hembra</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar animal</button>
            </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal eliminar -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>


    </div> <!--fin container-->
<script>
  //mostrar los datos que recupero desde la peticion ajax que se hace en el backend
  $(document).ready(function(){
    var tablaAnimal = $('#tabla-animal').DataTable({
      processing:true,
      serverSide:true,
      //haz la peticion
      ajax:{
        url: "{{route('animal.index')}}",
      },
      //muestrame estas columnas
      columns:[
        {data: 'id'},
        {data: 'nombre'},
        {data: 'especie'},
        {data: 'genero'},
        {data: 'action', orderable:false}
      ]
    });
  });
</script>

<script>
  $('#registro-animal').submit(function(e){
    console.log("Hola diste click")
    e.preventDefault(); //para que no recargue la pagina cuando se hace submit
    var nombre = $('#txtNombre').val();
    var especie = $('#selEspecie').val();
    var genero = $("input[name='rbGenero']:checked").val();
    var _token = $("input[name=_token]").val();
     
     $.ajax({
        url: "{{route('animal.registrar')}}",
        type: "POST",
        data:{
            nombre: nombre,
            especie: especie,
            genero: genero,
            _token:_token
        },
        success:function(response){
          if(response){
            $('#registro-animal')[0].reset(); //si se realiza el post correctamente,borrame la caja de registro
            toastr.success('El registro se inrgreso correctamente.', 'Nuevo Registro', {timeOut: 3000});
            $('#tabla-animal').DataTable().ajax.reload(); //cuando ingrese datos, que se actualice la tabla
          }
        }

      });


    
  });
</script>
<script>
  //eliminar registros
  var ani_id;
  $(document).on('click','.delete', function(){
      ani_id = $(this).attr('id'); 
      $('#confirmModal').modal('show');
  }); 

  //el boton con id=btnEliminar está en el modal
$('#btnEliminar').click(function(){

  $.ajax({
    url: "animal/eliminar/"+ani_id,
    beforeSend: function(){
      $('#btnEliminar').text('Eliminando....');
    },
    success: function(data){
      setTimeout(function(){
        $('#confirmModal').modal('hide');
        toastr.warning('El registro fue eliminado correctamente.', 'Eliminar registro', {timeOut:3000});
        $('#tabla-animal').DataTable().ajax.reload();
      },2000);
      $('#btnEliminar').text('Eliminar');
    }
  });
});
</script>
<script>
  function editarAnimal(id){
    $.get('animal/editar/' + id, function(animal){
      //asignar los datos asignados a la ventana modal
      $('#animal_edit_modal').modal('toggle');
    });
  }
</script>

</body>
</html>