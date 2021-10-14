<!DOCTYPE html>
<html>

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

<body>
<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="Homepage.html"><img src="assets/img/ufazz_00000.png" style="height: 52px;"></a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav flex-grow-1 justify-content-between" style="color: rgb(33, 37, 41);">
                <li class="nav-item"><a class="nav-link" href="{{"home"}}" style="margin-right: 22px;">Home Page</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
            </ul><a href="{{'login'}}" style="margin-right: 0px;color: rgb(255,255,255);font-size: 13px;width: 82.5156px;">Log Out</a><a href="{{"personal"}}"><img src="assets/img/studentpicture.jpg" style="width: 33px;border-radius: 50%;"></a>
        </div>
    </div>
</nav>
<section class="rows">
    <section class="features-boxed">
        <div class="container" style="height: 100px;">
            <h2 class="text-center" style="text-align: right;">Change a password</h2>
            <div class="intro"></div>
        </div>
    </section>
</section>
<div class="container">
    <div class="row" style="margin-top: -36px;">
        <form method="post" action="change_password">
            @csrf
        <div class="col-sm-6 col-md-5 col-lg-4 item" style="margin-left: 385px;margin-top: 56px;">
            <form style="max-width: 700px;" enctype="multipart/form-data" method="post" role="form" action="profile.html">
                <div class="form-group"><label style="margin-left: 122px;margin-top: 1px;margin-bottom: 7.2px;">Current password</label>
                    <input name="old_pass" class="form-control" type="password"style="width: 350px" name="oldPassword" placeholder="Current password">
                </div>
                @if(Session::get('alert'))
                    <script>
                        alert("{{Session::get('alert')}}");
                    </script>
                @endif
                @if(Session::get('errorp'))
                <div class ="text-danger"  style="margin-top: 10px;">
                    {{Session::get('errorp')}}
                </div>
                @endif
                <div class="form-group"><label style="margin-top: 15px;margin-left: 126px;">New password<br></label>
                    <input name="new_pass"class="form-control" type="password" id="password" name="password" style="width: 350px"placeholder="New password">
                </div>
                <div class="form-group"><label style="margin-top: 15px;margin-left: 101px;">Confirm new password<br></label>
                    <input name="new_pass_confirm"class="form-control" type="password" style="width: 350px" id="confirmPassword" placeholder="Confirm new password">
                    @if(Session::get('errorc'))
                        <div class ="text-danger"  style="margin-top: 10px;">
                            {{Session::get('errorc')}}
                        </div>
                    @endif

                </div>
                <hr style="margin-top: 20px;margin-bottom: 20px; width: 350px;">
                <div class="form-group"><button class="btn btn-primary btn-block" id="submitBtn"style="width: 350px" type="submit"><i class="fas fa-save">

                        </i> Save</button><a class="btn btn-danger btn-block" style="width: 350px" role="button" href="{{"personal"}}" style="margin-top: 15px;">
                        <i class="fas fa-arrow-left"></i>&nbsp;Return</a></div>
            </form>
        </div>
        </form>
    </div>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <h4>About UFAZ</h4>
                <ul class="footer-links">
                    <li></li>
                    <li><a href="#">Nizami str 183 Baku Aze</a></li>
                    <li><a href="#"><br>Information - info@ufaz.az<br></a></li>
                    <li><a href="#"><br>Careers - careers@ufaz.az<br></a></li>
                    <li><a href="#"><br>Admission - admissions@ufaz.az<br><br><br></a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h4>Social Media</h4>
                <ul class="footer-links">
                    <li><a href="https://www.instagram.com/french_azerbaijani_university/?hl">Instagram</a></li>
                    <li><a href="https://www.facebook.com/ufaz.university/">Facebook</a></li>
                    <li><a href="https://www.ufaz.az">Official Page</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h4>Creators</h4><a href="#" style="padding-bottom: 0px;color: rgb(85, 85, 85);font-size: 11px;">Ali Gurbanov</a>
                <ul class="footer-links">
                    <li><a href="#">Ravan Osmanli</a></li>
                    <li><a href="#">Ilkin Karimli</a></li>
                    <li><a href="#">Rasul Alakbarli</a></li>
                    <li><a href="#" style="padding-bottom: 0px;color: rgb(85, 85, 85);">Nihad Mammadzada</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-legal">
            <div class="float-md-right region"><a href="#">Azerbaijan</a></div>
            <div class="d-inline-block copyright">
                <p class="d-inline-block">Copyright © 2021&nbsp; All rights reserved.<br></p>
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
