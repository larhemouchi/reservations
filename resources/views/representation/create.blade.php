@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('representations')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('show_id'))has-error @endif">
     		<label for="">Show id :</label>		
     	<input type="text" name="show_id" class="form-control" value="{{old('show_id')}}">
        

            @if($errors->get('show_id'))
            @foreach($errors->get('show_id') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('when')) has-error @endif">
     		<label for="">When :</label>		
     	<input type="date" name="when" class="form-control" value="{{old('when')}}">
        @if($errors->get('when'))
            @foreach($errors->get('when') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('location_id')) has-error @endif">
            <label for="">Location id :</label>        
        <input type="text" name="location_id" class="form-control" value="{{old('location_id')}}">
        @if($errors->get('location_id'))
            @foreach($errors->get('location_id') as $message)

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