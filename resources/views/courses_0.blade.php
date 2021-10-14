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

<body style="height: 120px;background: rgb(255, 255, 255);">
<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark" style="background: rgb(0, 0, 0);">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="Homepage-1.html"><img class="d-table-row" src="assets/img/ufazz_00000.png" style="height: 52px;"></a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item"><a class="nav-link" href="Homepage-1.html">Home Page</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
            </ul><a href="Login-1.html" style="border-color: rgb(255,255,255);color: rgb(255,255,255);font-size: 13px;width: 82.5156px;height: -26px;">Log Out</a>
        </div><a href="Personal-1.html"><img src="assets/img/studentpicture.jpg" style="height: 33px;width: 33px;border-radius: 50%;"></a>
    </div>
</nav>
<section class="rows">
    <section class="features-boxed" style="height: 120px;background: rgb(238, 244, 247);">
        <div class="container" style="height: 107px;">
            <div class="intro">
                <h2 class="text-center" style="width: 500px;max-width: 100%;margin-left: -22px;">COURSES</h2>
            </div>
        </div>
    </section>
</section>
<section class="mt-4">
    <div class="container">
        <section>
            <div class="container">
                <div class="row mt-4">
                    <div class="col">
                        <h1 style="margin-left: 268px;margin-bottom: -85px;margin-top: -50px;"><br>Add new exams and grades<br><br></h1>
                        <div class="card shadow-sm mb-2 db-graph" style="margin-top: 97px;margin-left: 6px;margin-right: 31px;padding-top: 1px;padding-right: -32px;padding-left: 2px;">
                            <div class="card-body" id="datatable" style="margin-left: -2px;padding-right: -78px;padding-left: 10px;margin-top: 0px;padding-top: 10px;padding-bottom: -16px;">
                                <form>
                                    <div class="form-row" style="margin-left: -5px;margin-right: -5px;margin-top: -12px;padding-bottom: -10px;padding-top: -1px;">
                                        <div class="col">
                                            <div class="box-bg" style="margin-left: -10px;margin-right: -10px;margin-top: 0px;padding: 10px;padding-top: 10px;padding-bottom: -18px;">
                                                <div class="form-row" style="width: 1012px;height: 59px;margin-left: 4px;margin-bottom: 37px;">
                                                    <div class="col-md-2 col-xl-2 align-self-center font-md text-dark-blue" style="margin-left: 0px;"><button class="btn btn-info btn-block btn-sm add-row btn-xs" type="button" style="background: rgb(34,38,40);margin-left: 2px;margin-top: -3px;padding-left: 7px;width: 109.5px;"><i class="fa fa-plus"></i><strong>&nbsp;Add Item</strong></button><button onclick="deleteRow(this)"class="btn btn-danger btn-block btn-sm delete-row btn-xs" type="button" style="margin-left: 116px;padding-left: 5px;width: 48.5px;margin-top: -23px;"><i class="fa fa-trash-o"></i></button></div>
                                                    <div class="col" style="margin: 14px;padding: 8px;padding-left: 0px;"><html>
                                                        <head>
                                                            <script>
                                                                function populate(s1,s2,s3){
                                                                    var s1 = document.getElementById(s1);
                                                                    var s2 = document.getElementById(s2);
                                                                    var s3 = document.getElementById(s3);
                                                                    s2.innerHTML = "";
                                                                    if(s1.value == "L0"){
                                                                        var optionArray = ["|","a|A","b|B","c|C","d|D"];
                                                                    } else if(s1.value == "L1"){
                                                                        var optionArray = ["|","computer science|Computer Science","oil and gas engineering|Oil and Gas Engineering",
                                                                            "chemical engineering|Chemical Engineering","geophysical engineering|Geophysical Engineering"];
                                                                    } else if(s1.value == "L2"){
                                                                        var optionArray = ["|","computer science|Computer Science","oil and gas engineering|Oil and Gas Engineering",
                                                                            "chemical engineering|Chemical Engineering","geophysical engineering|Geophysical Engineering"];
                                                                    } else if(s1.value == "L3"){
                                                                        var optionArray = ["|","computer science|Computer Science","oil and gas engineering|Oil and Gas Engineering",
                                                                            "chemical engineering|Chemical Engineering","geophysical engineering|Geophysical Engineering"];
                                                                    }
                                                                    for(var option in optionArray){
                                                                        var pair = optionArray[option].split("|");
                                                                        var newOption = document.createElement("option");
                                                                        newOption.value = pair[0];
                                                                        newOption.innerHTML = pair[1];
                                                                        s2.options.add(newOption);
                                                                    }
                                                                    s3.innerHTML = "";
                                                                    if(s2.value == "A"){
                                                                        var optionArray = ["|","a|A","b|B","c|C","d|D"];
                                                                    } else if(s2.value == "B"){
                                                                        var optionArray = ["|","computer science|Computer Science","oil and gas engineering|Oil and Gas Engineering",
                                                                            "chemical engineering|Chemical Engineering","geophysical engineering|Geophysical Engineering"];
                                                                    } else if(s2.value == "L2"){
                                                                        var optionArray = ["|","computer science|Computer Science","oil and gas engineering|Oil and Gas Engineering",
                                                                            "chemical engineering|Chemical Engineering","geophysical engineering|Geophysical Engineering"];
                                                                    } else if(s2.value == "L3"){
                                                                        var optionArray = ["|","computer science|Computer Science","oil and gas engineering|Oil and Gas Engineering",
                                                                            "chemical engineering|Chemical Engineering","geophysical engineering|Geophysical Engineering"];
                                                                    }
                                                                    for(var option in optionArray){
                                                                        var pair = optionArray[option].split("|");
                                                                        var newOption = document.createElement("option");
                                                                        newOption.value = pair[0];
                                                                        newOption.innerHTML = pair[1];
                                                                        s3.options.add(newOption);
                                                                    }

                                                                }
                                                            </script>
                                                        </head>
                                                        <body>
                                                        Choose a year:
                                                        <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')"style="margin-left: 15px">
                                                            <option value=""></option>
                                                            <option value="L0">L0</option>
                                                            <option value="L1">L1</option>
                                                            <option value="L2">L2</option>
                                                            <option value="L3">L3</option>
                                                        </select>
                                                        Choose a group:
                                                        <select id="slct2" name="slct2"style="margin-left: 20px"></select>
                                                        </body>
                                                        </html></div>
                                                    <div class="col-xl-3 offset-xl-11" style="margin: 5px;padding-left: 7px;margin-left: 4px;margin-bottom: -26px;margin-top: 21px;"><div class="container">
                                                            <div class="wrapper">
                                                                <input type="text" name="search" id="search" placeholder="Type to search" autocomplete="chrome-off"style="margin-left: 10px;">
                                                                <div class="results">
                                                                    <ul>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div></div>
                                                </div>
                                                <h1 style="font-size: 16px;margin-left: 627px;margin-bottom: -19px;margin-top: -20px;">Midterm 1</h1>
                                                <h1 style="font-size: 16px;padding-left: 939px;margin-bottom: -19px;">Overall</h1>
                                                <h1 style="font-size: 16px;padding-left: 846px;margin-top: -1px;padding-top: -12px;padding-bottom: 24px;margin-left: 4px;">Final</h1>
                                                <h1 style="font-size: 16px;padding-left: 729px;padding-bottom: -9px;padding-top: -38px;margin-top: -53px;">Midterm 2</h1>
                                                <div class="table-responsive tbl-wfx mt-1 kot-table">
                                                    <table class="table table-sm" id="datatable">
                                                        <thead class="text-dark font-md">
                                                        <tr class="text-dark-blue" style="margin-bottom: 0px;margin-left: 68px;"></tr>
                                                        </thead>
                                                        <tbody class="h-15x">
                                                        <tr class="tbl-wfx kot-table font-sm.html">
                                                            <td class="text-center w-3x pt-2" style="margin-top: -26px;margin-bottom: -12px;margin-left: 2px;margin-right: 0px;"></td>
                                                            <td style="margin-top: -24px;margin-right: -13px;margin-left: 1px;padding-right: 244.8px;">
                                                                <div class="form-group mb-1" style="padding-bottom: 0px;margin-left: -246px;margin-right: 5px;margin-top: 0px;"><input type="checkbox" style="margin-left: 220px;margin-bottom: 5px;margin-top: 5px;padding-top: -38px;padding-bottom: 20px;" name="chk"><select class="custom-select custom-select-sm tbl-wfx kot-table font-sm" style="padding-top: 0px;padding-left: 4px;margin-left: 246px;margin-top: -48px;font-size: 12px;">
                                                                        <option value="1" selected="">Select an exam...</option>
                                                                        <option value="1">Math Analysis</option>
                                                                        <option value="1">Algebra</option>
                                                                        <option value="1">Computer science</option>
                                                                        <option value="1">French</option>
                                                                        <option value="1">English</option>
                                                                        <option value="1">Physics</option>
                                                                        <option value="1">Chemistry</option>
                                                                    </select></div>
                                                            </td>
                                                            <td class="w-10x">
                                                                <div class="form-group mb-1"><input class="form-control form-control-sm font-sm" type="number" step="1" min="0" max="20"></div>
                                                            </td>
                                                            <td class="w-10x">
                                                                <div class="form-group mb-1"><input class="form-control form-control-sm font-sm" type="number" step="1" min="0" max="20"></div>
                                                            </td>
                                                            <td class="w-10x">
                                                                <div class="form-group mb-1"><input class="form-control form-control-sm font-sm" type="number" step="1" min="0" max="20"></div>
                                                            </td>
                                                            <td class="w-10x">
                                                                <div class="form-group mb-1"><input class="form-control form-control-sm font-sm" type="number" step="1" min="0" max="20"></div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div><button onclick="myFunction2()"class="btn btn-primary" type="button" style="margin-left: 928px;margin-bottom: -1px;margin-top: -28px;background: rgb(51,51,51);">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<div class="container" style="background: rgb(238,244,247);">
    <div class="row">
        <div class="col-md-6">
            <header></header>
            <header></header>
        </div>
    </div>
</div>
<footer class="page-footer" style="margin-top: 287px;">
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
