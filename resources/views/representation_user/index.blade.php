@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des representation users</h1>
		<div class="pull-left">
			<a href="{{url('representation_user/create')}}" class="btn btn-warning"> Créer representation user </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>Representation id</th>
					<th>Places</th>
					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($representation_user as $representation_user)
	<tr>
		<td>{{$representation_user->representation_id}}</br>{{$representation_user->user->firstname}}</td>
		
		<td>{{$representation_user->places}}</td>
		<td>
			
			<form action="{{url('representation_user/'.$representation_user->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>
			
			@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )

			<a href="{{url('representation_user/'.$representation_user->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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