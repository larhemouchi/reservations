@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des locations</h1>
		<div class="pull-left">
			<a href="{{url('locations/create')}}" class="btn btn-warning"> Créer Locations </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>Slug</th>
					<th>Designation</th>
					<th>Address</th>
					<th>locality id</th>
					<th>website</th>
					<th>phone</th>
					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($locations as $location)
	<tr>
		<td>{{$location->slug}}</td>
		<td>{{$location->designation}}</td>
		<td>{{$location->address}}</td>
		<td>{{$location->locality_id}}</td>
		<td>{{$location->website}}</td>
		<td>{{$location->phone}}</td>
	
		<td>
			
			<form action="{{url('locations/'.$location->id)}}" method="post"
			onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>

			@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )

			<a href="{{url('locations/'.$location->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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