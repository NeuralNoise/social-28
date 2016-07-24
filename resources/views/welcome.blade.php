@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>

        <div class="col-md-6">
            <h3>Sign In</h3>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
    </div>
@endsection