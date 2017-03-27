@extends('layouts.master')

@section('title')
    Demo Localization
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
        <div class="col-md-6">
          {{ session('locale') }}
          {{  Session::get('locale') }}
            <h3>{{ trans('signup.signup') }}</h3>
            <form action="{{ route('signup') }}" method="POST">
                <div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
                    <label for="email">{{ trans('signup.youremail') }}</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group {{ $errors->has('first_name') ? 'has-error':''}}">
                    <label for="first_name">{{ trans('signup.firstname') }}</label>
                    <input type="text" placeholder="" name="first_name" id="first_name" class="form-control" value="{{ Request::old('first_name') }}" autocomplete="off">
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error':''}}">
                    <label for="password">{{ trans('signup.password') }}</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ Request::old('password') }}">
                </div>

                <button type="submit" class="btn btn-primary">{{ trans('signup.signup') }}</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
