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

        <!-- Main Content -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- Page Title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Liste des Commandes</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Liste des commandes enregistrées</h4>
                                    <br />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Quantité</th>
                                                <th>Prix</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            @foreach ($dataa as $itemm)
                                            @if ($item['id_service'] == $itemm['id'])
                                            <tr>
                                                <td>{{ $itemm['nom'] }}</td>
                                                <td>{{ $item['quantite'] }}</td>
                                                <td>{{ $itemm['prix'] }} DT</td>
                                                <td>{{ $item['quantite'] * $itemm['prix'] }} DT</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Footer -->
            @include('Administrateur.layout.footer')

        </div> <!-- main-content -->

    </div> <!-- layout-wrapper -->

    <!-- Bootstrap & Core JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
