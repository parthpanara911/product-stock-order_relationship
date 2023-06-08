<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from php.spruko.com/zanex/zanex/pages/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 11:39:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – PHP Bootstrap5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin, dashboard, admin dashboard, admin template, crypto, crypto dashboard, sales dashboard, bootstrap 5 admin template, ecommerce template, ecommerce dashboard, responsive dashboard, admin panel, bootstrap 5 admin dashboard, cryptocurrency dashboard, bootstrap dashboard, multi dashboard, html, responsive, responsive admin, bootstrap admin template, dashboard template, bootstrap">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}">

    <!-- TITLE -->
    <title>Stock || View</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugin.css')}}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/css/icons.css')}}" rel="stylesheet">

    <!-- INTERNAL SWITCHER CSS -->
    <link href="{{asset('/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('/css/demo.css')}}" rel="stylesheet">

      <!-- SweetAlert CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
</head>

<body class="app sidebar-mini ltr light-mode">
    <!-- SWITCHER -->
    <!-- <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft text-center">
                                <div class="p-3 d-grid gap-2">
                                    <a href="https://php.spruko.com/zanex/index.html" class="btn ripple btn-primary mt-0">View Demo</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-secondary">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red">Our Portfolio</a>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Dark Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch7" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Theme Color</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Primary Color</span>
                                            <div class="">
                                                <input class=" input-color-picker color-primary-light"
                                                    value="#6259ca" id="colorID" oninput="changePrimaryColor()" type="color"
                                                    data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" name="lightPrimary">
                                            </div>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Background Color</span>
                                            <div class="">
                                                <input class="input-bg-picker background-primary-light"
                                                    value="#30304d" id="bgID" oninput="changeBackgroundColor()"
                                                    type="color" data-id3="body" data-id4="theme" name="BackgroundPrimary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Navigation Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Vertical Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizontal Click Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizontal Hover Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>LTR and RTL VERSIONS</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">LTR Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch8"
                                                    id="myonoffswitch4" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">RTL Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch8"
                                                    id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft menu-style">
                                <h4>Header Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle lightHeader d-flex">
                                            <span class="me-auto">Light Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch8" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle  colorHeader d-flex mt-2">
                                            <span class="me-auto">Color Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch9" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle darkHeader d-flex mt-2">
                                            <span class="me-auto">Dark Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>

                                        <div class="switch-toggle darkHeader d-flex mt-2">
                                            <span class="me-auto">Gradient Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch11" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft menu-style">
                                <h4>Menu Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle lightMenu d-flex">
                                            <span class="me-auto">Light Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch12" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle colorMenu d-flex mt-2">
                                            <span class="me-auto">Color Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch13" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle darkMenu d-flex mt-2">
                                            <span class="me-auto">Dark Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle gradientMenu d-flex mt-2">
                                            <span class="me-auto">Gradient Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Width Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Full Width</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                    id="myonoffswitch16" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Boxed</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                    id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Positions</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Fixed</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                    id="myonoffswitch18" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Scrollable</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                    id="myonoffswitch19" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft leftmenu-styles">
                                <h4>Sidemenu layout Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Default Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch20" class="onoffswitch2-checkbox default-menu" checked>
                                                <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon with Text</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch22" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch22" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon Overlay</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch21" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch21" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Closed Sidemenu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch23" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch24" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu Style 1</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Reset All Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section my-4">
                                        <button class="btn btn-danger btn-block" onclick="localStorage.clear();
                                            document.querySelector('html').style = '';
                                            names() ;
                                            resetData() ;" type="button">Reset All
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- END SWITCHER -->

    <!-- GLOBAL-LOADER -->
    <!-- <div id="global-loader">
            <img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div> -->
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-HEADER -->
            @include('includes.header');
            <!-- /APP-HEADER -->

            <!--APP-SIDEBAR-->
            @include('includes.sidebar');
            <!--/APP-SIDEBAR-->


            <!-- APP-CONTENT OPEN -->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title display-6">Stock Details</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);"></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"></li>
                                </ol> -->
                            </div>

                        </div>
                        <!-- PAGE-HEADER END -->


                        <!-- ROW-4 -->
                        <div class="row">

                            <div class="container mt-4">
                                <div class="d-flex justify-content-end">
                                    <a href="{{route('stock.create')}}" class="btn btn-success mb-2">Add Stock</a>
                                </div>

                                <div class="mt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Product Name</th>
                                                <th>Stock</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=1;
                                            @endphp
                                            @foreach($stocks as $stock)
                                            <tr>
                                                <td>@php echo $i++; @endphp</td>
                                                <td>{{$stock->product}}</td>
                                                <td>{{$stock->stock}}</td>
                                                <td>{{$stock->date}}</td>
                                                <td>
                                                <a class="btn btn-danger delete text-white" data-id="{{$stock->id}}">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
                            <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                            <!-- COL END -->
                        </div>
                        <!-- ROW END -->









                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- APP-CONTENT OPEN -->


        </div>

        <!--SIDEBAR-RIGHT-->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <!-- <div class="tab-menu-heading border-0 d-flex p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="javascript:void(0);" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
						</div> -->
            </div>
            <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                <div class="tabs-menu border-bottom">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <!-- <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-user me-1"></i> Profile</a></li> -->
                        <!-- <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-users me-1"></i> Contacts</a></li> -->
                        <!-- <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i> Settings</a></li> -->
                    </ul>
                </div>
                <!-- <div class="tab-content">
							<div class="tab-pane active" id="side1">
								<div class="card-body text-center">
									<div class="dropdown user-pro-body">
										<div class="">
											<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="../assets/images/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
										</div>
										<div class="user-info mg-t-20">
											<h6 class="fw-semibold  mt-2 mb-0">Mintrona Pechon</h6>
											<span class="mb-0 text-muted fs-12">Premium Member</span>
										</div>
									</div>
								</div>
								<a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
									<div class="d-flex"><i class="fe fe-user me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Profile</h6>
											<p class="tx-12 mb-0 text-muted">Profile Personal information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="chat.html">
									<div class="d-flex"><i class="fe fe-message-square me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Messages</h6>
											<p class="tx-12 mb-0 text-muted">Person message information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="emailservices.html">
									<div class="d-flex"><i class="fe fe-mail me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Mails</h6>
											<p class="tx-12 mb-0 text-muted">Persons mail information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="editprofile.html">
									<div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Account Settings</h6>
											<p class="tx-12 mb-0 text-muted">Settings Information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="login.html">
									<div class="d-flex"><i class="fe fe-power me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Sign Out</h6>
											<p class="tx-12 mb-0 text-muted">Account Signout</p>
										</div>
									</div>
								</a>
							</div>-->

            </div>
        </div>
    </div>
    <!--/SIDEBAR-RIGHT-->

    <!-- FOOTER -->
    <!-- <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © by <span id="year"></span> <a href="javascript:void(0);">Parth Panara</a><a href="javascript:void(0);"> </a>All rights
                    reserved
                </div>
            </div>
        </div>
    </footer> -->
    <!-- FOOTER END -->

    </div>


    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>

    <!-- JQUERY JS -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{asset('/plugins/sidemenu/sidemenu.js')}}"></script>

    <!-- STICKY JS -->
    <script src="{{asset('/js/sticky.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('/plugins/sidebar/sidebar.js')}}"></script>

    <!-- PERFECT SCROLLBAR JS-->
    <script src="{{asset('/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('/js/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('/js/circle-progress.min.js')}}"></script>

    <!-- CHARTJS CHART JS-->
    <script src="{{asset('/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="asset('/plugins/chart/utils.js')}}"></script>


    <!-- PIETY CHART JS-->
    <script src="{{asset('/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL DATA TABLES JS -->
    <script src="{{asset('/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- ECHART JS-->
    <script src="{{asset('/plugins/echarts/echarts.js')}}"></script>

    <!-- APEXCHART JS -->
    <script src="{{asset('/js/apexcharts.js')}}"></script>

    <!-- INDEX JS -->
    <script src="{{asset('/js/index1.js')}}"></script>


    <!-- COLOR THEME JS -->
    <script src="{{asset('/js/themeColors.js')}}"></script>

    <!-- SWITCHER STYLES JS -->
    <script src="{{asset('/js/swither-styles.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('/js/custom.js')}}"></script>

    <!-- SWITCHER JS -->
    <script src="{{URL::asset('/switcher/js/switcher.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>

    <script src="{{ asset('path/to/sweetalert2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
          $('.delete').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            // alert(id);
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                $.ajax({
                  url: "{{route('stock.delete')}}",
                  type: "POST",
                  data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                  },
                  success: function(response) {
                    Swal.fire(
                      'Deleted!',
                      'Your package has been deleted.',
                      'success'
                    ).then(function() {
                      location.reload();
                    });
                  },
                  error: function(xhr) {
                    Swal.fire(
                      'Error!',
                      'This Package is already been used in Product Module.',
                      'error'
                    );
                  }
                });
              }
            });
          });
        });
      </script>


</body>


<!-- Mirrored from php.spruko.com/zanex/zanex/pages/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 11:40:33 GMT -->

</html>