<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">ali sadri</a>
                <p class="text-body mt-1 mb-0 font-size-13">مدیر</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">منو</li>

                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>کاربران</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('newuser')}}">افزودن کاربر جدید</a></li>
                        <li><a href="{{route('userslist')}}">لیست کاربران</a></li>

                    </ul>
                </li>

{{--                <li>--}}
{{--                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">--}}
{{--                        <i class="mdi mdi-account-circle-outline"></i>--}}
{{--                        <span>مشتریان</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="{{route('newcustomer')}}">افزودن مشتری جدید</a></li>--}}
{{--                        <li><a href="{{route('customerslist')}}">لیست مشتریان</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}


                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>محصولات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('login')}}">افزودن محصول جدید</a></li>
                        <li><a href="{{route('register')}}">لیست محصولات</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>سفارشات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('login')}}">افزودن سفارش جدید</a></li>
                        <li><a href="{{route('register')}}">لیست سفارشات</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>فاکتور ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('login')}}">افزودن فاکتور جدید</a></li>
                        <li><a href="{{route('register')}}">لیست فاکتور ها</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>فرصت های فروش</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('login')}}">فرصت جدید</a></li>
                        <li><a href="{{route('register')}}">لیست فرصت ها</a></li>

                    </ul>
                </li>

                <li class="menu-title">اجزاء</li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>


<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="/javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">تنظیمات</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0">
        <h6 class="text-center mb-0">انتخاب طرح</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked>
                <label class="custom-control-label" for="light-mode-switch">طرح روشن</label>
            </div>

            <div class="mb-2">
                <img src="/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.css">
                <label class="custom-control-label" for="dark-mode-switch">طرح تیره</label>
            </div>
        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
