@extends('layouts.app')

@section('content')







<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('artiste_types')}}" method="post">
   {{csrf_field()}}

        <div class="form-group @if($errors->get('artist_id'))has-error @endif">
            <label for="">artist_id :</label>       
        <input type="text" name="artist_id" class="form-control" value="{{old('artist_id')}}">
        

            @if($errors->get('artist_id'))
            @foreach($errors->get('artist_id') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group @if($errors->get('type_id')) has-error @endif">
            <label for="">type_id :</label>        
        <input type="text" name="type_id" class="form-control" value="{{old('type_id')}}">
        @if($errors->get('type_id'))
            @foreach($errors->get('type_id') as $message)

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