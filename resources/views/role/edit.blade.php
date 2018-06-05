@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('roles/'.$role->id)}}" method="post">
     	<input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

     	<div class="form-group">
     		<label for="">Role :</label>		
     	<input type="text" name="role" class="form-control" value="{{$role->role}}">
     @if($errors->get('role'))
            @foreach($errors->get('role') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>



<div class="form-group">
     				
     	<input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('roles')}}" class="form-control btn btn-primary">Retour</a>
     </form>




		</div>
	</div>
</div>




@endsection