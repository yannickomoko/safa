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
                                <h4 class="mb-sm-0 font-size-18">Nouvel utilisateur</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">Tableau de bord /</li>
                                        <li class="breadcrumb-item">Utilisateurs /</li>
                                        <li class="breadcrumb-item active"> Ajouter un utilisateur</li>
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
                                    <h4 class="card-title">Ajouter un Utilisateur</h4>
                                    <form class="needs-validation" method="post" action="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">
                                                        Nom & prénom
                                                    </label>
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                                        required>
                                                    <div class="valid-feedback">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Nom utilisateur</label>
                                                    <input type="text" class="form-control" name="uname" value="{{ old('uname') }}"
                                                        required>
                                                    <div class="valid-feedback">
                                                        {{ $errors->first('uname') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Téléphone</label>
                                                    <input type="text" class="form-control" name="phone" value="">
                                                    <div class="valid-feedback">
                                                        {{ $errors->first('phone') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Email
                                                         </label>
                                                    <input type="email" class="form-control" name="email" value="">
                                                    <div class="valid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Profil utilisateur</label>
                                                    <select class="form-control select2-templating" name="role_id">
                                                        <option selected disabled value="">Choose...</option>
                                                        @foreach ($getRole as $role)
                                                            <option {{ (old('role_id') == $role->id) ? 'selected' : '' }} value="{{ $role->id }}">
                                                                {{ $role->name }}
                                                            </option>
                                                        @endforeach                 
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Mot de passe</label>
                                                    <input type="password" class="form-control" name="password" id="validationCustom02"
                                                        value="{{ old('password') }}" required>
                                                    <div class="valid-feedback">
                                                        {{ $errors->first('password') }}
                                                    </div>
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