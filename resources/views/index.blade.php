@extends('layout.app')
@section('title')
    Dasboard
@endsection
@section('form')
    <div class="card">
        <div class="card-body shadow-lg">
            <h1>Welcome To Dashboard</h1>
           <a href="{{ route('logout') }}" class="btn btn-outline-primary btn-block">Logout</a>
        </div>
        
    </div>
@endsection