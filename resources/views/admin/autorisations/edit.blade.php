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
                            <h4 class="mb-sm-0 font-size-18">Autorisations</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Configuration /</li>
                                    <li class="breadcrumb-item active">Autorisations</li>
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
                                <h4 class="card-title">Modifier un profil</h4>
                                <form class="needs-validation" method="post" action="">
                                    @csrf
                                    <div class="row"> 
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Code profil</label>
                                                <input type="text" name="code" value="{{ $getRecord->code }}" class="form-control" readonly>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nom</label>
                                                <input type="text" name="name" value="{{ $getRecord->name }}" class="form-control">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>                             
                                    </div>
                                    <div class="row bg-light">
                                        @foreach ($getRole as $role)
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="mt-4">
                                                <div class="card" style="border-top: 3px solid #3d449e;">
                                                    <div class="card-body">
                                                        <h5 class="font-size-14 card-title">{{ $role['name'] }}</h5>
                                                    </div>
                                                    @foreach ($role['group'] as $group)
                                                        @php
                                                            $checked = '';
                                                        @endphp
                                                        @foreach ($getRolePermission as $value)
                                                            @if($value->permission_id == $group['id'])
                                                                @php
                                                                    $checked = 'checked';
                                                                @endphp 
                                                            @endif
                                                        @endforeach
                                                        <div class="form-check form-check-primary mb-3">
                                                            <input class="form-check-input" type="checkbox" {{ $checked }}  value="{{ $group['id'] }}" name="permission_id[]">
                                                            <label class="form-check-label">
                                                                {{ $group['name'] }}
                                                            </label> 
                                                        </div> 
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div> 
                                    <div class="d-flex flex-wrap gap-2" style="margin-top: 20px !important">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Modifier
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect">
                                            Annuler
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>  
                </div> <!-- end row --> 
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection