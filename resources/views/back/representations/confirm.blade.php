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

<h3>show Id : {{ $show }}</h3>

<div class="table-responsive no-padding">

    <table class="table table-bordered table-striped" id="table">
        <thead>
            <tr>

                <th>id</th>
                <th>date</th>
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
// quand la table show va se remplie en vas utilser
//var showId = '{{-- $show->id --}}';
//meintenent ca!
var showId = '{{ $show }}';

//rendering table
    $('#table').DataTable({
        //enjoyer un ajax request avec headers ymkan ngoulk titles mo9dimat bach y3raf ach baghin 7na
    	
        ajax: {
            timeout: 600000,
            //link to get events
            "url": "https://api-sandbox.londontheatredirect.com/rest/v2/Events/"+showId+"/Performances",   
            //header bach ngolou lou bghina JSON   
            "contentType": "application/json",
            "beforeSend" : function(xhr) {
                //header qui contien lkey
                //api key
              xhr.setRequestHeader('Api-Key','gesjdrynjgev8gqd2rkb6pkz');
            },
            //'object qui contient les infos'
            dataSrc: 'Performances',
        },
        columns: [
        //les proprieté de lobject quon va mettre dans e tableau

            { data: 'PerformanceId'},
            { data: 'PerformanceDate'}


        ]
    });
    /**/
    
});

</script>

<script type="text/javascript">
  
$( document ).ready(function() {

 

});



</script>
@endsection