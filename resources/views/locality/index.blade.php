@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des localities</h1>
		<div class="pull-left">
			<a href="{{url('localities/create')}}" class="btn btn-warning"> Créer Locality </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>Postal code</th>
					<th>locality</th>
					<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($localities as $locality)
	<tr>
		<td>{{$locality->postal_code}}</td>
		<td>{{$locality->locality}}</td>
		<td> </td>
		<td>
			
			<form action="{{url('localities/'.$locality->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>
			
			@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )

			<a href="{{url('localities/'.$locality->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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