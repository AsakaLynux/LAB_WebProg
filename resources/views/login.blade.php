@extends('layout.layout-guest')

@section('contents')
<div class="text-white d-flex justify-content-center p-3"
    <h1>Hello, Welcome to<img class="movielogo" src="assets/movielist-logo.png" alt=""></h1>
</div>
<div class="d-flex justify-content-center">
    <form class="text-white form-width bg-dark rounded p-3" action="/login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control bg-secondary text-white" id="exampleInputEmail1" aria-describedby="emailHelp"
          name="email" placeholder="email" value={{Cookie::get('myEmail') !== null ? Cookie::get('myEmail') : ""}}>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control bg-secondary text-white" id="exampleInputPassword1"
          name="password" placeholder="password" value={{Cookie::get('myPassword') !== null ? Cookie::get('myPassword') : ""}}>
        </div>
        <button type="submit" class="btn btn-danger mb-3">Login</button>
        <input type="checkbox" name="remember" id="Remember" checked{{Cookie::get('myEmail') !== null && Cookie::get('myPassword') !== null}}> Remember Me
        <div class="mb-3 d-flex">
            <p class="me-1">Don't have an account?</p>
            <a class="nav-link text-danger" href="/register">Register now!</a>
        </div>
      </form>
</div>
@endsection

