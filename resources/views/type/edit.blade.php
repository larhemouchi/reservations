@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('types/'.$type->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Type d'artist :</label>		
     	<input type="text" name="type" class="form-control" value="{{$type->type}}">
     @if($errors->get('type'))
            @foreach($errors->get('type') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>



<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
     <a href="{{url('types')}}" class="form-control btn btn-primary">Retour</a>

     </form>




		</div>
	</div>
</div>




@endsection