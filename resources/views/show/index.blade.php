@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">

		<h1>La liste des shows</h1>
		
			<a href="{{url('shows/create')}}" class="btn btn-warning"> Créer show </a></br>
		</br>
			

<div class="row">
	@foreach($shows as $show)
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
    	<div class='panel panel-primary' >
      <img src="{{asset($show->poster_url)}}"class='img-responsive center-block' width='330' height='300'alt="picture">
      <div class="caption">
        <h3>Title: {{$show->title}}</h3>
       
        <p><center><form action="{{url('shows/'.$show->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
		<a href="{{route('shows',$show->slug)}}" class="btn btn-primary">Afficher</a>

		@if( Auth::check() )
			@if( Auth::user()->role_id == 1 )
			<a href="{{url('shows/'.$show->id.'/edit')}}" class="btn btn-success">Modifier</a>


			<input type="submit" class="btn btn-danger" value="Supprimer"> 
			@endif
		@endif

          </form></center>
        </p>
      </div>
    </div>
  </div> </div>
  @endforeach
</div>


		
	</div>
</div>
</div>


@endsection