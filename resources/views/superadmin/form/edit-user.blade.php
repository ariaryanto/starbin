<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK MINI | Edit User</title>

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
    @include('superadmin.component.sidebar')
    <!-- SIDEBAR -->
    <main class="main-content">
        <!-- NAVBAR -->
        @include('superadmin.component.navbar')
        <!-- NAVBAR -->
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">User Baru</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('superadmin-update',$users->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <div class="profile-img-edit position-relative">
                                            <img src="/images/{{ $users->image }}" alt="profile-image"
                                                class="theme-color-default-img profile-pic rounded avatar-100" id="img">
                                            <div class="upload-icone bg-primary">
                                                <label for="upload" class="edit-image">
                                                    <svg class="upload-button" width="14" height="14"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#ffffff"
                                                            d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z">
                                                        </path>
                                                    </svg>
                                                    <input class="file-upload" type="file" name="image" id="upload">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="img-extension mt-3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Role:</label>
                                        <select name="role" class="selectpicker form-control" data-style="py-0">
                                            <option value="superadmin">{{$users->role}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Jurusan:</label>
                                        <select name="jurusan" class="selectpicker form-control" data-style="=py-0">
                                            <option>{{$users->jurusan}}</option>
                                            <option value="RPL">RPL</option>
                                            <option value="TBSM">TBSM</option>
                                            <option value="AKL">AKL</option>
                                            <option value="ATPH">ATPH</option>
                                            <option value="TEI">TEI</option>
                                            <option value="OTKP">OTKP</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Kelas:</label>
                                        <select name="kelas" class="selectpicker form-control" data-style="=py-0">
                                            <option>{{$users->kelas}}</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Informasi User</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger text-white">
                                    {!! implode('',$errors -> all('
                                    :message
                                    ')) !!}
                                </div>
                                @endif
                                <div class="new-user-info">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Nama:</label>
                                            <input type="text" class="form-control" id="fname" placeholder="Nama"
                                                name="name" value="{{$users->name}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="add2">Tanggal Kelahiran:</label>
                                            <input type="text" class="form-control vanila-datepicker" id="add2"
                                                placeholder="Tanggal Kelahiran" name="tanggal_lahir"
                                                value="{{date('d-m-Y', strtotime($users->tanggal_lahir))}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="cname">Alamat:</label>
                                            <input type="text" class="form-control" id="cname" placeholder="Alamat"
                                                name="alamat" value="{{$users->alamat}}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="form-label">No Telepon:</label>
                                            <input type="text" class="form-control" id="cname" placeholder="No Telepon"
                                                name="no_telepon" value="{{$users->no_telepon}}">

                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="mobno">Email:</label>
                                            <input type="email" class="form-control" id="mobno" placeholder="Email"
                                                name="email" value="{{$users->email}}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="altconno">NIP / NISN:</label>
                                            <input type="text" class="form-control" id="altconno"
                                                placeholder="NIP / NISN" name="nip_nisn" value="{{$users->nip_nisn}}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="pno">Password:</label>
                                            <input type="text" class="form-control" id="pno"
                                                placeholder="Isi kolom ini jika anda ingin ganti Password."
                                                name="password">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modals">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sudah benar?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                        <button type="submit" class="btn btn-primary">Sudah</button>
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

    <script>
    $(function() {
        $('#upload').change(function() {
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" ||
                    ext == "jpg")) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#img').attr('src', '/assets/no_preview.png');
            }
        });
    });
    </script>

</body>

</html>