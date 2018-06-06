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
                <th>name</th>
                <th>designation</th>
                <th>adess</th>
                <th>locality - city</th>
                <th>locality - postcode</th>
                <th>website - email</th>
                <th>telephone</th>
            </tr>
        </thead>
    </table>

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

 

});



</script>
@endsection