@extends('admin.page-layout')

@section('content')

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
                        <h4 class="mb-sm-0 font-size-18">Tableau de bord</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Tableau de bord /</li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">

                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mini-stats-wid" style="border-top: 3px solid #3d449e;">
                                <div class="card-body">
                                    
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-black-100 mb-2 font-weight-semibold">Nbre de clients</p>
                                            <h5 class="mb-0">120</h5>
                                        </div>

                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-book-bookmark"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="card blog-stats-wid" style="border-top: 3px solid #08a2e9c2 !important;">
                                <div class="card-body">

                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-black-100 mb-2 font-weight-semibold">Nbre conteneurs</p>
                                            <h5 class="mb-0">86000</h5>
                                        </div>

                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-note"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card blog-stats-wid" style="border-top: 3px solid #056b1fc2;">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-black-100 font-weight-semibold mb-2">Nbre Chiffres effectuées</p>
                                            <h5 class="mb-0">42.000.000 FCFA</h5>
                                        </div>

                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-message-square-dots"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card blog-stats-wid" style="border-top: 3px solid #e60808c2;">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-black-100 mb-2 font-weight-semibold">Nbre </p>
                                            <h5 class="mb-0">735</h5>
                                        </div>

                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-message-square-dots"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row --> 
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Statistiques</h4>
                                    <div id="revenue-chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Cartes</h4>
                                    <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div><!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->     
    
@endsection