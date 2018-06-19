@extends('layouts.app')

@section('content')







<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('category')}}" method="post">
   {{csrf_field()}}

        <div class="form-group @if($errors->get('name_category'))has-error @endif">
            <label for="">name_category :</label>        
        <input type="text" name="name_category" class="form-control" value="{{old('name_category')}}">
        

            @if($errors->get('name_category'))
            @foreach($errors->get('name_category') as $message)

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