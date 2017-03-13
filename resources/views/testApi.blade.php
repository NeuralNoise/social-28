@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
   @if (count($errors) > 0)
        <div class="alert alert-danger col-md-4 col-md-offset-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
      <h1>Test API</h1>
    </div>
@endsection
