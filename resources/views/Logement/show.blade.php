<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
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
                    <a class="nav-link " href="add_form"><i class="fas fa-user"></i><span>Ajout des Maisons</span></a>
                    <a class="nav-link active" href=""><i class="fas fa-user"></i><span>Mes maisons</span></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="table.html"><i class="fas fa-user-circle"></i><span>Les déclarants</span></a>
                    <a class="nav-link" href="table.html"><i class="fas fa-user-circle"></i><span>Les mises à jour</span></a>
                    <a class="nav-link" href="profile.html"><i class="fas fa-user-circle"></i><span>Profile</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Listes de mes maisons</h3>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-body">
                        @isset($status)
                            <input type="hidden" id="elena" value="{{$status}}">
                        @endisset
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                <tr>
                                    <td><strong>Nom de la maison : </strong></td>
                                    <td><strong>Prix</strong></td>
                                    <td><strong>lit</strong></td>
                                    <td><strong>douche</strong></td>
                                    <td><strong>garage</strong></td>
                                    <td><strong></strong></td>
                                    <td><strong>description</strong></td>
                                    <td  class="text-center"><strong>Operations</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($logement)
                                @forelse($logement as $logements)
                                    <tr>
                                        <td>{{$logements->nom}}</td>
                                        <td>{{$logements->lieu}}</td>
                                        <td>{{$logements->prix}}</td>
                                        <td>{{$logements->lit}}</td>
                                        <td>{{$logements->douche}}</td>
                                        <td>{{$logements->garage}}</td>
                                        <td>{{$logements->description}}</td>
                                        <td><a href="{{route('editForm' ,$logements->id )}}" class="btn btn-success" >Modifier</a></td>
                                        <td>
                                            <form action="{{route('delete' ,$logements->id )}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Supprimer" class="btn btn-dark"></form>
                                    </tr>
                                @empty
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">Pas de Donnée pour le moments</td>
                                    <td></td>
                                @endforelse
                                @endisset
                                @isset($log_bd)
                                <td></td>
                                <td></td>
                                <td class="text-center">Modification en Cours</td>
                                <td></td>
                                @endisset
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

</div>
    <div class="modal fade" id="tsukasa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier ma maison</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span><bold> X </bold></span>
                    </button>
                </div>
                <div class="modal-body">
                    @isset($log_bd)
                    <form action="{{route('edit' , $log_bd->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" value="{{$log_bd->nom}}" name="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Lieu</label>
                            <input type="text" value="{{$log_bd->lieu}}" name="lieu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Prix</label>
                            <input type="text" value="{{$log_bd->prix}}" name="prix" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Superficie</label>
                            <input type="text" value="{{$log_bd->superficie}}" name="superficie" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Lits</label>
                            <input type="text" value="{{$log_bd->lit}}" name="lit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Douche</label>
                            <input type="text" value="{{$log_bd->douche}}" name="douche" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Garage</label>
                            <input type="text" value="{{$log_bd->garage}}" name="garage" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description"  class="form-control">{{$log_bd->description}}</textarea>
                        </div>
                            <input type="submit" value="Soumettre ma modification" class="btn btn-warning mt-2">
                    </form>
                    @endisset


                </div>
            </div>
        </div>
    </div>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
        var elena = document.getElementById("elena").value;
        var modal = new bootstrap.Modal(document.getElementById('tsukasa'));
        if (elena === "ok"){
            modal.show();
        }
</script>
<script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>
