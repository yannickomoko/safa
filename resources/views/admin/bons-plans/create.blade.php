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
                                <h4 class="mb-sm-0 font-size-18">Nouvel Bon plan</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">Tableau de bord /</li>
                                        <li class="breadcrumb-item">Bons plans /</li>
                                        <li class="breadcrumb-item active"> Ajouter un Bon plan</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body border-top">
                                    <h4 class="card-title">Ajouter un Bon plan</h4>
                                    <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">
                                                        Titre
                                                    </label>
                                                    <input type="text" class="form-control" name="titre" value=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        {{ $errors->first('titre') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Lieu</label>
                                                    <select class="form-control select2-templating" name="lieu">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="lieu1">Tchad1</option>
                                                        <option value="lieu2">Tchad2</option> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">
                                                    Featured Image</label>
                                                    <input type="file" class="form-control" name="image" value="">
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">
                                                    Description du Bon plan</label>
                                                    <textarea class="form-control" value="" name="description" rows="10"></textarea>
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Sauvegarder
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Annuler
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content --> 
@endsection