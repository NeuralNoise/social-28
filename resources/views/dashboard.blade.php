@extends('layouts.master')
@section('title')
	Dashboard
@endsection
@section('content')
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
			<article class="post">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="info">
					Posted by aman on 25th July 2016
				</div>
				<div class="interaction">
					<a href="">Like</a>
					<a href="">Dislike</a>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</div>
			</article>

			<article class="post">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="info">
					Posted by aman on 25th July 2016
				</div>
				<div class="interaction">
					<a href="">Like</a>
					<a href="">Dislike</a>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</div>
			</article>
		</div>
	</section>
@endsection