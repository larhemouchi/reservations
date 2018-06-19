@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des category</h1>
		<div class="pull-left">
			<a href="{{url('category/create')}}" class="btn btn-warning"> Créer category </a>
		
		</div>	

		<table class="table">

			<head>
				<tr>
					<th>name category</th>
				
				</tr>
		</head>
<body>
	@foreach($category as $category)
	<tr>
		<td>{{$category->name_category}}</td>
	
	
		<td>
			
			<form action="{{url('category/'.$category->id)}}" method="post"
			onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}	
			<a href="" class="btn btn-primary">Afficher  </a>

			@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )

			<a href="{{url('category/'.$category->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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