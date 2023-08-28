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
                            <h4 class="page-title mb-0 font-size-18">لیست مشتریان</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">به پنل مدیریت خوش آمدید</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">لیست مشتریان</h4>
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align: center ">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>نام</th>
                                        <th>نام خوانوادگی</th>
                                        <th>کد ملی</th>
                                        <th>جنسیت</th>
                                        <th>تحصیلات</th>
                                        <th>شهر</th>
                                        <th>تلفن همراه</th>
                                        <th>تلفن ثابت</th>
                                        <th>تاریخ تولد</th>
                                        <th>تنظیمات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->national_code}}</td>
                                        <td>{{$user->gender}}</td>
                                        <td>{{$user->education}}</td>
                                        <td>{{$user->city}}</td>
                                        <td>{{$user->mobile_number}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->date}}</td>
                                        <td><a href="{{route('showeditpage' , ['id'=>$user->id])}}" class="btn btn-outline-dark">ویرایش</a>
                                            <a href="{}" class="btn btn-outline-danger">حذف</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
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
