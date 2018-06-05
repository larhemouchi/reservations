@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des types</h1>
		<div class="pull-left">
			<a href="{{url('types/create')}}" class="btn btn-warning"> Créer Type </a>
		
		</div>	

		<table class="table">
			
			<head>
				<tr>
				
				<th>Type</th>
				<th></th>
				<th>Action</th>
				</tr>
		</head>
<body>
	@foreach($types as $type)
	<tr>
		<td>{{$type->type}}</td>
		<td> </td>
		<td>
			
			<form action="{{url('types/'.$type->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>
			<a href="{{url('types/'.$type->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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