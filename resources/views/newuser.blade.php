
@include('css')
<body data-layout="detached" data-topbar="colored">

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">افزودن کاربر جدید</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">به پنل مدیریت خوش آمدید</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom01">نام</label>
                                            <input name="first_name" type="text" class="form-control" id="validationCustom01" placeholder="نام را وارد کنید"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom02">نام خانوادگی</label>
                                            <input name="last_name" type="text" class="form-control" id="validationCustom02" placeholder="نام خانوادگی را وارد کنید"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom02">نام پدر</label>
                                            <input name="father_name" type="text" class="form-control" id="validationCustom02" placeholder="نام پدر را وارد کنید"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom02">کد ملی</label>
                                            <input name="national_code" type="number" class="form-control" id="validationCustom02" placeholder="کد ملی را وارد کنید"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom02">شماره شناسنامه</label>
                                            <input name="national_number" type="number" class="form-control" id="validationCustom02" placeholder="شماره شناسنامه را وارد کنید"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 form-group mb-4">
                                        <label>تاریخ تولد</label>
                                        <div class="input-group">
                                            <input name="date" type="text" name="date-picker-shamsi-list" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div>
                                        </div>
                                        <!-- input-group -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">تلفن ثابت</label>
                                            <input name="phone_number" type="text" class="form-control" id="validationCustom02" placeholder="02188888888"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">موبایل</label>
                                            <input name="mobile_number" type="text" class="form-control" id="validationCustom02" placeholder="09123456789"  required>
                                            <div class="valid-feedback">
                                                صحیح است!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>جنسیت</label>
                                        <select name="gender" class="form-control">
                                            <option>مرد</option>
                                            <option>زن</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>تحصیلات</label>
                                        <select name="education" class="form-control">
                                            <option>زیر دیپلم</option>
                                            <option>دیپلم</option>
                                            <option>کارشناسی</option>
                                            <option>کارشناسی ارشد</option>
                                            <option>دکترا</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">رمز عبور</label>
                                            <input name="password" type="password" id="pass2" class="form-control" required placeholder="رمز عبور">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">تکرار رمز عبور</label>
                                            <input name="confrim" type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="تکرار رمز عبور">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">لینک تصویر</label>
                                            <input name="image" type="text" class="form-control"  placeholder="https://">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom03">استان</label>
                                            <input name="State" type="text" class="form-control" id="validationCustom03" placeholder="استان" required>
                                            <div class="invalid-feedback">
                                                لطفا یک شهر معتبر وارد نمایید.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom04">شهر</label>
                                            <input name="city" type="text" class="form-control" id="validationCustom04" placeholder="شهر" required>
                                            <div class="invalid-feedback">
                                                لطفا یک شهر معتبر وارد نمایید.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom05">کدپستی</label>
                                            <input name="post_number" type="text" class="form-control" id="validationCustom05" placeholder="کدپستی" required>
                                            <div class="invalid-feedback">
                                                لطفا یک کدپستی معتبر وارد نمایید.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>آدرس</label>
                                        <div>
                                            <textarea name="Address" required class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary" type="submit">افزودن کاربر</button>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end row -->
            </div>
            <!-- End Page-content -->
            @include('footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->


<!-- /Right-bar -->

<!-- Right bar overlay-->
@include('script')
