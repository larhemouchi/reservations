@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('locality')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('postal_code'))has-error @endif">
     		<label for="">Postal code :</label>		
     	<input type="text" name="postal_code" class="form-control" value="{{old('postal_code')}}">
        

            @if($errors->get('postal_code'))
            @foreach($errors->get('postal_code') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('locality')) has-error @endif">
     		<label for="">Locality :</label>		
     	<input type="text" name="locality" class="form-control" value="{{old('locality')}}">
        @if($errors->get('locality'))
            @foreach($errors->get('locality') as $message)

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