@extends('admin.page-layout')

@section('title', 'CARS')
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
                            <h4 class="mb-sm-0 font-size-18">Liste des cars</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Tableau de bord / </li>
                                    <li class="breadcrumb-item">Cars / </li>
                                    <li class="breadcrumb-item active">Liste cars</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header d-flex text-white align-items-end justify-content-end">
                                <div>
                                    <a class="btn btn-sm btn-secondary" href="{{ url('admin/cars/create') }}"> <i class="bx bx-user"></i> Ajouter un Car</a>
                                </div> 
                            </h5> 
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>Nom</th>
                                        <th>Marque</th> 
                                        <th>Model</th>
                                        <th>Transmission</th>
                                        <th>Price</th>
                                        <th>Année</th> 
                                        <th>Statut</th> 
                                        <th>Actions</th> 
                                    </tr>                     
                                    </thead>
                                    <tbody> 
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>
                                                    @if (!empty($value->image))
                                                     <img src="{{ asset('/'.$value->image) }}" class="img-thumbnail" width="50" />
                                                     @else
                                                     <img src="{{ asset('admin/assets/images/logo3.png') }}" class="img-thumbnail" width="50" />
                                                    @endif
                                                </td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->make_name }}</td>
                                                <td>{{ $value->model }}</td>
                                                <td>{{ $value->trans }}</td>
                                                <td>{{ number_format($value->price,0) }}</td> 
                                                <td>{{ $value->years }}</td> 
                                                <td>
                                                    @if (!empty($value->statut == 1))
                                                    <span class="badge badge-pill badge-soft-success font-size-12">Ouvert</span>
                                                    @else
                                                    <span class="badge badge-pill badge-soft-danger font-size-12">Fermé</span>
                                                    @endif 
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="{{ url('admin/cars/edit/'.$value->id) }}" class="btn btn-sm btn-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="{{ url('admin/cars/delete/'.$value->id) }}" data-bs-toggle="modal" class="btn btn-sm btn-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                        </li>
                                                    </ul>
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
    
@endsection