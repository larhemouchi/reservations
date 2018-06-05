@extends('layouts.app')

@section('content')







<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
     <form action="{{url('roles')}}" method="post">
   {{csrf_field()}}

     	<div class="form-group @if($errors->get('role'))has-error @endif">
     		<label for="">Role :</label>		
     	<input type="text" name="role" class="form-control" value="{{old('role')}}">
        

            @if($errors->get('role'))
            @foreach($errors->get('role') as $message)

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