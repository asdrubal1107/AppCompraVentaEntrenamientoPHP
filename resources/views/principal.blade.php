<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
    <meta name="author" content="Incanatoit.com">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <link rel="shortcut icon" href="vendors/img/favicon.png">
    <title>Sistema facturacion</title>
    <!-- Icons -->
    <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="vendors/css/style.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">
        @include('plantilla.header')

        <div class="app-body">
            @include('plantilla.sidebar')

            <!-- Contenido Principal -->
            @yield('contenido')
            <!-- /Fin del contenido principal -->
        </div>



        @include('plantilla.footer')
    </div>

    <script src="js/app.js"></script>
    <!-- Bootstrap and necessary plugins -->
    <script src="vendors/js/jquery.min.js"></script>
    <script src="vendors/js/popper.min.js"></script>
    <script src="vendors/js/bootstrap.min.js"></script>
    <script src="vendors/js/pace.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="vendors/js/Chart.min.js"></script>
    <!-- GenesisUI main scripts -->
    <script src="vendors/js/template.js"></script>
    <!-- Sweet alert -->
    <script src="vendors/js/sweetalert2.js"></script>
</body>

</html>