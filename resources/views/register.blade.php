@extends('layout.layout-guest')

@section('contents')
<div class="text-white d-flex justify-content-center p-3">
    <h1>Hello, Welcome to<img class="movielogo" src="assets/movielist-logo.png" alt=""></h1>
</div>
<div class="d-flex justify-content-center">
    <form class="text-white form-width bg-dark rounded p-3" action="/register" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="username" name="username" class="form-control bg-secondary text-white" id="exampleInputUsername1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" name="email" class="form-control bg-secondary text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control bg-secondary text-white" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control bg-secondary text-white" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-danger mb-3">Register</button>
        <div class="mb-3 d-flex">
            <p class="me-1">Already have an account?</p>
            <a class="nav-link text-danger" href="/login">Login now!</a>
        </div>
      </form>
     </div>
@endsection
