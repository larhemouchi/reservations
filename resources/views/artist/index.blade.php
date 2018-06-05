@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des artists</h1>
		<div class="pull-left">
			<a href="{{url('artists/create')}}" class="btn btn-warning"> Créer Artist </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>Lastname</th>
					<th>Firstname</th>
					<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Actions</th>
				</tr>
		</head>
<body>
	@foreach($artists as $artist)
	<tr>
		<td>{{$artist->firstname}}</td>
		<td>{{$artist->lastname}}</td>
		<td> </td>
		<td>
			
			<form action="{{url('artists/'.$artist->id)}}" method="post" 
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>
			<a href="{{url('artists/'.$artist->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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