@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('artists')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('firstname'))has-error @endif">
     		<label for="">Firstname :</label>		
     	<input type="text" name="firstname" class="form-control" value="{{old('firstname')}}">
        

            @if($errors->get('firstname'))
            @foreach($errors->get('firstname') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('lastname')) has-error @endif">
     		<label for="">Lastname :</label>		
     	<input type="text" name="lastname" class="form-control" value="{{old('lastname')}}">
        @if($errors->get('lastname'))
            @foreach($errors->get('lastname') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group">
     				
     	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
     </div>

     </form>




		</div>
	</div>
</div>


@endsection