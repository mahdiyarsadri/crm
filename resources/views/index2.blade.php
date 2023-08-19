<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>داشبورد 2 - قالب مدیریتی Qovex</title>
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

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">

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
                                                    <h6 class="mt-0 mb-1 primary-font">سفارش شما ثبت شد</h6>
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
                                                    <h6 class="mt-0 mb-1 primary-font">تونی استارک</h6>
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
                                                    <h6 class="mt-0 mb-1 primary-font">محصول شما ارسال شد</h6>
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
                                                    <h6 class="mt-0 mb-1 primary-font">استیو راجرز</h6>
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
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="19">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-lg-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="جستجو ...">
                                    <span class="bx bx-search-alt"></span>
                                </div>
                            </form>

                            <div class="dropdown dropdown-mega d-none d-lg-inline-block ml-2">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    مگا منو
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h5 class="font-size-14 mt-0">اجزای رابط کاربری</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">لایت باکس</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">انتخاب‌گر بازه</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">هشدار Sweet</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">امتیاز</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">فرم ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">جدول ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">نمودار ها</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="font-size-14 mt-0">برنامه ها</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">تجارت الکترونیک</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">تقویم</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">ایمیل</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">پروژه ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">وظایف</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">تماس</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="font-size-14 mt-0">صفحات بیشتر</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">نوار کناری روشن</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">نوار کناری فشرده</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">طرح منوی افقی</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">تعمیرات</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">به زودی</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">خط زمانی</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">سوالات متداول</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5 class="font-size-14 mt-0">اجزاء</h5>
                                                    <div class="px-lg-2">
                                                        <div class="row no-gutters">
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/github.png" alt="Github">
                                                                    <span>گیت هاب</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                                    <span>بیت باکت</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                                    <span>دریبل</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="row no-gutters">
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                                    <span>دراپ باکس</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                                    <span>میل چیمپ</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/slack.png" alt="slack">
                                                                    <span>اسلک</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div>
                                                        <div class="card text-white mb-0 overflow-hidden text-white-50" style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                            <div class="card-img-overlay"></div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <h4 class="text-white mb-3">فروش</h4>

                                                                        <h5 class="text-white-50">تا <span class="font-size-24 text-white">50 %</span> تخفیف</h5>
                                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                                        <div class="mb-4">
                                                                            <a href="#" class="btn btn-success btn-sm">مشاهده بیشتر</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
			</header>

			<!-- ========== Left Sidebar Start ========== -->
			<div class="vertical-menu">

				<div class="h-100">

					<div class="user-wid text-center py-4">
						<div class="user-img">
							<img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
						</div>

						<div class="mt-3">

							<a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">ali sadri</a>
							<p class="text-body mt-1 mb-0 font-size-13">توسعه دهنده</p>

						</div>
					</div>

					<!--- Sidemenu -->
					<div id="sidebar-menu">
						<!-- Left Menu Start -->
						<ul class="metismenu list-unstyled" id="side-menu">
							<li class="menu-title">منو</li>

							<li>
								<a href="javascript:%20void(0);" class="waves-effect">
									<i class="mdi mdi-airplay"></i><span class="badge badge-pill badge-info float-right">2</span>
									<span>داشبورد</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="{{route('index')}}">داشبورد 1</a></li>
									<li><a href="{{route('index2')}}">داشبورد 2</a></li>
								</ul>
							</li>

							<li>
								<a href="calendar.html" class=" waves-effect">
									<i class="mdi mdi-calendar-text"></i>
									<span>تقویم</span>
								</a>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-inbox-full"></i>
									<span>ایمیل</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="email-inbox.html">صندوق ورودی</a></li>
									<li><a href="email-read.html">جزئیات ایمیل</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-calendar-check"></i>
									<span>وظایف</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="tasks-list.html">لیست وظایف</a></li>
									<li><a href="tasks-kanban.html">تخته یادداشت ها</a></li>
									<li><a href="tasks-create.html">ایجاد وظیفه</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-account-circle-outline"></i>
									<span>صفحات</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="{{route('login')}}">ورود</a></li>
                                    <li><a href="{{route('register')}}">ثبت نام</a></li>
									<li><a href="pages-recoverpw.html">بازیابی رمز عبور</a></li>
									<li><a href="pages-lock-screen.html">قفل صفحه</a></li>
									<li><a href="pages-starter.html">صفحه شروع</a></li>
									<li><a href="pages-invoice.html">صورتحساب</a></li>
									<li><a href="pages-profile.html">پروفایل</a></li>
									<li><a href="pages-maintenance.html">تعمیرات</a></li>
									<li><a href="pages-comingsoon.html">به زودی</a></li>
									<li><a href="pages-timeline.html">خط زمانی</a></li>
									<li><a href="pages-faqs.html">سوالات متداول</a></li>
									<li><a href="pages-pricing.html">قیمت ها</a></li>
									<li><a href="pages-404.html">خطای 404</a></li>
									<li><a href="pages-500.html">خطای 500</a></li>
								</ul>
							</li>

							<li class="menu-title">اجزاء</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-checkbox-multiple-blank-outline"></i>
									<span>رابط کاربری</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="ui-alerts.html">اعلان‌ها</a></li>
									<li><a href="ui-buttons.html">دکمه ها</a></li>
									<li><a href="ui-cards.html">کارت ها</a></li>
									<li><a href="ui-carousel.html">گردونه</a></li>
									<li><a href="ui-dropdowns.html">منوی کشویی</a></li>
									<li><a href="ui-grid.html">توری</a></li>
									<li><a href="ui-images.html">تصاویر</a></li>
									<li><a href="ui-lightbox.html">لایت باکس</a></li>
									<li><a href="ui-modals.html">مودال ها</a></li>
									<li><a href="ui-rangeslider.html">انتخاب‌گر بازه</a></li>
									<li><a href="ui-session-timeout.html">محدودیت زمان جلسه</a></li>
									<li><a href="ui-progressbars.html">نوارهای پیشرفت</a></li>
									<li><a href="ui-sweet-alert.html">هشدار Sweet Alert</a></li>
									<li><a href="ui-tabs-accordions.html">تب و منوی باز شونده</a></li>
									<li><a href="ui-typography.html">تایپوگرافی</a></li>
									<li><a href="ui-video.html">ویدئو</a></li>
									<li><a href="ui-general.html">عمومی</a></li>
									<li><a href="ui-colors.html">رنگ ها</a></li>
									<li><a href="ui-rating.html">امتیاز</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="waves-effect">
									<i class="mdi mdi-newspaper"></i>
									<span class="badge badge-pill badge-danger float-right">6</span>
									<span>فرم ها</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="form-elements.html">عناصر فرم</a></li>
									<li><a href="form-validation.html">اعتبارسنجی فرم</a></li>
									<li><a href="form-advanced.html">فرم پیشرفته</a></li>
									<li><a href="form-editors.html">ویرایشگر متن</a></li>
									<li><a href="form-uploads.html">ارسال فایل</a></li>
									<li><a href="form-xeditable.html">ویرایشگر Xeditable</a></li>
									<li><a href="form-repeater.html">تکرار شونده ها</a></li>
									<li><a href="form-wizard.html">فرم مرحله ای</a></li>
									<li><a href="form-mask.html">ماسک فرم</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-clipboard-list-outline"></i>
									<span>جدول ها</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="tables-basic.html">جدول‌های پایه</a></li>
									<li><a href="tables-datatable.html">جدول های داده</a></li>
									<li><a href="tables-responsive.html">جدول واکنشگرا</a></li>
									<li><a href="tables-editable.html">جدول قابل ویرایش</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-chart-donut"></i>
									<span>نمودار ها</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="charts-apex.html">نمودار Apex</a></li>
									<li><a href="charts-chartjs.html">نمودار Chartjs</a></li>
									<li><a href="charts-flot.html">نمودار Flot</a></li>
									<li><a href="charts-knob.html">نمودار Jquery Knob</a></li>
									<li><a href="charts-sparkline.html">نمودار Sparkline</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-emoticon-happy-outline"></i>
									<span>آیکن‌ها</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="icons-boxicons.html">Boxicons</a></li>
									<li><a href="icons-materialdesign.html">Material Design</a></li>
									<li><a href="icons-dripicons.html">Dripicons</a></li>
									<li><a href="icons-fontawesome.html">Font awesome</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-map-marker-outline"></i>
									<span>نقشه‌ها</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="maps-google.html">نقشه گوگل</a></li>
									<li><a href="maps-vector.html">نقشه وکتور</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript:%20void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-file-tree"></i>
									<span>چند سطحی</span>
								</a>
								<ul class="sub-menu" aria-expanded="true">
									<li><a href="javascript:%20void(0);">سطح 1.1</a></li>
									<li><a href="javascript:%20void(0);" class="has-arrow">سطح 1.2</a>
										<ul class="sub-menu" aria-expanded="true">
											<li><a href="javascript:%20void(0);">سطح 2.1</a></li>
											<li><a href="javascript:%20void(0);">سطح 2.2</a></li>
										</ul>
									</li>
								</ul>
							</li>

						</ul>
					</div>
					<!-- Sidebar -->
				</div>
			</div>
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
                                        <li class="breadcrumb-item active">داشبورد 2</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-6">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div>
                                                        <p class="text-muted font-weight-medium mb-0">سفارشات</p>
                                                        <h4 class="primary-font">1,368</h4>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div>
                                                        <div id="radial-chart-1"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="mb-0 mt-n1"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> از دوره قبلی</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div>
                                                        <p class="text-muted font-weight-medium mb-0">درآمد</p>
                                                        <h4 class="primary-font">32,695</h4>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div>
                                                        <div id="radial-chart-2"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="mb-0 mt-n1"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> از دوره قبلی</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">گزارش فروش ها</h4>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div>
                                                <p class="mb-1">01 آذر - 30 آذر، 1399</p>
                                                <h4 class="primary-font">27,253</h4>

                                                <p class="mt-2 mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> از دوره قبلی</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mt-4 mt-sm-0">
                                                <div id="sales-report-chart" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">هفته</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">ماه</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">سال</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title mb-4">ایمیل ارسال شده</h4>

                                    <div id="mixed-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center my-n1">
                                        <div class="col-8">
                                            <p class="mb-1">آنلاین</p>
                                            <h4 class="mb-n1 primary-font">3,524</h4>
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
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center my-n1">
                                        <div class="col-8">
                                            <p class="mb-1">آفلاین</p>
                                            <h4 class="mb-n1 primary-font">5,362</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <div>
                                                    3.12 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                </div>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center my-n1">
                                        <div class="col-8">
                                            <p class="mb-1">بازاریابی</p>
                                            <h4 class="mb-n1 primary-font">6,245</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <div>
                                                    2.12 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                </div>
                                                <div class="progress progress-sm mt-3">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">درآمد</h4>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <p>01 آذر - 31 آذر 1399</p>
                                                <p class="mb-1">مجموع در آمد</p>
                                                <h4 class="primary-font mb-1">12,362</h4>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mt-3">
                                                        <p class="mb-1 text-truncate">این ماه</p>
                                                        <h5 class="d-inline-block align-middle mb-0 primary-font">9,245</h5> <span class="badge badge-soft-success">+ 1.5 %</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mt-3">
                                                        <p class="mb-1 text-truncate">ماه اخیر</p>
                                                        <h5 class="primary-font">8,234</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-primary btn-sm">مشاهده بیشتر</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <div id="bar-chart" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">فروش سالانه</h4>

                                    <div id="radar-chart" class="apex-charts"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5">فعالیت</h4>

                                    <ul class="list-unstyled activity-wid pb-1">
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="mdi mdi-calendar-edit"></i>
                                                        </span>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14 primary-font">20 آذر <i class="mdi mdi-arrow-left text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="mdi mdi-account-multiple-outline"></i>
                                                        </span>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14 primary-font">23 آذر <i class="mdi mdi-arrow-left text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="mdi mdi-square-edit-outline"></i>
                                                        </span>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14 primary-font">24 آذر <i class="mdi mdi-arrow-left text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم <a href="#">بیشتر بخوانید</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="mdi mdi-account-multiple-outline"></i>
                                                        </span>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14 primary-font">26 آذر <i class="mdi mdi-arrow-left text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="text-center mt-4">
                                        <a href="#" class="btn btn-primary btn-sm">مشاهده بیشتر <i class="mdi mdi-arrow-left ml-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">محصولات محبوب</h4>
                                    <div class="d-flex align-items-center mb-2">
                                        <h5 class="mr-2 mb-0 primary-font"><i class="mdi mdi-cellphone-android text-primary mr-2"></i> موبایل -</h5>
                                        <p class="mb-0">62 فروش محصول</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pt-4">
                                                    <div class="avatar-sm mx-auto font-size-16">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    <i class="mdi mdi-monitor"></i>
                                                                </span>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h5 class="mb-1 primary-font">دسکتاپ</h5>
                                                        <p class="text-truncate">45 فروش محصول</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pt-4">
                                                    <div class="avatar-sm mx-auto font-size-16">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    <i class="mdi mdi-laptop"></i>
                                                                </span>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h5 class="mb-1 primary-font">لپ تاپ</h5>
                                                        <p class="text-truncate">57 فروش محصول</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pt-4">
                                                    <div class="avatar-sm mx-auto font-size-16">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    <i class="mdi mdi-tablet-android"></i>
                                                                </span>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h5 class="mb-1 primary-font">تبلت</h5>
                                                        <p class="text-truncate">31 فروش محصول</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pt-4">
                                                    <div class="avatar-sm mx-auto font-size-16">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                    <i class="mdi mdi-cellphone-android"></i>
                                                                </span>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h5 class="mb-1 primary-font">موبایل</h5>
                                                        <p class="text-truncate">62 فروش محصول</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <div class="input-group input-group-sm">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>فروردین</option>
                                                <option value="1">بهمن</option>
                                                <option value="2">دی</option>
                                                <option value="3">تیر</option>
                                            </select>
                                            <div class="input-group-append">
                                                <label class="input-group-text">ماه</label>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title mb-4">منابع اجتماعی</h4>

                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-1">مجموع منابع اجتماعی</p>
                                            <h4 class="mb-1 primary-font">8,974</h4>
                                            <p class="mb-0 mt-n1"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> از دوره قبلی</p>
                                        </div>
                                    </div>

                                    <div class="mt-3 social-source">
                                        <div class="media align-items-center social-source-list mb-n1">
                                            <div class="avatar-xs mr-4">
                                                <span class="avatar-title rounded-circle">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </span>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-0">فیسبوک</p>
                                                <h5 class="mb-0 primary-font">2,352</h5>
                                            </div>
                                            <div>
                                                2.06 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                            </div>
                                        </div>

                                        <div class="media align-items-center social-source-list mb-n1">
                                            <div class="avatar-xs mr-4">
                                                <span class="avatar-title rounded-circle bg-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </span>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-0">توییتر</p>
                                                <h5 class="mb-0 primary-font">1,925</h5>
                                            </div>
                                            <div>
                                                1.28 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                            </div>
                                        </div>

                                        <div class="media align-items-center social-source-list mb-n1">
                                            <div class="avatar-xs mr-4">
                                                <span class="avatar-title rounded-circle bg-pink">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </span>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-0">اینستاگرام</p>
                                                <h5 class="mb-0 primary-font">1,846</h5>
                                            </div>
                                            <div>
                                                1.04 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                            </div>
                                        </div>
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

    <script src="assets/js/pages/dashboard-2.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
