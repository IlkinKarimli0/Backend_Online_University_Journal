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
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="{{'home'}}"><img src="assets/img/ufazz_00000.png" style="height: 52px;"></a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav flex-grow-1 justify-content-between" style="color: rgb(33, 37, 41);">
                <li class="nav-item"><a class="nav-link" href="{{'home'}}" style="margin-right: 22px;">Home Page</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
            </ul><a href="Login.html" style="margin-right: 0px;color: rgb(255,255,255);font-size: 13px;width: 82.5156px;">Log Out</a><a href="{{"login"}}"><img src="assets/img/studentpicture.jpg" style="width: 33px;border-radius: 50%;"></a>
        </div>
    </div>
</nav>
<section class="rows">
    <section class="features-boxed">
        <div class="container" style="height: 100px;">
            <h2 class="text-center" style="text-align: right;">FEEDBACK</h2>
            <div class="intro"></div>
        </div>
    </section>
</section>
<div class="container">
    <form action="{{route('submit')}}" method="post">
        @csrf
    <div class="row" style="margin-top: -36px;">

        <div class="col-md-6"><select name="subject_id" class="custom-select custom-select-sm tbl-wfx kot-table font-sm" style="margin-top: 48px;font-size: 19px;">
                <option value="1" selected="">Select a subject...</option>
                @foreach($subjects as $subject)
                <option value="{{$subject->subject_id}}" >{{$subject->name}}</option>
                @endforeach
            </select></div>

        <div class="col-md-6" style="margin-bottom: 117px;margin-left: 0px;margin-right: -1px;margin-top: 39px;"><textarea style="padding-left: -2px;height: 197px;width: 429px;padding-top: -1px;padding-bottom: -13px;margin: 0px;margin-right: 1px;margin-left: -23px;max-width: 100%;margin-top: 7px;" name="content" placeholder="Write your feedback..."></textarea>
            <div class="form-check" style="margin-right: 31px;margin-top: 1px;margin-left: 287px;">
                <input class="form-check-input" name="anom" type="checkbox" id="formCheck-1" style="margin-left: -19px;margin-bottom: 6px;margin-top: 6.8px;">
                <label class="form-check-label" for="formCheck-1">Send as anonymus</label>
            </div>
            <button onclick="myFunction()"class="btn btn-primary" type="submit" style="margin-left: 336px;margin-right: -68px;margin-top: 5px;padding-bottom: 9px;padding-right: 14px;font-size: 16px;line-height: 22px;background: rgb(51,51,51);"> SEND</button>
        </div>
    </div>
    </form>
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
