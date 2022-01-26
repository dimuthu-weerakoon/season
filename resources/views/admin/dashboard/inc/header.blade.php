<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bs css -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- custom css -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" />

    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>{{config('app.name')}}</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle text-dark">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="w-100">
            <nav class="navbar navbar-expand-lg w-100 ">
                <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class='bx bx-menu lead'></i>
                </button>

                <div class="collapse navbar-collapse ms-lg-5 ms-0" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-dark" href="{{route('season.index')}}">preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-dark" href="#">Pricing</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  text-dark" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                    </ul>
                    <div class="ms-lg-auto d-flex">
                        <form class="form-inline my-2 my-lg-0 d-flex align-items-center">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        </form>
                        <div class="dropdown">
                            <div class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle  text-dark" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img width="32" height="32" class="profile-img"
                                src="https://images.unsplash.com/photo-1553867745-6e038d085e86?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=513&q=80" />
                                <span>{{Auth::user()->name}}</span>
                            </a>


                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li> <div class="card-body">
            <h6 class="card-title" style="font-family: 'Poppins', sans-serif;">Personal</h6>

            <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50"
                class="rounded-circle">
            <span style="font-family: 'Outfit', sans-serif;font-weight: 500">
                 {{Auth::user()->name}}
            </span>
            <br>
            <br>
            <ul class="list-unstyled">
                <li><i class="bi bi-envelope"></i>
                    <small style="font-family: 'Outfit',san-serif;">
                         {{ Auth::user()->email }}

                    </small>

                </li>
                <li><i class="bi bi-person"></i> <small style="font-family: 'Outfit',san-serif;"
                        class="text-muted">User</small> </li>
            </ul>

            <p class="card-text p-6">
                <i class="bi bi-gear"></i> <a href="#"><small style="font-size: 0.7em">Manage
                        profile settings</small></a>
            </p>
        </div></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{route('logout')}}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                @csrf
            </form>
        </li>
      </ul>


                    </div>

                </div>
            </nav>
        </div>




    </header>
    <div class="l-navbar bg-dark" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Season Manager</span>
                </a>

                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>

                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>

                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span>
                    </a>

                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>

                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>

                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </div>
            <a class="nav_link" href="{{route('logout')}}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
                <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                @csrf
            </form>
            </a>
        </nav>
    </div>
