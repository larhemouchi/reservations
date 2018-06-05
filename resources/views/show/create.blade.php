@extends('layouts.app')

@section('content')







<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('shows')}}" method="post" enctype="multipart/form-data">
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
     <div class="form-group @if($errors->get('title'))has-error @endif">
            <label for="">Title :</label>       
        <input type="text" name="title" class="form-control" value="{{old('title')}}">
        

            @if($errors->get('title'))
            @foreach($errors->get('title') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('poster_url'))has-error @endif">
            <label for="">Poster url :</label>       
        <input type="file" name="poster_url" width="304" height="236" >
        

            @if($errors->get('poster_url'))
            @foreach($errors->get('poster_url') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('location_id'))has-error @endif">
            <label for="">Location id :</label>       
        <input type="text" name="location_id" class="form-control" value="{{old('location_id')}}">
        

            @if($errors->get('location_id'))
            @foreach($errors->get('location_id') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('bookable'))has-error @endif">
            <label for="">Bookable :</label>       
        <input type="text" name="bookable" class="form-control" value="{{old('bookable')}}">
        

            @if($errors->get('bookable'))
            @foreach($errors->get('bookable') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
<div class="form-group @if($errors->get('when')) has-error @endif">
            <label for="">When :</label>        
        <input type="date" name="when" class="form-control" value="{{old('when')}}">
        @if($errors->get('when'))
            @foreach($errors->get('when') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
<div class="form-group @if($errors->get('price')) has-error @endif">
            <label for="">Price :</label>       
        <input type="text" name="price" class="form-control" value="{{old('price')}}">
        @if($errors->get('price'))
            @foreach($errors->get('price') as $message)

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