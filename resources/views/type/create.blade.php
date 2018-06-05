@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('types')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('type'))has-error @endif">
     		<label for="">Type d'artiste :</label>		
     	<input type="text" name="type" class="form-control" value="{{old('type')}}">
        

            @if($errors->get('type'))
            @foreach($errors->get('type') as $message)

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