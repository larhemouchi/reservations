@extends('layouts.app')


@section('content')

  <div class="container">
	<div class="row">
	<div class="col-md-12">
		<h1>La liste des representations</h1>
		<div class="pull-left">

    

<table class="table">

			<head>
				<tr>
					<th>titre</th>
					<th>except</th>
					<th>prix</th>
				</tr>
		</head>
<body>
	<?php 
$t=count($maps_json["hydra:member"]);
?>


@for ($i =0 ; $i <$t ; $i++)
<tr>
<td>{{ $maps_json["hydra:member"][$i]['name'] }}</td>
    <td>{{ $maps_json["hydra:member"][$i]["excerpt"]}}</td>
        <td>{{$maps_json["hydra:member"][$i]["priceRange"] }}</td>
	</td>
	</tr>

@endfor
			
		
	
   

</body>

</table>

</div>
</div>
</div>
</div>
@endsection