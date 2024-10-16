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
                            <h4 class="mb-sm-0 font-size-18">Liste des utilisateurs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Tableau de bord / </li>
                                    <li class="breadcrumb-item">Utilisateurs / </li>
                                    <li class="breadcrumb-item active">Liste utilisateur</li>
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
                                    <a class="btn btn-sm btn-secondary" href="{{ url('admin/users/create') }}"> <i class="bx bx-user"></i> Ajouter un User</a>
                                </div> 
                            </h5> 
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Utilisateur</th>
                                        <th>Nom & prénom</th> 
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Profil</th>
                                        <!-- <th>Actif</th>  -->
                                        <th>Actions</th> 
                                    </tr>
                                    </thead>
                                    <tbody>  
                                         @foreach ($getRecord as $value)
                                             <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->uname }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->phone }}</td> 
                                                <td>{{ $value->role_name }}</td>   
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="#" class="btn btn-sm btn-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="#" data-bs-toggle="modal" class="btn btn-sm btn-danger"><i class="mdi mdi-delete-outline"></i></a>
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