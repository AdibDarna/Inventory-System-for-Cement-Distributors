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
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <style>
        #chartdivLine {
            width: 100%;
            height: 300px;
        }

        #chartdivPie {
            width: 100%;
            height: 300px;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0  fixed-start p-2 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/index.php" target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">PT. KONSTRUKSI LUAR </span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  active" href="/">
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
                    <a class="nav-link" href="/dataagen">
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
                                href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
            <div class="row">
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Stock Semen</p>
                                        <h6 class="font-weight-bolder mb-0">
                                            {{ $stokCount }} Zak
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <a href="datasemen">
                                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"> </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales Order</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $SODay }} On This Day
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h5>
                                        <h6 class="font-weight-bolder mb-0">
                                            {{ $SOMonth }} On This Month
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h6>
                                        <h6 class="font-weight-bolder mb-0">
                                            {{ $SOYear }} On This Year
                                            <span class="text-success text-sm font-weight-bolder"></span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <a href="distribusisalesorder">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Delivery Order</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $DODay }} On This Day
                                            <span class="text-danger text-sm font-weight-bolder"></span>
                                        </h5>
                                        <h6 class="font-weight-bolder mb-0">
                                            {{ $DOMonth }} On This Month
                                            <span class="text-danger text-sm font-weight-bolder"></span>
                                        </h6>
                                        <h6 class="font-weight-bolder mb-0">
                                            {{ $DOYear }} On This Year
                                            <span class="text-danger text-sm font-weight-bolder"></span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <a href="distribusideliveryorder">
                                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"> </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>Sales Order Berlangsung</h6>

                        </div>
                        <div class="card-body p-3 " style="max-height:60vh; overflow-y:scroll">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($SOStatus as $sst)
                                        <tr>

                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ $sst->plat_nomor }}</td>
                                            <td>{{ $sst->nama_supir }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>Delivery Order Berlangsung</h6>

                        </div>
                        <div class="card-body p-3" style="max-height:60vh; overflow-y:scroll">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($DOStatus as $dst)
                                        <tr>

                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ $dst->plat_nomor }}</td>
                                            <td>{{ $dst->nama_supir }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">

                <div class="col-lg-4">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>Top 10 Agen</h6>

                        </div>
                        <div class="card-body p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agenTop as $at)
                                        <tr>

                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ $at->nama_toko }}</td>
                                            <td>{{ $at->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Top 10 Mobil</h6>

                        </div>
                        <div class="card-body p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mobilTop as $mt)
                                        <tr>

                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ $mt->plat_nomor }}</td>
                                            <td>{{ $mt->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Top 10 Supir</h6>

                        </div>
                        <div class="card-body p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supirTop as $st)
                                        <tr>

                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ $st->nama_supir }}</td>
                                            <td>{{ $st->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-4">

                <div class="col-lg-6">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>PENJUALAN PER-BULAN TAHUN {{ $curYear }}</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success"></i>

                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div id="chartdivLine"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>PENJUALAN SEMEN</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success"></i>

                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div id="chartdivPie"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row my-4">
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
    <script src="https://cdn.amcharts.com/lib/version/5.3.11/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/version/5.3.11/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/version/5.3.11/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/version/5.3.11/themes/Dataviz.js"></script>


    <script src="https://cdn.amcharts.com/lib/version/5.3.11/locales/de_DE.js"></script>

    <script>
        am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdivLine");


            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root),
                am5themes_Dataviz.new(root)


            ]);




            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: true,
                panY: true,
                wheelX: "panX",
                wheelY: "zoomX",
                pinchZoomX: true
            }));

            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
            cursor.lineY.set("visible", false);


            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xRenderer = am5xy.AxisRendererX.new(root, {
                minGridDistance: 30
            });
            xRenderer.labels.template.setAll({
                rotation: -90,
                centerY: am5.p50,
                centerX: am5.p100,
                paddingRight: 15
            });

            xRenderer.grid.template.setAll({
                location: 1
            })

            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                maxDeviation: 0.3,
                categoryField: "country",
                renderer: xRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                maxDeviation: 0.3,
                numberFormat: "#' Zak'",
                renderer: am5xy.AxisRendererY.new(root, {
                    strokeOpacity: 0.1
                })
            }));


            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Series 1",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "value",
                sequencedInterpolation: true,
                categoryXField: "country",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY}"
                })
            }));

            series.columns.template.setAll({
                cornerRadiusTL: 5,
                cornerRadiusTR: 5,
                strokeOpacity: 0
            });
            series.columns.template.adapters.add("fill", function(fill, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });

            series.columns.template.adapters.add("stroke", function(stroke, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });


            // Set data
            var data = [

                @foreach ($perBulan as $PerBulan)
                    {
                        country: "{{ $PerBulan->month }}",
                        value: {{ $PerBulan->count }}
                    },
                @endforeach
            ];

            xAxis.data.setAll(data);
            series.data.setAll(data);


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

        }); // end am5.ready()
    </script>

    <script>
        am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root2 = am5.Root.new("chartdivPie");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root2.setThemes([
                am5themes_Animated.new(root2),
                am5themes_Dataviz.new(root2)
            ]);

            // Create chart
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
            var chart2 = root2.container.children.push(
                am5percent.PieChart.new(root2, {
                    endAngle: 270,
                    radius: am5.percent(70)
                })
            );

            // Create series
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
            var series2 = chart2.series.push(
                am5percent.PieSeries.new(root2, {
                    valueField: "value",
                    categoryField: "category",
                    endAngle: 270,
                    alignLabels: false
                })
            );

            series2.labels.template.setAll({
                fontSize: 12,
                text: "{category}"
            });

            series2.states.create("hidden", {
                endAngle: -90
            });

            // Set data
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
            series2.data.setAll([
                @foreach ($penSem as $penSemen)
                    {
                        category: "{{ $penSemen->semen }}",
                        value: {{ $penSemen->delivery }}
                    },
                @endforeach
            ]);

            series2.appear(1000, 100);

        }); // end am5.ready()
    </script>
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
