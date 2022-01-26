<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }



        }
    </style>


</head>

<body>

    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <div class="float-end">
                    @if (Route::has('login'))

                    @auth
                    <a href="{{ url('/home') }}"
                        style="font-family: 'Outfit', sans-serif; font-weight: 400" class="text-sm text-gray-700 dark:text-gray-500 text-decoration-none text-dark me-2">Home</a>



                    <a id="navbarDarkDropdownMenuLink" class="dropdown-toggle text-decoration-none text-dark" href="#"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="caret"></span>

                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">

                    </a>

                    <ul class="dropdown-menu shadow" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li>

                            <div class="card-body">
                                <h6 class="card-title" style="font-family: 'Poppins', sans-serif;">Personal</h6>

                                <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">
                                <span style="font-family: 'Outfit', sans-serif;font-weight: 500"> {{Auth::user()->name}} </span>
                                <br>
                                <br>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-envelope"></i>
                                        <small style="font-family: 'Outfit',san-serif;"> {{ Auth::user()->email }} </small>

                                    </li>
                                    <li><i class="bi bi-person"></i> <small style="font-family: 'Outfit',san-serif;" class="text-muted">User</small> </li>
                                </ul>

                                <p class="card-text p-6">
                                    <i class="bi bi-gear"></i> <a href="#"><small style="font-size: 0.7em">Manage profile settings</small></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a style="font-family: 'poppins', sans-serif;" class="dropdown-item" href="{{route('logout')}}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign
                                out<i class="bi bi-box-arrow-left float-end"></i></a>
                            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                                @csrf
                            </form>
                        </li>

                    </ul>


                    @else
                    <a href="{{ route('login') }}"
                        class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 text-decoration-none">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class=" btn btn-outline-primary ml-4 text-sm text-gray-700 dark:text-gray-500 text-decoration-none">Signup</a>
                    @endif
                    @endauth

                    @endif

                </div>
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                        role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4" style="font-family: 'Bebas Neue', cursive;">Season Ticket Management System</span>
                </a>

            </header>
