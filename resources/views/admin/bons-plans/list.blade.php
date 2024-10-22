@extends('admin.page-layout')

@section('title', 'BONS PLANS')
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
                            <h4 class="mb-sm-0 font-size-18">Liste des Bons plan</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Tableau de bord / </li>
                                    <li class="breadcrumb-item">Bons plans / </li>
                                    <li class="breadcrumb-item active">Liste Bons plans</li>
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
                                    <a class="btn btn-sm btn-secondary" href="{{ url('admin/bonplans/create') }}"> <i class="bx bx-user"></i> Ajouter un Bon plan</a>
                                </div> 
                            </h5> 
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Lieu</th> 
                                        <th>Description</th> 
                                        <th>Actions</th> 
                                    </tr>
                                    </thead>
                                    <tbody>  
                                         @foreach ($getRecord as $value)
                                             <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->titre }}</td>
                                                <td>{{ $value->lieu }}</td>
                                                <td>{{ $value->description }}</td>  
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="{{ url('admin/bonplans/edit/'.$value->id) }}" class="btn btn-sm btn-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="{{ url('admin/bonplans/delete/'.$value->id) }}" data-bs-toggle="modal" class="btn btn-sm btn-danger"><i class="mdi mdi-delete-outline"></i></a>
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