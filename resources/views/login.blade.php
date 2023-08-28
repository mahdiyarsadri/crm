<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title> ورود </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="assets/css/app.css" id="app-style" rel="stylesheet" type="text/css">
	<!-- Theme Color -->
	<meta name="theme-color" content="#2a3042">

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">خوش آمدید!</h5>
                                <p class="text-white-50 mb-0">جهت دسترسی به پنل مدیریت وارد شوید</p>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="{{route('loginPanel')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="phone_number">نام کاربری</label>
                                        <input type="text" class="form-control" name="email" placeholder="admin">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">رمز عبور</label>
                                        <input type="password" class="form-control" name="password" placeholder="*****">
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">به خاطر سپاری</label>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ورود</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> رمز عبور خود را فراموش کرده اید؟</a>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>حساب کاربری ندارید؟ <a href="{{route('register')}}" class="font-weight-medium text-primary"> ثبت نام کنید </a> </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
