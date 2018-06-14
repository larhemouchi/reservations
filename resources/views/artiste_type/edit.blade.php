@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('artiste_type/'.$artiste_type->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Id d'artiste:</label>		
     	<input type="text" name="artist_id" class="form-control" value="{{$artiste_type->artist_id}}">
     @if($errors->get('artist_id'))
            @foreach($errors->get('artist_id') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
     		<label for="">Id type :</label>		
     	<input type="text" name="type_id" class="form-control" value="{{$artiste_type->type_id}}">
     @if($errors->get('type_id'))
            @foreach($errors->get('type_id') as $message)

             {{$message}}
            @endforeach

            @endif


     </div>

<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
     <a href="{{url('artiste_type')}}" class="form-control btn btn-primary">Retour</a>

     </form>




		</div>
	</div>
</div>




@endsection