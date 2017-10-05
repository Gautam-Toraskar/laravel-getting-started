@extends('main')

@section('title', 'Create')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Submit the post:</h1>
			{!! Form::open(['route' => 'posts.store']) !!}
				{!! Form::label('title', 'Title:') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}

				{!! Form::label('body', 'Body:') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
				<br>
				{!! Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block']) !!}
			{!! Form::close() !!}
			<!-- <form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form> -->
		</div>
	</div>
@endsection