<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <script type="text/javascript" src="ajax.js"></script>
    <title>
        Détails de commandes
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
        <div class="container-fluid py-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
                </ol>
                <h6 class="text-white font-weight-bolder ms-2">MEMBRES DU GROUPE</h6>
            </nav>

        </div>
    </nav>

    <!-- End Navbar -->
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="assets/img/bruce-mars.jpg" alt="..." class="w-100 border-radius-lg shadow-sm">
                        <a href="javascript:;"
                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit Image"></i>
                        </a>
                    </div>
                </div>
                <!-- MEMBRES DU GROUPE -->
                <div class="col-auto my-auto">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <span>
                                    <div class="h-100">
                                        <h5 class="mb-1">
                                            <span class="d-sm-inline d-none">Yao N'goran Eloge</span>
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            <span class="d-sm-inline d-none">Etudiant en Licence 2 MIAGE</span>
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="col-sm">
                                <span>
                                    <div class="h-100">
                                        <h5 class="mb-1">
                                            <span class="d-sm-inline d-none">TOURE Katinan</span>
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            <span class="d-sm-inline d-none">Etudiant en Licence 2 MIAGE</span>
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="col-sm">
                                <span>
                                    <div class="h-100">
                                        <h5 class="mb-1">
                                            <span class="d-sm-inline d-none">SLUE Karim</span>
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            <span class="d-sm-inline d-none">Etudiant en Licence 2 MIAGE</span>
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="col-sm">
                                <span>
                                    <div class="h-100">
                                        <h5 class="mb-1">
                                            <span class="d-sm-inline d-none">KOFFI Kouakou Constant</span>
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            <span class="d-sm-inline d-none">Etudiant en Licence 2 MIAGE</span>
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="col-sm">
                                <span>
                                    <div class="h-100">
                                        <h5 class="mb-1">
                                            <span class="d-sm-inline d-none">BAMBA Klanan</span>
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            <span class="d-sm-inline d-none">Etudiant en Licence 2 MIAGE</span>
                                        </p>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                    </div>
                </div>
            </div>
            <!-- FIN MEMBRES DU GROUPE -->
        </div>
    </div>

    <!-- modale pour entre les donnees -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Facturation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- formulaire -->
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">N°CLIENT</span>
                                        <input class="form-control" placeholder="Entrer le n°" type="text" id="client">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">N°COMMANDE</span>
                                        <input class="form-control" placeholder="Entrer le n°" type="number"
                                            id="commande">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary"
                                data-bs-dismiss="modal">Fermer</button>
                            <button type="button" id="showData" class="btn bg-gradient-primary"
                                onclick='go(document.getElementById("message"))' data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#modal-notification">Envoyer
                            </button>
                        </div>
                    </form>
                    <!-- fin formulaire -->
                </div>
            </div>
        </div>
    </div>
    <!-- FIN MODAL -->
    <div class="container-fluid py-4">
        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Clicker pour facturer
        </button><br>
        <div id="message">
            L'affichage du scrit PHP sera inserer ici</div>
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>