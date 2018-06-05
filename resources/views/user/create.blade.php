@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('users')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('login'))has-error @endif">
     		<label for="">Login :</label>		
     	<input type="text" name="login" class="form-control" value="{{old('login')}}">
        

            @if($errors->get('login'))
            @foreach($errors->get('login') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('password')) has-error @endif">
     		<label for="">Password :</label>		
     	<input type="password" name="password" class="form-control" value="{{old('password')}}">
        @if($errors->get('password'))
            @foreach($errors->get('password') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

 





     
     <div class="form-group @if($errors->get('firstname')) has-error @endif">
            <label for="">Firstname :</label>        
        <input type="text" name="firstname" class="form-control" value="{{old('firstname')}}">
        @if($errors->get('firstname'))
            @foreach($errors->get('firstname') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('lastname')) has-error @endif">
            <label for="">Lastname :</label>        
        <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}">
        @if($errors->get('lastname'))
            @foreach($errors->get('lastname') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('email')) has-error @endif">
            <label for="">Email :</label>        
        <input type="email" name="email" class="form-control" value="{{old('email')}}">
        @if($errors->get('email'))
            @foreach($errors->get('email') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('langue')) has-error @endif">
            <label for="">Langue :</label>        
        <input type="text" name="langue" class="form-control" value="{{old('langue')}}">
        @if($errors->get('langue'))
            @foreach($errors->get('langue') as $message)

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