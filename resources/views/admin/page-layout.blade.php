<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Design & Develop by EY & Compagny" name="description" />
    <meta content="EY & Compagny" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('') }}/admin/assets/images/logo-boca.png">

    <!-- DataTables -->
    <link href="{{ url('') }}/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('') }}/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ url('') }}/admin/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ url('') }}/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ url('') }}/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('') }}/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('') }}/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>
 
  
@include('admin.layout.header')


@include('admin.layout.sidebar')


@yield('content')


@include('admin.layout.footer')
 

     <!-- JAVASCRIPT -->

        <!-- JAVASCRIPT -->
        <script src="{{ url('') }}/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/node-waves/waves.min.js"></script>
    
        <!-- Required datatable js -->
        <script src="{{ url('') }}/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/select2/js/select2.min.js"></script>
    
        <!-- Responsive examples -->
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ url('') }}/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    
        <!-- Datatable init js -->
        <script src="{{ url('') }}/admin/assets/js/pages/datatables.init.js"></script>
    
        <!-- form advanced init -->
        <script src="{{ url('') }}/admin/assets/js/pages/form-advanced.init.js"></script>
    
        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    
        <!-- apexcharts init -->
        <script src="assets/js/pages/apexcharts.init.js"></script>
    
        <script src="assets/js/pages/profile.init.js"></script>
    
        <script src="{{ url('') }}/admin/assets/js/app.js"></script>
        <script src="{{ url('') }}/admin/assets/js/main.js"></script>
        
    
        </body>
     
    </html>       