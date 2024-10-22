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
                            <h4 class="mb-sm-0 font-size-18">Types cars</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Cars /</li>
                                    <li class="breadcrumb-item active"> Types cars</li>
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
                                <h4 class="card-title">Ajouter un type</h4>
                                <form class="needs-validation" novalidate method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Name</label>
                                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                                                    required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Featured Image</label>
                                                <input type="file" name="image" class="form-control" id="validationCustom02"
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
                                    Listes des Types de cars
                                </h5>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th> 
                                        <th>Image</th>  
                                        <th>Date de création</th> 
                                        <th>Actions</th>  
                                    </tr>
                                    </thead>
                                    <tbody> 
                                         @foreach ($getTypeCars as $typecar)
                                             <tr>
                                                <td>{{$typecar->id}}</td>
                                                <td>{{$typecar->name}}</td>
                                                <td>
                                                    <img src="{{$typecar->image}}" class="img-fluid" alt="{{$typecar->image}}">
                                                </td>
                                                <td>{{$typecar->created_at}}</td> 
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="{{ url('admin/typecars/'.$typecar->id) }}" class="btn btn-sm btn-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="{{ url('admin/typecars/'.$typecar->id) }}" data-bs-toggle="modal" class="btn btn-sm btn-danger"><i class="mdi mdi-delete-outline"></i></a>
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