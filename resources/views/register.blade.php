@extends('layout.app')
@section('title')
    Register Page
@endsection
@section('form')
    <div class="card">
        <form action="{{ route('registerReq') }}" method="POST">
                @csrf
                <div class="card-img text-center">
                    <img src="{{ asset('assets/img/login.png') }}" alt="login.png">
                </div>
                <x-alert />
                <div class="card-body">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First Name"> 
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Your Last Name"> 
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email"> 
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" name="username" id="username" class="form-control" placeholder="Enter Your Username"> 
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password"> 
                    </div>
                    <button type="submit" class="btn btn-primary">Register Now</button>
                    <div class="card-footer mt-2">
                        <a href="{{ route('login') }}">Already Have Account</a>
                    </div>
            </form>
           
        </div>
    </div>
@endsection