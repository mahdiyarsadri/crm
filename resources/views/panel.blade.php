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
                            <h4 class="page-title mb-0 font-size-18">داشبورد</h4>

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
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-account-multiple-outline"></i>
                                            </span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-16 mt-2">کاربران</div>

                                    </div>
                                </div>
                                <h4 class="mt-3 mb-0 primary-font">{{$users}}</h4>
                                <div class="row mb-n1">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success mr-2"> 0.16% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-tag-plus-outline"></i>
                                            </span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-16 mt-2">محصولات</div>
                                    </div>
                                </div>
                                <h4 class="mt-3 mb-0 primary-font">1,368</h4>
                                <div class="row mb-n1">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success mr-2"> 0.28% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-tag-plus-outline"></i>
                                            </span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-16 mt-2">سفارشات</div>
                                    </div>
                                </div>
                                <h4 class="mt-3 mb-0 primary-font">1,368</h4>
                                <div class="row mb-n1">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success mr-2"> 0.28% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="mdi mdi-tag-plus-outline"></i>
                                            </span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-size-16 mt-2">فاکتور ها</div>
                                    </div>
                                </div>
                                <h4 class="mt-3 mb-0 primary-font">1,368</h4>
                                <div class="row mb-n1">
                                    <div class="col-7">
                                        <p class="mb-0"><span class="text-success mr-2"> 0.28% <i class="mdi mdi-arrow-up"></i> </span></p>
                                    </div>
                                    <div class="col-5 align-self-center">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- end row -->

                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">آخرین کاربران</h4>

                                <div class="table-responsive">
                                    <table class="table mb-0">

                                        <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            <th>تلفن همراه</th>
                                            <th>زمان ثبت نام</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lastusers as $user)
                                            <tr>
                                                <th scope="row">{{$user->id}}</th>
                                                <td>{{$user->first_name}}</td>
                                                <td>{{$user->last_name}}</td>
                                                <td>{{$user->mobile_number}}</td>
                                                <td>{{$user->created_at}}</td>
                                            </tr>
                                        @endforeach                                         </tbody>
                                    </table>
                                    <div class="text-center">
                                        <a href="{{route('userslist')}}" class="btn btn-primary btn-sm">مشاهده همه</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">آخرین سفارشات</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered">
                                        <thead>
                                        <tr>
                                            <th scope="col">تاریخ</th>
                                            <th scope="col">شناسه</th>
                                            <th scope="col">نام صورتحساب</th>
                                            <th scope="col">مقدار</th>
                                            <th scope="col" colspan="2">وضعیت پرداخت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1399/01/15</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1235</a>
                                            </td>
                                            <td>تونی استارک</td>
                                            <td>125 تومان</td>
                                            <td><span class="badge badge-soft-success font-size-12">پرداخت شده</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        <tr>
                                            <td>1399/01/16</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1236</a>
                                            </td>
                                            <td>روبرتو کارلوس</td>
                                            <td>118 تومان</td>
                                            <td><span class="badge badge-soft-danger font-size-12">شارژ شده</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        <tr>
                                            <td>1399/01/17</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1237</a>
                                            </td>
                                            <td>استیو راجرز</td>
                                            <td>115 تومان</td>
                                            <td><span class="badge badge-soft-success font-size-12">پرداخت شده</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        <tr>
                                            <td>1399/01/18</td>
                                            <td>
                                                <a href="#" class="text-body font-weight-medium">#SK1238</a>
                                            </td>
                                            <td>اولیور کوئین</td>
                                            <td>121 تومان</td>
                                            <td><span class="badge badge-soft-warning font-size-12">بازپرداخت</span></td>
                                            <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-3">
                                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#">قبلی</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
