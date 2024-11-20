<?php
//simulasi server side

class BasicData
{
    //jangan ubah BasicData
    public $nama = "INI JUDUL UNDANGAN";
    public $slug = "putra-putri";
    public $wedding = "The Wedding of";
}
$data = new BasicData;

class DataUndangan
{
    public $nama_mempelai_pria = 'Putra';
    public $nama_ortu_pria = 'Bpk.Bambang & Ibu.Sarah';
    public $nama_mempelai_wanita = 'Putri';
    public $nama_ortu_wanita = 'Bpk.Solikin & Ibu.Solikah';
    public $judul_quotes = 'Al-Hujurat, Ayat 13';
    public $quotes = 'Wahai manusia, sesungguhnya Kami telah menciptakan kamu dari seorang laki-laki dan perempuan. Kemudian, Kami menjadikan kamu berbangsa-bangsa dan bersuku-suku agar kamu saling mengenal. Sesungguhnya yang paling mulia di antara kamu di sisi Allah adalah orang yang paling bertakwa. Sesungguhnya Allah Maha Mengetahui lagi Mahateliti.';
    // AKAD DATA
    public $hari_akad = "Jum'at, 12 Desember 2024";
    public $jam_akad = "08.00 - 09.00 WIB";
    public $lokasi_akad = "Ds. Lorem, Dsn.Ipsum, Kec.Sit dolor amet";

    // RESEPSI DATA
    public $hari_resepsi = "Jum'at, 12 Desember 2024";
    public $jam_resepsi = "Rilex";
    public $lokasi_resepsi = "Ds. Lorem, Dsn.Ipsum, Kec.Sit dolor amet";
    public $shareloc_resepsi = "https://maps.app.goo.gl/7VgePZqnCCRcKBLa7";

    // NGUNDUH MANTU DATA
    public $hari_ngunduh = "Minggu, 14 Desember 2024";
    public $jam_ngunduh = "Rilex";
    public $lokasi_ngunduh = "Ds. Amet, Dsn. Doe, Kec.Sit dolor amet";
    public $shareloc_ngunduh = "https://maps.app.goo.gl/7VgePZqnCCRcKBLa7";

    // BERI HADIAH / BANK INFO DATA
    public $jenis_kartu = "BANK BRI";
    public $nomor_rekening = "12345678";
    public $atas_nama = "Joen Doe";
    public $beri_tahu = "https://wa.me/6281233489003?text=Selamat%20ya,%20mohon%20maaf%20belum%20bisa%20hadir%20ke%20pernikahan%anda";

    //silahkan ubah class DataUndangan sesuai kebutuhan

}

