@extends('main')

@section('title', '| All Posts')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			<a href=" {{ route('posts.create') }}" class="btn btn-md btn-block btn-info btn-h1-spacing">Create New Posts</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div><!--end of row-->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Order</th>
					<th>Category</th>
					<th>Content</th>
					<th>Status</th>
					<th>Created At</th>
					<th>..</th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ substr($post->title, 0, 50)}}{{ strlen($post->title ) > 50 ? "..." : ""  }}</td>
							<td>{{ substr($post->order, 0, 50)}}{{ strlen($post->order) > 50 ? "..." : "" }}</td>
							<td>{{ substr($post->category_id, 0, 50)}}{{ strlen($post->category_id) > 50 ? "..." : "" }}</td>
							<td>{{ substr($post->content, 0, 50)}}{{ strlen($post->content) > 50 ? "..." : "" }}</td>
							<td>{{ substr($post->status, 0, 50)}}{{ strlen($post->status) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

			<div class="text-center">
			   {{ $posts->links() }}
			</div>

		</div>
	</div>
@stop