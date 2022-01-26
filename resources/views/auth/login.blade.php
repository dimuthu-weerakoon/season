@extends('layout.main')

@section('content')
<br>
<br>
<br>
<div class="text-center">
    <main class="form-signin" style="
        width: 100%; padding: 15px;
         max-width: 330px; 
         margin: auto; 
         ">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating" style="z-index: 2;">
                <input type="email" style=" 
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating" style="z-index: 2;">
                <input type="password" style=" 
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" style="font-weight: 400"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</div>

@endsection