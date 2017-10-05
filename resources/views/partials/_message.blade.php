@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif



<?php echo "hello world"; ?>

<p>hello world</p>

{{ print_r($validation->messages()) }}
@if ($errors->any())
	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
			@foreach ($errors->all() as $error) 
				<li>{{ $error }}</li>
			@endforeach	
		</ul>
		
	</div>

@endif

