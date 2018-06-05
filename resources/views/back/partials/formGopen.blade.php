<div class="form-group">

	@if($required)
		@php

			$requiredStar = '*';

		@endphp

	@else

		@php

			$requiredStar = '';

		@endphp

	@endif

	{!! Form::label( $name , $textLabel. $requiredStar  , ['class' => 'col-sm-2 control-label' , 'for' => $name] ) !!}


	<div class="col-sm-10">

