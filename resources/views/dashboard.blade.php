@extends('layouts.master')
@section('title')
	Dashboard
@endsection
@section('content')
@include('includes.message-block')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header>
				<h3>What is on your mind?</h3>
			</header>
			<form action="{{ route('post.create') }}" method="post">
				<div class="form-group">
					<textarea name="body" id="new-post" rows="5" placeholder="Whats on your mind?" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Post</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</section>

	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What's people says?</h3></header>
			@foreach($posts as $post)
				<article class="post">
					<p>{{ $post->body }}</p>
					<div class="info">
						Posted by {{ $post->user->first_name }} on {{ $post->created_at}}
					</div>
					<div class="interaction">
						<a href="">Like</a>
						<a href="">Dislike</a>
						<a href="">Edit</a>
						<a href="{{ route('post.delete',['post_id'=>$post->id]) }}">Delete</a>
					</div>
				</article>
			@endforeach
		</div>
	</section>
@endsection