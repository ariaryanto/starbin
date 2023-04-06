<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK MINI | Profile</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../../assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="../../assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="../../assets/css/hope-ui.min.css?v=1.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../../assets/css/custom.min.css?v=1.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="../../assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="../../assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="../../assets/css/rtl.min.css" />

</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <!-- SIDEBAR -->
    @include('nasabah.component.sidebar')
    <!-- SIDEBAR -->
    <main class="main-content">
        <!-- NAVBAR -->
        @include('nasabah.component.navbar')
        <!-- NAVBAR -->
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="col-lg-6">
                    <div class="profile-content tab-content">
                        <div id="profile-feed" class="tab-pane fade active show">
                            <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        </div>
                                        <h5>Profile</h5>
                                    </div>
                                    <div class="dropdown">
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <div class="media-support-user-img me-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">

                                            <img src="/images/{{ $users->image }}" width="80px" alt="" align="left">


                                        </div>
                                        <div>

                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                                            <h4 class="me-2 h4">{{$users->name}}</h4>
                                            <span> - {{$users->role}}</span>
                                        </div>
                                        <div class="media-support-info mt-2"></div>
                                    </div>
                                    <div class="user-post">
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">

                        <style type="text/css">
                        .left {
                            text-align: left;
                        }

                        .right {
                            text-align: right;
                        }

                        .center {
                            text-align: center;
                        }

                        .justify {
                            text-align: justify;
                        }
                        </style>

                        <div class="card-body">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('nasabah-profile-edit')}}">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#anjay" data-bs-whatever="@getbootstrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z">
                                            </path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <h4 class="card-title">Tentang Saya</h4>
                            <div><b>ID User</b></div>
                            <p>{{$users->id}}</p>
                            <div><b>Kelas</b></div>
                            <p>{{$users->kelas}} {{$users->jurusan}}</p>
                            <div><b>Tanggal Lahir</b></div>
                            <p>{{date('d-m-Y', strtotime($users->tanggal_lahir))}}</p>
                            <div><strong>Alamat</strong></div>
                            <p>{{$users->alamat}}</p>
                            <div><b>Email</b></div>
                            <p>{{$users->email}}</p>
                            <div><b>Kontak</b></div>
                            <p>{{$users->no_telepon}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section Start -->
        @include('nasabah.component.footer')
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Library Bundle Script -->
    <script src="../../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../../assets/js/charts/vectore-chart.js"></script>
    <script src="../../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="../../assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="../../assets/js/hope-ui.js" defer></script>
</body>

</html>