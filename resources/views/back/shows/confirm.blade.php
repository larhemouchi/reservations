@extends('back.layouts.app')

@section('datatableCss')

  <link rel="stylesheet" href="{!! asset('adminl/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">

@endsection

@section('styles')



@endsection

@section('content')



@component('back.components.plain')

  @slot('titlePlain')

The Main Configuration Of the web application

  @endslot


  @slot('sectionPlain')



<div class="table-responsive no-padding">

    <table class="table table-bordered table-striped" id="table">
        <thead>
            <tr>
                <th>ID</th>
                 <th>poster_url</th>
                <th>slug</th>
                <th>title</th>
                
                <th>location_id</th>
                <th>price</th>
                <th>Confirm / Delete</th>
            </tr>
        </thead>
    </table>

</div>



<div>
     <!-- token lach kisla7 hna : -->
    <!-- csrf fields - is hidden -->
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
</div>

  @endslot


  @slot('footerPlain')



  @endslot


@endcomponent


@endsection

@section('datatableScript')


<!-- DataTables -->
<script src="{!! asset('adminl/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('adminl/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>


<!-- SlimScroll -->
<script src="{!! asset('adminl/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>


<!-- FastClick -->
<script src="{!! asset('adminl/bower_components/fastclick/lib/fastclick.js') !!}"></script>

@endsection

@section('scripts')

<script src="{!! asset('axios/axios.min.js') !!}"></script>
<script src="{!! asset('validate/jquery.validate.min.js') !!}"></script>
<script type="text/javascript">

  
$(function() {


window.exist = JSON.parse('{{ $exist }}');




//rendering table
    $('#table').DataTable({
        //enjoyer un ajax request avec headers ymkan ngoulk titles mo9dimat bach y3raf ach baghin 7na
    	
        ajax: {
            timeout: 600000,
            //link to get events
            "url": "https://api-sandbox.londontheatredirect.com/rest/v2/Events",   
            //header bach ngolou lou bghina JSON   
            "contentType": "application/json",
            "beforeSend" : function(xhr) {
                //header qui contien lkey
                //api key
              xhr.setRequestHeader('Api-Key','gesjdrynjgev8gqd2rkb6pkz');
            },
            //'object qui contient les infos'
            dataSrc: 'Events',
        },


        columns: [
        //les proprieté de lobject qu'on va mettre dans le tableau
            { data: 'EventId'},

             { data: 'MainImageUrl'},
            { data: 'Name'},
            { data: 'Description'},
            //"VenueId": 85,//Location Id
            { data: 'VenueId'},
            //Mochkila khra bach njabdo limage khasa ndakhlo l array nkhaliwha mn ba3d
            // bookable hankhaliwha dima true 7it ma7do t3lan 3lih ya3ni bbokable
            { data: 'OfferPrice'},
            { data: 'EventId',
            render: function ( data, type, row ) {
                    if( $.inArray( Number( data ) , window.exist )  == -1 ){
                        return '<a  href="#" class="btn btn-success btn-confirm" id="'+data+'">Confirm</a>';


                    }else{
          
                        return '<a  href="#" class="btn btn-danger btn-delete" id="'+data+'">Delete</a>';
                    }

                }

            },
        ]
    });
    /**/
    
});

</script>


<script type="text/javascript">
  
$( document ).ready(function() {

 $('#table').on('click','.btn-confirm', function(e){
    e.preventDefault();
    // btn-confirm id
    var id= $(this).attr('id');

    var id_selector = $(this);

    id_selector.attr('disabled', true);


/*            { data: 'Name'},
            //Designation 
            { data: 'Info'},
            { data: 'Address'},
            //localityId
            { data: 'City'},
            { data: 'Postcode'},
            //website
            { data: 'Email'},
            { data: 'Telephone'},
            { data: 'VenueId',*/
   // debugger;

    var slug_parent = id_selector.parent().prev();

    var slug = slug_parent.text();

    var poster_url_parent = slug_parent.prev();

    var poster_url = poster_url_parent.text();

    var location_id_parent = poster_url_parent.prev();

    var location_id = location_id_parent.text();
 
    var price_parent = location_id_parent.prev();

    var price = price_parent.text();

    var title_parent = price_parent.prev();
     
    var title = title_parent.text();


       axios.post('/shows-post/'+id,{
        //csrf token
        headers: {


           'X-CSRF-TOKEN': $('#csrf-token').attr('content')
                            },
        id: id,
        slug: slug,
        location_id:location_id,
        title:title,
        poster_url:poster_url,
        price: price,
      
        

    }).then(function( response ){
        //if good
        id_selector.attr('disabled', false);
        console.log( response.data);
        id_selector.removeClass('btn-success btn-confirm');
        id_selector.addClass('btn-danger btn-delete');
        id_selector.text('Delete');

    }).catch(function( error ){
        //if error
        alert('error');
        console.log( error);
        id_selector.attr('disabled', false);

    });

 });


/***********************************/




$('#table').on('click','.btn-delete', function(e){
    e.preventDefault();
    // btn-confirm id
    var id= $(this).attr('id');

    var id_selector = $(this);

    id_selector.attr('disabled', true);


/*            { data: 'Name'},
            //Designation 
            { data: 'Info'},
            { data: 'Address'},
            //localityId
            { data: 'City'},
            { data: 'Postcode'},
            //website
            { data: 'Email'},
            { data: 'Telephone'},
            { data: 'VenueId',*/
   // debugger;

    axios.delete('/shows-delete/'+id,{
        //csrf token
        headers: {


            'X-CSRF-TOKEN': $('#csrf-token').attr('content')
                            } 

    }).then(function( response ){
        //if good
        id_selector.attr('disabled', false);
        console.log( response.data);
        id_selector.removeClass('btn-danger btn-delete');
        id_selector.addClass('btn-success btn-confirm');
        id_selector.text('Confirm');

    }).catch(function( error ){
        //if error
        alert('error');
        console.log( error);
        id_selector.attr('disabled', false);

    });

 });

});



</script>
@endsection