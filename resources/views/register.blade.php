<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>ثبت نام - قالب مدیریتی </title>
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
	<meta name="theme-color" content="#283D92">

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">ثبت نام</h5>
                                <p class="text-white-50 mb-0">حساب کاربری خود را بسازید </p>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form class="form-horizontal" action="index.html">

                                    <div class="form-group">
                                        <label for="firstname">نام</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="نام خود را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="lastname">نام خانوادگی</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="نام خانوادگی را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="NationalCode">کد ملی</label>
                                        <input type="text" class="form-control" id="NationalCode" placeholder="کد ملی خود را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="fathername">نام پدر</label>
                                        <input type="text" class="form-control" id="fathername" placeholder="نام خانوادگی را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">تلفن ثابت</label>
                                        <input type="text" class="form-control" id="phone" placeholder="شماره تلفن ثابت خود را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">موبایل</label>
                                        <input type="text" class="form-control" id="phone" placeholder="شماره تلفن همراه خود را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">ایمیل</label>
                                        <input type="email" class="form-control" id="useremail" placeholder="ایمیل را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="State">استان</label>
                                        <input type="text" class="form-control" id="State" placeholder="استان خود را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="city">شهر</label>
                                        <input type="text" class="form-control" id="city" placeholder="شهر خود را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">نام کاربری</label>
                                        <input type="text" class="form-control" id="username" placeholder="نام کاربری را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">رمز عبور</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="رمز عبور را وارد کنید">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ثبت نام</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0"> با<a href="#" class="text-primary"> قوانین و مقررات </a>موافقم </p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>حساب کاربری دارید؟ <a href="{{route('login')}}" class="font-weight-medium text-primary"> ورود</a> </p>
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
