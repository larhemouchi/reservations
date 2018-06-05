@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('localities/'.$localitie->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">postal code :</label>		
     	<input type="text" name="postal_code" class="form-control" value="{{$localitie->postal_code}}">
     @if($errors->get('postal_code'))
            @foreach($errors->get('postal_code') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
     		<label for="">locality :</label>		
     	<input type="text" name="locality" class="form-control" value="{{$localitie->locality}}">
     @if($errors->get('locality'))
            @foreach($errors->get('locality') as $message)

             {{$message}}
            @endforeach

            @endif


     </div>

<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('localities')}}" class="form-control btn btn-primary">Retour</a>
     </form>




		</div>
	</div>
</div>




@endsection