@extends('layouts.master')

@section('title')
	Test View
@endsection

@section('content')
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="{{ route('testSave') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<button type="submit" class="btn btn-info">Save</button>
			</form>
		</div>
	</div>
@endsection