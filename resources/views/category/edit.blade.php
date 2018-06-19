@extends('layouts.app')



@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('category/'.$category->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}

        <div class="form-group">
            <label for="">name category :</label>       
        <input type="text" name="name_category" class="form-control" value="{{$category->name_category}}">
     @if($errors->get('name_category'))
            @foreach($errors->get('name_category') as $message)

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