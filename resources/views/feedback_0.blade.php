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
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="Homepage-1.html"><img src="assets/img/ufazz_00000.png" style="height: 52px;"></a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav flex-grow-1 justify-content-between" style="color: rgb(33, 37, 41);">
                <li class="nav-item"><a class="nav-link" href="{{'home'}}" style="margin-right: 22px;">Home Page</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
            </ul><a href="Login-1.html" style="margin-right: 0px;color: rgb(255,255,255);font-size: 13px;width: 82.5156px;">Log Out</a><a href="Personal-1.html"><img src="assets/img/studentpicture.jpg" style="width: 33px;border-radius: 50%;"></a>
        </div>
    </div>
</nav>
<section class="rows">
    <section class="features-boxed">
        <div class="container" style="height: 100px;padding-right: 34px;">
            <h2 class="text-center" style="text-align: right;">FEEDBACKS</h2>
            <div class="intro"></div>
        </div>
    </section>
</section>
<div class="container">
    <div class="card" id="TableSorterCard" style="margin-left: -5px;">
        <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Table Filtering Options</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:1%">Priority</th>
                                    <th style="width:9%">Operator</th>
                                    <th style="width:30%">Description</th>
                                    <th style="width:60%">Examples</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><code>|</code>&nbsp;or&nbsp;&nbsp;<code>OR</code><br></td>
                                    <td>Logical "or" (Vertical bar). Filter the column for content that matches text from either side of the bar.<br></td>
                                    <td><code>&lt;20 | &gt;40</code>&nbsp;(matches a column cell with either "&lt;20" or "&gt;40")<br></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><code>&amp;&amp;</code>&nbsp;or <code>AND</code><br></td>
                                    <td>Logical "and". Filter the column for content that matches text from either side of the operator.<br></td>
                                    <td><code>&gt;20 &amp;&amp; &gt;40</code>&nbsp;(matches a column cell that contains both "&gt;20" and "&lt;40")<br></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><code>/\d/</code><br></td>
                                    <td>Add any regex to the query to use in the query ("mig" flags can be included&nbsp;<code>/\w/mig</code>)<br></td>
                                    <td><code>/b[aeiou]g/i</code>&nbsp;(finds "bag", "beg", "BIG", "Bug", etc);<code>&gt;/r$/</code>&nbsp;(matches text that ends with an "r")<br></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><code>&lt; &lt;= &gt;= &gt;</code><br></td>
                                    <td>Find alphabetical or numerical values less than or greater than or equal to the filtered query .<br></td>
                                    <td><code>&lt;=10</code>&nbsp;(find values greater than or equal to 10)<br></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><code>!</code>&nbsp;or&nbsp;<code>!=</code><br></td>
                                    <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or double quote (<code>"</code>) to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
                                    <td><code>!e</code>&nbsp;(find text that doesn't contain an "e");<code>!"ELISA"</code>&nbsp;(find content that does not exactly match "ELISA")<br></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><code>"</code>&nbsp;or&nbsp;<code>=</code><br></td>
                                    <td>To exactly match the search query, add a quote, apostrophe or equal sign to the beginning and/or end of the query<br></td>
                                    <td><code>abc"</code>&nbsp;or&nbsp;<code>abc=</code>&nbsp;(exactly match "abc")<br></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><code>-</code>&nbsp;or <code>to</code><br></td>
                                    <td>Find a range of values. Make sure there is a space before and after the dash (or the word "to").<br></td>
                                    <td><code>10 - 30</code>&nbsp;or&nbsp;<code>10 to 30</code>&nbsp;(match values between 10 and 30)<br></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><code>?</code><br></td>
                                    <td>Wildcard for a single, non-space character.<br></td>
                                    <td><code>S?c</code>&nbsp;(finds "Sec" and "Soc", but not "Seec")<br></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><code>*</code><br></td>
                                    <td>Wildcard for zero or more non-space characters.<br></td>
                                    <td><code>B*k</code>&nbsp;(matches "Black" and "Book")<br></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><code>~</code><br></td>
                                    <td>Perform a fuzzy search (matches sequential characters) by adding a tilde to the beginning of the query<br></td>
                                    <td><code>~bee</code>&nbsp;(matches "Bruce Lee" and "Brenda Dexter"), or&nbsp;<code>~piano</code>&nbsp;(matches "Philip Aaron Wong")<br></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>text<br></td>
                                    <td>Any text entered in the filter will&nbsp;<strong>match</strong>&nbsp;text found within the column<br></td>
                                    <td><code>abc</code>&nbsp;(finds "abc", "abcd", "abcde", etc);<code>SEC</code>&nbsp;(finds "SEC" and "Analytical SEC")<br></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 1px;margin-bottom: 10px;padding-top: -16px;padding-bottom: 12px;">
    <figure class="figure"></figure>
    <div class="col-md-12 search-table-col" style="margin-bottom: -8px;margin-top: -26px;">
        <div class="form-group pull-right col-lg-4">
            <input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd" class="col-lg-1" style="width: 150px;background: #303131;">Name Surname</th>
                    <th id="trs-hd" class="col-lg-2" style="width: 150px;background: #333333;padding-bottom: 19px;">Subject</th>
                    <th id="trs-hd" class="col-lg-2" style="width: 120px;background: #333333;padding-bottom: 18px;">Date</th>
                    <th id="trs-hd" class="col-lg-2" style="background: #333333;width: 800px;padding-bottom: 20px;">Feedback</th>
                    <th id="trs-hd" class="col-lg-2" style="background: #303131;width: 80px;padding-bottom: 19px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="warning no-result">
                    <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                </tr>

                @foreach($informations as $information)
                <tr>
                    <td style="margin-left: -12px;">{{$information->student_name}}</td>
                    <td>{{$information->name}}</td>
                    <td>{{$information->created_at}}</td>
                        <td>{{$information->content}}</td>
                    <td>
                        <a href="{{"delete/$information->id"}}">
                        <button onclick="SomeDeleteRowFunction(this)"class="btn btn-danger delete-row" style="margin-left: 5px;" type="submit">
                            <i class="fa fa-trash" style="font-size: 15px;">

                            </i>
                        </button>
                        </a>
                        <div class="btn-group" role="group"></div>
                    </td>
                </tr>
                @endforeach

                @foreach($null_feedbacks as $null_feedback)
                    <tr>
                        <td style="margin-left: -12px;">Anonym</td>
                        <td>{{$null_feedback->name}}</td>
                        <td>{{$null_feedback->created_at}}</td>
                        <td>{{$null_feedback->content}}</td>
                        <td>
                            <a href="{{"delete/$null_feedback->id"}}">
                                <button "onclick="SomeDeleteRowFunction(this)"class="btn btn-danger delete-row" style="margin-left: 5px;" type="submit">
                                <i class="fa fa-trash" style="font-size: 15px;">

                                </i>
                                </button>
                            </a>
                            <div class="btn-group" role="group"></div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <fieldset></fieldset>
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
