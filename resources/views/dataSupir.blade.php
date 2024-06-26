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
                <span class="ms-1 font-weight-bold">PT. KONSTRUKSI LUAR</span>
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
                    <a class="nav-link  active" href="/datasupir">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img class="icon icon-sm" src="{{ asset('assets/images/svg/driver.svg') }}" />
                        </div>
                        <span class="nav-link-text ms-1">Supir</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  " href="/datamobil">
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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Supir</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Supir</h6>
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
            <form action="/datasupir/cari" method="GET">

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
                @if (Auth::user()->status === 'admin')
                    <div class="col-sm-2">
                        <button type="button" onclick="openTambahSupir()"
                            class="btn bg-gradient-primary w-100 mt-4 mb-3" data-toggle="modal"
                            data-target="#modalTambahSupir">Tambah Data Supir</button>
                    </div>

                    <div class="modal fade" id="modalTambahSupir" tabindex="-1" role="dialog"
                        aria-labelledby="modalTambahSupirTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="/tambahdatasupir" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTambahSupirTitle">Tambah Data Supir</h5>

                                    </div>
                                    <div class="modal-body">
                                        {{-- <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Kode Supir
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" placeholder="Kode Supir"
                                                name="kode_supir" required>
                                        </div>
                                    </div> --}}
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Nama Supir
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Nama Supir"
                                                    name="nama_supir" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Nomor Hp
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Nomor Hp"
                                                    name="no_hp" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Alamat
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Alamat"
                                                    name="alamat" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Nomor SIM
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="Nomor SIM"
                                                    name="no_sim" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Jenis SIM
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <select class="form-control" name="jenis_sim" required>
                                                    <option hidden selected> Jenis Sim</option>
                                                    <option value="A">A</option>
                                                    <option value="B1">B1</option>
                                                    <option value="B2">B2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 m-2">
                                                Tanggal Kadaluarsa SIM
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="date"
                                                    placeholder="Tanggal Kadaluarsa SIM" name="tanggal_kadaluarsa"
                                                    required>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                        <div class="col-sm-12 m-2">
                                            KTP
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="file" placeholder="KTP"
                                                name="ktp" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            SIM
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="file" placeholder="SIM"
                                                name="sim" required>
                                        </div>
                                    </div> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="closeModalSupir()"
                                            class="btn btn-secondary">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function openTambahSupir() {
                            $('#modalTambahSupir').modal('toggle');
                        }

                        function closeModalSupir() {
                            $('#modalTambahSupir').modal('toggle');
                            $('#modalTambahSupir').modal('dispose');
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
                                <form action="/supir/import_excel" method="post" enctype="multipart/form-data">
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
                                                    name="supir_excel" required>
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
                        <div class="card-body p-3">
                            <table class="table table-striped">
                                <thead class="bg-danger text-bg-primary">
                                    <tr>
                                        <th scope="col">No</th>
                                        {{-- <th scope="col">Kode Supir</th> --}}
                                        <th scope="col">Nama Supir</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Nomor Sim</th>
                                        <th scope="col">Jenis Sim</th>
                                        <th scope="col">Tanggal Kadaluarsa Sim</th>

                                        {{-- <th scope="col">KTP</th>
                                        <th scope="col">SIM</th> --}}
                                        <th scope="col">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($supir->currentpage() - 1) * $supir->perpage() + 1;
                                    @endphp
                                    @foreach ($supir as $s)
                                        <tr>
                                            <th scope="row" class="col-sm-1">{{ $i }}</th>
                                            {{-- <td>{{ $s->kode_supir }}</td> --}}
                                            <td>{{ $s->nama_supir }}</td>
                                            <td>{{ $s->no_hp }}</td>
                                            <td>{{ $s->alamat }}</td>
                                            <td>{{ $s->no_sim }}</td>
                                            <td>{{ $s->jenis_sim }}</td>
                                            <td>{{ $s->tanggal_kadaluarsa }}</td>


                                            {{-- <td> <img class="rounded-1" width="50"
                                                    src="{{ asset('images/ktp/' . $s->ktp) }}" /> </td>
                                            <td><img class="rounded-1" width="50"
                                                    src="{{ asset('images/sim/' . $s->sim) }}" /></td> --}}
                                            @if ($s->kode_supir !== 999999)
                                                <td>
                                                    <div class="row align-item-centered">
                                                        <div class="col-sm-3">
                                                            <div class="col-sm-2">
                                                                <button type="button"
                                                                    onclick="openEdit{{ $s->kode_supir . 'edit' }}()"
                                                                    class="btn p-2 bg-gradient-warning m-0"
                                                                    data-toggle="modal"
                                                                    data-target="#modalEdit{{ $s->kode_supir . 'edit' }}"><img
                                                                        class="icon icon-xxs"
                                                                        src="{{ asset('assets/images/svg/edit.svg') }}" /></button>
                                                            </div>

                                                            <div class="modal fade"
                                                                id="modalEdit{{ $s->kode_supir . 'edit' }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="modalEditTitle{{ $s->kode_supir . 'edit' }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <form action="/editdatasupir" method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="modalHapusTitle{{ $s->kode_supir . 'edit' }}">
                                                                                    Edit Data {{ $s->nama_supir }}</h5>

                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                  
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $s->kode_supir }}"
                                                                                            name="kode_supir" hidden>
                                                                                    </div>
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Nama Supir
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Nama Supir"
                                                                                            value="{{ $s->nama_supir }}"
                                                                                            name="nama_supir" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Nomor Hp
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Nomor Hp"
                                                                                            value="{{ $s->no_hp }}"
                                                                                            name="no_hp" required>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Alamat
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Alamat"
                                                                                            value="{{ $s->alamat }}"
                                                                                            name="alamat" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Nomor SIM
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Nomor SIM"
                                                                                            value="{{ $s->no_sim }}"
                                                                                            name="no_sim" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Jenis SIM
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <select class="form-control"
                                                                                            name="jenis_sim" required>
                                                                                            <option
                                                                                                value="{{ $s->jenis_sim }}"
                                                                                                hidden selected> Jenis
                                                                                                Sim</option>
                                                                                            <option value="A">A
                                                                                            </option>
                                                                                            <option value="B1">B1
                                                                                            </option>
                                                                                            <option value="B2">B2
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Tanggal Kadaluarsa SIM
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            type="date"
                                                                                            value="{{ $s->tanggal_kadaluarsa }}"
                                                                                            placeholder="Tanggal Kadaluarsa SIM"
                                                                                            name="tanggal_kadaluarsa"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    KTP
                                                                                </div>
                                                                                <div class="col-sm-12 m-2">
                                                                                    <img class="rounded-1"
                                                                                        width="50"
                                                                                        src="{{ asset('images/ktp/' . $s->ktp) }}" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        type="file"
                                                                                        placeholder="KTP"
                                                                                        name="ktp">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    SIM
                                                                                </div>
                                                                                <div class="col-sm-12 m-2">
                                                                                    <img class="rounded-1"
                                                                                        width="50"
                                                                                        src="{{ asset('images/sim/' . $s->sim) }}" />
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        type="file"
                                                                                        placeholder="SIM"
                                                                                        name="sim">
                                                                                </div>
                                                                            </div> --}}
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    onclick="closeEdit{{ $s->kode_supir . 'edit' }}()"
                                                                                    class="btn btn-secondary">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Simpan</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function openEdit{{ $s->kode_supir . 'edit' }}() {
                                                                    $('#modalEdit{{ $s->kode_supir . 'edit' }}').modal('toggle');
                                                                }

                                                                function closeEdit{{ $s->kode_supir . 'edit' }}() {
                                                                    $('#modalEdit{{ $s->kode_supir . 'edit' }}').modal('toggle');
                                                                    $('#modalEdit{{ $s->kode_supir . 'edit' }}').modal('dispose');
                                                                    $('.modal-backdrop').remove();
                                                                }
                                                            </script>
                                                        </div>
                                                        @if (Auth::user()->status == 'admin')
                                                            <div class="col">
                                                                <div class="col-sm-2">
                                                                    <button type="button"
                                                                        onclick="openHapus{{ $s->kode_supir }}()"
                                                                        class="btn p-2 bg-gradient-danger m-0"
                                                                        data-toggle="modal"
                                                                        data-target="#modalHapus{{ $s->kode_supir }}"><img
                                                                            class="icon icon-xxs"
                                                                            src="{{ asset('assets/images/svg/trash.svg') }}" /></button>


                                                                </div>

                                                                <div class="modal fade"
                                                                    id="modalHapus{{ $s->kode_supir }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="modalHapusTitle{{ $s->kode_supir }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                        role="document">
                                                                        <div class="modal-content">

                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="modalHapusTitle{{ $s->kode_supir }}">
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
                                                                                    onclick="closeHapus{{ $s->kode_supir }}()"
                                                                                    class="btn btn-secondary">Close</button>
                                                                                <a href="/hapusdatasupir/{{ $s->kode_supir }}"
                                                                                    type="submit"
                                                                                    class="btn btn-danger">Hapus</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <script>
                                                                    function openHapus{{ $s->kode_supir }}() {
                                                                        $('#modalHapus{{ $s->kode_supir }}').modal('toggle');
                                                                    }

                                                                    function closeHapus{{ $s->kode_supir }}() {
                                                                        $('#modalHapus{{ $s->kode_supir }}').modal('toggle');
                                                                        $('#modalHapus{{ $s->kode_supir }}').modal('dispose');
                                                                        $('.modal-backdrop').remove();
                                                                    }
                                                                </script>
                                                            </div>
                                                        @endif


                                                    </div>

                                                </td>
                                            @endif

                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex ">
                                {{ $supir->links() }}
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
                                PT. KONSTRUKSI LUAR © 2023
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
