<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAS GARAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/logo.png') }}">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset ('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                            <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('template/img/logosasgrup.png') }}" style="object-fit: cover;" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SAS GROUP ADMIN</h1>
                                    </div>

                                    @error('loginError')
                                        <div class="alert alert-danger">
                                            <strong>Error</strong>
                                            <p>{{$message}}</p>
                                        </div>
                                    @enderror

                                    <form method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                placeholder="Enter Email Address..." name="email">
                                                @error('email')
                                                    <small style="color: red">{{$message}}</small>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                placeholder="Password"name="password">
                                                @error('password')
                                                    <small style="color: red">{{$message}}</small>
                                                @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html>