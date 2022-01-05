@extends('layout.app')
@section('title')
    login Page
@endsection
@section('form')
<form action="{{ route('loginReq') }}" method="POST">
@csrf
<div class="card">
    <x-alert />
    <div class="card-body">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email"> 
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password"> 
        </div>
        <button type="submit" class="btn btn-primary">login Now</button>

        <div class="card-footer mt-2 d-flex justify-content-between">
            <a href="{{ route('register') }}">Create New Account</a>
        </div>
    </div>
</div>
</form>
@endsection