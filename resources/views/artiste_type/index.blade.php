@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des artiste types</h1>
		<div class="pull-left">
			<a href="{{url('artiste_type/create')}}" class="btn btn-warning"> Créer Artist type </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>Id Artist</th>
					<th>Id Type</th>
					<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
				

					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($artiste_type as $artiste_type)
	<tr>
		<td>{{$artiste_type->artist_id}}</td>
		<td>{{$artiste_type->type_id}}</td>
		<td> </td>
		
		<td>
			
			<form action="{{url('artiste_type/'.$artiste_type->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>


			@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )

			<a href="{{url('artiste_type/'.$artiste_type->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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