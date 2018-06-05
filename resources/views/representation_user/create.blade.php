@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('representation_users')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('representation_id'))has-error @endif">
     		<label for="">Representation id :</label>		
     	<input type="text" name="representation_id" class="form-control" value="{{old('representation_id')}}">
        

            @if($errors->get('representation_id'))
            @foreach($errors->get('representation_id') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>




<div class="form-group @if($errors->get('places')) has-error @endif">
     		<label for="">Places :</label>		
     	<input type="text" name="places" class="form-control" value="{{old('places')}}">
        @if($errors->get('places'))
            @foreach($errors->get('places') as $message)

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