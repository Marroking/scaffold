/var/www/denied_apps/app/views/users/index.blade.php

<h1>Lista de usuarios</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
		    <th>Nombre completo</th>
		    <th>Correo electr&oacute;nico</th>
		    <th>key</th>
		    <th>Acciones</th>
		</tr>
		@foreach ($users as $user)
			<tr>
			<td>
			 	  <td>{{ $user->id }}</td>
			    <td>{{ $user->nameUser }}</td>
			    <td>{{ $user->emailUser }}</td>
			    <td>{{ $user->key }}</td>
			    <td>{{ $user->incidenceProduct_id }}</td>
			    <td>
			     
			    </td>
			</tr>
		@endforeach
	</table> 	