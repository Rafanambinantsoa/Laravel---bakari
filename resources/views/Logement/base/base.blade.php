<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="{{asset('assets1/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets1/fonts/fontawesome-all.min.css')}}">
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('add_logement')}}"><i class="fas fa-user"></i><span>Ajout des Maisons</span></a>
                    <a class="nav-link " href="{{route('show_logement')}}"><i class="fas fa-user"></i><span>Mes maisons</span></a></li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('activationForm')}}"><i class="fas fa-user-circle"></i><span>Activation compte</span></a>
                    <a class="nav-link" href="{{route('vendus')}}"><i class="fas fa-user-circle"></i><span>Mes maisons vendus</span></a>
                    <a class="nav-link" href="{{route('agent')}}"><i class="fas fa-user-circle"></i><span>Profils des Agents</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">@auth {{Auth::user()->name}}  </span><img class="border rounded-circle img-profile" src="{{asset('/images/'.Auth::user()->photo)}}">@endauth</a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            {{-- section --}}
            @yield("body-container")
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{asset('assets1/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets1/js/theme.js')}}"></script>
</body>
</html>