@extends('layout.main')

@section('content')
<br>


<br>
<div class="row g-2">

    
            <form method="POST" class="col-md-6" action="{{route('register')}}">
                @csrf
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Sign up</h5>

                <div class="col-md-9">
                    <label for="inputName" class="form-label">Name</label>
                    <div class="input-group mb-3">
                        <input type="text" id="inputName" name="name" class="form-control @error('name')
                    is-invalid
                  @enderror" placeholder="Name" aria-label="Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                </div>
            
                
                <div class="col-md-9">
                    <label for="InputEmail" class="form-label">Email Address</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email')
                    is-invalid
                  @enderror" name="email" placeholder="Email address" aria-label="Recipient's username" aria-describedby="InputEmail">
                        <span class="input-group-text" id="InputEmail">@example.com</span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            
                <div class="col-md-9">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="password"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control @error('password')
                    is-invalid
                  @enderror" name="password" aria-label="password" aria-describedby="password" id="password">
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            
                <div class="col-md-9">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="password_confirmation"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control" name="password_confirmation" aria-label="password_confirmation" id="password_confirmation" aria-describedby="password_confirmation">
            
                    </div>
                </div>
            
            
            
                <div class="col-9">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </div>
    
            </form>
    

@endsection
