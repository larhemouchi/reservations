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
                <th>id</th>
                <th>name</th>
                <th>Description</th>
                <th>Location</th>
                <th>price</th>
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
/*


Api-Key: gesjdrynjgev8gqd2rkb6pkz
Content-Type: application/json
*/
/*
	axios.post('ourApp/fin nfformattti',{
		parameters:{
			'title': 'Name',
			'id': 'EventType'  
		}
	}).then(function(response){
		console.log( response.data);
		$('#table').DataTable({
				ajax: response.data,
				dataSrc: 'Events',

        columns: [
            { data: 'EventId'},
            { data: 'Name'}
        ]
    });

	}).catch(function(response){
		alert('not good');
	});
	*/
/**/
/*'data': {
    /LOBJECT!!!!!!!
    "Events": [{

        LES PROPRIETE

        "EventId": 1742,
        "EventType": 1,
        "Name": "Aladdin",
        "Description": "<p>Disney&rsquo;s spectacular musical Aladdin is everything you could wish for and more, and is dazzling audiences daily at the beautiful Prince Edward Theatre, in the heart of London&rsquo;s West End.<br />\r\n&nbsp;<br />\r\nBreathtaking sets, mind-blowing special effects, over 350 lavish costumes and a fabulous cast and orchestra bring the magic of Disney&rsquo;s Aladdin to life on the West End stage.<br />\r\n&nbsp;<br />\r\nFeaturing all the songs from the classic Academy Award&reg;-winning film including &lsquo;Friend Like Me&rsquo;, &lsquo;A Whole New World&rsquo; and &lsquo;Arabian Nights&rsquo;, prepare to experience the unmissable &lsquo;theatrical magic&rsquo; (Daily Telegraph) that is Aladdin.<br />\r\n&nbsp;</p>\r\n",
        "VenueId": 10,
        "RunningTime": "2hr 30min (inc. interval)",
        "MinimumAge": "Children under 3 will not be admitted and under 16s must be seated next to an adult.",
        "ImportantNotice": "This production contains theatrical smoke and fog effects, pyrotechnics, strobe lighting and loud noises with an auditorium blackout of 8 seconds around 45 minutes into the performance. For your comfort and security, you may be subject to additional checks upon entering the theatre - we appreciate your patience and understanding while these are taking place.\r\nPlease note that the theatre is unable to accept large items of luggage in their cloakrooms at this time. If you are travelling with such items, storage solutions are available throughout London.",
        "MainImageUrl": "https://media.londontheatredirect.com/Event/Aladdin/event-list-image_15943.jpg",
        "SmallImageUrl": "https://media.londontheatredirect.com/Event/Aladdin/event-list-image_15943.jpg",
        "SpecialGraphics": "6",
        "ShortOfferText": "No booking fee",
        "LongOfferText": "<p><strong>NO BOOKING FEE OFFER</strong></p>\r\n\r\n<p>Valid Monday - Friday performances 16 April - 25 May 2018</p>\r\n\r\n<p>Book and pay by Sunday 20 May 2018</p>\r\n",
        "CurrentPrice": 92.5,
        "OfferPrice": 92.5,
        "StartDate": "2016-06-02T19:30:00",
        "EndDate": "2018-12-01T19:30:00",
        "EventMinimumPrice": 30.0,
        "Images": [{
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15552.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15553.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15554.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15555.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15556.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15557.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15558.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15559.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15560.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15561.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Aladdin/event-gallery-image_15562.jpg"
        }],
        "MultimediaContent": [{
            "Type": 0,
            "Url": "https://youtu.be/MtjuXb3dycw"
        }],
        "EventDetailUrl": "https://www.londontheatredirect.com/musical/1742/aladdin-tickets.aspx",
        "TagLine": "Soar into A Whole New World with Disney’s Aladdin at London’s Prince Edward Theatre.",
        "PrintAtHomeTicketsEnabled": false
    }, {
        "EventId": 384,
        "EventType": 1,
        "Name": "Wicked",
        "Description": "<p>WICKED<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">, the smash hit musical that tells the incredible untold story of the Witches of Oz, is pleased to announce the opening of its 25</span><span style=\"background-color:transparent; color:rgb(0, 0, 0)\">th</span><span style=\"background-color:transparent; color:rgb(0, 0, 0)\">&nbsp;new booking period on Monday (22 January 2018). Over 500,000 new tickets for &ldquo;</span>the world class West End musical&rdquo;&nbsp;<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">(Official London Theatre) are being released, with booking extended to&nbsp;</span>Saturday 25&nbsp;May 2019.</p>\r\n\r\n<p><span style=\"background-color:transparent; color:rgb(0, 0, 0)\">&ldquo;</span>The gravity-defying&nbsp;Wizard of Oz&nbsp;prequel<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">&rdquo; (Time Out London) recently became the&nbsp;</span>7th&nbsp;longest running&nbsp;show currently playing in the West End<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">. Already also the 15th&nbsp;longest running&nbsp;show in West End theatre history, WICKED has been seen by over&nbsp;</span>8.5 million people<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">&nbsp;at London&rsquo;s Apollo Victoria Theatre and played almost 5000 performances. Around the world, WICKED has won over&nbsp;</span>100 major awards<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">, including ten theatregoer-voted&nbsp;</span>WhatsOnStage Awards<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">&nbsp;(winning &lsquo;Best West End Show&rsquo; on three occasions) and two&nbsp;</span>Olivier Audience Awards<span style=\"background-color:transparent; color:rgb(0, 0, 0)\">&nbsp;in the UK.&nbsp;</span></p>\r\n\r\n<p>&quot;Wicked is amazing. Absolutely amazing&quot; -- Daily Mail<br />\r\n&quot;A remarkable kaleidoscope of magical shocks, surprises and sensations - Wicked works like a dream&quot; -- Evening Standard&nbsp;<br />\r\n&quot;It is magnificent to see a musical that manages to be both populist and intelligent at the same time&quot; -- The Sunday Telegraph</p>\r\n",
        "VenueId": 85,
        "RunningTime": "2hr 45min (inc. interval)",
        "MinimumAge": "Children under 3 will not be admitted.  Children under 16 years must be accompanied by an adult.",
        "ImportantNotice": "",
        "MainImageUrl": "https://media.londontheatredirect.com/Event/Wicked/event-list-image_15047.jpg",
        "SmallImageUrl": "https://media.londontheatredirect.com/Event/Wicked/event-list-image_15047.jpg",
        "SpecialGraphics": "6",
        "ShortOfferText": "No booking fee",
        "LongOfferText": "<p><strong>NO BOOKING FEE OFFER</strong></p>\r\n\r\n<p>Valid on &pound;39 - &pound;125 seats for Monday - Friday performances until 26 May 2018.</p>\r\n\r\n<p>Promotional rate cannot be applied retrospectively to previously purchased tickets.</p>\r\n\r\n<p>All tickets subject to availability.</p>\r\n",
        "CurrentPrice": 95.0,
        "OfferPrice": 95.0,
        "StartDate": "2015-01-01T19:30:00",
        "EndDate": "2019-05-25T19:30:00",
        "EventMinimumPrice": 21.0,
        "Images": [{
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15657.jpg"
        }, {
            "Width": 800,
            "Height": 460,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15658.jpg"
        }, {
            "Width": 800,
            "Height": 527,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15659.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15660.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15661.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15662.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15663.jpg"
        }, {
            "Width": 800,
            "Height": 490,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15664.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15665.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15666.jpg"
        }, {
            "Width": 800,
            "Height": 450,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15667.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15668.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15669.JPG"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15670.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15671.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15672.jpg"
        }, {
            "Width": 800,
            "Height": 587,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15673.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15674.JPG"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15675.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15676.jpg"
        }, {
            "Width": 800,
            "Height": 534,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15677.JPG"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15678.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15679.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15680.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15681.jpg"
        }, {
            "Width": 401,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15682.JPG"
        }, {
            "Width": 400,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15683.jpg"
        }, {
            "Width": 400,
            "Height": 600,
            "Url": "https://media.londontheatredirect.com/Event/Wicked/event-gallery-image_15791.jpg"
        }],
        "MultimediaContent": [{
            "Type": 0,
            "Url": "https://youtu.be/j93SF9TyhMY"
        }],
        "EventDetailUrl": "https://www.londontheatredirect.com/musical/384/wicked-tickets.aspx",
        "TagLine": "Defy Gravity with Wicked, one of London's most beloved musicals.",
        "PrintAtHomeTicketsEnabled": true
    }
    ]
    },*/


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
        //les proprieté de lobject quon va mettre dans e tableau
            { data: 'EventId'},
            { data: 'Name'},
            { data: 'Description'},
            //"VenueId": 85,//Location Id
            { data: 'VenueId'},
            //Mochkila khra bach njabdo limage khasa ndakhlo l array nkhaliwha mn ba3d
            // bookable hankhaliwha dima true 7it ma7do t3lan 3lih ya3ni bbokable
            { data: 'OfferPrice'}


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