<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>داشبورد - قالب مدیریتی Qovex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="assets/css/app.css" id="app-style" rel="stylesheet" type="text/css">
	<!-- Theme Color -->
	<meta name="theme-color" content="#2a3042">

</head>

<body data-layout="horizontal" data-topbar="dark">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="18">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                داشبورد <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                                <a href="index.html" class="dropdown-item">داشبورد 1</a>
                                                <a href="{{route('index2')}}" class="dropdown-item">داشبورد 2</a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                رابط کاربری <div class="arrow-down"></div>
                                            </a>

                                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-components">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-alerts.html" class="dropdown-item">اعلان‌ها</a>
                                                            <a href="ui-buttons.html" class="dropdown-item">دکمه ها</a>
                                                            <a href="ui-cards.html" class="dropdown-item">کارت ها</a>
                                                            <a href="ui-carousel.html" class="dropdown-item">گردونه</a>
                                                            <a href="ui-dropdowns.html" class="dropdown-item">منوی کشویی</a>
                                                            <a href="ui-grid.html" class="dropdown-item">توری</a>
                                                            <a href="ui-images.html" class="dropdown-item">تصاویر</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-lightbox.html" class="dropdown-item">لایت باکس</a>
                                                            <a href="ui-modals.html" class="dropdown-item">مودال ها</a>
                                                            <a href="ui-rangeslider.html" class="dropdown-item">انتخاب‌گر بازه</a>
                                                            <a href="ui-session-timeout.html" class="dropdown-item">محدودیت زمان جلسه</a>
                                                            <a href="ui-progressbars.html" class="dropdown-item">نوارهای پیشرفت</a>
                                                            <a href="ui-sweet-alert.html" class="dropdown-item">هشدار Sweet Alert</a>
                                                            <a href="ui-tabs-accordions.html" class="dropdown-item">تب و منوی باز شونده</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-typography.html" class="dropdown-item">تایپوگرافی</a>
                                                            <a href="ui-video.html" class="dropdown-item">ویدئو</a>
                                                            <a href="ui-general.html" class="dropdown-item">عمومی</a>
                                                            <a href="ui-colors.html" class="dropdown-item">رنگ ها</a>
                                                            <a href="ui-rating.html" class="dropdown-item">امتیاز</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                اپ ها <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">

                                                <a href="calendar.html" class="dropdown-item">تقویم</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        ایمیل <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="email-inbox.html" class="dropdown-item">صندوق ورودی</a>
                                                        <a href="email-read.html" class="dropdown-item">جزئیات ایمیل</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        وظایف <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-task">
                                                        <a href="tasks-list.html" class="dropdown-item">لیست وظایف</a>
                                                        <a href="tasks-kanban.html" class="dropdown-item">تخته یادداشت ها</a>
                                                        <a href="tasks-create.html" class="dropdown-item">ایجاد وظیفه</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                اجزاء <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        فرم ها <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                        <a href="form-elements.html" class="dropdown-item">عناصر فرم</a>
                                                        <a href="form-validation.html" class="dropdown-item">اعتبارسنجی فرم</a>
                                                        <a href="form-advanced.html" class="dropdown-item">فرم پیشرفته</a>
                                                        <a href="form-editors.html" class="dropdown-item">ویرایشگر متن</a>
                                                        <a href="form-uploads.html" class="dropdown-item">ارسال فایل</a>
                                                        <a href="form-xeditable.html" class="dropdown-item">ویرایشگر Xeditable</a>
                                                        <a href="form-repeater.html" class="dropdown-item">تکرار شونده ها</a>
                                                        <a href="form-wizard.html" class="dropdown-item">فرم مرحله ای</a>
                                                        <a href="form-mask.html" class="dropdown-item">ماسک فرم</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        جدول ها <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                        <a href="tables-basic.html" class="dropdown-item">جدول‌های پایه</a>
                                                        <a href="tables-datatable.html" class="dropdown-item">جدول های داده</a>
                                                        <a href="tables-responsive.html" class="dropdown-item">جدول واکنشگرا</a>
                                                        <a href="tables-editable.html" class="dropdown-item">جدول قابل ویرایش</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        نمودار ها <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                                        <a href="charts-apex.html" class="dropdown-item">نمودار Apex</a>
                                                        <a href="charts-chartjs.html" class="dropdown-item">نمودار Chartjs</a>
                                                        <a href="charts-flot.html" class="dropdown-item">نمودار Flot</a>
                                                        <a href="charts-knob.html" class="dropdown-item">نمودار Jquery Knob</a>
                                                        <a href="charts-sparkline.html" class="dropdown-item">نمودار Sparkline</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        آیکن‌ها <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                        <a href="icons-boxicons.html" class="dropdown-item">Boxicons</a>
                                                        <a href="icons-materialdesign.html" class="dropdown-item">Material Design</a>
                                                        <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                        <a href="icons-fontawesome.html" class="dropdown-item">Font awesome</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        نقشه‌ها <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                        <a href="maps-google.html" class="dropdown-item">نقشه گوگل</a>
                                                        <a href="maps-vector.html" class="dropdown-item">نقشه وکتور</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        طرح ها <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                                        <a href="layouts-vertical.html" class="dropdown-item">عمودی</a>
                                                        <a href="layouts-preloader.html" class="dropdown-item">انیمیشن بارگذاری</a>
                                                        <a href="layouts-boxed.html" class="dropdown-item">چارچوب</a>
                                                        <a href="layouts-topbar-light.html" class="dropdown-item">لورم ایپسوم متن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                صفحات  <div class="arrow-down"></div>
                                            </a>

                                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-right" aria-labelledby="topnav-pages">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>

                                                            <a href="pages-login.html" class="dropdown-item">ورود</a>
                                                            <a href="pages-register.html" class="dropdown-item">ثبت نام</a>
                                                            <a href="pages-recoverpw.html" class="dropdown-item">بازیابی رمز عبور</a>
                                                            <a href="pages-lock-screen.html" class="dropdown-item">قفل صفحه</a>
                                                            <a href="pages-starter.html" class="dropdown-item">صفحه شروع</a>
                                                            <a href="pages-invoice.html" class="dropdown-item">صورتحساب</a>
                                                            <a href="pages-profile.html" class="dropdown-item">پروفایل</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>

                                                            <a href="pages-maintenance.html" class="dropdown-item">تعمیرات</a>
                                                            <a href="pages-comingsoon.html" class="dropdown-item">به زودی</a>
                                                            <a href="pages-timeline.html" class="dropdown-item">خط زمانی</a>
                                                            <a href="pages-faqs.html" class="dropdown-item">سوالات متداول</a>
                                                            <a href="pages-pricing.html" class="dropdown-item">قیمت ها</a>
                                                            <a href="pages-404.html" class="dropdown-item">خطای 404</a>
                                                            <a href="pages-500.html" class="dropdown-item">خطای 500</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="جستجو ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">اسپانیایی</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">آلمانی</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">ایتالیایی</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">روسی</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> اعلان ها </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> مشاهده همه</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">سفارش شما ثبت شد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">تونی استارک</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">محصول شما ارسال شد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">استیو راجرز</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> مشاهده بیشتر ...
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1">جان</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> پروفایل</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> کیف پول من</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> قفل صفحه</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-settings-outline"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

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
                                        <li class="breadcrumb-item"><a href="javascript:%20void(0);">داشبورد</a></li>
                                        <li class="breadcrumb-item active">به داشبورد کووکس خوش آمدید</li>
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
                                                    <i class="mdi mdi-tag-plus-outline"></i>
                                                </span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-size-16 mt-2">سفارشات جدید</div>
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-sm font-size-20 mr-3">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                    <i class="mdi mdi-account-multiple-outline"></i>
                                                </span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-size-16 mt-2">کاربران جدید</div>

                                        </div>
                                    </div>
                                    <h4 class="mt-3 mb-0 primary-font">2,456</h4>
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

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">گزارش فروش ها</h4>

                                    <div id="line-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">درآمد</h4>

                                    <div id="column-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">تجزیه و تحلیل فروش ها</h4>

                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <div id="donut-chart" class="apex-charts"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="py-3">
                                                            <p class="mb-0 text-truncate"><i class="mdi mdi-circle text-primary mr-1"></i> آنلاین</p>
                                                            <h5 class="primary-font">2,652</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="py-3">
                                                            <p class="mb-0 text-truncate"><i class="mdi mdi-circle text-success mr-1"></i> آفلاین</p>
                                                            <h5 class="primary-font">2,284</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="py-3">
                                                            <p class="mb-0 text-truncate"><i class="mdi mdi-circle text-warning mr-1"></i> بازاریابی</p>
                                                            <h5 class="primary-font">1,753</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">فروش ماهانه</h4>

                                    <div id="scatter-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="text-white-50">
                                        <h5 class="text-white">2400+ کاربر جدید</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</p>
                                        <div>
                                            <a href="#" class="btn btn-outline-success btn-sm">مشاهده بیشتر</a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-8">
                                            <div class="mt-3">
                                                <img src="assets/images/widget-img.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3 pb-1">نمای کلی</h4>

                                    <div>
                                        <div class="pb-3 border-bottom">
                                            <div class="row align-items-center my-n1">
                                                <div class="col-8">
                                                    <p class="mb-0">بازدیدکنندگان جدید</p>
                                                    <h4 class="mb-0 primary-font">3,524</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-right">
                                                        <div>
                                                            2.06 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom">
                                            <div class="row align-items-center my-n1">
                                                <div class="col-8">
                                                    <p class="mb-0">مشاهده محصول</p>
                                                    <h4 class="mb-0 primary-font">2,465</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-right">
                                                        <div>
                                                            0.37 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="row align-items-center my-n1">
                                                <div class="col-8">
                                                    <p class="mb-0">درآمد</p>
                                                    <h4 class="mb-0 primary-font">4,653</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-right">
                                                        <div>
                                                            2.18 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">نقد و بررسی ها</h4>
                                    <div class="mb-4">
                                        <h5 class="mt-n2 primary-font"><span class="text-primary">500</span>+ مشتری راضی</h5>
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-quote-right h4 text-primary"></i>
                                    </div>
                                    <div id="reviewExampleControls" class="carousel slide review-carousel" data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                                    <div class="media mt-4 pt-1">
                                                        <div class="avatar-sm mr-3">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    ج
                                                                </span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="font-size-16 mt-n2 mb-0 primary-font">استیو جابز</h5>
                                                            <p class="mb-2">بنیان گذار شرکت اپل</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                                    <div class="media mt-4 pt-1">
                                                        <div class="avatar-sm mr-3">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="font-size-16 mt-n2 mb-0 primary-font">تونی استارک</h5>
                                                            <p class="mb-2">طراح وب</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                                    <div class="media mt-4 pt-1">
                                                        <div class="avatar-sm mr-3">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    س
                                                                </span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="font-size-16 mt-n2 mb-0 primary-font">بیل گیتس</h5>
                                                            <p class="mb-2">رئیس مایکروسافت</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="carousel-control-prev" href="#reviewExampleControls" role="button" data-slide="prev">
                                            <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#reviewExampleControls" role="button" data-slide="next">
                                            <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">درآمد بر اساس منطقه</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="usa-vectormap" style="height: 230px"></div>
                                        </div>

                                        <div class="col-sm-5 ml-auto">
                                            <div class="mt-4 mt-sm-0">
                                                <p>در آمد ماه اخیر</p>

                                                <div class="media py-3">
                                                    <div class="media-body">
                                                        <p class="mb-1">تهران</p>
                                                        <h5 class="mb-0 primary-font">2,256 تومان</h5>
                                                    </div>
                                                    <div>
                                                        2.52 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                </div>
                                                <div class="media py-3 border-top">
                                                    <div class="media-body">
                                                        <p class="mb-1">تبریز</p>
                                                        <h5 class="mb-0 primary-font">1,853 تومان</h5>
                                                    </div>
                                                    <div>
                                                        1.26 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">صندوق ورودی</h4>

                                    <ul class="inbox-wid list-unstyled">
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="mr-3 align-self-center">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="font-size-16 mb-0 mt-n1 primary-font">پائول</h5>
                                                        <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی با</p>
                                                    </div>
                                                    <div class="font-size-12 ml-2">
                                                        05 دقیقه
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="mr-3 align-self-center">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="font-size-16 mb-0 mt-n1 primary-font">ماری</h5>
                                                        <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی</p>
                                                    </div>
                                                    <div class="font-size-12 ml-2">
                                                        12 دقیقه
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="mr-3 align-self-center">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="font-size-16 mb-0 mt-n1 primary-font">سلینا</h5>
                                                        <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی</p>
                                                    </div>
                                                    <div class="font-size-12 ml-2">
                                                        18 دقیقه
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="mr-3 align-self-center">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="font-size-16 mb-0 mt-n1 primary-font">استیو</h5>
                                                        <p class="text-truncate mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                                    </div>
                                                    <div class="font-size-12 ml-2">
                                                        2 ساعت پیش
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm">بارگذاری بیشتر</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">آخرین تراکنش ها</h4>

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

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © کووکس.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    ارائه شده در وب‌سایت راست‌چین
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">تنظیمات</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0">
            <h6 class="text-center mb-0">انتخاب طرح</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked>
                    <label class="custom-control-label" for="light-mode-switch">طرح روشن</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.css">
                    <label class="custom-control-label" for="dark-mode-switch">طرح تیره</label>
                </div>
            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>