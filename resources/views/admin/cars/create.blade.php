@extends('admin.page-layout')

@section('title', 'Cars')
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
                                <h4 class="mb-sm-0 font-size-18">Nouvel car</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">Tableau de bord /</li>
                                        <li class="breadcrumb-item">Cars /</li>
                                        <li class="breadcrumb-item active"> Ajouter un car</li>
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
                                    <h4 class="card-title">Ajouter un Car</h4>
                                    <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" name="name" value="">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Price</label>
                                                    <input type="text" class="form-control" name="price" value="">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Année</label>
                                                    <select class="form-control select2-search-disable" name="years">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="2010-2011">2010-2011</option>
                                                        <option value="2012-2013">2012-2013</option>
                                                        <option value="2014-2015">2014-2015</option>
                                                        <option value="2016-2017">2016-2017</option>
                                                        <option value="2018-2019">2018-2019</option>
                                                        <option value="2020-2021">2020-2021</option>
                                                        <option value="2022-2023">2022-2023</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Max Mileage</label>
                                                    <select class="form-control select2-search-disable" name="mileage">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="0-1000">0-1000</option>
                                                        <option value="1000-5000">1000-5000</option>
                                                        <option value="5000-10000">5000-10000</option>
                                                        <option value="10000-20000">10000-100000</option>
                                                        <option value="100000-150000">100000-150000</option>
                                                        <option value="150000-200000">150000-200000</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Fuel Type</label>
                                                    <select class="form-control select2-search-disable" name="fueltype">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Essence">Essence</option> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Make</label>
                                                    <select class="form-control select2-templating" name="make_id">
                                                        <option selected disabled value="">Choose...</option>
                                                        @foreach ($getMake as $value)
                                                            <option {{ (old('make_id') == $value->id) ? 'selected' : '' }} value="{{ $value->id }}">
                                                                {{ $value->name }}
                                                            </option>
                                                        @endforeach
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Engine</label>
                                                    <select class="form-control select2-search-disable" name="engine">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="1000-2000">1000-2000</option>
                                                        <option value="2000-4000">2000-4000</option>
                                                        <option value="4000-6000">4000-6000</option>
                                                        <option value="6000-8000">6000-8000</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Model</label>
                                                    <select class="form-control select2-templating" name="model">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="diesel">test</option>
                                                        <option value="essence">test</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Interior</label>
                                                    <select class="form-control select2-search-disable" name="interior">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="Bleu">Bleu</option>
                                                        <option value="Rouge">Rouge</option> 
                                                        <option value="Noir">Noir</option> 
                                                        <option value="Gris">Gris</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Exterior</label>
                                                    <select class="form-control select2-search-disable" name="exterior">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="Bleu">Bleu</option>
                                                        <option value="Rouge">Rouge</option> 
                                                        <option value="Noir">Noir</option> 
                                                        <option value="Gris">Gris</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Transmision</label>
                                                    <select class="form-control select2-search-disable" name="trans">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="Manual">Manual</option>
                                                        <option value="Automatic">Automatic</option>
                                                        <option value="semi-automatic">Semi-automatic</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Seats</label>
                                                    <select class="form-control select2-search-disable" name="seats">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="2">2</option>
                                                        <option value="4">4</option>
                                                        <option value="6">6</option>
                                                        <option value="8">8</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Doors</label>
                                                    <select class="form-control select2-search-disable" name="doors">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="2">2</option>
                                                        <option value="4">4</option>
                                                        <option value="6">6</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Car Body Type</label>
                                                    <select class="form-control select2-search-disable" name="bodytype">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="Convertible">Convertible</option>
                                                        <option value="Coupe">Coupe</option>
                                                        <option value="Sports Car">Sports Car</option>
                                                        <option value="Truck">Truck</option>
                                                        <option value="Hatchback">Hatchback</option>
                                                        <option value="Sedan">Sedan</option> 
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">
                                                    Featured image</label>
                                                    <input type="file" class="form-control" name="image" value="" >
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">
                                                    Description du car</label>
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
                    </div> 
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection