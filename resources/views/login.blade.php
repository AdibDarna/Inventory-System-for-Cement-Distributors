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
</head>

<body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <div class="container-fluid d-flex position-relative"
            style="justify-content: center; height:100vh; align-items: center; ">
            <div class="position-absolute m-3" alt="main_logo" style="top:0; left:0">
                <img src="{{ asset('assets/images/logo/semen_indonesia_logo.png') }}">
            </div>
            <div class="position-absolute m-3" alt="main_logo" style="top:0; right:0">
                <img src="{{ asset('assets/images/logo/dynamix.png') }}">
                <img style="margin-left:30px" src="{{ asset('assets/images/logo/semen_padang.png') }}">
            </div>
            <div class="position-absolute" alt="main_logo" style="bottom:0px; right:0px; margin:0">
                <img width="600" src="{{ asset('assets/images/logo/pabrikhero.png') }}">
            </div>
            <div class="col-lg-3">
                <div class="card z-index-2" style="height: 300px">
                    <div class="card-header pb-0 " style="text-align: center">
                        <img src="{{ asset('assets/images/logo/PT_DIS.png') }}" class="navbar-brand-img h-70"
                            alt="main_logo">
                    </div>
                    <div class="card-body p-2">
                        <form action="/authenticate" method="POST">
                            @csrf
                            <div class="col m-4">
                                <input type="text" class="form-control" name="email" placeholder="Email" />
                            </div>
                            <div class="col m-4">
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                            <div class="col m-4" style="display: flex; justify-content: center;">
                                <button type="submit" class="btn bg-gradient-primary w-60">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
