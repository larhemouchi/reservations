@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('artiste_type_show/'.$artiste_type_show->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">artiste_type_id :</label>		
     	<input type="text" name="artiste_type_id" class="form-control" value="{{$artiste_type_show->artiste_type_id}}">
     @if($errors->get('artiste_type_id'))
            @foreach($errors->get('artiste_type_id') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
     		<label for="">show_id :</label>		
     	<input type="text" name="show_id" class="form-control" value="{{$artiste_type_show->show_id}}">
     @if($errors->get('show_id'))
            @foreach($errors->get('show_id') as $message)

             {{$message}}
            @endforeach

            @endif


     </div>

<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('artiste_type_show')}}" class="form-control btn btn-primary">Retour</a>
     </form>




		</div>
	</div>
</div>




@endsection