@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('representations/'.$representation->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Show id :</label>		
     	<input type="text" name="show_id" class="form-control" value="{{$representation->show_id}}">
     @if($errors->get('show_id'))
            @foreach($errors->get('show_id') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

            <div class="form-group">
            <label for="">When_date :</label>       
        <input type="date" name="when_date" class="form-control" value="{{$representation->when_date}}">
     @if($errors->get('when_date'))
            @foreach($errors->get('when_date') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
        <div class="form-group">
            <label for="">When_time :</label>       
        <input type="time" name="when_time" class="form-control" value="{{$representation->when_time}}">
     @if($errors->get('when_time'))
            @foreach($errors->get('when_time') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
            <div class="form-group">
            <label for="">Location id :</label>       
        <input type="text" name="location_id" class="form-control" value="{{$representation->location_id}}">
     @if($errors->get('location_id'))
            @foreach($errors->get('location_id') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>


<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('representation')}}" class="form-control btn btn-primary">Retour</a>
     </form>




		</div>
	</div>
</div>




@endsection