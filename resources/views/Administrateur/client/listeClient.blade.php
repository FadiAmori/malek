<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Liste des Commandes - Espace Administrateur Rapidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body data-sidebar="dark">

    <div id="layout-wrapper">

        <!-- Navbar -->
        @include('Administrateur.layout.navbar')

        <!-- Sidebar -->
        @include('Administrateur.layout.sidebar')
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste de clients</h4>

                                 
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les clients</h4>
                                       <br />
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>E-mail</th>
                                                <th>Numéro de téléphone</th>
												<th>Ville</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
                                          
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td style="vertical-align: middle;">{{$item->nom}}</td>
                                                <td style="vertical-align: middle;">{{$item->prenom}}</td>
                                                <td style="vertical-align: middle;">{{$item->email}}</td>
                                                <td style="vertical-align: middle;">{{$item->num_tel}}</td>
                                                <td style="vertical-align: middle;">{{$item->ville}}</td>
                                                <td>
                                                <a href="/modifierClient/{{$item->id}}" class="btn btn-primary">Modifier</a>
                                                	<a href="/supprimerClient/{{$item->id}}" class="btn btn-danger" >Supprimer </a>
                                                </td>
                                               
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                      

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Rapidos.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Digilife
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{ asset('js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.js')}}"></script>
        
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 09:51:50 GMT -->
</html>