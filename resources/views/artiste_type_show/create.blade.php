@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('artiste_type_shows')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('artiste_type_id'))has-error @endif">
     		<label for="">artiste_type_id :</label>		
     	<input type="text" name="artiste_type_id" class="form-control" value="{{old('artiste_type_id')}}">
        

            @if($errors->get('artiste_type_id'))
            @foreach($errors->get('artiste_type_id') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('show_id')) has-error @endif">
     		<label for="">show_id :</label>		
     	<input type="text" name="show_id" class="form-control" value="{{old('show_id')}}">
        @if($errors->get('show_id'))
            @foreach($errors->get('show_id') as $message)

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