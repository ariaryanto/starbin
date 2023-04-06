<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK MINI | Tabungan</title>

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
                    <div class="profile-content tab-content">
                        <div id="profile-feed" class="tab-pane fade active show">
                            <div class="card">
                                <div class="card-header">
                                    <div class="form-group">
                                    </div>
                                    <div class="header-title">
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                                            <img src="/images/{{ Auth::user()->image }}" width="60px">
                                            <h3>&emsp;{{Auth::user()->name}}</h3>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                                            <p><b>&emsp;&emsp;&emsp;&emsp;{{ Auth::user()->kelas }}
                                                    {{ Auth::user()->jurusan }}</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <p class="mb-2">&emsp;&emsp;&emsp;&emsp;Total Tabungan</p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <h4 class="counter">&emsp;&emsp;&emsp;Rp. {{ number_format($total) }}</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <div class="media-support-user-img me-3">
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
            <div class="col-lg-12">
                <div class="col-md-12 col-lg-12">
                    <div class="overflow-hidden card aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="mb-2 card-title">Riwayat Tabungan</h4>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="mt-4 table-responsive">
                                <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                    <thead>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>Pemasukan</td>
                                            <td>Admin</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($uangs->where('pemasukan','!=',0) as $s)
                                        <tr>
                                            <td>
                                                <div class="icon iq-icon-box-3 rounded-pill">{{ $s->tanggal }}</div>
                                            </td>
                                            <td>Rp. {{ number_format($s->pemasukan) }}</td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <h7>{{ $s->admin }}</h7>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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