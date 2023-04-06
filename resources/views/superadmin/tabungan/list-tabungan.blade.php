<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK MINI | List Tabungan</title>

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
    <!-- loader END -->

    <!-- SIDEBAR -->
    @include('superadmin.component.sidebar')
    <!-- SIDEBAR -->
    <main class="main-content">
        <!-- NAVBAR -->
        @include('superadmin.component.navbar')
        <!-- NAVBAR -->
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">List User</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <form action="" method="get">
                                        <div class="card-body pb-0 pt-0 mt-1 ms-0">
                                            <div class="input-group">
                                                <input type="text" value="{{request('search')}}" name="search"
                                                    class="form-control border px-3 me-3 rounded-2"
                                                    style="width: 250px !important; flex:0 0 auto !important;">
                                                <button type="submit"
                                                    class="btn btn-info mb-0 d-flex align-items-center rounded-3"><span
                                                        class="fa fa-search fa-2x me-2"></span>Search</button>
                                                <div style="flex:1 1 auto"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="p-0 card-body">
                                <div class="mt-4 table-responsive">
                                    <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                        <thead>
                                            <tr class="ligth">
                                                <th>Profile</th>
                                                <th>Nama</th>
                                                <th>Id User</th>
                                                <th>Kontak</th>
                                                <th>NIP/NISN</th>
                                                <th style="min-width: 100px">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $u)
                                            <tr>
                                                <td class="text-center"><img src="/images/{{ $u->image }}" width="80px"
                                                        alt="profile"></td>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $u->no_telepon }}</td>
                                                <td>{{ $u->nip_nisn }}</td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a href="{{ route('superadmin-check-tabungan') }}?nip_nisn={{$u->nip_nisn }}"
                                                            class="btn btn-sm btn-icon btn-warning"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Edit" href="#">
                                                            <span class="btn-inner">
                                                                <table>
                                                                    <tr>Check</tr>
                                                                </table>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $users->appends(request()->query())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
        @include('superadmin.component.footer')
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->

    <!-- Library Bundle Script -->
    <script src=" ../../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../../assets/js/charts/widgetcharts.js">
    </script>

    <!-- mapchart Script -->
    <script src="../../assets/js/charts/vectore-chart.js">
    </script>
    <script src="../../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../../assets/js/plugins/fslightbox.js">
    </script>

    <!-- Settings Script -->
    <script src="../../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../../assets/js/plugins/slider-tabs.js">
    </script>

    <!-- Form Wizard Script -->
    <script src="../../assets/js/plugins/form-wizard.js">
    </script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="../../assets/js/hope-ui.js" defer></script>
</body>

</html>