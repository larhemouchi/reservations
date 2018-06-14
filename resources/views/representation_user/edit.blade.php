@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('representation_user/'.$representation_user->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Representation id :</label>		
     	<input type="text" name="representation_id" class="form-control" value="{{$representation_user->representation_id}}">
     @if($errors->get('representation_id'))
            @foreach($errors->get('representation_id') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>



<div class="form-group">
     		<label for="">Places :</label>		
     	<input type="text" name="places" class="form-control" value="{{$representation_user->places}}">
     @if($errors->get('places'))
            @foreach($errors->get('places') as $message)

             {{$message}}
            @endforeach

            @endif


     </div>

<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('representation_user')}}" class="form-control btn btn-primary">Retour</a>
     </form>




		</div>
	</div>
    
</div>




@endsection