@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('artists/'.$artist->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Firstname :</label>		
     	<input type="text" name="firstname" class="form-control" value="{{$artist->firstname}}">
     @if($errors->get('firstname'))
            @foreach($errors->get('firstname') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
     		<label for="">Lastname :</label>		
     	<input type="text" name="lastname" class="form-control" value="{{$artist->lastname}}">
     @if($errors->get('lastname'))
            @foreach($errors->get('lastname') as $message)

             {{$message}}
            @endforeach

            @endif


     </div>

<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
     <a href="{{url('artists')}}" class="form-control btn btn-primary">Retour</a>

     </form>




		</div>
	</div>
</div>




@endsection