@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des artiste types</h1>
		<div class="pull-left">
			<a href="{{url('artiste_types/create')}}" class="btn btn-warning"> Créer Artist type </a>
		
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
	@foreach($artiste_types as $artiste_type)
	<tr>
		<td>{{$artiste_type->artist_id}}</td>
		<td>{{$artiste_type->type_id}}</td>
		<td> </td>
		
		<td>
			
			<form action="{{url('artiste_types/'.$artiste_type->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>
			<a href="{{url('artiste_types/'.$artiste_type->id.'/edit')}}" class="btn btn-success">Modifier  </a>


			<button type="submit" class="btn btn-danger">Supprimer  </a>
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