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
                                <h4 class="mb-sm-0 font-size-18">Modifier car</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">Tableau de bord /</li>
                                        <li class="breadcrumb-item">Cars /</li>
                                        <li class="breadcrumb-item active"> Modifier un car</li>
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
                                    <h4 class="card-title">Modifier un Car</h4>
                                    <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $getRecord->name }}">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Price</label>
                                                    <input type="text" class="form-control" name="price" value="{{$getRecord->price }}">
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
                                                        <option selected disabled>Choose...</option>
                                                        <option value="2010-2011 {{ (($getRecord->years == '2010-2011')? 'selected' : '') }}">2010-2011</option>
                                                        <option value="2012-2013 {{ (($getRecord->years == '2012-2013')? 'selected' : '') }}">2012-2013</option>
                                                        <option value="2014-2015 {{ (($getRecord->years == '2014-2015')? 'selected' : '') }}">2014-2015</option>
                                                        <option value="2016-2017 {{ (($getRecord->years == '2016-2017')? 'selected' : '') }}">2016-2017</option>
                                                        <option value="2018-2019 {{ (($getRecord->years == '2018-2019')? 'selected' : '') }}">2018-2019</option>
                                                        <option value="2020-2021 {{ (($getRecord->years == '2020-2021')? 'selected' : '') }}">2020-2021</option>
                                                        <option value="2022-2023 {{ (($getRecord->years == '2022-2023')? 'selected' : '') }}">2022-2023</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Max Mileage</label>
                                                    <select class="form-control select2-search-disable" name="mileage">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="0-1000 {{ (($getRecord->mileage == '0-1000')? 'selected' : '' )}}">0-1000</option>
                                                        <option value="1000-5000 {{ (($getRecord->mileage == '1000-5000')? 'selected' : '') }}">1000-5000</option>
                                                        <option value="5000-10000 {{ (($getRecord->mileage == '5000-10000')? 'selected' : '') }}">5000-10000</option>
                                                        <option value="10000-100000 {{ (($getRecord->mileage == '10000-100000')? 'selected' : '') }}">10000-100000</option>
                                                        <option value="100000-150000 {{ (($getRecord->mileage == '100000-150000')? 'selected' : '') }}">100000-150000</option>
                                                        <option value="150000-200000 {{ (($getRecord->mileage == '150000-200000')? 'selected' : '') }}">150000-200000</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Fuel Type</label>
                                                    <select class="form-control select2-search-disable" name="fueltype">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="Diesel {{ (($getRecord->fueltype == 'Diesel')? 'selected' : '') }}">Diesel</option>
                                                        <option value="Essence {{ (($getRecord->fueltype == 'Essence')? 'selected' : '') }}">Essence</option> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Make</label>
                                                    <select class="form-control select2-templating" name="make_id">
                                                        <option selected disabled value="{{ $getRecord->make_id }}">Choose...</option>
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
                                                        <option selected disabled>Choose...</option>
                                                        <option value="1000-2000 {{  (($getRecord->engine == '1000-2000')? 'selected' : '') }}">1000-2000</option>
                                                        <option value="2000-4000 {{  (($getRecord->engine == '2000-4000')? 'selected' : '') }}">2000-4000</option> 
                                                        <option value="4000-6000 {{  (($getRecord->engine == '4000-6000')? 'selected' : '') }}">4000-6000</option> 
                                                        <option value="6000-8000 {{  (($getRecord->engine == '6000-8000')? 'selected' : '') }}">6000-8000</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Model</label>
                                                    <select class="form-control select2-templating" name="model">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="diesel {{ (($getRecord->model == 'diesel')? 'selected' : '') }}">test1</option>
                                                        <option value="essence {{ (($getRecord->model == 'essence')? 'selected' : '') }}">test2</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Interior</label>
                                                    <select class="form-control select2-search-disable" name="interior">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="Bleu {{ (($getRecord->interior == 'Bleu')? 'selected' : '') }}">Bleu</option>
                                                        <option value="Rouge {{ (($getRecord->interior == 'Rouge')? 'selected' : '') }}">Rouge</option> 
                                                        <option value="Noir {{ (($getRecord->interior == 'Noir')? 'selected' : '') }}">Noir</option> 
                                                        <option value="Gris {{ (($getRecord->interior == 'Gris')? 'selected' : '' )}}">Gris</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Exterior</label>
                                                    <select class="form-control select2-search-disable" name="exterior">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="Bleu {{ (($getRecord->interior == 'Bleu')? 'selected' : '') }}">Bleu</option>
                                                        <option value="Rouge {{ (($getRecord->interior == 'Rouge')? 'selected' : '') }}">Rouge</option> 
                                                        <option value="Noir {{ (($getRecord->interior == 'Noir')? 'selected' : '') }}">Noir</option> 
                                                        <option value="Gris {{ (($getRecord->interior == 'Gris')? 'selected' : '' )}}">Gris</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Transmision</label>
                                                    <select class="form-control select2-search-disable" name="trans">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="Manual  {{ (($getRecord->trans == 'Manual')? 'selected' : '' ) }}">Manual</option>
                                                        <option value="Automatic  {{ (($getRecord->trans == 'Automatic')? 'selected' : '' ) }}">Automatic</option>
                                                        <option value="Semi-automatic  {{ (($getRecord->trans == 'Semi-automatic')? 'selected' : '' ) }}">Semi-automatic</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Seats</label>
                                                    <select class="form-control select2-search-disable" name="seats">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="2  {{ (($getRecord->seats == '2')? 'selected' : '' ) }}">2</option>
                                                        <option value="4  {{ (($getRecord->seats == '4')? 'selected' : '' ) }}">4</option>
                                                        <option value="6 {{ (($getRecord->seats == '6')? 'selected' : '' ) }}">6</option>
                                                        <option value="8 {{ (($getRecord->seats == '8')? 'selected' : '' ) }}">8</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Doors</label>
                                                    <select class="form-control select2-search-disable" name="doors">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="2  {{ (($getRecord->doors == '2')? 'selected' : '' ) }}">2</option>
                                                        <option value="4  {{ (($getRecord->doors == '4')? 'selected' : '' ) }}">4</option>
                                                        <option value="6  {{ (($getRecord->doors == '6')? 'selected' : '' ) }}">6</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Car Body Type</label>
                                                    <select class="form-control select2-search-disable" name="bodytype">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="Convertible  {{ (($getRecord->bodytype == 'Convertible')? 'selected' : '' ) }}">Convertible</option>
                                                        <option value="Coupe  {{ (($getRecord->bodytype == 'Coupe')? 'selected' : '' ) }}">Coupe</option>
                                                        <option value="Sports Car  {{ (($getRecord->bodytype == 'Sports Car')? 'selected' : '' ) }}">Sports Car</option>
                                                        <option value="Truck  {{ (($getRecord->bodytype == 'Truck')? 'selected' : '' ) }}">Truck</option>
                                                        <option value="Hatchback  {{ (($getRecord->bodytype == 'Hatchback')? 'selected' : '' ) }}">Hatchback</option>
                                                        <option value="Sedan  {{ (($getRecord->bodytype == 'Sedan')? 'selected' : '' ) }}">Sedan  </option> 
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">
                                                    Featured image</label>
                                                    <input type="file" class="form-control" name="image" value="{{ $getRecord->image }}" >
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">
                                                    Description du car</label>
                                                    <textarea class="form-control" name="description" rows="10">{{ $getRecord->description }}</textarea>
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