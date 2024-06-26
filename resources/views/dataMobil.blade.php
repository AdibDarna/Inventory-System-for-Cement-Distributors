<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        PT. KONSTRUKSI LUAR
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0  fixed-start p-2 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/index.php" target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">PT. DUMAI INDAH SEJATI</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/dashboard.svg') }}" />

                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/datasemen">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/box.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Data Semen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <button class="nav-link accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/delivery.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Distribusi</span>
                    </button>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="navbar-nav" style="margin-left:15px">
                                <li class="nav-item">
                                    <a class="nav-link  " href="/distribusisalesorder">
                                        <div
                                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <img class="icon icon-sm"
                                                src="{{ asset('assets/images/svg/delivery.svg') }}" />

                                        </div>
                                        <span class="nav-link-text ms-1">Sales Order</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="/distribusideliveryorder">
                                        <div
                                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <img class="icon icon-sm"
                                                src="{{ asset('assets/images/svg/delivery.svg') }}" />

                                        </div>
                                        <span class="nav-link-text ms-1">Delivery Order</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/datasupplier">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/box-unpacked.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Supplier</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="/datasupir">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/driver.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Supir</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  active" href="/datamobil">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/truck.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Mobil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="/dataagen">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/agen.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Agen</span>
                    </a>
                </li>
                @if (Auth::user()->status == 'admin')
                    <li class="nav-item">
                        <a class="nav-link  " href="/datausers">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <img class="icon icon-sm" src="{{ asset('assets/images/svg/users.svg') }}" />
                            </div>
                            <span class="nav-link-text ms-1">User</span>
                        </a>
                    </li>
                @endif

            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Mobil</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Mobil</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center" style="margin-right: 30px">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell me-sm-1"></i>

                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton" style="top:50%; right:10%;">
                                <li class="mb-2">

                                    <div class="d-flex py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs text-secondary mb-0 ">
                                            <h6>Notifikasi</h6>
                                            @foreach ($semenStock as $sem)
                                                @if ($sem->jumlah < $sem->rop)
                                                    <div class="row p-3 m-2">

                                                        <div class="col-9">
                                                            <div style="color: black; ">
                                                                <b>{{ $sem->merek_semen }}</b> <i
                                                                    style="color:red">Stock Semen Kurang
                                                                    dari
                                                                    ROP ({{ $sem->rop }})</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 text-end">
                                                            <div class="icon icon-shape bg-gradient-warning shadow text-center"
                                                                style="border-radius: 100%; width:15px; height:15px">

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            </p>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton" style="top:50%">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="/logout">
                                        <div class="d-flex py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs text-secondary mb-0 ">
                                                    Logout
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <form action="/datamobil/cari" method="GET">

                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" name="search" value="{{ $search }}"
                            placeholder="Tulis apa yang ingin anda cari..." class="form-control" />
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" id="cari" value="Cari" class="btn bg-gradient-primary w-100">
                    </div>
                </div>
            </form>
            <div class="row">
                @if (Auth::user()->status == 'admin')
                    <div class="col-sm-2">
                        <button type="button" onclick="openTambahMobil()"
                            class="btn bg-gradient-primary w-100 mt-4 mb-3" data-toggle="modal"
                            data-target="#modalTambahMobil">Tambah Data Mobil</button>
                    </div>

                    <div class="modal fade" id="modalTambahMobil" tabindex="-1" role="dialog"
                        aria-labelledby="modalTambahMobilTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="/tambahdatamobil" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTambahMobilTitle">Tambah Data Mobil</h5>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Kode Mobil
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Kode Mobil"
                                                    name="kode_mobil" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Status Kepemilikan
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <select class="form-control" name="status_kepemilikan">
                                                    <option value="" disabled selected>Status Kepemilikan
                                                    </option>
                                                    <option value="Milik Perusahaan">Milik Perusahaan</option>
                                                    <option value="Kerjasama">Kerjasama</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Transportir
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Transportir"
                                                    name="transportir" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Plat Nomor
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Plat Nomor"
                                                    name="plat_nomor" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Jenis Truk
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Jenis Truk"
                                                    name="jenis_truk" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Merek Truk
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Merek Truk"
                                                    name="merek_truk" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Kapasitas
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="number" placeholder="Kapasitas"
                                                    name="kapasitas" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Nomor STNK
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="number" placeholder="Nomor STNK"
                                                    name="nomor_stnk" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Nomor Rangka
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Nomor Rangka"
                                                    name="nomor_rangka" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Nomor GPS
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Nomor GPS"
                                                    name="nomor_gps" required>
                                            </div>

                                        </div>
                                        {{-- <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Mobil
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="file" placeholder="Mobil"
                                                name="mobil" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            STNK
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="file" placeholder="stnk"
                                                name="stnk" required>
                                        </div>
                                    </div> --}}
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" onclick="closeModalSemen()"
                                            class="btn btn-secondary">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function openTambahMobil() {
                            $('#modalTambahMobil').modal('toggle');
                        }

                        function closeModalMobil() {
                            $('#modalTambahMobil').modal('toggle');
                            $('#modalTambahMobil').modal('dispose');
                            $('.modal-backdrop').remove();
                        }
                    </script>
                    <div class="col-sm-2">
                        <button type="button" onclick="openExport()" class="btn bg-gradient-success w-100 mt-4 mb-3"
                            data-toggle="modal" data-target="#modalExport">Import Excel</button>
                    </div>
                    <div class="modal fade" id="modalExport" tabindex="-1" role="dialog"
                        aria-labelledby="modalExportTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="/mobil/import_excel" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalExportTitle">Import Excel</h5>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Input Excel
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="file" placeholder="Excel"
                                                    name="mobil_excel" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" onclick="closeModalExport()"
                                            class="btn btn-secondary">Close</button>
                                        <button type="submit" class="btn btn-success">Import</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        function openExport() {
                            $('#modalExport').modal('toggle');
                        }

                        function closeModalExport() {
                            $('#modalExport').modal('toggle');
                            $('#modalExport').modal('dispose');
                            $('.modal-backdrop').remove();
                        }
                    </script>
                @endif


                <div class="col-xl-12 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3 position-relative overflow-x-scroll">
                            <table class="table table-striped" style="font-size:14px ">
                                <thead class="bg-danger text-bg-primary">
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Kode Mobil</th>
                                        <th scope="col">Status Kepemilikan</th>
                                        <th scope="col">Transportir</th>
                                        <th scope="col">Plat Mobil</th>
                                        <th scope="col">Jenis Truk</th>
                                        <th scope="col">Merek Truk</th>
                                        <th scope="col">Kapasitas</th>
                                        <th scope="col">Nomor STNK</th>
                                        <th scope="col">Nomor Rangka</th>
                                        <th scope="col">Nomor GPS</th>
                                        <th scope="col">Status</th>

                                        {{-- <th scope="col">Mobil</th>
                                        <th scope="col">STNK</th> --}}
                                        @if (Auth::user()->status == 'admin')
                                            <th scope="col" class="p-2">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        // $i = ($mobil->currentpage() - 1) * $mobil->perpage() + 1;
                                    @endphp
                                    @foreach ($mobil as $key => $m)
                                        <tr>
                                            <td scope="row">{{ $mobil->firstItem() + $key }}</td>
                                            <td>{{ $m->kode_mobil }}</td>
                                            <td>{{ $m->status_kepemilikan }}</td>
                                            <td>{{ $m->transportir }}</td>
                                            <td>{{ $m->plat_nomor }}</td>
                                            <td>{{ $m->jenis_truk }}</td>
                                            <td>{{ $m->merek_truk }}</td>
                                            <td>{{ $m->kapasitas }} Ton</td>
                                            <td>{{ $m->nomor_stnk }}</td>
                                            <td>{{ $m->nomor_rangka }}</td>
                                            <td>{{ $m->nomor_gps }}</td>
                                            <td>
                                                @if (collect($do)->contains('kode_mobil', $m->kode_mobil) && collect($do)->contains('status', 'Proses'))
                                                    <span>Tidak Tersedia</span>
                                                @else
                                                    <span>Tersedia</span>
                                                @endif

                                            </td>

                                            {{-- <td> <img class="rounded-1" width="50"
                                                    src="{{ asset('images/mobil/' . $m->mobil) }}" /> </td>
                                            <td><img class="rounded-1" width="50"
                                                    src="{{ asset('images/stnk/' . $m->stnk) }}" /></td> --}}

                                            @if (Auth::user()->status === 'admin' && $m->kode_mobil !== 999999)
                                                <td>
                                                    <div class="row align-item-centered">
                                                        <div class="col-sm-3 m-1">
                                                            <div class="col-sm-2">
                                                                <button type="button"
                                                                    onclick="openEdit{{ $m->kode_mobil . 'edit' }}()"
                                                                    class="btn p-2 bg-gradient-warning m-0"
                                                                    data-toggle="modal"
                                                                    data-target="#modalEdit{{ $m->kode_mobil . 'edit' }}"><img
                                                                        class="icon icon-xxs"
                                                                        src="{{ asset('assets/images/svg/edit.svg') }}" /></button>
                                                            </div>

                                                            <div class="modal fade"
                                                                id="modalEdit{{ $m->kode_mobil . 'edit' }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="modalEditTitle{{ $m->kode_mobil . 'edit' }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <form action="/editdatamobil" method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="modalHapusTitle{{ $m->kode_mobil . 'edit' }}">
                                                                                    Edit Data {{ $m->plat_nomor }}</h5>

                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Kode Mobil
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $m->kode_mobil }}"
                                                                                            name="kode_mobil">
                                                                                    </div>
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Status Kepemilikan
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <select class="form-control"
                                                                                            name="status_kepemilikan">
                                                                                            <option
                                                                                                value="{{ $m->status_kepemilikan }}"
                                                                                                disabled hidden
                                                                                                selected>
                                                                                                {{ $m->status_kepemilikan }}
                                                                                            </option>
                                                                                            <option
                                                                                                value="Milik Perusahaan">
                                                                                                Milik Perusahaan
                                                                                            </option>
                                                                                            <option value="Kerjasama">
                                                                                                Kerjasama</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Transportir
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Transportir"
                                                                                            value="{{ $m->transportir }}"
                                                                                            name="transportir"
                                                                                            required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Plat Nomor
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Plat Nomor"
                                                                                            value="{{ $m->plat_nomor }}"
                                                                                            name="plat_nomor" required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Jenis Truk
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Jenis Truk"
                                                                                            value="{{ $m->jenis_truk }}"
                                                                                            name="jenis_truk" required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Merek Truk
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Merek Truk"
                                                                                            value="{{ $m->merek_truk }}"
                                                                                            name="merek_truk" required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Kapasitas
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="number"
                                                                                            placeholder="Kapasitas"
                                                                                            value="{{ $m->kapasitas }}"
                                                                                            name="kapasitas" required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Nomor STNK
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="number"
                                                                                            placeholder="Nomor STNK"
                                                                                            value="{{ $m->nomor_stnk }}"
                                                                                            name="nomor_stnk" required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Nomor Rangka
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Nomor Rangka"
                                                                                            value="{{ $m->nomor_rangka }}"
                                                                                            name="nomor_rangka"
                                                                                            required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Nomor GPS
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Nomor GPS"
                                                                                            value="{{ $m->nomor_gps }}"
                                                                                            name="nomor_gps" required>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Mobil
                                                                                </div>
                                                                                <div class="col-sm-12 m-2">
                                                                                    <img class="rounded-1"
                                                                                        width="50"
                                                                                        src="{{ asset('images/mobil/' . $m->mobil) }}" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        type="file"
                                                                                        placeholder="Mobil"
                                                                                        name="mobil">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    STNK
                                                                                </div>
                                                                                <div class="col-sm-12 m-2">
                                                                                    <img class="rounded-1"
                                                                                        width="50"
                                                                                        src="{{ asset('images/stnk/' . $m->stnk) }}" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        type="file"
                                                                                        placeholder="STNK"
                                                                                        name="stnk">
                                                                                </div>
                                                                            </div> --}}
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    onclick="closeEdit{{ $m->kode_mobil . 'edit' }}()"
                                                                                    class="btn btn-secondary">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Simpan</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function openEdit{{ $m->kode_mobil . 'edit' }}() {
                                                                    $('#modalEdit{{ $m->kode_mobil . 'edit' }}').modal('toggle');
                                                                }

                                                                function closeEdit{{ $m->kode_mobil . 'edit' }}() {
                                                                    $('#modalEdit{{ $m->kode_mobil . 'edit' }}').modal('toggle');
                                                                    $('#modalEdit{{ $m->kode_mobil . 'edit' }}').modal('dispose');
                                                                    $('.modal-backdrop').remove();
                                                                }
                                                            </script>
                                                        </div>
                                                        <div class="col">
                                                            <div class="col-sm-2 m-1">
                                                                <button type="button"
                                                                    onclick="openHapus{{ $m->kode_mobil }}()"
                                                                    class="btn p-2 bg-gradient-danger m-0"
                                                                    data-toggle="modal"
                                                                    data-target="#modalHapus{{ $m->kode_mobil }}"><img
                                                                        class="icon icon-xxs"
                                                                        src="{{ asset('assets/images/svg/trash.svg') }}" /></button>


                                                            </div>

                                                            <div class="modal fade"
                                                                id="modalHapus{{ $m->kode_mobil }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="modalHapusTitle{{ $m->kode_mobil }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">

                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="modalHapusTitle{{ $m->kode_mobil }}">
                                                                                Notifikasi</h5>

                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2 center">
                                                                                    Anda Yakin Menghapus Data Ini?
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                onclick="closeHapus{{ $m->kode_mobil }}()"
                                                                                class="btn btn-secondary">Close</button>
                                                                            <a href="/hapusdatamobil/{{ $m->kode_mobil }}"
                                                                                type="submit"
                                                                                class="btn btn-danger">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function openHapus{{ $m->kode_mobil }}() {
                                                                    $('#modalHapus{{ $m->kode_mobil }}').modal('toggle');
                                                                }

                                                                function closeHapus{{ $m->kode_mobil }}() {
                                                                    $('#modalHapus{{ $m->kode_mobil }}').modal('toggle');
                                                                    $('#modalHapus{{ $m->kode_mobil }}').modal('dispose');
                                                                    $('.modal-backdrop').remove();
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                            @endif


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex ">
                                {{ $mobil->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row my-4" style=" position:absolute; bottom:0">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">

                </div>
                <div class="col-lg-4 col-md-6">

                </div>
            </div>
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                PT. Dumai Indah Sejati © 2023
                                {{-- <script>
                                    document.write(new Date().getFullYear())
                                </script> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
