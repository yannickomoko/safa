<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Connexion | SAFA MARWA RENTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Design & Develop by EPSID SARL" name="description" />
    <meta content="EPSID SARL" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('') }}/admin/assets/images/marwa.jpeg">

    <!-- Bootstrap Css -->
    <link href="{{ url('') }}/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('') }}/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('') }}/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body style="background-color: #1B203E">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class=" align-self-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ url('') }}/admin/assets/images/marwa.jpeg" alt="" class="img-fluid" style="height: 80px">
                                </div> 
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="p-2">
                                <form class="form-horizontal" method="post" action="">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="uname" class="form-label font-weight-semibold">
                                        <i class="fa fa-user"></i> Utilisateur</label>
                                        <input type="text" class="form-control" name="uname" id="uname">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label font-weight-semibold">
                                            <i class="fa fa-lock"></i> Mot de passe</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" name="password" id="passw ord" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light text-uppercase font-weight-semibold" type="submit">Connexion</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="#" class="text-black-100"><i class="mdi mdi-lock me-1"></i> Mot de passe oublié ?</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center text-white">
                        <div>
                            <p>
                                © 
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Bienvenue au portail de système de gestion</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ url('') }}/admin/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/admin/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('') }}/admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('') }}/admin/assets/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="{{ url('') }}/admin/assets/js/app.js"></script>
</body>

</html>      