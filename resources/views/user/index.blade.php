@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
	<div class="col-md-12">

		<h1 style="margin-left: -120px;">La liste des uesers</h1>
		<div class="pull-left">
			<a href="{{url('users/create')}}" class="btn btn-warning"> Créer users </a>
		
			

		<table class="table" style="margin-bottom: 22px;
    margin-left: -120px;">

			<head>
				<tr>
					<th>Login</th>
					<th>Password</th>
					
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th>Langue</th>
					<th></th>
					<th>Actions</th>
					
				</tr>
		</head>
<body>
	@foreach($users as $user)
	<tr>
		<td>{{$user->login}}</td>
		<td>{{$user->password}}</td>
      
		<td>{{$user->firstname}}</td>
		<td>{{$user->lastname}}</td>
	    <td>{{$user->email}}</td>
	    <td>{{$user->langue}}</td>
			
		<td>

			<td>
			<a href="" class="btn btn-primary" style="float: left">Afficher</a></td>
			<td><a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-success" >Modifier</a></td>
	
	<td><form action="{{url('users/'.$user->id)}}" method="post" 
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
				{{csrf_field()}}
			{{method_field('DELETE')}}
		
			
		<button type="submit" class="btn btn-danger" >Supprimer</button>
	
          </form>
      </td>

         
</td>
		

	</tr>
   @endforeach

</body>

</table>
	</div>
</div>
</div>


@endsection