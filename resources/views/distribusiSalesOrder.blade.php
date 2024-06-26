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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->

    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

    {{-- <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" /> --}}
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
                    <a class="nav-link  " href="/datasemen">
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
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="navbar-nav" style="margin-left:15px">
                                <li class="nav-item">
                                    <a class="nav-link  active" href="/distribusisalesorder">
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
                    <a class="nav-link  " href="/datasupplier">
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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Distribusi</li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sales Order</li>

                    </ol>
                    <h6 class="font-weight-bolder mb-0">Sales Order</h6>
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

        {{-- ------------------------------------------------------------- filter data  ------------------------------------------------------------------ --}}
        <div class="container-fluid py-4">
            <form action="/distribusisalesorder/cari" method="GET">

                <div class="row">
                    <div class="col-sm-3">
                        <input type="date" name="tanggal_awal" class="form-control" required/>
                    </div>
                    sampai
                    <div class="col-sm-3">
                        <input type="date" name="tanggal_akhir" class="form-control" required/>
                    </div>

                    <div class="col-sm-2">
                        <select class="form-control" name="semen" required>
                            <option disabled selected>Merek Semen</option>
                            @foreach ($semen as $dataSemen)
                                <option value="{{ $dataSemen->id_semen }}">{{ $dataSemen->merek_semen }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control" name="status" required>
                            <option disabled selected>Status</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>


                        </select>
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" id="cari" class="btn bg-gradient-primary w-100 mt-4 mb-3" hidden>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-2">
                    <label for="cari" class="btn bg-gradient-primary w-100 mt-4 mb-3">Cari</label>
                </div>


                {{-- ------------------------------------------------------------- filter data  ------------------------------------------------------------------ --}}


                {{-- ------------------------------------------------------------- Modal Tambah  ------------------------------------------------------------------ --}}

                <div class="col-sm-2">
                    <button type="button" onclick="openTambahSemen()"
                        class="btn bg-gradient-primary w-100 mt-4 mb-3" data-toggle="modal"
                        data-target="#modalTambahSemen">Tambah Data Sales</button>


                </div>

                <div class="modal fade" id="modalTambahSemen" role="dialog" aria-labelledby="modalTambahSemenTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="/tambahdataso" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTambahMobilTitle">Tambah Data Sales</h5>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Kode SO
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" placeholder="Kode SO"
                                                name="kode_so" required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Tanggal
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="date" placeholder="Transportir"
                                                name="tanggal" required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Supplier
                                        </div>
                                        <div class="col-sm-12 mb-2" id="selectSupplier">
                                            <select class="form-control" id="supplierSelect" placeholder="Supplier"
                                                data-width="100%" name="supplier" required>
                                                <option disabled selected>Supplier</option>
                                                @foreach ($supplier as $sup)
                                                    <option value="{{ $sup->kode_supplier }}">{{ $sup->supplier }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Quantity
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" onkeyup="totals()" id="qty"
                                                type="number" placeholder="Quantity" name="qty" required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Merek Semen
                                        </div>
                                        <div class="col-sm-12 mb-2" id="selectSemen">
                                            <select class="form-control" id="semen" data-width="100%"
                                                onchange="totals()" placeholder="Merek Semen" name="merek_semen"
                                                required>
                                                <option disabled selected>Merek Semen</option>
                                                @foreach ($semen as $sem)
                                                    <option value="{{ $sem->id_semen }}">{{ $sem->merek_semen }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Total Harga
                                        </div>
                                        <div class="col-sm-12 mb-2" style="position: relative">
                                            <label class="input-cur-label" for="tot">
                                                Rp. <span id="formatTotal"> </span>
                                            </label>
                                            <input class="form-control" id="tot" type="text"
                                                placeholder="Total Harga" name="total_harga" readonly required>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Mobil
                                        </div>
                                        <div class="col-sm-12 mb-2" id="selectMobil">
                                            <select class="form-control" id="mobilSelect" data-width="100%"
                                                name="mobil" required>
                                                @foreach ($mobil as $mob)
                                                    @if (collect($checkStatus)->contains('kode_mobil', $mob->kode_mobil) &&
                                                            collect($checkStatus)->contains('status', 'Proses'))
                                                    @else
                                                        <option value="{{ $mob->kode_mobil }}">
                                                            {{ $mob->plat_nomor }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Supir
                                        </div>
                                        <div class="col-sm-12 mb-2" id="selectSupir">
                                            <select class="form-control" id="supirSelect" data-width="100%"
                                                placeholder="Supir" name="supir" required>
                                                @foreach ($supir as $sup)
                                                    @if (collect($checkStatus)->contains('kode_supir', $sup->kode_supir) &&
                                                            collect($checkStatus)->contains('status', 'Proses'))
                                                    @else
                                                        <option value="{{ $sup->kode_supir }}">
                                                            {{ $sup->nama_supir }} - {{ $sup->no_hp }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Biaya Pemesanan
                                        </div>
                                        <div class="col-sm-12 mb-2" style="position: relative">
                                            <label class="input-cur-label" for="biayapemesanan">
                                                Rp. <span id="biayaformat"> </span>
                                            </label>
                                            <input class="form-control" id="biayapemesanan" onkeyup="biaya()"
                                                type="number" placeholder="Biaa Pemesanan" name="biaya_pemesanan"
                                                required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Pembayaran
                                        </div>
                                        <div class="col-sm-12 mb-2">
                                            <select class="form-control" id="debit" onchange="showDebit()"
                                                placeholder="pembayaran" name="pembayaran" required>
                                                <option value="Cash" selected>Cash</option>
                                                <option value="Debit">Debit</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="d-none" id="cash">
                                            <div class="col-sm-12 m-2">
                                                Debit
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <input class="form-control" type="text" placeholder="debit"
                                                    name="debit">
                                            </div>
                                        </div>
                                    </div>


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
                    $(document).ready(function() {
                        $("#mobilSelect").select2({
                            dropdownParent: $("#selectMobil")
                        });
                        $("#semen").select2({
                            dropdownParent: $("#selectSemen")
                        });
                        $("#supirSelect").select2({
                            dropdownParent: $("#selectSupir")
                        });
                        $("#supplierSelect").select2({
                            dropdownParent: $("#selectSupplier")
                        });


                    });

                    function showDebit() {
                        var kondisi = document.getElementById("debit").value;
                        var debit = document.getElementById("cash");
                        if (kondisi == 'Debit') {
                            debit.classList.add("d-block");
                            debit.classList.remove("d-none");
                        } else {
                            debit.classList.add("d-none");
                            debit.classList.remove("d-block");
                        }
                    }

                    function biaya() {
                        var spanBiaya = document.getElementById('biayaformat');
                        var biayaVal = document.getElementById("biayapemesanan");
                        spanBiaya.innerHTML = biayaVal.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

                    }

                    function totals() {
                        var spanTotal = document.getElementById('formatTotal');
                        var semen = document.getElementById("semen");
                        var qty = document.getElementById("qty");
                        var tot = document.getElementById("tot");
                        var harga = null;
                        @foreach ($semen as $se)
                            if ('{{ $se->id_semen }}' == semen.value) {

                                tot.value = {{ $se->harga_beli }} * qty.value;
                            }
                            spanTotal.innerHTML = tot.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                        @endforeach



                    }
                </script>
                <script>
                    function openTambahSemen() {
                        $('#modalTambahSemen').modal('toggle');
                    }

                    function closeModalSemen() {
                        $('#modalTambahSemen').modal('toggle');
                        $('#modalTambahSemen').modal('dispose');
                        $('.modal-backdrop').remove();
                    }
                </script>

                {{-- ------------------------------------------------------------- Tutup Modal Tambah  ------------------------------------------------------------------ --}}

                {{-- ------------------------------------------------------------- Modal Import  ------------------------------------------------------------------ --}}
                <div class="col-sm-2">
                    <button type="button" onclick="openExport()" class="btn bg-gradient-success w-100 mt-4 mb-3"
                        data-toggle="modal" data-target="#modalExport">Import Excel</button>
                </div>
                <div class="modal fade" id="modalExport" tabindex="-1" role="dialog"
                    aria-labelledby="modalExportTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="/salesorder/import_excel" method="post" enctype="multipart/form-data">
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
                                                name="so_excel" required>
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

                {{-- -------------------------------------------------------------Tutup Modal Export  ------------------------------------------------------------------ --}}


                {{-- -------------------------------------------------------------Modal Trunk  ------------------------------------------------------------------ --}}
                @if (Auth::user()->status == 'admin')
                    <div class="col-sm-2">
                        <button type="button" onclick="openTrunk()" class="btn bg-gradient-warning w-100 mt-4 mb-3"
                            data-toggle="modal" data-target="#modalTrunk">Truncate</button>
                    </div>
                    <div class="modal fade" id="modalTrunk" tabindex="-1" role="dialog"
                        aria-labelledby="modalTrunkTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTrunkTitle">Truncate</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12 m-2">
                                            Truncate All Data?
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" onclick="closeModalTrunk()"
                                        class="btn btn-secondary">Close</button>
                                    <a href="/salesorder/truncate" class="btn btn-warning">Truncate</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <script>
                        function openTrunk() {
                            $('#modalTrunk').modal('toggle');
                        }

                        function closeModalTrunk() {
                            $('#modalTrunk').modal('toggle');
                            $('#modalTrunk').modal('dispose');
                            $('.modal-backdrop').remove();
                        }
                    </script>
                @endif

                {{-- ------------------------------------------------------------- Tutup Modal Trunk  ------------------------------------------------------------------ --}}

                {{-- -------------------------------------------------------------Modal Print  ------------------------------------------------------------------ --}}
                <div class="col-sm-1">
                    <a href="javascript:;" class="btn bg-gradient-secondary w-100 mt-4 mb-3 p-2" id="dropdownPrint"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="" width="25" src="{{ asset('assets/images/svg/printer.svg') }}" />
                    </a>
                    <form action="/salesorder/preview_print" method="POST">
                        @csrf
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownPrint">
                            <li class="mb-2">
                                <input type="date" name="tanggal_awal" class="form-control" required/>
                            </li>
                            <li class="mb-2 center">
                                sampai
                            </li>
                            <li class="mb-2">
                                <input type="date" name="tanggal_akhir" class="form-control" required/>
                            </li>
                            <li class="mb-2">
                                <select class="form-control" name="semen" required>
                                    <option disabled selected>Merek Semen</option>
                                    @foreach ($semen as $dataSemen)
                                        <option value="{{ $dataSemen->id_semen }}">{{ $dataSemen->merek_semen }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="mb-2">
                                <input type="submit" value="Print"
                                    class="btn bg-gradient-secondary w-100 mt-4 mb-3">

                            </li>
                        </ul>
                    </form>
                </div>

                {{-- ------------------------------------------------------------- Tutup Modal Print  ------------------------------------------------------------------ --}}

                @if (session()->has('error'))
                    <div class="col-xl-12 mb-xl-0 mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="col-xl-12 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3 position-relative overflow-x-scroll">
                            <table class="table table-striped" style="font-size:14px">
                                <thead class="bg-danger text-bg-primary">
                                    <tr>
                                        <th scope="col" class="p-1 m-0">No</th>
                                        <th scope="col">Kode SO</th>
                                        <th scope="col">Tanggal Pemesanan</th>
                                        <th scope="col">Tanggal Sampai</th>
                                        <th scope="col">Supplier</th>
                                        <th scope="col">Merek Semen</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Mobil</th>
                                        <th scope="col">Supir</th>
                                        <th scope="col">Biaya Pemesanan</th>
                                        <th scope="col">Pembayaran</th>
                                        <th scope="col">Debit</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($so->currentpage() - 1) * $so->perpage() + 1;
                                    @endphp
                                    @foreach ($so as $s)
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td>{{ $s->kode_so }}</td>
                                            <td>{{ $s->tanggal }}</td>
                                            <td>{{ $s->tanggal_sampai }}</td>
                                            <td>{{ $s->supplier }}</td>
                                            <td>{{ $s->merek_semen }}</td>
                                            <td>{{ $s->qty }} Zak</td>
                                            <td>{{ 'Rp. ' . number_format($s->total_harga, 0, ',', '.') }}</td>
                                            <td>{{ $s->plat_nomor }}</td>
                                            <td>{{ $s->nama_supir }}</td>
                                            <td>{{ 'Rp. ' . number_format($s->biaya_pemesanan, 0, ',', '.') }}</td>
                                            <td>{{ $s->pembayaran }}</td>
                                            <td>{{ $s->debit }}</td>
                                            <td>{{ $s->status }}</td>

                                            <td>
                                                {{-- ------------------------------------------------------------- Modal Edit SO  ------------------------------------------------------------------ --}}
                                                <div class="row align-item-centered">
                                                    <div class="col-sm-3 m-1">
                                                        <div class="col-sm-2">
                                                            <button type="button"
                                                                onclick="openEdit{{ $s->kode_so . 'edit' }}()"
                                                                class="btn p-2 bg-gradient-warning m-0"
                                                                data-toggle="modal"
                                                                data-target="#modalEdit{{ $s->kode_so . 'edit' }}"><img
                                                                    class="icon icon-xxs"
                                                                    src="{{ asset('assets/images/svg/edit.svg') }}" /></button>
                                                        </div>

                                                        <div class="modal fade"
                                                            id="modalEdit{{ $s->kode_so . 'edit' }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="modalEditTitle{{ $s->kode_so . 'edit' }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <form action="/editdataso" method="POST"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="modalHapusTitle{{ $s->kode_so . 'edit' }}">
                                                                                Edit Data {{ $s->kode_so }}</h5>

                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Kode SO
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $s->kode_so }}"
                                                                                        name="kode_so">
                                                                                </div>
                                                                                <div class="col-sm-12 m-2">
                                                                                    Tanggal Pemesanan
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        type="date"
                                                                                        placeholder="Tanggal"
                                                                                        value="{{ $s->tanggal }}"
                                                                                        name="tanggal" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Tanggal Sampai
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        type="date"
                                                                                        placeholder="Tanggal Sampai"
                                                                                        value="{{ $s->tanggal }}"
                                                                                        name="tanggal_sampai" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Supplier
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2"
                                                                                    id="selectSupplier{{ $s->kode_so . 'edit' }}">
                                                                                    <select class="form-control"
                                                                                        id="supplierSelect{{ $s->kode_so . 'edit' }}"
                                                                                        data-width="100%"
                                                                                        placeholder="Supplier"
                                                                                        name="supplier" required>
                                                                                        <option disabled selected>
                                                                                            Supplier</option>
                                                                                        @foreach ($supplier as $sup)
                                                                                            <option
                                                                                                value="{{ $s->kode_supplier }}"
                                                                                                selected hidden>
                                                                                                {{ $s->supplier }}
                                                                                            </option>
                                                                                            <option
                                                                                                value="{{ $sup->kode_supplier }}">
                                                                                                {{ $sup->supplier }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Quantity
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <input class="form-control"
                                                                                        value="{{ $s->qty }}"
                                                                                        onkeyup="totals{{ $s->kode_so . 'edit' }}()"
                                                                                        id="qty{{ $s->kode_so . 'edit' }}"
                                                                                        type="number"
                                                                                        placeholder="Quantity"
                                                                                        name="qty" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Merek Semen
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2"
                                                                                    id="selectSemen{{ $s->kode_so . 'edit' }}">
                                                                                    <select class="form-control"
                                                                                        id="semen{{ $s->kode_so . 'edit' }}"
                                                                                        data-width="100%"
                                                                                        onchange="totals{{ $s->kode_so . 'edit' }}()"
                                                                                        placeholder="Merek Semen"
                                                                                        name="merek_semen" required>
                                                                                        <option
                                                                                            value="{{ $s->id_semen }}"
                                                                                            disable selected>
                                                                                            {{ $s->merek_semen }}
                                                                                        </option>
                                                                                        @foreach ($semen as $sem)
                                                                                            <option
                                                                                                value="{{ $sem->id_semen }}">
                                                                                                {{ $sem->merek_semen }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Total Harga
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2"
                                                                                    style="position: relative">
                                                                                    <label class="input-cur-label"
                                                                                        for="tot{{ $s->kode_so . 'edit' }}">
                                                                                        Rp. <span
                                                                                            id="formatTotal{{ $s->kode_so . 'edit' }}">{{ number_format($s->total_harga) }}</span>
                                                                                    </label>
                                                                                    <input class="form-control"
                                                                                        id="tot{{ $s->kode_so . 'edit' }}"
                                                                                        type="text"
                                                                                        placeholder="Total Harga"
                                                                                        value="{{ $s->total_harga }}"
                                                                                        name="total_harga" readonly
                                                                                        required>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Mobil
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2"
                                                                                    id="selectMobil{{ $s->kode_so . 'edit' }}">
                                                                                    <select class="form-control"
                                                                                        id="mobilSelect{{ $s->kode_so . 'edit' }}"
                                                                                        data-width="100%"
                                                                                        placeholder="Mobil"
                                                                                        name="mobil" required>
                                                                                        <option
                                                                                            value="{{ $s->kode_mobil }}"
                                                                                            disable selected>
                                                                                            {{ $s->plat_nomor }}
                                                                                        </option>
                                                                                        @foreach ($mobil as $mob)
                                                                                            @if (collect($checkStatus)->contains('kode_mobil', $mob->kode_mobil) &&
                                                                                                    collect($checkStatus)->contains('status', 'Proses'))
                                                                                            @else
                                                                                                <option
                                                                                                    value="{{ $mob->kode_mobil }}">
                                                                                                    {{ $mob->plat_nomor }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Supir
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2"
                                                                                    id="selectSupir{{ $s->kode_so . 'edit' }}">
                                                                                    <select class="form-control"
                                                                                        id="supirSelect{{ $s->kode_so . 'edit' }}"
                                                                                        data-width="100%"
                                                                                        placeholder="Supir"
                                                                                        name="supir" required>
                                                                                        <option
                                                                                            value="{{ $s->kode_supir }}"
                                                                                            disable selected>
                                                                                            {{ $s->nama_supir }} -
                                                                                            {{ $sup->no_hp }}
                                                                                        </option>
                                                                                        @foreach ($supir as $sup)
                                                                                            @if (collect($checkStatus)->contains('kode_supir', $sup->kode_supir) &&
                                                                                                    collect($checkStatus)->contains('status', 'Proses'))
                                                                                            @else
                                                                                                <option
                                                                                                    value="{{ $sup->kode_supir }}">
                                                                                                    {{ $sup->nama_supir }}
                                                                                                    -
                                                                                                    {{ $sup->no_hp }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Biaya Pemesanan
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2"
                                                                                    style="position: relative">
                                                                                    <label class="input-cur-label"
                                                                                        for="biayapemesanan{{ $s->kode_do . 'edit' }}">
                                                                                        Rp. <span
                                                                                            id="biayaformat{{ $s->kode_do . 'edit' }}">{{ number_format($s->biaya_pemesanan_semen) }}
                                                                                        </span>
                                                                                    </label>
                                                                                    <input class="form-control"
                                                                                        id="biayapemesanan{{ $s->kode_do . 'edit' }}"
                                                                                        onkeyup="biaya{{ $s->kode_do . 'edit' }}()"
                                                                                        type="number"
                                                                                        value="{{ $s->biaya_pemesanan_semen }}"
                                                                                        placeholder="Biaya Pemesanan"
                                                                                        name="biaya_pemesanan"
                                                                                        required>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Pembayaran
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <select class="form-control"
                                                                                        id="debit{{ $s->kode_so . 'edit' }}"
                                                                                        onchange="showDebit{{ $s->kode_so . 'edit' }}()"
                                                                                        placeholder="pembayaran"
                                                                                        name="pembayaran" required>
                                                                                        <option
                                                                                            value="{{ $s->pembayaran }}"
                                                                                            disable selected>
                                                                                            {{ $s->pembayaran }}
                                                                                        </option>
                                                                                        <option value="Cash">Cash
                                                                                        </option>
                                                                                        <option value="Debit">Debit
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class=""
                                                                                    id="cash{{ $s->kode_so . 'edit' }}">
                                                                                    <div class="col-sm-12 m-2">
                                                                                        Debit
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-2">
                                                                                        <input class="form-control"
                                                                                            value="{{ $s->debit }}"
                                                                                            type="text"
                                                                                            placeholder="debit"
                                                                                            name="debit">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 m-2">
                                                                                    Status
                                                                                </div>
                                                                                <div class="col-sm-12 mb-2">
                                                                                    <select class="form-control"
                                                                                        placeholder="Status"
                                                                                        name="status">
                                                                                        <option
                                                                                            value="{{ $s->status }}"
                                                                                            disable selected>
                                                                                            {{ $s->status }}
                                                                                        </option>
                                                                                        <option value="Proses">Proses
                                                                                        </option>
                                                                                        <option value="Selesai">Selesai
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                onclick="closeEdit{{ $s->kode_so . 'edit' }}()"
                                                                                class="btn btn-secondary">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-success">Simpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $("#mobilSelect{{ $s->kode_so . 'edit' }}").select2({
                                                                    dropdownParent: $("#selectMobil{{ $s->kode_so . 'edit' }}")
                                                                });
                                                                $("#semen{{ $s->kode_so . 'edit' }}").select2({
                                                                    dropdownParent: $("#selectSemen{{ $s->kode_so . 'edit' }}")
                                                                });
                                                                $("#supirSelect{{ $s->kode_so . 'edit' }}").select2({
                                                                    dropdownParent: $("#selectSupir{{ $s->kode_so . 'edit' }}")
                                                                });
                                                                $("#supplierSelect{{ $s->kode_so . 'edit' }}").select2({
                                                                    dropdownParent: $("#selectSupplier{{ $s->kode_so . 'edit' }}")
                                                                });
                                                            });

                                                            function showDebit{{ $s->kode_so . 'edit' }}() {
                                                                var kondisi{{ $s->kode_so . 'edit' }} = document.getElementById("debit{{ $s->kode_so . 'edit' }}").value;
                                                                var debit{{ $s->kode_so . 'edit' }} = document.getElementById("cash{{ $s->kode_so . 'edit' }}");
                                                                if (kondisi{{ $s->kode_so . 'edit' }} == 'Debit') {
                                                                    debit{{ $s->kode_so . 'edit' }}.classList.add("d-block");
                                                                    debit{{ $s->kode_so . 'edit' }}.classList.remove("d-none");
                                                                } else {
                                                                    debit{{ $s->kode_so . 'edit' }}.classList.add("d-none");
                                                                    debit{{ $s->kode_so . 'edit' }}.classList.remove("d-block");
                                                                }
                                                            }

                                                            function biaya{{ $s->kode_do . 'edit' }}() {
                                                                var spanBiaya{{ $s->kode_do . 'edit' }} = document.getElementById("biayaformat{{ $s->kode_do . 'edit' }}");
                                                                var biayaVal{{ $s->kode_do . 'edit' }} = document.getElementById(
                                                                    "biayapemesanan{{ $s->kode_do . 'edit' }}");
                                                                spanBiaya{{ $s->kode_do . 'edit' }}.innerHTML = biayaVal{{ $s->kode_do . 'edit' }}.value.replace(
                                                                    /\B(?=(\d{3})+(?!\d))/g, ',');

                                                            }

                                                            function totals{{ $s->kode_so . 'edit' }}() {
                                                                var spanTotal{{ $s->kode_so . 'edit' }} = document.getElementById('formatTotal{{ $s->kode_so . 'edit' }}');
                                                                var semen{{ $s->kode_so . 'edit' }} = document.getElementById("semen{{ $s->kode_so . 'edit' }}");
                                                                var qty{{ $s->kode_so . 'edit' }} = document.getElementById("qty{{ $s->kode_so . 'edit' }}");
                                                                var tot{{ $s->kode_so . 'edit' }} = document.getElementById("tot{{ $s->kode_so . 'edit' }}");
                                                                var harga = null;
                                                                @foreach ($semen as $se)
                                                                    if ('{{ $se->merek_semen }}' == semen{{ $s->kode_so . 'edit' }}.value) {

                                                                        tot{{ $s->kode_so . 'edit' }}.value = {{ $se->harga_beli }} * qty{{ $s->kode_so . 'edit' }}.value;
                                                                    }
                                                                    spanTotal{{ $s->kode_so . 'edit' }}.innerHTML = tot{{ $s->kode_so . 'edit' }}.value.replace(
                                                                        /\B(?=(\d{3})+(?!\d))/g, ',');
                                                                @endforeach



                                                            }
                                                        </script>
                                                        <script>
                                                            function openEdit{{ $s->kode_so . 'edit' }}() {
                                                                $('#modalEdit{{ $s->kode_so . 'edit' }}').modal('toggle');
                                                            }

                                                            function closeEdit{{ $s->kode_so . 'edit' }}() {
                                                                $('#modalEdit{{ $s->kode_so . 'edit' }}').modal('toggle');
                                                                $('#modalEdit{{ $s->kode_so . 'edit' }}').modal('dispose');
                                                                $('.modal-backdrop').remove();
                                                            }
                                                        </script>
                                                    </div>

                                                    {{-- ------------------------------------------------------------- Tutup Modal Edit SO  ------------------------------------------------------------------ --}}

                                                    {{-- ------------------------------------------------------------- Modal Hapus SO  ------------------------------------------------------------------ --}}
                                                    @if (Auth::user()->status == 'admin')
                                                        <div class="col">
                                                            <div class="col-sm-2 m-1">
                                                                <button type="button"
                                                                    onclick="openHapus{{ $s->kode_so }}()"
                                                                    class="btn p-2 bg-gradient-danger m-0"
                                                                    data-toggle="modal"
                                                                    data-target="#modalHapus{{ $s->kode_so }}"><img
                                                                        class="icon icon-xxs"
                                                                        src="{{ asset('assets/images/svg/trash.svg') }}" /></button>


                                                            </div>

                                                            <div class="modal fade"
                                                                id="modalHapus{{ $s->kode_so }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="modalHapusTitle{{ $s->kode_so }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">

                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="modalHapusTitle{{ $s->kode_so }}">
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
                                                                                onclick="closeHapus{{ $s->kode_so }}()"
                                                                                class="btn btn-secondary">Close</button>
                                                                            <a href="/hapusdataso/{{ $s->kode_so }}"
                                                                                type="submit"
                                                                                class="btn btn-danger">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function openHapus{{ $s->kode_so }}() {
                                                                    $('#modalHapus{{ $s->kode_so }}').modal('toggle');
                                                                }

                                                                function closeHapus{{ $s->kode_so }}() {
                                                                    $('#modalHapus{{ $s->kode_so }}').modal('toggle');
                                                                    $('#modalHapus{{ $s->kode_so }}').modal('dispose');
                                                                    $('.modal-backdrop').remove();
                                                                }
                                                            </script>
                                                        </div>
                                                        {{-- ------------------------------------------------------------- Tutup Modal Hapus SO  ------------------------------------------------------------------ --}}
                                                    @endif


                                                </div>

                                            </td>


                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex ">
                                {{ $so->withQueryString()->links() }}
                            </div>
                        </div>
                        <div class="card-footer p-3">
                            <div class="row">
                                <div class="col-sm-3">jumlah Biaya</div>
                                <div class="col-sm-2">: Rp. <span id="jumlahbiaya"></span></div>

                            </div>
                            <div class="row">
                                <div class="col-sm-3">jumlah Quantity</div>
                                <div class="col-sm-2">: <span id="jumlahQTY"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">jumlah Transaksi Penjualan</div>
                                <div class="col-sm-2">: <span id="jumlahTrans"></span></div>
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
        window.onload = (event) => {
            var SpanJumlahBiaya = document.getElementById('jumlahbiaya');
            var SpanJumlahQTY = document.getElementById('jumlahQTY');
            var SpanJumlahTrans = document.getElementById('jumlahTrans');
            var jumlahbiaya = 0;
            var jumlahqty = 0;
            var jumlahtrans = 0;
            @foreach ($so_all as $dataSO)
                jumlahbiaya += {{ $dataSO->total_harga }}
                jumlahqty += {{ $dataSO->qty }}
                jumlahtrans++
            @endforeach
            SpanJumlahBiaya.innerHTML = jumlahbiaya.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            SpanJumlahQTY.innerHTML = jumlahqty.toString();
            SpanJumlahTrans.innerHTML = jumlahtrans.toString();

        };

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
