@extends('layouts.app')

@section('header', "Administración de Usuarios")

@section('content')
<button type="button" class="btn btn-dark">Crear Usuario administrador</button>


	<table class="table">
	
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
	  <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>

  <?php
  for($i=0; $i<10; $i++){
	echo "<tr>";
	echo "<th scope=row>1</th>";
	echo "<td>Mark</td>";
	echo "<td>Otto</td>";
	echo "<td>@mdo</td>";
	echo "<td>
	
		<button type=button class='btn btn-danger'>Eliminar</button>
		<button type=button class='btn btn-success'>Editar</button>
	
	
	
	</td>";
 	echo "</tr>";

  }
   
	?>
  
  </tbody>
</table>


@endsection