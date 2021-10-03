<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link href="plugins/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="plugins/jquery-steps/steps.css" rel="stylesheet">

    <link rel="stylesheet" href="plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">

                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">





                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/logo.png" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                               <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="login.html"><i class="mdi mdi-power text-danger"></i>
                                    Déconnexion</a>
                            </div>
                        </div>
                    </li>   &

                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="" class="waves-effect">
                                <i class="icon-accelerator"></i><span> TABLEAU DE BORD
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-agenda"></i><span>Bilan d'inscription<span class="float-right menu-arrow"></span> </span></a>
                            <ul class="submenu">
                                <li><a href="bibliotheque.html">Développement Web/Mobile</a></li>
                                <li><a href="add-devis.html"></a></li>
                                <li><a href="all-devis.html">Voir tous les Dévis</a></li>
                            </ul>
                        </li>
                        
                       
                        <li>
                            <a href="taux.html" class="waves-effect"><i class="fas fa-sync-alt fa-spin"></i><span> Taux
                                    d'Avancement
                                </span> </a>

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-10">
                                <h4 class="page-title">Tableau de Bord</h4>
                            </div>
                            <div class="col-sm-2">
                            <a href="add_chantier.html">
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
                                    <span><i class="far fa-save"></i>
                                    </span> Ajoutez d'autres elements</button></a>
                                
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->


                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>NOM</th>
                                    <th>PREMONS</th>
                                    <th>NIVEAU D'ETUDE</th>
                                    <th>EMAIL</th>
                                    <th>MOT DE PASSE</th>
                                    <th>HEURE</th>
                                    <th><button class="btn btn-success"> MODIFIER</button></th>
                                </tr>
                            </thead>


                            
                        </table>

                    </div>

                </div>
                
            </div>

            <footer class="footer">
                © 2020 BMB FABRIQUE <span class="d-none d-sm-inline-block"> - Créé  par Bamba Oualama</span>.
            </footer>

        </div>
        

    </div>
   

    

   
</body>

</html>