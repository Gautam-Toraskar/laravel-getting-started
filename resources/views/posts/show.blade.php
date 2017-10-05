@extends('main')

@section('title', '- View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h3> {{ $post->title }} </h3>

			<h2 class="lead"> {{ $post->body }} </h2>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At: </dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated: </dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-md-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}						
					</div>
					<div class="col-md-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE' ]) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection