<?php
require_once 'conn.php';
include_once 'header.php';
include_once 'function.php';
?>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript">
    /*@shinsenter/defer.js*/ ! function(e, o, t, n, i, r) {
        function c(e, t) {
            r ? n(e, t || 32) : i.push(e, t)
        }

        function f(e, t, n, i) {
            return t && o.getElementById(t) || (i = o.createElement(e || 'SCRIPT'), t && (i.id = t), n && (i
                .onload = n), o.head.appendChild(i)), i || {}
        }
        r = /p/.test(o.readyState), e.addEventListener('on' + t in e ? t : 'load', function() {
            for (r = 1; i[0];) c(i.shift(), i.shift())
        }), c._ = f, e.defer = c, e.deferscript = function(e, t, n, i) {
            c(function() {
                f('', t, i).src = e
            }, n)
        }
    }(this, document, 'pageshow', setTimeout, []),
    function(s, n) {
        var a = 'IntersectionObserver',
            d = 'src',
            l = 'lazied',
            h = 'data-',
            m = h + l,
            y = 'load',
            p = 'forEach',
            b = 'getAttribute',
            g = 'setAttribute',
            v = Function(),
            I = s.defer || v,
            c = I._ || v;

        function A(e, t) {
            return [].slice.call((t || n).querySelectorAll(e))
        }

        function e(u) {
            return function(e, t, o, r, c, f) {
                I(function(n, t) {
                    function i(n) {
                        !1 !== (r || v).call(n, n) && ((f || ['srcset', d, 'style'])[p](function(e,
                            t) {
                            (t = n[b](h + e)) && n[g](e, t)
                        }), A('SOURCE', n)[p](i), y in n && n[y]()), n.className += ' ' + (o || l)
                    }
                    t = a in s ? (n = new s[a](function(e) {
                        e[p](function(e, t) {
                            e.isIntersecting && (t = e.target) && (n.unobserve(t),
                                i(t))
                        })
                    }, c)).observe.bind(n) : i, A(e || u + '[' + h + d + ']:not([' + m + '])')[p](
                        function(e) {
                            e[b](m) || (e[g](m, u), t(e))
                        })
                }, t)
            }
        }

        function t() {
            I(function(t, n, i, o, r) {
                t = A((i = '[type=deferjs]') + ':not(' + (o = '[async]') + ')').concat(A(i + o)),
                    function e() {
                        if (0 != t) {
                            for (o in (i = t.shift()).parentNode.removeChild(i), i.removeAttribute('type'),
                                n = c(i.nodeName), i) 'string' == typeof(r = i[o]) && n[o] != r && (n[o] =
                                r);
                            n[d] && !n.hasAttribute('async') ? n.onload = n.onerror = e : I(e, .1)
                        }
                    }()
            }, 4)
        }
        t(), s.deferstyle = function(t, n, e, i) {
            I(function(e) {
                (e = c('LINK', n, i)).rel = 'stylesheet', e.href = t
            }, e)
        }, s.deferimg = e('IMG'), s.deferiframe = e('IFRAME'), I.all = t
    }(this, document);
    </script>
</head>

