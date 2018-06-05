@extends('layouts.app')



@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('locations/'.$location->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

        <div class="form-group">
            <label for="">Slug :</label>       
        <input type="text" name="slug" class="form-control" value="{{$location->slug}}">
     @if($errors->get('slug'))
            @foreach($errors->get('slug') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

         <div class="form-group">
            <label for="">Designation :</label>       
        <input type="text" name="designation" class="form-control" value="{{$location->designation}}">
     @if($errors->get('designation'))
            @foreach($errors->get('designation') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
            <label for="">Adresse :</label>       
        <input type="text" name="adresse" class="form-control" value="{{$location->adresse}}">
     @if($errors->get('adresse'))
            @foreach($errors->get('adresse') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
        <div class="form-group">
            <label for="">locality id :</label>       
        <input type="text" name="locality_id" class="form-control" value="{{$location->locality_id}}">
     @if($errors->get('locality_id'))
            @foreach($errors->get('locality_id') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
        <div class="form-group">
            <label for="">Website :</label>       
        <input type="text" name="website" class="form-control" value="{{$location->website}}">
     @if($errors->get('website'))
            @foreach($errors->get('website') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

<div class="form-group">
            <label for="">Phone :</label>        
        <input type="text" name="phone" class="form-control" value="{{$location->phone}}">
     @if($errors->get('phone'))
            @foreach($errors->get('phone') as $message)

             {{$message}}
            @endforeach

            @endif


     </div>

<div class="form-group">
                    
        <input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('locations')}}" class="form-control btn btn-primary">Retour</a>
     </form>




        </div>
    </div>
</div>




@endsection