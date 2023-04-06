<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK MINI | Beranda</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="../assets/css/hope-ui.min.css?v=1.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/custom.min.css?v=1.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="../assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="../assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="../assets/css/rtl.min.css" />

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
    @include('admin.component.sidebar')
    <!-- SIDEBAR -->
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="#" class="navbar-brand">
                        <!--Logo start-->

                        <!--logo End-->
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                            </svg>
                        </i>
                    </div>
                    <div class="input-group search-input">
                    </div>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="mt-2 navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/{{Auth::user()->image}}" alt="User-Profile"
                                        class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                                    <div class="caption ms-3 d-none d-md-block ">
                                        <h6 class="mb-0 caption-title">{{Auth::user()->name}}</h6>
                                        <p class="mb-0 caption-sub-title">{{Auth::user()->role}}</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('admin-profile')}}">Profile</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Logout
                                    </button>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Nav Header Component Start -->
            <div class="iq-navbar-header" style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h1>Hello {{Auth::user()->name}}!</h1>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="../assets/images/dashboard/top-header.png" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header1.png" alt="header"
                        class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header2.png" alt="header"
                        class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header3.png" alt="header"
                        class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header4.png" alt="header"
                        class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header5.png" alt="header"
                        class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
                </div>
            </div>
            <!-- Nav Header Component End -->
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row row-cols-1">
                        <div class="overflow-hidden d-slider1 ">
                            <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div>
                                                <img src="../assets/images/icons/dollar.png" alt="">
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Pemasukan</p>
                                                <h4 class="counter">Rp. {{ number_format($pemasukan) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div>
                                                <img src="../assets/images/icons/cash.png" alt="">
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Pengeluaran</p>
                                                <h4 class="counter">Rp. {{ number_format($pengeluaran) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <div>
                                                <img src="../assets/images/icons/people.png" alt="" width="70">
                                            </div>
                                            <div class="progress-detail">
                                                <p class="mb-2">Total Nasabah</p>
                                                <h4 class="counter">{{ number_format($nasabah)  }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" data-aos="fade-up" data-aos-delay="800">
                                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                    <div class="header-title">
                                        <h4 class="card-title">Rp. {{ number_format($total) }}</h4>
                                        <p class="mb-0">Total Tabungan</p>
                                    </div>
                                    <div class="d-flex align-items-center align-self-center">
                                        <div class="d-flex align-items-center text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                                fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-2">
                                                <span class="text-secondary">Pemasukan</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center ms-3 text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                                fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-2">
                                                <span class="text-secondary">Pengeluaran</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary" id="dropdownMenuButton22"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Bulan Ini
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="d-main" class="d-main"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="overflow-hidden card aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="600">
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
                                                    <th>Nama</th>
                                                    <th>Tanggal</th>
                                                    <th>Pemasukan</th>
                                                    <th>Pengeluaran</th>
                                                    <th>Admin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($uangs as $s)
                                                <tr>
                                                    <td>
                                                        <p>{{$s->user->name}}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{$s->tanggal}}</p>
                                                    </td>
                                                    <td>Rp. {{$s->pemasukan}}</td>
                                                    <td>
                                                        <h6>Rp. {{$s->pengeluaran}}</h6>
                                                    </td>
                                                    <td>
                                                        <h6>{{$s->admin}}</h6>
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
                <div class="col-md-12 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                                <div class="pb-4 border-0 card-header">
                                    <div class="p-4 border border-white rounded primary-gradient-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="font-weight-bold"></h5>
                                                <P class="mb-0"></P>
                                            </div>
                                            <div class="master-card-content">
                                                <svg class="master-card-1" width="60" height="60" viewBox="0 0 24 24">
                                                    <path fill="#ffffff" />
                                                </svg>
                                                <svg class="master-card-2" width="60" height="60" viewBox="0 0 24 24">
                                                    <path fill="#ffffff" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <div class="card-number">
                                                <span class="fs-5 me-2"></span>
                                                <span class="fs-5 me-2"></span>
                                                <span class="fs-5 me-2"></span>
                                                <span class="fs-5"></span>
                                            </div>
                                        </div>
                                        <div class="mb-2 d-flex align-items-center justify-content-between">
                                            <p class="mb-0"></p>
                                            <p class="mb-0"></p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6></h6>
                                            <h6 class="ms-5"></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex-wrap mb-4 d-flex align-itmes-center justify-content-center">
                                        <div class="d-flex align-itmes-center me-0 me-md-4">
                                            <div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="flex-wrap d-flex justify-content-center">
                                                    <h2 class="mb-2">Rp. {{ number_format($total) }}</h2>
                                                    <div>
                                                    </div>
                                                </div>
                                                <div class="flex-wrap d-flex justify-content-center">
                                                    <p class="text-info">Total Tabungan Sekolah</p>
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <a href="{{route('admin-logout')}}">
                            <button type="button" class="btn btn-primary">Logout</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
        @include('admin.component.footer')
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="../assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="../assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="../assets/js/hope-ui.js" defer></script>

    <script>
    if (document.querySelectorAll('#d-main').length) {
        const options = {
            series: [{
                name: 'Pemasukan',
                data: <?= json_encode($chart_pemasukan) ?>
            }, {
                name: 'Pengeluaran',
                data: <?= json_encode($chart_pengeluaran) ?>
            }],
            chart: {
                fontFamily: '"Inter", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                height: 245,
                type: 'area',
                toolbar: {
                    show: false
                },
                sparkline: {
                    enabled: false,
                },
            },
            colors: ["#3a57e8", "#4bc7d2"],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            yaxis: {
                show: true,
                labels: {
                    show: true,
                    minWidth: 19,
                    maxWidth: 19,
                    style: {
                        colors: "#8A92A6",
                    },
                    offsetX: -5,
                },
            },
            legend: {
                show: false,
            },
            xaxis: {
                labels: {
                    minHeight: 22,
                    maxHeight: 22,
                    show: true,
                    style: {
                        colors: "#8A92A6",
                    },
                },
                lines: {
                    show: false //or just here to disable only x axis grids
                },
                categories: <?= json_encode($nama_bulan) ?>
            },
            grid: {
                show: false,
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: "vertical",
                    shadeIntensity: 0,
                    gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
                    inverseColors: true,
                    opacityFrom: .4,
                    opacityTo: .1,
                    stops: [0, 50, 80],
                    colors: ["#3a57e8", "#4bc7d2"]
                }
            },
            tooltip: {
                enabled: true,
            },
        };

        const chart = new ApexCharts(document.querySelector("#d-main"), options);
        chart.render();
        document.addEventListener('ColorChange', (e) => {
            console.log(e)
            const newOpt = {
                colors: [e.detail.detail1, e.detail.detail2],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        type: "vertical",
                        shadeIntensity: 0,
                        gradientToColors: [e.detail.detail1, e.detail
                            .detail2
                        ], // optional, if not defined - uses the shades of same color in series
                        inverseColors: true,
                        opacityFrom: .4,
                        opacityTo: .1,
                        stops: [0, 50, 60],
                        colors: [e.detail.detail1, e.detail.detail2],
                    }
                },
            }
            chart.updateOptions(newOpt)
        })
    }
    </script>


</body>

</html>