$undangan = new DataUndangan;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/form-undangan/assets/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/form-undangan/assets/adminlte/css/adminlte.min.css">

    <link rel="stylesheet" href="http://localhost/form-undangan/assets/datatables/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="http://localhost/form-undangan/assets/datatables/Responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="http://localhost/form-undangan/assets/toastify/toastify.css">
    <link rel="stylesheet" href="http://localhost/form-undangan/assets/select2/css/select2.min.css">

    <style>
        .pristine-error {
            color: red;
        }

        .has-danger .form-control {
            border-color: red;
        }

        div.dataTables_wrapper {
            width: 100%;
            margin: 0 auto;
        }

        .form-control {
            border: none !important;
            border-radius: 20px;
            border-bottom: 3px solid #ced4da !important;
        }

        .form-control:focus {
            color: #495057 !important;
            background-color: #fff !important;
            border-color: #00264d !important;
            outline: 0 !important;
            box-shadow: inset 0 0 0 rgba(0, 0, 0, 0) !important;
        }

        .upload {
            background-color: transparent !important;
            border: none !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">Option</span>
                        <div class="dropdown-divider"></div>
                        <a href="http://localhost/form-undangan/index.php/auth/logout" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="http://localhost/form-undangan/index.php/kelola-undangan/master-info-acara" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info Acara</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Data</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">


                    <!-- content -->



                    <!-- ================================================================================================================================= -->




                    <form id="form-data-utama">

                        <div class="form-group">
                            <label for="nama">Nama file undangan</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="<?= $data->slug ?>">
                        </div>
                        <div class="form-group">
                            <label for="wedding-of">The Wedding Of</label>
                            <input type="text" class="form-control" id="wedding-of" name="wedding-of" value="<?= $data->wedding ?>">
                        </div>
                        <!-- PRIA START -->
                        <div class="form-group">
                            <label class="text-danger" for="nama_mempelai_pria"><i>Nama Mempelai Pria</i></label>
                            <input type="text" class="form-control" id="nama_mempelai_pria" name="nama_mempelai_pria" value="<?= $undangan->nama_mempelai_pria ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-danger" for="nama_ortu_pria"><i>Nama Ortu Mempelai Pria</i></label>
                            <input type="text" class="form-control" id="nama_ortu_pria" name="nama_ortu_pria" value="<?= $undangan->nama_ortu_pria ?? '' ?>">
                        </div>
                        <!-- PRIA END -->
                        <!-- WANITA START -->
                        <div class="form-group">
                            <label class="text-success" for="nama_mempelai_wanita"><i>Nama Mempelai Wanita</i></label>
                            <input type="text" class="form-control" id="nama_mempelai_wanita" name="nama_mempelai_wanita" value="<?= $undangan->nama_mempelai_wanita ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-success" for="nama_ortu_wanita"><i>Nama Ortu Wanita</i></label>
                            <input type="text" class="form-control" id="nama_ortu_wanita" name="nama_ortu_wanita" value="<?= $undangan->nama_ortu_wanita ?? '' ?>">
                        </div>
                        <!-- WANITA END -->
                        <!-- Quotes start -->
                        <div class="form-group">
                            <label for="judul-quotes">Judul Quotes</label>
                            <input type="text" class="form-control" id="judul-quotes" name="judul-quotes" value="<?= $undangan->judul_quotes ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="quotes">Quotes</label>
                            <textarea class="form-control" placeholder="Isi quotes anda" name="quotes" id="quotes"><?= $undangan->quotes ?? '' ?></textarea>
                        </div>
                        <!-- Quotes end -->

                        <!-- Informasi acara start -->
                        <!-- AKAD -->
                        <div class="form-group">
                            <h5 class="text-primary text-center bg-light p-3 shadow-lg" style="width: 100%;"><i class="fa fa-info-circle"></i> Informasi Akad</h5>

                            <label class="mt-3" for="hari-akad">Hari & Tanggal</label>
                            <input type="text" class="form-control" id="hari-akad" name="hari-akad" value="<?= $undangan->hari_akad ?? '' ?>">

                            <label class="mt-3" for="jam-akad">Jam akad</label>
                            <input type="text" class="form-control" id="jam-akad" name="jam-akad" value="<?= $undangan->jam_akad ?? '' ?>">

                            <label class="mt-3" for="lokasi-akad">Lokasi akad</label>
                            <input type="text" class="form-control" id="lokasi-akad" name="lokasi-akad" value="<?= $undangan->lokasi_akad ?? '' ?>">
                        </div>
                        <!--  -->
                        <!-- RESEPSI -->
                        <div class="form-group">
                            <h5 class="text-primary text-center bg-light p-3 shadow-lg" style="width: 100%;"><i class="fa fa-info-circle"></i> Informasi Resepsi</h5>

                            <label class="mt-3" for="hari-resepsi">Hari & Tanggal</label>
                            <input type="text" class="form-control" id="hari-resepsi" name="hari-resepsi" value="<?= $undangan->hari_resepsi ?? '' ?>">

                            <label class="mt-3" for="jam-resepsi">Jam Resepsi</label>
                            <input type="text" class="form-control" id="jam-resepsi" name="jam-resepsi" value="<?= $undangan->jam_resepsi ?? '' ?>">

                            <label class="mt-3" for="lokasi-resepsi">Lokasi Resepsi</label>
                            <input type="text" class="form-control" id="lokasi-resepsi" name="lokasi-resepsi" value="<?= $undangan->lokasi_resepsi ?? '' ?>">

                            <label class="mt-3" for="shareloc-resepsi">Shareloc Resepsi</label>
                            <input type="url" class="form-control" id="shareloc-resepsi" name="shareloc-resepsi" value="<?= $undangan->shareloc_resepsi ?? '' ?>">
                        </div>
                        <!--  -->

                        <!-- NGUNDUH MANTU -->
                        <div class="form-group">
                            <h5 class="text-primary text-center bg-light p-3 shadow-lg" style="width: 100%;"><i class="fa fa-info-circle"></i> Informasi Ngunduh Mantu</h5>

                            <label class="mt-3" for="hari-ngunduh">Hari & Tanggal</label>
                            <input type="text" class="form-control" id="hari-ngunduh" name="hari-ngunduh" value="<?= $undangan->hari_ngunduh ?? '' ?>">

                            <label class="mt-3" for="jam-ngunduh">Jam ngunduh</label>
                            <input type="text" class="form-control" id="jam-ngunduh" name="jam-ngunduh" value="<?= $undangan->jam_ngunduh ?? '' ?>">

                            <label class="mt-3" for="lokasi-ngunduh">Lokasi ngunduh</label>
                            <input type="text" class="form-control" id="lokasi-ngunduh" name="lokasi-ngunduh" value="<?= $undangan->lokasi_ngunduh ?? '' ?>">

                            <label class="mt-3" for="shareloc-ngunduh">Shareloc ngunduh</label>
                            <input type="url" class="form-control" id="shareloc-ngunduh" name="shareloc-ngunduh" value="<?= $undangan->shareloc_ngunduh ?? '' ?>">
                        </div>
                        <!-- -->

                        <!-- Upload foto -->
                        <div class="form-group text-center">
                            <h5 class="form-label mt-3 bg-light p-3 shadow-lg w-100">
                                <i class="fa fa-image"></i> Upload Foto Galeri
                            </h5>
                            <input class="form-control upload mt-5 mb-5" type="file" id="upload-galeri" multiple>
                        </div>
                        <div id="preview-container" class="mt-3"></div>

                        <!-- BANK / HADIAH -->
                        <div class="form-group">
                            <h5 class="text-primary text-center bg-light p-3 shadow-lg" style="width: 100%;"><i class="fa fa-credit-card"></i> Informasi Kartu Credit</h5>

                            <label class="mt-3" for="jenis-kartu">Jenis Kartu</label>
                            <input type="text" class="form-control" id="jenis-kartu" name="jenis-kartu" value="<?= $undangan->jenis_kartu ?? '' ?>">

                            <label class="mt-3" for="nomor-rekening">Nomor rekening</label>
                            <input type="text" class="form-control" id="nomor-rekening" name="nomor-rekening" value="<?= $undangan->nomor_rekening ?? '' ?>">

                            <label class="mt-3" for="atas-nama">Atas Nama</label>
                            <input type="text" class="form-control" id="atas-nama" name="atas-nama" value="<?= $undangan->atas_nama ?? '' ?>">

                            <label class="mt-3" for="beri-tahu">Beri Tahu Mempelai</label>
                            <input type="url" class="form-control" id="beri-tahu" name="beri-tahu" value="<?= $undangan->beri_tahu ?? '' ?>">
                        </div>
                        <!-- -->


                        <!-- Informasi acara end -->
                        <!-- Tombol aksi -->
                        <div class="mt-4 mb-4 text-center">
                            <a href="#" class="btn btn-primary px-3" id="form-simpan"><i class="fa fa-save"></i> Simpan perubahan</a>
                            <a href="#" class="btn btn-secondary px-3" id="form-simpan"><i class="fa fa-eye"></i> Pratinjau sekarang</a>
                        </div>
                    </form>







                    <!-- ======================================================================================================================================================================== -->


                    <!-- /content -->


                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="http://localhost/form-undangan/assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/form-undangan/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/form-undangan/assets/adminlte/js/adminlte.min.js"></script>

    <script src="http://localhost/form-undangan/assets/datatables/DataTables/js/jquery.dataTables.js"></script>
    <script src="http://localhost/form-undangan/assets/datatables/DataTables/js/dataTables.bootstrap4.js"></script>
    <script src="http://localhost/form-undangan/assets/datatables/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/form-undangan/assets/datatables/Responsive/js/responsive.bootstrap4.js"></script>
    <script src="http://localhost/form-undangan/assets/pristine/pristine.js"></script>
    <script src="http://localhost/form-undangan/assets/toastify/toastify.js"></script>
    <script src="http://localhost/form-undangan/assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="http://localhost/form-undangan/assets/select2/js/select2.min.js"></script>

    <script>
        'use strict';
        window.BASEURLWEB = "http://localhost/form-undangan/";
        window.SITEURLWEB = "http://localhost/form-undangan/";

        $('a.nav-link[href="' + window.location.href + '"]').addClass('active');

        $.ajaxSetup({
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': 'f6f967f7f03c0cb63a867c06d4cc7789'
            }
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


    <script>
        'use strict';

        $('.select2').select2({
            width: '100%',
            theme: "classic",
        })

        // create the pristine instance
        var formUtama = new Pristine(document.getElementById("form-data-utama"));

        $('#form-simpan').click(function() {
            var that = this
            // check if the form is valid
            if (formUtama.validate()) {
                var data = {
                    slug: $('#slug').val(),
                    nama: $('#nama').val(),
                    undangan: {
                        nama_mempelai_pria: $('#nama_mempelai_pria').val(),
                        nama_mempelai_wanita: $('#nama_mempelai_wanita').val(),
                    },
                }

                ////
                Toastify({
                    text: 'Notifikasi setelah klik simpan perubahan',
                    duration: -1,
                    style: {
                        background: "linear-gradient(to top, #00b09b, #96c93d)",
                    },
                    close: true,
                }).showToast();
                return console.table(data);
                ////
                $.ajax({
                    url: SITEURLWEB + "kelola-undangan/master-info-acara/1",
                    type: "POST",
                    beforeSend: function(xhr) {
                        $(that).addClass('disabled')
                    },
                    complete: function(xhr, status) {
                        $(that).removeClass('disabled')
                    },
                    error: function(xhr, status, err) {
                        var res = JSON.parse(xhr.responseText)
                        Toastify({
                            text: res.message ? res.message : xhr.responseText,
                            style: {
                                background: "linear-gradient(to top, red, pink)",
                            },
                        }).showToast();
                    },
                    timeout: 5 * 60 * 1000,
                    data: data,
                    success: function(res, status, xhr) {
                        Toastify({
                            text: res.message,
                            duration: -1,
                            style: {
                                background: "linear-gradient(to top, #00b09b, #96c93d)",
                            },
                            close: true,
                        }).showToast();
                    }
                });
            }

        })
    </script>
    <!-- penampungan data sementara upload foto -->
    <script>
        // JSON object to store uploaded file data
        let uploadedData = [];

        // Input file element
        const fileInput = document.getElementById('upload-galeri');
        const previewContainer = document.getElementById('preview-container');

        fileInput.addEventListener('change', (event) => {
            const files = event.target.files;

            // Clear previous data
            uploadedData = [];
            previewContainer.innerHTML = '';

            Array.from(files).forEach((file, index) => {
                // Read file as data URL (for preview purposes)
                const reader = new FileReader();
                reader.onload = (e) => {
                    // Push file info to the JSON object
                    uploadedData.push({
                        name: file.name,
                        type: file.type,
                        size: file.size,
                        dataUrl: e.target.result, // Base64 string
                    });

                    // Append a preview of the image
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = file.name;
                    img.className = 'img-thumbnail m-2';
                    img.style.maxWidth = '150px';
                    img.style.maxHeight = '150px';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });

            console.log('Uploaded Data:', uploadedData);
        });
    </script>


</body>

</html>