<body>
    <!-- TODO: Remove style class of body and use global style instead -->



    <link rel='stylesheet' href='assets/css/buttons.bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/fixedHeader.dataTables.min.css'>
    <link rel="stylesheet" type="text/css" href="./styleTablePrint.css">

    <!-- Print -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../assets/css/web_fonts.css" type="text/css">


    <link href="../assets/css/home.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Date time -->
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>

    <link href="../dist/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="../dist/js/bootstrap-datepicker-custom.js"></script>
    <script src="../dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>

    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


    <section class="container" aria-describedby="demos">

        <div class="row">
            <div class="demo twelve columns">
                <!-- cssimgprofile
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <style>
                .img1 {
                    float: right;
                }

                .img2 {
                    float: right;
                    margin-top: 10px;
                    margin-right: 10px;

                }

                .print {
                    margin-left: 9%;
                }
                </style>
                <!-- cssimgprofile
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

                <style>
                .img-new {
                    width: 80%;
                    padding: 2px;
                    border-radius: 5px;
                    height: 175px;
                    padding: 5px;
                    border: 1px solid #ddd;

                }

                .box-new {
                    float: left;
                    width: 33.33%;
                    padding: 10px;
                    transition: .2s;

                }

                .box-new:hover {
                    box-shadow: 0 0 2px 2px #ccc;
                }


                .autograph {
                    padding: 5px;
                    margin-top: 0px;
                }

                .autograph-left {
                    float: left;
                    width: 50%;
                }

                .autograph-right {
                    float: left;
                    width: 50%;

                }
                </style>


                <div>

                    <img src="images/admin.jpg" class="img-thumbnail" height="70px" width="80px"
                        style="margin-top: 30px;">

                    <div class="print">
                        <h3 align="center" class="align-baseline"><b>รายงานการซ่อม/ติดตั้ง </b></h3>
                        <br>
                        <div align="center">
                            <!--------------------------------------test function------------------------------------------------------->
                            <?php
                  $jobNo = $_SESSION['idEditjob'];
                    $sqlTraining = "SELECT * FROM `testaddjob` where jobNo = '$jobNo'  ";
                    $result = $mysqli->query($sqlTraining);

                    while ($row = $result->fetch_assoc()) {

                       echo '<tr align="center">
                            <td> <b>เลขที่งาน</b> ' . $row['jobNo'] . '</td>
                            <td> <b>ประเภทงาน</b> ' . $row['jobType'] . '</td>
                            <td> <b>S/N</b> ' . $row['snJob'] . '</td>
                            <br>
                            <td> <b>ชื่อลูกค้า คุณ</b> ' . $row['fname'] . '</td><td>   ' . $row['lname'] . '</td>
                            <td> <b>เบอร์โทร</b> ' . $row['cusTel'] . '</td>
                            <br>
                            <td> <b>ที่อยู่</b> ' . $row['address'] . '</td>
                            <td> <b>ตำบล</b> ' . $row['district'] . '</td>
                            <td> <b>อำเภอ</b> ' . $row['amphoe'] . '</td>
                            <br>
                            <td> <b>จังหวัด</b> ' . $row['province'] . '</td>
                            <td> <b>รหัส</b> ' . $row['zipcode'] . '</td>
                            <br>
                            <td> <b>พิกัด(ละติจูด)</b> ' . $row['latitude'] . '</td>
                            <td> <b>พิกัด(ลองติจูด)</b> ' . $row['longtitude'] . '</td>
                            <br>
                            <br> 
                            <td> <b>ชื่อช่าง</b> ' . $row['technicianName'] . '</td>
                            <td> <b>เบอร์โทร</b> ' . $row['technicianTel'] . '</td>
                            <td> <b>S/N</b> ' . $row['snProduct'] . '</td>
                            <br>
                            <td> <b>วันที่ให้บริการ</b> ' . $row['inputDate'] . '</td>
                      
                            
            </tr>';  
        ?>

                        </div>


                        <div class="col-sm-12">

                            <div class="row well">



                                <div class="container">


                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-10">

                                                <hr>

                                                <tbody>
                                                    <div class="form-group col-md-6">
                                                        <img class="img-responsive"
                                                            src="uploads/technician/<?php echo $row['InputFileImgCus'] ?>"
                                                            width="390" height="310" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <img class="img-responsive"
                                                            src="uploads/technician/<?php echo $row['InputFileImgBefore'] ?>"
                                                            width="390" height="310" />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <img class="img-responsive"
                                                            src="uploads/technician/<?php echo $row['InputFileImgAfter'] ?>"
                                                            width="390" height="310" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <img class="img-responsive"
                                                            src="uploads/technician/<?php echo $row['InputFileImgProduct'] ?>"
                                                            width="390" height="310" />
                                                    </div>
                                                    
                                                    <?php
                                                            }
                                                    ?>

                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!----------------------------------------------------------------------------------------------------->


                    </div>
                </div>
                <hr>
            </div>
        </div>

        <!-------------------------------------------------------------------------------------------------------------->
        <!-- cssprint
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <style>
        .btn {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Darker background on mouse-over */
        .btn:hover {
            background-color: RoyalBlue;
        }
        </style>

        <!-- cssprint
         –––––––––––––––––––––––––––––––––––––––––––––––––– -->


        <div class="one-half column">
            <a id="basic" href="#PrintScript" class="btn"><button class="btn btn-primary hidden-print one-half column"
                    id="basic">
                    <span class="" aria-hidden="true"></span><i class="fa fa-print"></i></button></a>
        </div>


    </section>
    <hr />


    <!-- printThis -->

    <script type="text/javascript" src="printThis.js"></script>

    <!-- demo -->
    <script>
    $('#basic').on("click", function() {
        $('.demo').printThis({
            base: "print.php"
        });
    });
    </script>

    <!-- partial -->
    <script src='assets/js/dataTables.buttons.min.js'></script>
    <script src='assets/js/buttons.colVis.min.js'></script>
    <script src='assets/js/buttons.html5.min.js'></script>
    <script src='assets/js/buttons.print.min.js'></script>
    <script src='assets/js/buttons.bootstrap.min.js'></script>
    <script src='assets/js/jszip.min.js'></script>
    <script src='assets/js/vfs_fonts.js'></script>
    <script src='assets/js/pdfmake.min.js'></script>
    <script src='assets/js/dataTables.fixedHeader.min.js'></script>
    <script src="./scriptTable.js"></script>


    <script defer src="js/news-and-activities.js" type="text/javascript">
    </script>
    <script defer src="jsresearch.bundle.js" type="text/javascript"></script>
    <script defer src="js/home.js" type="text/javascript"></script>
    <script defer src="js/bus-station.js" type="text/javascript"></script>
    <script defer src="js/hero-banner.js" type="text/javascript"></script>
    <script defer src="js/rellax.min.js" type="text/javascript"></script>
    <script defer src="js/fac-n-cur.bundle.js" type="text/javascript"></script>

    <script defer src="assets/js/aos.js"></script>


</body>

</html>