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
<!--
            { data: 'VenueId'},
            { data: 'Name'},
            //Designation 
            { data: 'Info'},
            { data: 'Address'},
            //localityId
            { data: 'City'},
            { data: 'Postcode'},
            //website
            { data: 'Email'},
            { data: 'Telephone'},
-->
                <th>id</th>
                <th>slug</th>
                <th>designation</th>
                <th>address</th>
                <th>locality - city</th>
                <th>locality - postcode</th>
                <th>website - email</th>
                <th>telephone</th>
                <th>Button</th>
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
            "url": "https://api-sandbox.londontheatredirect.com/rest/v2/Venues",   
            //header bach ngolou lou bghina JSON   
            "contentType": "application/json",
            "beforeSend" : function(xhr) {
                //header qui contien lkey
                //api key
              xhr.setRequestHeader('Api-Key','gesjdrynjgev8gqd2rkb6pkz');
            },
            //'object qui contient les infos'
            dataSrc: 'Venues',
        },
        columns: [
        //les proprieté de lobject quon va mettre dans e tableau
            { data: 'VenueId'},
            { data: 'Name'},
            //Designation 
            { data: 'Info'},
            { data: 'Address'},
            //localityId
            { data: 'City'},
            { data: 'Postcode'},
            //website
            { data: 'Email'},
            { data: 'Telephone'},
            { data: 'VenueId',
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
/*
Venues:[
{
        "VenueId": 191,
        "Name": "Ambassador Theatre",
        "Info": null,
        "Address": "219 West 49th Street",
        "City": "New York",
        "Postcode": null,
        "Telephone": "",
        "Fax": "",
        "Email": "",
        "NearestTube": null,
        "Train": null,
        "PlanLink": "https://ltdtest.londontheatredirect.com/img/seatingplan/AmbassadorTheatre.gif",
        "ImageUrl": "https://ltdtest.londontheatredirect.com/img/theatrelarge/AmbassadorTheatre.jpg"
    }

*/
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
    var phone_parent = id_selector.parent().prev();

    var phone = phone_parent.text();

    var website_parent = phone_parent.prev();

    var website = website_parent.text();

    var postalcode_parent = website_parent.prev();

    var postal_code = postalcode_parent.text();

    var locality_parent = postalcode_parent.prev();

    var locality_id = locality_parent.text();

    var address_parent = locality_parent.prev();

    var address = address_parent.text();

    var designation_parent= address_parent.prev();

    //var designation = designation_parent.text();
    var designation = null;

    var slug_parent= designation_parent.prev();

    var slug2 = slug_parent.text();







    axios.post('/locations-post/'+id,{
        //csrf token
        headers: {


                            'X-CSRF-TOKEN': $('#csrf-token').attr('content')
                            },
        id: id,
        phone: phone,
        website:website,
        locality_id:locality_id,
        address:address,
        designation:designation,
        slug2: slug2,
        postal_code: postal_code 

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

    axios.delete('/locations-delete/'+id,{
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