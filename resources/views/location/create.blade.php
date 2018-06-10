@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('locations')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('slug'))has-error @endif">
     		<label for="">Slug :</label>		
     	<input type="text" name="slug" class="form-control" value="{{old('slug')}}">
        

            @if($errors->get('slug'))
            @foreach($errors->get('slug') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

     <div class="form-group @if($errors->get('designation'))has-error @endif">
            <label for="">Designation :</label>       
        <input type="text" name="designation" class="form-control" value="{{old('designation')}}">
        

            @if($errors->get('designation'))
            @foreach($errors->get('designation') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
      <div class="form-group @if($errors->get('address'))has-error @endif">
            <label for="">address :</label>       
        <input type="text" name="address" class="form-control" value="{{old('address')}}">
        

            @if($errors->get('address'))
            @foreach($errors->get('address') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

      <div class="form-group @if($errors->get('locality_id'))has-error @endif">
            <label for="">locality id :</label>       
        <input type="text" name="locality_id" class="form-control" value="{{old('locality_id')}}">
        

            @if($errors->get('locality_id'))
            @foreach($errors->get('locality_id') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

     <div class="form-group @if($errors->get('website'))has-error @endif">
            <label for="">website :</label>       
        <input type="text" name="website" class="form-control" value="{{old('website')}}">
        

            @if($errors->get('website'))
            @foreach($errors->get('website') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('phone')) has-error @endif">
     		<label for="">Phone :</label>		
     	<input type="text" name="phone" class="form-control" value="{{old('phone')}}">
        @if($errors->get('phone'))
            @foreach($errors->get('phone') as $message)

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