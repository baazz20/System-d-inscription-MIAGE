<?php require 'config/security.php';
include 'controller/dataconn.php';?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        IVoire Finance
    </title>
    <!--     Fonts and icons     -->
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
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

<body class="g-sidenav-show   bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="dashboard.php">
                <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
                <span class="ms-1 font-weight-bold">MIAGE-GI UI Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  " href="dashboard.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)"
                                        fill="#FFFFFF" fill-rule="nonzero">
                                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                            <g id="shop-" transform="translate(0.000000, 148.000000)">
                                                <path class="color-background"
                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                    id="Path" opacity="0.598981585"></path>
                                                <path class="color-background"
                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                                    id="Path"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="tables.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Bureau</title>
                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)"
                                        fill="#FFFFFF" fill-rule="nonzero">
                                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                            <g id="office" transform="translate(153.000000, 2.000000)">
                                                <path class="color-background"
                                                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                    id="Path" opacity="0.6"></path>
                                                <path class="color-background"
                                                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                                                    id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Compte</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link  " href="billing.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Rounded-Icons" transform="translate(-2169.000000, -745.000000)"
                                        fill="#FFFFFF" fill-rule="nonzero">
                                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                            <g id="credit-card" transform="translate(453.000000, 454.000000)">
                                                <path class="color-background"
                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                    id="Path" opacity="0.593633743"></path>
                                                <path class="color-background"
                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                                                    id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Facturation</span>
                    </a>
                </li> -->
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages de profil</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="index.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Profil d'administration</title>
                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)"
                                        fill="#FFFFFF" fill-rule="nonzero">
                                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                            <g id="customer-support" transform="translate(1.000000, 0.000000)">
                                                <path class="color-background"
                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                    id="Path" opacity="0.59858631"></path>
                                                <path class="color-foreground"
                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                                                    id="Path"></path>
                                                <path class="color-foreground"
                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                                                    id="Path"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Profil</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link  " href="sign-in.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>document</title>
                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)"
                                        fill="#FFFFFF" fill-rule="nonzero">
                                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                            <g id="document" transform="translate(154.000000, 300.000000)">
                                                <path class="color-background"
                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                    id="Path" opacity="0.603585379"></path>
                                                <path class="color-background"
                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                    id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">S'identifier</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="sign-up.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>vaisseau spatial</title>
                                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)"
                                        fill="#FFFFFF" fill-rule="nonzero">
                                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                            <g id="spaceship" transform="translate(4.000000, 301.000000)">
                                                <path class="color-background"
                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                                                    id="Shape"></path>
                                                <path class="color-background"
                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"
                                                    id="Path"></path>
                                                <path class="color-background"
                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                    id="color-2" opacity="0.598539807"></path>
                                                <path class="color-background"
                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                    id="color-3" opacity="0.598539807"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">S'inscrire</span>
                    </a>
                </li> -->
            </ul>
        </div>
        <div class="sidenav-footer mx-3 mt-3 pt-3">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background"
                    style="background-image: url('assets/img/curved-images/white-curved.jpeg')"></div>
                <div class="card-body text-left p-3 w-100">
                    <div
                        class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                        <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                            id="sidenavCardIcon"></i>
                    </div>
                    <!-- <div class="docs-info">
                            <h6 class="text-white up mb-0">Besoin d'aide?</h6>
                            <p class="text-xs font-weight-bold">Veuillez consulter nos documents</p>
                            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard"
                                target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                        </div> -->
                </div>
            </div>
        </div>
    </aside>
    <main class="main-content mt-1 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Compte</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Facturation</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Facturation</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Écrivez ici...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none"> <?php echo $_SESSION['user_name']; ?></span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Nouveau message</span> Par Dior
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    Il y à 13 minutes
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Nouvel album</span> Par Assemian
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    Il y à 1 jour
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>carte de crédit</title>
                                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="Rounded-Icons"
                                                            transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g id="Icons-with-opacity"
                                                                transform="translate(1716.000000, 291.000000)">
                                                                <g id="credit-card"
                                                                    transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        id="Path" opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                                                                        id="Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Paiement effectué avec succès
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    Il y à 2 jours
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <?php
                                   
                                    if ($_GET['viewid']) {
                                        $vid = $_GET['viewid'];
                                    
                                    

                                    $ret = $conn->query("SELECT
                                        compte.numerocpte,
                                        compte.dateouverturecpte,
                                        compte.visaouverturecpte,
                                        compte.datefermeturecpte,
                                        compte.solde,
                                        compte.carteCredit,
                                        compte.idclient,
                                        client.nomclient,
                                        client.prenomclient,
                                        client.lienphoto
                                        FROM compte INNER JOIN client ON compte.idclient = client.idclient WHERE compte.numerocpte = $vid");
                                    $cnt = 1;
                                    if ($cnt > 0) {
                                        while ($row = $ret->fetch_row()) {

                                            ?>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xl-6 mb-xl-0 mb-4">
                            <div class="card bg-transparent shadow-xl">
                                <div class="overflow-hidden position-relative border-radius-xl"
                                    style="background-image: url('assets/img/curved-images/curved14.jpg');">
                                    <span class="mask bg-gradient-dark"></span>
                                    <div class="card-body position-relative z-index-1 p-3">
                                        <i class="fas fa-wifi text-white p-2">&nbsp;&nbsp;&nbsp;IF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                class="text-white text-sm opacity-5 mb-0">Ivoire Micro
                                                Finance</span></i>
                                        <h5 class="text-white mt-4 mb-5 pb-2">
                                            <?php $block = explode("   ", $row[5]);
                                             echo "$block[0]&nbsp;&nbsp;&nbsp;$block[1]&nbsp;&nbsp;&nbsp;$block[2]&nbsp;&nbsp;&nbsp;$block[3]"; ?>
                                        </h5>
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <div class="me-4">
                                                    <p class="text-white text-sm opacity-8 mb-0">Titulaire de la
                                                        carte</p>
                                                    <h6 class="text-white mb-0"><?php echo $row[7]." ". $row[8]; ?></h6>
                                                </div>
                                                <div>
                                                    <p class="text-white text-sm opacity-8 mb-0">Expire</p>
                                                    <h6 class="text-white mb-0"><?php echo $row[3]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                                <img class="w-60 mt-2" src="assets/img/logos/mastercard.png" alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="fas fa-landmark opacity-10"></i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0">Solde</h6>
                                            <span class="text-xs">Net total du compte</span>
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0"><?php echo $row[4]; ?>&nbsp;&nbsp;&nbsp;FCFA</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="fab fa-paypal opacity-10"></i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0">Paypal</h6>
                                            <span class="text-xs">Paiement indépendant</span>
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">112.455 FCFA</h5>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-12 mb-lg-0 mb-4">
                            <div class="card mt-4">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <h6 class="mb-0">Effectuer une Opreration</h6>
                                        </div>


                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <h7 class="mb-0">
                                        Choisissez l'opération a effectuer en cliquant sur le boutton
                                    </h7>
                                    <i class="ni ni-bell-55" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="cliquer sur le boutton"></i> <br><br>
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                                data-bs-target="#modal-form"><i
                                                    class="fas fa-paper-plane"></i>&nbsp;&nbsp;Transfert</button>
                                                    
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                                data-bs-target="#modal-form"><i
                                                    class="fas fa-plus"></i>&nbsp;&nbsp;Depot</button>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                                data-bs-target="#modal-form"><i class="ni ni-fat-delete"></i>&nbsp;&nbsp;Retrait</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <h6 class="mb-0">Factures</h6>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-outline-primary btn-sm mb-0">Voir tout</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 pb-0">
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">01 Mars 2020</h6>
                                        <span class="text-xs">#MS-415646</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        1800 FCFA
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                                        <span class="text-xs">#RV-126749</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        2500.000 FCFA
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                                        <span class="text-xs">#FB-212562</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        560 FCFA
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                                        <span class="text-xs">#QW-103578</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        120 FCFA
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                        <span class="text-xs">#AR-803481</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        300 FCFA
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">détails de facturation</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Oliver Liam</h6>
                                        <span class="mb-2 text-xs">Nom de la compagnie: <span
                                                class="text-dark font-weight-bold ms-2">Viking Burrito</span></span>
                                        <span class="mb-2 text-xs">Adresse e-mail: <span
                                                class="text-dark ms-2 font-weight-bold">oliver@burrito.com</span></span>
                                        <span class="text-xs">Numéro de TVA: <span
                                                class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="javascript:;"><i class="far fa-trash-alt me-2"></i>Effacer</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2"
                                                aria-hidden="true"></i>Éditer</a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Lucas Harper</h6>
                                        <span class="mb-2 text-xs">Nom de la compagnie: <span
                                                class="text-dark font-weight-bold ms-2">Stone Tech
                                                Zone</span></span>
                                        <span class="mb-2 text-xs">Adresse e-mail: <span
                                                class="text-dark ms-2 font-weight-bold">lucas@stone-tech.com</span></span>
                                        <span class="text-xs">Numéro de TVA: <span
                                                class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="javascript:;"><i class="far fa-trash-alt me-2"></i>Effacer</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2"
                                                aria-hidden="true"></i>Éditer</a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Ethan James</h6>
                                        <span class="mb-2 text-xs">Nom de la compagnie: <span
                                                class="text-dark font-weight-bold ms-2">Fiber Notion</span></span>
                                        <span class="mb-2 text-xs">Adresse e-mail: <span
                                                class="text-dark ms-2 font-weight-bold">ethan@fiber.com</span></span>
                                        <span class="text-xs">Numéro de TVA: <span
                                                class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="javascript:;"><i class="far fa-trash-alt me-2"></i>Effacer</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2"
                                                aria-hidden="true"></i>Éditer</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card h-100 mb-4">
                        <div class="card-header pb-0 px-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Votre transaction</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    <small>23 - 30 March 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Le plus récent</h6>
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-down"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                                            <span class="text-xs">27 March 2020, at 12:30 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                        - 2,500 FCFA
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-up"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Apple</h6>
                                            <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + 2,000 FCFA
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Hier</h6>
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-up"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                                            <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + 750 FCFA
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-up"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                                            <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + 1,000 FCFA
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-up"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Creative IF</h6>
                                            <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + 2,500 FCFA
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-exclamation"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Flux Web</h6>
                                            <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                        En attente
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal operation -->
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                        <label>Email</label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <label>Password</label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Password"
                                                aria-label="Password" aria-describedby="password-addon">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button"
                                                class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
$cnt = $cnt + 1;
    }}} else {?>
       <div class="row">
  <div class="col-md-6">
    <div class="card bg-cover text-center" style="background-image: url('https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/curved-images/curved1.jpg')">
      <div class="card-body z-index-2 py-9">
        <h2 class="text-white">Social Analytics</h2>
        <p class="text-white">
          Insight to help you create, connect, and convert. Understand Your Audience's Interests, Influence, Interactions, and Intent. Discover emerging topics and influencers to reach new audiences.
        </p>
        <label class="badge badge-light text-dark">Analytics</label>
      </div>
      <div class="mask bg-gradient-primary border-radius-lg"></div>
    </div>
  </div>
  <div class="col-md-6">
    <a href="javascript:;">
      <div class="card card-background move-on-hover">
        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1521620112244-f1d36327c766?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1300&amp;q=80')"></div>
        <div class="card-body pt-12">
          <h4 class="text-white">Search and Discovery</h4>
          <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
        </div>
      </div>
    </a>
  </div>
</div>
   <?php }?> <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-left">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            fabriqué <i class="fa fa-heart"></i> par
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                IF</a>
                            pour un meilleur web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative IF</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">À propos de nous</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Configurateur d'interface utilisateur logicielle</h5>
                    <p>Voir nos options de tableau de bord.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Couleurs de la barre latérale</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Type Sidenav</h6>
                    <p class="text-sm">Choisissez entre 2 types de sidenav différents.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">Blanc</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">Vous pouvez modifier le type de sidenav uniquement sur la
                    vue du bureau.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>