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
     <!--
  <div class="form-group">
                             
           <label for="show_id" class="col-md-4 control-label">show_id :</label>
                                <div class="col-md-6">
                                    <select name="show_id" id="show_id" class="form-control">
                                        @foreach($shows as $show)
                                            <option value="{{ $representation->show_id }}">{{ $show->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
</div>-->
<div class="form-group @if($errors->get('when_date')) has-error @endif">
     		<label for="">When_date :</label>		
     	<input type="date" name="when_date" class="form-control" value="{{old('when_date')}}">
        @if($errors->get('when_date'))
            @foreach($errors->get('when_date') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

     <div class="form-group @if($errors->get('when_time')) has-error @endif">
            <label for="">When_time :</label>        
        <input type="time" name="when_time" class="form-control" value="{{old('when_time')}}">
        @if($errors->get('when_time'))
            @foreach($errors->get('when_time') as $message)

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