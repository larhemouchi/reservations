@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('users/'.$user->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Login :</label>		
     	<input type="text" name="login" class="form-control" value="{{$user->login}}">
     @if($errors->get('login'))
            @foreach($errors->get('login') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

    <div class="form-group">
            <label for="">Paswword :</label>       
        <input type="text" name="password" class="form-control" value="{{$user->password}}">
     @if($errors->get('password'))
            @foreach($errors->get('password') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
           
            <div class="form-group">
            <label for="">Firstname :</label>       
        <input type="text" name="firstname" class="form-control" value="{{$user->firstname}}">
     @if($errors->get('firstname'))
            @foreach($errors->get('firstname') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
            <div class="form-group">
            <label for="">Lastname :</label>       
        <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}">
     @if($errors->get('lastname'))
            @foreach($errors->get('lastname') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
            <div class="form-group">
            <label for="">Email :</label>       
        <input type="text" name="email" class="form-control" value="{{$user->email}}">
     @if($errors->get('email'))
            @foreach($errors->get('email') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
            <div class="form-group">
            <label for="">Langue :</label>       
        <input type="text" name="langue" class="form-control" value="{{$user->langue}}">
     @if($errors->get('langue'))
            @foreach($errors->get('langue') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
     <a href="{{url('users')}}" class="form-control btn btn-primary">Retour</a>

     </form>




		</div>
	</div>
</div>




@endsection