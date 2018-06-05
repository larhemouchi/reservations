@extends('layouts.app')



@section('content')

<body>
<div id="waitingDiv"></div>
<!--[if lt IE 8]>
<p class="browserupgrade">
	#oldbrowser</p>
<![endif]-->



<section class="container">

	<div class="row">
		<div class="col-sm-3">
			<center><h2>{{$show->title}}</h2></center>
            <a href="#dates">

			<img src="{{asset('storage/'.$show->poster_url)}}" alt="-" width="380" height="480" class="pb-15">
            </a>
		</div>
		<div class="col-sm-9">
			 <fieldset>
			 			<p>
				</p><p>Sandrine Bergot, Quentin Halloy, Baptiste Isaia, Philippe Lecrenier, Renaud Riga &nbsp;</p><p> autrement dit un montage 
				d’extraits de grosses productions issus du cinéma américain. Le Collectif Mensuel en assure 
				les dialogues, le doublage, la musique et les bruitages sous nos yeux fascinés. Face à l
				a décision du gouvernement qui souhaite taxer les très hauts revenus, le 
				très puissant consortium des multinationales organise sa riposte et promet croissance en 
				échange d’une énième cure d’austérité. Dans le même temps, une journaliste d’investigation
				 enquête sur les évasions fiscales de ces mêmes entreprises. Mais la veille de la parution 
				 de son article, celui-ci est censuré, et la journaliste limogée. S’en suit une missive, 
				 véritable déclaration de guerre à la classe dominante, à laquelle le peuple ne manque pas 
				 de répondre, nous entraînant alors dans un scénario catastrophe (ou idyllique) où une 
				 fausse-vraie révolution éclate. Tous les ingrédients du blockbuster sont réunis dans cet 
				 astucieux détournement : les héros manichéens, les courses-poursuites, les explosions 
				 spectaculaires. Plus que jamais, les impertinents compères, épaulés par Nicolas Ancion, érigent 
				 l’humour en arme de contestation, 
				 permettant de traiter avec connivence les profonds dysfonctionnements politiques et sociétaux 
				 qui nous accablent. Ce spectacle-performance, farouchement drôle, est à voir et à revoir, 
				 car il n’est pas sans rappeler une certaine </span>contemporaine</span><br></p><p>
<strong>Prix : {{$show->price}} $ <br></strong></p>
		
		 </fieldset>
	</div></div>
<hr id="dates">
    	<h3>Les dates</h3>
    
	<div class="table-responsive ">
			<table class="table table-striped table-condensed">
				<tbody><tr>
					<th width="35%">
						Date
					</th>
					<th width="10%">
						Heure
					</th>
					<th class="hidden-xs" width="35%">
						&nbsp;
					</th>
					<th width="20%">

					</th>
				</tr>			<tr>
						<td>
							<a href="">Le vendredi 1er juin 2018</a>
						</td>
						<td>
							19:00
						</td>
						<td class="hidden-xs">
							
						</td>
						<td class="xs-pull-left">
							<div class="pull-right btn btn-sm btn-danger mb-0">Complet</div>
						</td>
					</tr>			<tr>
						<td>
							<a href="?q=159C2526-A3C2-2316-BBBD-343D0A07E819&amp;module=QUANTITY">Le jeudi 31 mai 2018</a>
						</td>
						<td>
							20:00
						</td>
						<td class="hidden-xs">
							 <i class="fa fa-exclamation" aria-hidden="true"></i> 3 élément(s) restant(s) <i class="fa fa-exclamation" aria-hidden="true"></i>
						</td>
						<td class="xs-pull-left">
							<a href="?q=159C2526-A3C2-2316-BBBD-343D0A07E819&amp;module=QUANTITY" class="pull-right btn btn-sm btn-primary mb-0">Réserver</a>
						</td>
					</tr>			<tr>
						<td>
							<a href="">Le vendredi 1er juin 2018</a>
						</td>
						<td>
							20:00
						</td>
						<td class="hidden-xs">
							
						</td>
						<td class="xs-pull-left">
							<div class="pull-right btn btn-sm btn-danger mb-0">Complet</div>
						</td>
					</tr>			<tr>
						<td>
							<a href="?q=D6C6F324-ECB7-0CD1-52C4-8F17D49BF8E6&amp;module=QUANTITY">Le samedi 2 juin 2018</a>
						</td>
						<td>
							19:00
						</td>
						<td class="hidden-xs">
							 <i class="fa fa-exclamation" aria-hidden="true"></i> 1 élément(s) restant(s) <i class="fa fa-exclamation" aria-hidden="true"></i>
						</td>
						<td class="xs-pull-left">
							<a href="?q=D6C6F324-ECB7-0CD1-52C4-8F17D49BF8E6&amp;module=QUANTITY" class="pull-right btn btn-sm btn-primary mb-0">Réserver</a>
						</td>
					</tr>			<tr>
						<td>
							<a href="">Le dimanche 3 juin 2018</a>
						</td>
						<td>
							16:00
						</td>
						<td class="hidden-xs">
							
						</td>
						<td class="xs-pull-left">
							<div class="pull-right btn btn-sm btn-danger mb-0">Complet</div>
						</td>
					</tr></tbody></table></div>	

	<div class="text-left">
		<a href="{{url('shows')}}" class="btn btn-primary btn-warning">Retour</a>
	</div>

</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>
					Contact :<br>
					Théâtre de Liège<br>
					<a href="mailto:billetterie@theatredeliege.be">billetterie@theatredeliege.be</a> - <a href="tel:04 342 00 00">04 342 00 00</a>
				</p>
			</div>
			<div class="col-md-6 text-right">
				<p>
					<br>
					<br>
					<a href="#" data-toggle="modal" data-target="#conditions" target="_blanck">Conditions générales et protection de la vie privée</a> | Powered by <a target="_blank" href="https://www.utick.be">Utick</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<div class="modal fade" id="conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h2>Conditions générales et protection de la vie privée</h2>
				<p>
					Extrait de nos conditions générales : Le billet électronique ou voucher n’est ni échangeable, ni remboursable et ne peut être annulé. Il est personnel et incessible et sa reproduction est interdite. Lors des contrôles à l’entrée du lieu de l’événement, une pièce d’identité officielle et en cours de validité avec photo pourra être demandée pour identifier l’acheteur des billets (passeport, permis de conduire ou carte d’identité). Ce billet codé est uniquement valable pour le lieu, la séance, la date et l’heure précisés ci-dessus. Dans les autres cas, ce billet ne sera pas valable. Il est recommandé de se présenter sur le lieu du spectacle au moins 30 minutes avant le début de l’évènement. Les retardataires ne pourront plus entrer après le début de la représentation et ne pourront prétendre à aucun remboursement. 3 minutes avant le début du spectacle, la salle est dénumérotée. Le spectateur ne pourra plus prétendre s’installer sur le siège inscrit sur son ticket. Voir l'ensemble de nos conditions générales sur notre site www.theatredeliege.be				</p>
			</div>
		</div>
	</div>
</div>






</body>




@endsection