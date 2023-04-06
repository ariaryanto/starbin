<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK MINI | Tambah Riwayat Tabungan</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../../assets/css/core/libs.min.css" />


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
    @include('admin.component.sidebar')
    <!-- SIDEBAR -->
    <main class="main-content">
        <!-- NAVBAR -->
        @include('admin.component.navbar')
        <!-- NAVBAR -->
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div>
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title"> Tambahkan Riwayat Tarik Tunai</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationDefault02">Tanggal</label>
                                            <input type="text" class="form-control" id="validationDefault02" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationDefault02">Pengeluaran</label>
                                            <input type="text" class="form-control" id="validationDefault02" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Benar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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