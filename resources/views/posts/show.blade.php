@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<h4>{{ $post->order }}</h4>
			<h4>{{ $post->category_id }}</h4>
			<p class="lead">{{ $post->content }}</p>
			<h4>{{ $post->status }}</h4>
		</div>

		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">
					<lable>Create At:</lable>
					<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<lable>Last Updated:</lable>
					<p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						 {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						<!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->		
					</div>

					<div class="col-sm-6">
						<!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class'=> 'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						{{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection