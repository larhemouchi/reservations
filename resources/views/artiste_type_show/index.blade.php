@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des artists type show</h1>
		<div class="pull-left">
			<a href="{{url('artiste_type_shows/create')}}" class="btn btn-warning"> Créer Artist type show </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>artist type id</th>
					<th>show id</th>
					<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($artiste_type_shows as $artiste_type_show)
	<tr>
		<td>{{$artiste_type_show->artiste_type_id}}</td>
		<td>{{$artiste_type_show->show_id}}</td>
		<td> </td>
		<td>
			
			<form action="{{url('artiste_type_shows/'.$artiste_type_show->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>
			<a href="{{url('artiste_type_shows/'.$artiste_type_show->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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