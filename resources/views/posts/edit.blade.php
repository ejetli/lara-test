@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')

@stop

@section('content')
	

	<div class="row">
		<div class="col-md-8">	
			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
				<div class="col-md-8">
					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
					
					{{ Form::label('order', 'Order:') }}
					{{ Form::text('order', null, ["class" => 'form-control input-lg']) }}
					
					{{ Form::label('category', 'Category:') }}
					{{ Form::text('category_id', null, ["class" => 'form-control input-lg']) }}

					{{ Form::label('content', 'Content:') }}
					{{ Form::text('content', null, ["class" => 'form-control input-lg']) }}

					{{ Form::label('status', 'Status:') }}
					{{ Form::text('status', null, ["class" => 'form-control input-lg']) }}
					
					<br>

					{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger')) !!}
					<!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
					<!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
					{{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
					
				</div>
		</div>		
	</div>

	<br>
	<div class="row">
		<div class="col-md-5">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				
			</div>
		</div>
	</div>	
		{!! Form::close() !!}

@stop

@section('scripts')

@endsection
