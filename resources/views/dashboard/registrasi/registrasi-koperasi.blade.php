<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Account Settings | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="/assets/dashboard/src/assets/img/favicon.ico" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="/assets/dashboard/layouts/modern-light-menu/loader.js"></script>
    <script src="/assets/js/function.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/assets/dashboard/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="/assets/dashboard/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="/assets/dashboard/src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/dashboard/src/plugins/src/sweetalerts2/sweetalerts2.css">

    <link href="/assets/dashboard/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/light/elements/alert.css">

    <link href="/assets/dashboard/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/light/forms/switches.css">
    <link href="/assets/dashboard/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="/assets/dashboard/src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />



    <link href="/assets/dashboard/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/dark/elements/alert.css">
    <!-- <script src="/assets/js/common_scripts.min.js"></script> -->

    <link href="/assets/dashboard/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/dark/forms/switches.css">
    <link href="/assets/dashboard/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="/assets/dashboard/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />


    <!--  END CUSTOM STYLE FILE  -->
</head>

<body class=" layout-boxed">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->

    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <ul class="nav nav-pills" id="animateLine" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg> Data Puskop</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-profile-tab" data-bs-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> Data Lengkap Koperasi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-pengurus-tab" data-bs-toggle="tab" href="#animated-pengurus" role="tab" aria-controls="animated-pengurus" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> Data Pengurus</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-pengawas-tab" data-bs-toggle="tab" href="#animated-pengawas" role="tab" aria-controls="animated-pengawas" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> Data Pengawas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg> Dokumen</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-contact-tab" data-bs-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg> Lampiran Dokumen</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="otp">Masukan OTP</label>
                                                                            <input type="text" class="form-control mb-3" id="otp" placeholder="Kode OTP" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-1">
                                                                        <div class="form-group text-start">
                                                                            <button onclick="confirm()" type="button" id="confirm-btn" class="btn btn-secondary">Konfirmasi</button>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2" id="form-koperasi" hidden>
                                                            <h6 class="">Data Puskop</h6>
                                                            <div class="form">
                                                                <button type="button" onclick="tambahPuskopBtn()" class="btn btn-success mb-3">Tambah Data</button>
                                                                <div id="puskopList">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-1 d-flex justify-content-center">
                                                                <button type="button" onclick="nextBtn()" class="btn btn-secondary">Next</button>
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
                        <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <h6>Data Lengkap</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nama_koperasi">Nama Koperasi</label>
                                                                            <input type="text" class="form-control mb-3" id="nama_koperasi" placeholder="Nama Koperasi" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="singkatan_koperasi">Singkatan Koperasi</label>
                                                                            <input type="text" class="form-control mb-3" id="singkatan_koperasi" placeholder="singkatan koperasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control mb-3" id="email" placeholder="Masukan Email Koperasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="web">Website</label>
                                                                            <input type="text" class="form-control mb-3" id="web" placeholder="Masukan URL Website">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="bidang_koperasi">Bidang Koperasi</label>
                                                                            <input type="text" class="form-control mb-3" id="bidang_koperasi" placeholder="Masukan Bidang Koperasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_telp">No Telp</label>
                                                                            <input type="text" class="form-control mb-3" id="no_telp" placeholder="Masukan Nomor Telepon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_wa">No WA</label>
                                                                            <input type="text" class="form-control mb-3" id="no_wa" placeholder="Masukan Nomor WA">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_fax">No Fax</label>
                                                                            <input type="text" class="form-control mb-3" id="no_fax" placeholder="Masukan  No Fax">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="foto_profil">Upload Logo<span style="color: red;">*</span></label>
                                                                        <input type="file" class="form-control mb-1" id="foto_logo" name="foto_logo" required />
                                                                        <img id="preview-logo" height="100" width="100" class="mt-1 mb-3"
                                                                            src="/assets/images/default.jpg" alt="Preview Image">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label for="alamat">Alamat Lengkap</label>
                                                                        <textarea type="text" class="form-control" style="height: 120px"
                                                                            onkeyup="getVals(this, 'alamat');" id="alamat" placeholder="Masukan Alamat Koperasi" value=""></textarea>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="singkatan_koperasi">Provinsi</label>
                                                                            <select onchange="getCity(this.value)" id="provinsi" class="form-control mb-3">
                                                                                <option value="00" hidden selected>Pilih Provinsi</option>
                                                                            </select>
                                                                            <div id="provinsi-error" class="text-danger mt-1 hidden"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="kota">Kabupaten/Kota</label>
                                                                            <select onchange="getDistrict(this.value)" id="kota" class="form-control mb-3">
                                                                                <option value="00" hidden selected>Pilih Kabuptaen/Kota</option>
                                                                            </select>
                                                                            <div id="kota-error" class="text-danger mt-1 hidden"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="kecamatan">Kecamatan</label>
                                                                            <select onchange="getSubdistrict(this.value)" id="kecamatan" class="form-control mb-3">
                                                                                <option value="00" hidden selected>Pilih Kecamatan</option>
                                                                            </select>
                                                                            <div id="kecamatan-error" class="text-danger mt-1 hidden"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="kelurahan">Kelurahan</label>
                                                                            <select id="kelurahan" class="form-control mb-3">
                                                                                <option value="00" hidden selected>Pilih Kelurahan/Desa</option>
                                                                            </select>
                                                                            <div id="kelurahan-error" class="text-danger mt-1 hidden"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()" class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()" class="btn btn-secondary">Next</button>
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
                        <div class="tab-pane fade" id="animated-pengawas" role="tabpanel" aria-labelledby="animated-pengawas-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <h6>Data Pengawas</h6>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2">
                                                                        <div class="form">
                                                                            <button type="button" onclick="tambahPengawasBtn()" class="btn btn-success mb-3">Tambah Data</button>
                                                                            <div id="pengawasList">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()" class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()" class="btn btn-secondary">Next</button>
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
                        <div class="tab-pane fade" id="animated-pengurus" role="tabpanel" aria-labelledby="animated-pengurus-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <h6>Data Pengurus</h6>

                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2">
                                                                        <div class="form">
                                                                            <button type="button" onclick="tambahPengurusBtn()" class="btn btn-success mb-3">Tambah Data</button>
                                                                            <div id="pengurusList">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()" class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()" class="btn btn-secondary">Next</button>
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
                        <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <h6>Dokumen</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_akta">Nomor Akta Pendirian</label>
                                                                            <input type="text" class="form-control mb-3" id="no_akta" placeholder="Masukan Nomor Akta" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_akta">Tanggal Akta Pendirian</label>
                                                                            <input type="date" class="form-control mb-3" id="tanggal_akta" placeholder="Masukan Tanggal Akta">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_skk">Nomor SK Kemenkumham</label>
                                                                            <input type="text" class="form-control mb-3" id="no_skk" placeholder="Masukan Nomor SK">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_skk">Tanggal SK</label>
                                                                            <input type="date" class="form-control mb-3" id="tanggal_skk" placeholder="Masukan Tanggal SK">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_spkk">Nomor Surat Pengesahan Koperasi dari Kemenkop & UKM</label>
                                                                            <input type="text" class="form-control mb-3" id="no_spkk" placeholder="Masukan Nomor Surat Pengesahan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_spkk">Tanggal Surat Pengesahan</label>
                                                                            <input type="date" class="form-control mb-3" id="tanggal_spkk" placeholder="Masukan Tanggal Surat">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_akta_perubahan">Nomor Akta Perubahan</label>
                                                                            <input type="text" class="form-control mb-3" id="no_akta_perubahan" placeholder="Masukan Nomor Akta Perubahan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="masa_berlaku_perubahan">Tanggal Masa Berlaku Akta</label>
                                                                            <input type="date" class="form-control mb-3" id="masa_berlaku_perubahan" placeholder="Masukan Tanggal Berlaku">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_siup">Nomor SIUP/NIB</label>
                                                                            <input type="text" class="form-control mb-3" id="no_siup" placeholder="Masukan Nomor SIUP/NIB">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="masa_berlaku_siup">Tanggal Masa Berlaku SIUP/NIB</label>
                                                                            <input type="date" class="form-control mb-3" id="masa_berlaku_siup" placeholder="Masukan Tanggal Berlaku">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_skdu">Nomor Surat Keterangan Domisili Usaha</label>
                                                                            <input type="text" class="form-control mb-3" id="no_skdu" placeholder="Masukan Nomor Surat Keterangan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="masa_berlaku_skdu">Tanggal Masa Berlaku Surat Domisili Usaha</label>
                                                                            <input type="date" class="form-control mb-3" id="masa_berlaku_skdu" placeholder="Masukan Tanggal Berlaku">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_npwp">Nomor NPWP</label>
                                                                            <input type="text" class="form-control mb-3" id="no_npwp" placeholder="Masukan Nomor NPWP">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_pkp">Nomor PKP</label>
                                                                            <input type="text" class="form-control mb-3" id="no_pkp" placeholder="Masukan Nomor PKP">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_sertifikat">Nomor Sertifikat Koperasi</label>
                                                                            <input type="text" class="form-control mb-3" id="no_sertifikat" placeholder="Masukan Nomor Sertifikat">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                    <button type="button" onclick="previousBtn()" class="btn btn-secondary">Previous</button>
                                                                    <button type="button" onclick="nextBtn()" class="btn btn-secondary">Next</button>
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
                        <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <h6>Lampiran Dokumen</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_akta_pendirian">Upload Dokumen Akta Pendirian<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_akta_pendirian"
                                                                                name="doc_akta_pendirian" required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_sk_kemenkumham">Upload Dokumen SK Kemenkumham<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_sk_kemenkumham"
                                                                                name="doc_sk_kemenkumham" required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_spkk">Upload Dokumen Surat Pengesahan<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_spkk" name="doc_spkk"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_akta_perubahan">Upload Dokumen Akta Perubahan<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_akta_perubahan"
                                                                                name="doc_akta_perubahan" required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_siup">Upload Dokumen SIUP<span style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_siup" name="doc_siup"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_skdu">Upload Dokumen SKDU<span style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_skdu" name="doc_skdu"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="foto_npwp">Upload NPWP<span style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="foto_npwp" name="foto_npwp"
                                                                                required />
                                                                            <img id="preview-npwp" height="100" width="100" class="mt-1"
                                                                                src="/assets/images/default.jpg" alt="Preview Image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_sertifikat_koperasi">Upload Dokumen Sertifikat<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control" id="doc_sertifikat_koperasi"
                                                                                name="doc_sertifikat_koperasi" required />
                                                                            <p><span style="color: red;">*)</span>Buat dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                    <button type="button" onclick="previousBtn()" class="btn btn-secondary">Previous</button>
                                                                    <button type="button" onclick="saveBtn()" class="btn btn-secondary">Submit</button>
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

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>

    <script>
        let nis;
        let id_koperasi;
        let puskopData = [];
        let pengurusData = [];
        let pengawasData = [];
        window.addEventListener("load", () => {
            nis = {{ $nis }};
            getProvince();
        });

        function confirm() {
            const otp = document.getElementById('otp').value;
            fetch(`/api/koperasi/verifikasi-otp/${otp}/${nis}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.response_code !== '00') {
                        alert(data.response_message);
                    } else {
                        document.getElementById('nama_koperasi').value = data.response_message.nama_koperasi;
                        document.getElementById('email').value = data.response_message.email_koperasi;
                        // Enable next step
                        document.getElementById('form-koperasi').hidden = false;
                        pengurusData.push({
                            nama_pengurus: data.response_message.nama_pengurus,
                            jabatan: data.response_message.jabatan,
                            nomor_hp: data.response_message.nomor_hp,
                        })
                        // document.getElementById('nis').disabled = true;
                        renderPengurusList();
                        document.getElementById('confirm-btn').disabled = true;
                        document.getElementById('otp').disabled = true;
                        id_koperasi = data.response_message.id_koperasi
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function nextBtn() {
            // Mendapatkan tab yang aktif saat ini
            const activeTab = document.querySelector('#animateLine .nav-link.active');

            // Mendapatkan tab berikutnya
            const nextTab = activeTab.parentElement.nextElementSibling?.querySelector('.nav-link');

            if (nextTab) {
                // Mengaktifkan tab berikutnya
                new bootstrap.Tab(nextTab).show();
            }
        }

        function previousBtn() {
            // Mendapatkan tab yang aktif saat ini
            const activeTab = document.querySelector('#animateLine .nav-link.active');

            // Mendapatkan tab sebelumnya
            const previousTab = activeTab.parentElement.previousElementSibling?.querySelector('.nav-link');

            if (previousTab) {
                // Mengaktifkan tab sebelumnya
                new bootstrap.Tab(previousTab).show();
            }
        }

        function renderPuskopList() {
            const puskopList = document.getElementById('puskopList');
            puskopList.innerHTML = `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Puskop</th>
                    <th scope="col">Email Koperasi</th>
                    <th scope="col">Nama Ketua</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    `;

            const tbody = puskopList.querySelector('tbody');
            puskopData.forEach((puskop, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
            <th scope="row">${index + 1}</th>
            <td>${puskop.nama_koperasi}</td>
            <td>${puskop.email_koperai}</td>
            <td>${puskop.nama_ketua}</td>
            <td>${puskop.nomor_ketua}</td>
            <td>
                <button class="btn btn-warning btn-sm" type="button" onclick="editPuskop(${index})">Edit</button>
                <button class="btn btn-danger btn-sm" type="button" onclick="deletePuskop(${index})">Delete</button>
            </td>
        `;
                tbody.appendChild(row);
            });
        }

        function tambahPuskopBtn() {
            Swal.fire({
                title: "Tambah Puskop",
                html: `
            <input id="swal-input1" class="swal2-input" placeholder="Nama Puskop">
            <input id="swal-input2" class="swal2-input" placeholder="Email Koperasi">
            <input id="swal-input3" class="swal2-input" placeholder="Nama Ketua">
            <input id="swal-input4" class="swal2-input" placeholder="Nomor HP">
        `,
                showCancelButton: true,
                confirmButtonText: "Tambah",
                preConfirm: () => {
                    const nama_koperasi = document.getElementById('swal-input1').value;
                    const email_koperai = document.getElementById('swal-input2').value;
                    const nama_ketua = document.getElementById('swal-input3').value;
                    const nomor_ketua = document.getElementById('swal-input4').value;

                    if (!nama_koperasi || !email_koperai || !nama_ketua || !nomor_ketua) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_koperasi,
                        email_koperai,
                        nama_ketua,
                        nomor_ketua
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_koperasi,
                        email_koperai,
                        nama_ketua,
                        nomor_ketua
                    } = result.value;

                    puskopData.push({
                        nama_koperasi: nama_koperasi,
                        email_koperai: email_koperai,
                        nama_ketua: nama_ketua,
                        nomor_ketua: nomor_ketua,
                    });

                    renderPuskopList();
                    console.log(puskopData);
                }
            });
        }

        function editPuskop(index) {
            const puskop = puskopData[index];
            Swal.fire({
                title: "Edit Puskop",
                html: `
            <input id="swal-input1" class="swal2-input" value="${puskop.nama_koperasi}" placeholder="Nama Puskop">
            <input id="swal-input2" class="swal2-input" value="${puskop.email_koperai}" placeholder="Email Koperasi">
            <input id="swal-input3" class="swal2-input" value="${puskop.nama_ketua}" placeholder="Nama Ketua">
            <input id="swal-input4" class="swal2-input" value="${puskop.nomor_ketua}" placeholder="Nomor HP">
        `,
                showCancelButton: true,
                confirmButtonText: "Update",
                preConfirm: () => {
                    const nama_koperasi = document.getElementById('swal-input1').value;
                    const email_koperai = document.getElementById('swal-input2').value;
                    const nama_ketua = document.getElementById('swal-input3').value;
                    const nomor_ketua = document.getElementById('swal-input4').value;

                    if (!nama_koperasi || !email_koperai || !nama_ketua || !nomor_ketua) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_koperasi,
                        email_koperai,
                        nama_ketua,
                        nomor_ketua
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_koperasi,
                        email_koperai,
                        nama_ketua,
                        nomor_ketua
                    } = result.value;

                    puskopData[index] = {
                        nama_koperasi,
                        email_koperai,
                        nama_ketua,
                        nomor_ketua,
                    };

                    renderPuskopList();
                    Swal.fire('Updated!', 'Data Puskop telah diperbarui.', 'success');
                }
            });
        }

        function deletePuskop(index) {
            puskopData.splice(index, 1);
            renderPuskopList();
        }

        function renderPengurusList() {
            const pengurusList = document.getElementById('pengurusList');
            pengurusList.innerHTML = '';

            // Buat elemen tabel
            const table = document.createElement('table');
            table.className = 'table table-bordered';

            // Buat header tabel
            const thead = document.createElement('thead');
            thead.innerHTML = `
        <tr>
            <th>No</th>
            <th>Nama Pengurus</th>
            <th>Jabatan</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
    `;
            table.appendChild(thead);

            // Buat body tabel
            const tbody = document.createElement('tbody');

            pengurusData.forEach((pengurus, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
            <td>${index + 1}</td>
            <td>${pengurus.nama_pengurus}</td>
            <td>${pengurus.jabatan}</td>
            <td>${pengurus.nomor_hp}</td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editPengurus(${index})" ${index < 1 ? 'hidden' : ''}>Edit</button>
                <button class="btn btn-danger btn-sm" onclick="deletePengurus(${index})" ${index < 1 ? 'hidden' : ''}>Delete</button>
            </td>
        `;

                tbody.appendChild(row);
            });

            table.appendChild(tbody);
            pengurusList.appendChild(table);
        }


        function tambahPengurusBtn() {
            Swal.fire({
                title: 'Tambah Pengurus',
                html: `
            <input id="swal-input1" class="swal2-input" placeholder="Nama Pengurus">
            <input id="swal-input2" class="swal2-input" placeholder="Jabatan">
            <input id="swal-input3" class="swal2-input" placeholder="Nomor Telepon">
        `,
                showCancelButton: true,
                confirmButtonText: 'Tambah',
                preConfirm: () => {
                    const nama_pengurus = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengurus || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengurusData.push({
                        nama_pengurus,
                        jabatan,
                        nomor_hp,
                        id_koperasi: id_koperasi
                    });

                    renderPengurusList();
                    console.log(pengurusData);

                    Swal.fire('Berhasil!', 'Pengurus berhasil ditambahkan.', 'success');
                }
            });
        }

        function editPengurus(index) {
            const pengurus = pengurusData[index];

            Swal.fire({
                title: 'Edit Pengurus',
                html: `
            <input id="swal-input1" class="swal2-input" value="${pengurus.nama_pengurus}" placeholder="Nama Pengurus">
            <input id="swal-input2" class="swal2-input" value="${pengurus.jabatan}" placeholder="Jabatan">
            <input id="swal-input3" class="swal2-input" value="${pengurus.nomor_hp}" placeholder="Nomor Telepon">
        `,
                showCancelButton: true,
                confirmButtonText: 'Update',
                cancelButtonText: 'Batal',
                preConfirm: () => {
                    const nama_pengurus = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengurus || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengurusData[index] = {
                        nama_pengurus,
                        jabatan,
                        nomor_hp,
                        id_koperasi: id_koperasi
                    };

                    renderPengurusList();
                    Swal.fire('Berhasil!', 'Data pengurus berhasil diperbarui.', 'success');
                }
            });
        }

        function deletePengurus(index) {
            pengurusData.splice(index, 1);
            renderPengurusList();
        }

        function renderPengawasList() {
            const pengawasList = document.getElementById('pengawasList');
            pengawasList.innerHTML = '';

            if (pengawasData.length > 0) {
                const table = document.createElement('table');
                table.className = 'table table-bordered';

                const thead = document.createElement('thead');
                thead.innerHTML = `
                    <tr>
                        <th>No</th>
                        <th>Nama Pengawas</th>
                        <th>Jabatan</th>
                        <th>Nomor HP</th>
                        <th>Aksi</th>
                    </tr>
                `;

                const tbody = document.createElement('tbody');

                pengawasData.forEach((pengawas, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${pengawas.nama_pengawas}</td>
                        <td>${pengawas.jabatan}</td>
                        <td>${pengawas.nomor_hp}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editPengawas(${index})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deletePengawas(${index})">Delete</button>
                        </td>
                    `;
                    tbody.appendChild(row);
                });

                table.appendChild(thead);
                table.appendChild(tbody);
                pengawasList.appendChild(table);
            } else {
                pengawasList.innerHTML = '<p>Tidak ada data pengawas yang tersedia.</p>';
            }
        }

        function tambahPengawasBtn() {
            Swal.fire({
                title: 'Tambah Pengawas',
                html: `
                    <input id="swal-input1" class="swal2-input" placeholder="Nama Pengawas">
                    <input id="swal-input2" class="swal2-input" placeholder="Jabatan">
                    <input id="swal-input3" class="swal2-input" placeholder="Nomor Telepon">
                `,
                showCancelButton: true,
                confirmButtonText: 'Tambah',
                preConfirm: () => {
                    const nama_pengawas = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengawas || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengawasData.push({
                        nama_pengawas,
                        jabatan,
                        nomor_hp,
                        id_koperasi: id_koperasi
                    });

                    renderPengawasList();
                    Swal.fire({
                        icon: 'success',
                        title: 'Pengawas berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

        function editPengawas(index) {
            const pengawas = pengawasData[index];

            Swal.fire({
                title: 'Edit Pengawas',
                html: `
                    <input id="swal-input1" class="swal2-input" value="${pengawas.nama_pengawas}" placeholder="Nama Pengawas">
                    <input id="swal-input2" class="swal2-input" value="${pengawas.jabatan}" placeholder="Jabatan">
                    <input id="swal-input3" class="swal2-input" value="${pengawas.nomor_hp}" placeholder="Nomor Telepon">
                `,
                showCancelButton: true,
                confirmButtonText: 'Update',
                preConfirm: () => {
                    const nama_pengawas = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengawas || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengawasData[index] = {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    };

                    renderPengawasList();
                    Swal.fire({
                        icon: 'success',
                        title: 'Pengawas berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

        function deletePengawas(index) {
            pengawasData.splice(index, 1);
            renderPengawasList();
        }
    </script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/dashboard/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/waves/waves.min.js"></script>
    <script src="/assets/dashboard/layouts/modern-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="/assets/dashboard/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="/assets/dashboard/src/assets/js/users/account-settings.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>

</html>