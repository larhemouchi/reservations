@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des roles</h1>
		<div class="pull-left">
			<a href="{{url('roles/create')}}" class="btn btn-warning"> Créer roles </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>Role</th>
					
					<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($roles as $role)
	<tr>
		<td>{{$role->role}}</td>
	
		<td> </td>
		<td>
			
			<form action="{{url('roles/'.$role->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>

			
			@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )

			<a href="{{url('roles/'.$role->id.'/edit')}}" class="btn btn-success">Modifier  </a>


			<button type="submit" class="btn btn-danger">Supprimer  </a>
			
			@endif
		@endif
			
          </form>
		</td>
	</tr>
   @endforeach

</body>

</table>
	</div>
</div>
</div>


@endsection