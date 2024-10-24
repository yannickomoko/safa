@extends('admin.page-layout')

@section('title', 'MARQUES')
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
                            <h4 class="mb-sm-0 font-size-18">Marques</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Cars /</li>
                                    <li class="breadcrumb-item active"> Marques</li>
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
                                <h4 class="card-title">Ajouter une marque</h4>
                                <form class="needs-validation" novalidate method="post" action="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Name</label>
                                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" id="validationCustom02"
                                                    required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Slug</label>
                                                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control" id="validationCustom02"
                                                        required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Sauvegarder
                                        </button> 
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>  
                </div> <!-- end row -->

                <div class="row"> 
                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header d-flex text-white ">
                                    Listes des unités
                                </h5>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th> 
                                        <th>Slug</th>  
                                        <th>Date de création</th> 
                                        <th>Actions</th>  
                                    </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td> 
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->slug }}</td>
                                                <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d M, Y') }}</td>
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="{{ url('admin/cars/marques/'.$value->id) }}" class="btn btn-sm btn-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="{{ url('admin/cars/marques/'.$value->id) }}" data-bs-toggle="modal" class="btn btn-sm btn-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
 @endsection