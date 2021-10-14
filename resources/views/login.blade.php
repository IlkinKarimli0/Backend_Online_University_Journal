<!DOCTYPE html>
<html style="height: 514px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UFAZ_PERSONAL_ROOM_FINAL (2)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Billing-Table-with-Add-Row--Fixed-Header-Feature.css">
    <link rel="stylesheet" href="assets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Dark-Mode-Switch.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---4-Edit-Profile.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button-1.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/NZ---TextboxLabel.css">
    <link rel="stylesheet" href="assets/css/NZAddDelete.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body style="background: rgb(238,244,247);">
<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><img src="assets/img/ufazz_00000.png" style="height: 52px;">
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
        </div>
    </div>
</nav>
<section class="rows">
    <section class="features-boxed" style="background: rgb(238, 244, 247);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">WELCOME TO THE&nbsp;UFAZ PERSONAL ROOM</h2>
            </div>
        </div>
    </section>
</section>
<footer class="page-footer" style="background: rgb(238,244,247);">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="login-clean" style="background: rgb(238,244,247);margin-top: -77px;">
                    <form action="{{route('check')}}" method="post" style="background: rgb(238,244,247);border-style: none;border-color: rgb(238,244,247);">
                        @csrf

                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration"><img src="assets/img/ufazz_00000.png" style="height: 123px;"></div>

                            @if(isset($errorMessageDuration))
                                <div class="alert alert-danger" style="width:240px">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ $errorMessageDuration }}
                                </div>
                            @endif
                            <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email"></div>

                            @if(Session::get('errore'))
                                <div class="alert alert-danger" style="width:240px">
                                    {{ Session::get('errore') }}
                                </div>
                            @endif
                            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        @if(Session::get('errorp'))
                            <div class="alert alert-danger" style="width:240px ">
                                {{ Session::get('errorp') }}
                            </div>
                        @endif
                            <div class="form-group"><button class="btn btn-primary btn-block" type= 'submit' style="background: rgb(43,30,190);">Log In</button></div>

                    </form>
                </section>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Billing-Table-with-Add-Row--Fixed-Header-Feature.js"></script>
<script src="assets/js/Dark-Mode-Switch.js"></script>
<script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
<script src="assets/js/Deletecheckboxrow.js"></script>
<script src="assets/js/HTML-Table-to-Excel-V2.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="assets/js/Ludens-Users---4-Edit-Profile.js"></script>
<script src="assets/js/PassSave.js"></script>
<script src="assets/js/Profile-Edit-Form.js"></script>
<script src="assets/js/search.js"></script>
<script src="assets/js/Table-With-Search-1.js"></script>
<script src="assets/js/Table-With-Search.js"></script>
<script src="assets/js/untitled-1.js"></script>
<script src="assets/js/untitled-2.js"></script>
<script src="assets/js/untitled-3.js"></script>
<script src="assets/js/untitled.js"></script>
</body>

</html>
