<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('representation_user/'.$reservation->id.'/reserver')}}" method="post">
   {{csrf_field()}}


 
  <div class="form-group">


                             
           <label for="show_id" class="control-label">show_id :</label>
                                <div class="">
                                    {!! Form::select('places', [1,2,3,4,5,6,7,8,9,10] , null ,['class' => 'form-control']) !!}
                                </div>
</div>

     
<div class="form-group">
                    
        <input type="submit" value="Valider" class="form-control btn btn-primary">
     </div>

     </form>




        </div>
    </div>
</div>