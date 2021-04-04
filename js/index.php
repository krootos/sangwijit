<?php
session_start();
include('connect.php');
?>
<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โรงเรียนธาตุนารายณ์วิทยา</title>

    <meta name="keywords" content="TNW,Thatnaraiwittaya School,โรงเรียนธาตุนารายณ์วิทยา" />
    <meta name="description" content="โรงเรียนธาตุนารายณ์วิทยา อำเภอเมือง จังหวัดสกลนคร สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา เขต 23" />
    <meta property="og:site_name" content="www.tnw.ac.th" />
    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TNW | โรงเรียนธาตุนารายณ์วิทยา รอบรั้วเหลืองเทา" />
    <meta property="og:url" content="https://www.tnw.ac.th/" />
    <meta property="og:image" content="assets/logo.png" />
    <meta property="og:description" content="โรงเรียนธาตุนารายณ์วิทยา อำเภอเมือง จังหวัดสกลนคร สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา เขต 23" />

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="https://www.ku.ac.th/assets/images/16x16.png"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/16x16.png">
    <!-- <link rel="manifest" href="https://www.ku.ac.th/assets/images/favicon/site.webmanifest"> -->

    <!-- DeferJS -->
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

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://www.ku.ac.th/assets/vendor/bootstrap/4.4.1/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="assets/css/web_fonts.css" type="text/css">

    <!-- Font Awesome -->
    <script type="text/javascript">
        deferstyle('https://use.fontawesome.com/releases/v5.8.1/css/all.css', 'fontawesome-css', 500);
        deferstyle('assets/css/swiper.min.css', 500);
    </script>

    <!-- Style for SwiperJS -->
    <!--  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css"> -->

    <!-- Style for preventing header's unfinished styled element to show when page load. -->
    <style type="text/css">
        #top-main-header {
            visibility: hidden
        }
    </style>

    <!-- Style for home -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
    <link rel="stylesheet" href="assets/css/header.css" type="text/css">
    <link rel="stylesheet" href="assets/css/footer.css" type="text/css">


    <link href="assets/css/home.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">


    <style>
        .set-ku-fz {
            color: #cacbcb !important;
        }

        .set-ku-fz.active {
            color: #8e961a !important;
        }
    </style>
    <!-- Style for preventing header's unfinished styled element to show when page load. -->
    <!-- <style type="text/css">#top-main-header { visibility: hidden}</style> -->
    <script type="text/javascript">
        //DO NOT REMOVE THIS!!
        const LANG = 'th';
    </script>


</head>
<!-- TODO: Remove style class of body and use global style instead -->

<body class=" mr-auto ml-auto" style="max-width: 100%">
    <div>
        <!---- header ---->
        <header id="top-main-header" class="main-header fixed-top p-0 header fixed-top white-navbar">
            <div class="d-flex justify-content-between h-100">
                <!-- Logo and Name -->
                <div class="logo-n-name position-relative d-flex align-items-center p-3">
                    <div class="logo-lightning"></div>
                    <a href="#" class="ku-logo">
                        <img src="assets/images/logo1.png" alt="TNW Logo" />
                    </a>
                    <div class="">
                        <a href="#">
                            <img class="ku-logo-name" src="assets/images/logo-text.png" alt="TNW Logo" />
                        </a>
                    </div>
                </div>



                <!-- Menu -->
                <div class="menu-area">
                    <!-- Top Part Menu -->
                    <div class="d-flex top-part justify-content-end">

                        <!-- Account Menu -->
                        <nav style="margin-top: 5px">

                            <ul class="account-menu  no-bullets d-flex lang-selector">


                                <li>
                                    <a href="admin/login.php" class="login-link ">
                                        <span>
                                            <i class="fas fa-user-alt mr-1"></i>
                                            เข้าสู่ระบบ </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <div class="d-flex page-options ml-2">
                            <div>
                                <ul class="no-bullets d-flex lang-selector">

                                    <li>
                                        <a class="h-100 text-white bg-b2bb1c " href="#">Learner</a>
                                    </li>
                                    <li>
                                        <a class="h-100 text-white bg-006b67 " href="#">Development</a>
                                    </li>
                                    <li>
                                        <a class="h-100 text-white bg-6e4b32 " href="#">Activities</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>



                    <!-- Bottom Part Menu -->
                    <div class="bottom-part d-flex justify-content-end pb-1">

                        <div style="margin: 0;">
                            <div class="containMarquee">
                                <span class="obj_marquee header-sub-menu-btn menu__item mr-3" data-target="admission-heading-sub-menu" aria-expanded="false" aria-controls="admission-heading-sub-menu">
                                    กิจกรรมพัฒนาผู้เรียน โรงเรียนธาตุนารายณ์วิทยา
                                </span>
                            </div>
                        </div>
                    </div>




                    <!-- Full width Part Menu -->
                    <nav class="full-width-part">
                        <ul class="no-bullets">
                            <li> <button type="button" class="menu__item no-sub-menu" onclick="window.location.assign('index.php'); ">
                                    หน้าแรก
                                </button>
                            </li>
                            <li><button type="button" class="menu__item" data-target="ku-sub-menu-275" aria-expanded="false" aria-controls="ku-sub-menu-275">เกี่ยวกับกิจกรรมพัฒนาผู้เรียน</button></li>

                            <li> <button type="button" class="menu__item no-sub-menu" onclick="window.open('guidebook.php'); ">
                                    คู่มือการใช้งาน
                                </button>
                            </li>
                            <!-- <li><button type="button" class="menu__item" data-target="ku-sub-menu-313"
                                    aria-expanded="false" aria-controls="ku-sub-menu-313">บริการสังคม</button></li> -->
                            <!-- <li><button type="button" class="menu__item" data-target="ku-sub-menu-277"
                                    aria-expanded="false" aria-controls="ku-sub-menu-277">ทุนการศึกษา</button></li>
                            <li><button type="button" class="menu__item" data-target="ku-sub-menu-337"
                                    aria-expanded="false" aria-controls="ku-sub-menu-337">ข่าวสารและกิจกรรม</button>
                            </li> -->
                            <li><button type="button" class="menu__item" data-target="ku-sub-menu-278" aria-expanded="false" aria-controls="ku-sub-menu-278">ติดต่อ</button></li>
                        </ul>
                        <ul>

                        </ul>
                    </nav>
                    <!-- Full width part shield -->
                    <div class="full-width-part-shield"></div>

                    <!-- Dropdown -->
                    <div class="header-dropdown-holder">
                        <div class="header-dropdown__arrow">
                            <div class="arrow-inner"></div>
                        </div>
                        <div class="header-dropdown__bg"></div>

                        <div class="header-dropdown__wrap">
                            <!-- Admission sub-menu -->


                            <!-- Curriculum sub-menu -->


                            <!-- Faculty and units sub-menu -->



                            <div class="header-dropdown-menu" id="ku-sub-menu-274">
                                <div class="header-dropdown-menu__content">
                                    <!-- <ul>
                                        <li><a href="/th/research-information" target="_self">สารสนเทศงานวิจัย</a></li>
                                        <li><a href="https://www3.rdi.ku.ac.th/?cat=22" target="_blank">รางวัลวิจัย</a>
                                        </li>
                                        <li><a href="/th/portfolio-research-product"
                                                target="_blank">ผลงานวิจัยสู่ภาคธุรกิจ</a></li>
                                        <li><a href="https://www3.rdi.ku.ac.th/?cat=39" target="_blank">ผลงานวิจัย</a>
                                        </li>
                                        <li><a href="/th/research-station-center" target="_self">ศูนย์สถานีวิจัย</a>
                                        </li>
                                        <li><a href="#">วารสารวิทยาสารเกษตรศาสตร์</a>
                                            <ul class="sub_3" style="margin-left: 20px;">
                                                <li><a href="https://li01.tci-thaijo.org/index.php/anres/"
                                                        target="_blank">Agriculture and Natural Resources (ANRES)</a>
                                                </li>
                                                <li><a href="https://so04.tci-thaijo.org/index.php/kjss"
                                                        target="_blank">Kasetsart Journal of Social Sciences (KJSS)</a>
                                                </li>
                                            </ul>
                                        <li></li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="header-dropdown-menu" id="ku-sub-menu-313">
                                <div class="header-dropdown-menu__content">
                                    <!-- <ul>
                                        <li><a href="/th/social-activities" target="_self">กิจกรรมเพื่อสังคม</a></li>
                                        <li><a href="/th/knowledge-for-the-people"
                                                target="_self">องค์ความรู้เพื่อประชาชน</a></li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="header-dropdown-menu" id="ku-sub-menu-277">
                                <div class="header-dropdown-menu__content">
                                    <!-- <ul>
                                        <li><a href="/th/scholarships-at-ku" target="_self">ประเภททุนการศึกษา</a></li>
                                        <li><a href="/th/scholarships" target="_self">ทุนการศึกษา ใน มก.</a></li>
                                        <li><a href="/th/scholarships-abroad" target="_self">ทุนการศึกษาในต่างประเทศ</a>
                                        </li>
                                        <li><a href="/th/guidelines-for-participating"
                                                target="_self">แนวทางการเข้าร่วมกิจกรรมในต่างประเทศ</a></li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="header-dropdown-menu" id="ku-sub-menu-337">
                                <div class="header-dropdown-menu__content">
                                    <!-- <ul>
                                        <li><a href="/th/news1" target="_self">ข่าวมหาวิทยาลัย</a></li>
                                        <li><a href="/th/student-news" target="_self">ข่าวนิสิต</a></li>
                                        <li><a href="/th/meeting-seminar-training-news"
                                                target="_self">ประชุม/สัมมนา/อบรม</a></li>
                                        <li><a href="/th/education-news" target="_self">การศึกษา</a></li>
                                        <li><a href="/th/award-news" target="_self">การรับรางวัล</a></li>
                                        <li><a href="#">จัดซื้อจัดจ้าง</a>
                                            <ul class="sub_3" style="margin-left: 20px;">
                                                <li><a href="http://finance.ku.ac.th/index.php?option=com_content&amp;task=section&amp;id=14&amp;Itemid=74&amp;lang=th_TH"
                                                        target="_blank">กองคลัง</a></li>
                                                <li><a href="/th/central-procurement-ku" target="_self">หน่วยงานใน
                                                        มก.</a></li>
                                            </ul>
                                        <li></li>
                                        <li><a href="#">รับสมัครบุคลากร</a>
                                            <ul class="sub_3" style="margin-left: 20px;">
                                                <li><a href="/th/jobnews-ku" target="_self">ข่าวรับสมัครงาน</a></li>
                                                <li><a href="https://ku.thaijobjob.com/"
                                                        target="_blank">ระบบสมัครงานออนไลน์</a></li>
                                            </ul>
                                        <li></li>
                                        <li><a href="/th/event-calendar" target="_blank">ปฏิทินกิจกรรม</a></li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="header-dropdown-menu" id="ku-sub-menu-278">
                                <div class="header-dropdown-menu__content">
                                    <!-- <ul>
                                        <li><a href="/th/contact-address" target="_self">ที่อยู่ ติดต่อสอบถาม</a></li>
                                        <li><a href="/th/phone-number" target="_self">หมายเลขโทรศัพท์</a></li>
                                        <li><a href="/th/kasetsart-university-map" target="_self">แผนที่และการเดินทางมา
                                                มก.</a></li>
                                        <li><a href="/car-service-routes-in-maha-vickya-sai/"
                                                target="_self">แผนที่และการเดินทางใน มก.</a></li>
                                        <li><a href="https://directory.ku.ac.th/ver3/index.php"
                                                target="_blank">ค้นหาข้อมูลบุคลากร</a></li>
                                        <li><a href="http://docs.google.com/forms/d/e/1FAIpQLSdCdbUvnTnxZe8N82gkqTRosJw3Q_-5N-I4hWoNt70P1yg_hQ/viewform"
                                                target="_blank">แจ้งเสนอแนะและร้องเรียน</a></li>
                                    </ul> -->
                                </div>
                            </div>

                            <!-- About KU -->
                            <div class="header-dropdown-menu" id="ku-sub-menu-275" data-sub="ku-sub-menu-275">
                                <div class="header-dropdown-menu__content col-3">
                                    <!-- <ul>
                                        <li><a href="/th/history-ku" target="_self">ประวัติ มก.</a>
                                        <li><a href="/th/philosophy-vision-mission" target="_self">ปรัชญา วิสัยทัศน์
                                                พันธกิจ</a>
                                        <li><a href="/th/the-identity-of-ku" target="_self">สัญลักษณ์ มก.</a>
                                        <li><a href="/th/university-information" target="_self">ข้อมูลมหาวิทยาลัย</a>
                                            <ul class="sub_3" style="margin-left: 20px;">
                                                <li>
                                                    <a href="/th/campus-information" target="_self">ข้อมูลวิทยาเขต</a>
                                                </li>
                                                <li>
                                                    <a href="/th/statistical-data" target="_self">ข้อมูลสถิติ</a>
                                                </li>
                                                <li>
                                                    <a href="/th/world-university-rankings"
                                                        target="_self">ผลการจัดอันดับมหาวิทยาลัยโลก</a>
                                                </li>
                                                <li>
                                                    <a href="/th/kustatute" target="_self">พระราชบัญญัติ มก.</a>
                                                </li>
                                            </ul>
                                        <li><a href="/th/gallery-and-vdo" target="_self">คลังภาพและวิดีโอ</a>
                                            <ul class="sub_3" style="margin-left: 20px;"></ul>
                                        <li><a href="https://ku.ac.th/th/kulogo" target="_self">ดาวน์โหลด</a>
                                    </ul>
                                    <ul>
                                        <li><a href="#">โครงสร้างมหาวิทยาลัย</a>
                                            <ul class="sub_3" style="margin-left: 20px;">
                                                <li>
                                                    <a href="/th/organize-structure"
                                                        target="_self">แผนผังโครงสร้างการบริหาร</a>
                                                </li>
                                                <li>
                                                    <a href="/th/section-structure"
                                                        target="_self">แผนผังโครงสร้างส่วนงาน</a>
                                                </li>
                                                <li>
                                                    <a href="/th/university-council"
                                                        target="_self">กรรมการสภามหาวิทยาลัย</a>
                                                </li>
                                                <li>
                                                    <a href="/th/university-affairs-board"
                                                        target="_self">คณะกรรมการส่งเสริมกิจการมหาวิทยาลัย</a>
                                                </li>
                                                <li>
                                                    <a href="/th/university-administrators"
                                                        target="_self">คณะผู้บริหารมหาวิทยาลัย</a>
                                                </li>
                                                <li>
                                                    <a href="/th/dean-and-director"
                                                        target="_self">คณบดีและผู้อำนวยการ</a>
                                                </li>
                                                <li>
                                                    <a href="/th/president-s-palace" target="_self">ทำเนียบอธิการบดี</a>
                                                </li>
                                            </ul>
                                    </ul>
                                    <ul>
                                        <li><a href="/th/around-university-fence" target="_self">รอบรั้วมหาวิทยาลัย</a>
                                            <ul class="sub_3" style="margin-left: 20px;">
                                                <li>
                                                    <a href="/th/landmark" target="_self">สถานที่สำคัญ</a>
                                                </li>
                                                <li>
                                                    <a href="/th/learning-resources" target="_self">แหล่งเรียนรู้</a>
                                                </li>
                                                <li>
                                                    <a href="/th/facility" target="_self">สิ่งอำนวยความสะดวก</a>
                                                </li>
                                                <li>
                                                    <a href="/th/sports-and-health" target="_self">กีฬาและสุขภาพ</a>
                                                </li>
                                                <li>
                                                    <a href="/th/ku-products" target="_self">ผลิตภัณฑ์ มก.</a>
                                                </li>
                                            </ul>
                                    </ul> -->

                                </div>
                            </div>



                        </div>



                    </div>

                </div>



                <!-- Sidenav Button -->
                <div class="sidenav-button mr-3">
                    <!-- <button id="sidenav-search-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <style>
                                tspan {
                                    white-space: pre
                                }
                            </style>
                            <path id="ic_mag"
                                d="M23.79 22.77L17.96 16.94C19.52 15.14 20.47 12.8 20.47 10.23C20.47 4.59 15.88 0 10.23 0C4.59 0 0 4.59 0 10.23C0 15.87 4.59 20.47 10.23 20.47C12.8 20.47 15.15 19.52 16.95 17.95L22.78 23.79C22.92 23.92 23.1 24 23.29 24C23.47 24 23.65 23.93 23.79 23.79C24.07 23.51 24.07 23.05 23.79 22.77ZM1.43 10.23C1.43 5.38 5.38 1.44 10.23 1.44C15.08 1.44 19.03 5.38 19.03 10.23C19.03 15.08 15.08 19.03 10.23 19.03C5.38 19.03 1.43 15.09 1.43 10.23Z" />
                        </svg>
                    </button>
                    <button id="sidenav-search-close-btn">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                            </path>
                        </svg>
                    </button> -->
                    <button id="sidenav-toggle-btn">
                        <svg viewBox="0 0 100 100" width="31" height="24">
                            <rect x="-20%" y="0%" width="140%" height="7.4" fill="#292929"></rect>
                            <rect x="-20%" y="46%" width="140%" height="7.4" fill="#292929"></rect>
                            <rect x="-20%" y="92.5%" width="140%" height="7.4" fill="#292929"></rect>
                        </svg>
                    </button>
                </div>


                <!-- Sidenav overlay -->
                <div class="sidenav-overlay"></div>


                <!-- Search box -->
                <div id="header-search-area">

                    <div class="header-search-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <h2 class="text-center">ค้นหาข้อมูลภายในเว็บไซต์</h2>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col">
                                    <form class="header-search-form" action="/th/search">
                                        <div class="row justify-content-center no-gutters">

                                            <div class="input col-10 col-md-8 col-lg-6 mt-3 mt-lg-0">
                                                <input id="header-search-input" type="text" name="headKeySearch" placeholder="คุณต้องการค้นหาอะไร?" aria-label="ค้นหา" required />
                                            </div>
                                            <div class="col-2 col-md-1 mt-3 mt-lg-0">
                                                <button class="search-btn" type="submit" aria-label="Search">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" width="17" height="17">
                                                        <style>
                                                            tspan {
                                                                white-space: pre;
                                                            }

                                                            .shp0 {
                                                                fill: #ffffff;
                                                            }
                                                        </style>
                                                        <path id="ic_mag" class="shp0" d="M16.82 16.13L12.7 12C13.8 10.73 14.47 9.06 14.47 7.25C14.47 3.25 11.23 0 7.24 0C3.24 0 0 3.25 0 7.25C0 11.24 3.25 14.5 7.24 14.5C9.05 14.5 10.71 13.83 11.98 12.72L16.11 16.85C16.2 16.95 16.34 17 16.46 17C16.59 17 16.72 16.95 16.82 16.85C17.02 16.65 17.02 16.33 16.82 16.13ZM1.01 7.25C1.01 3.81 3.8 1.02 7.23 1.02C10.66 1.02 13.45 3.81 13.45 7.25C13.45 10.68 10.66 13.48 7.23 13.48C3.8 13.48 1.01 10.69 1.01 7.25Z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </header>


        <div id="sub-menu-overlay" class="collapse"></div>
    </div>
    <!-- Banner -->

    <!-- Herobanner -->
    <!-- Banner -->

    <div class="main-carousel ml-auto mr-auto">
        <div class="main-carousel ml-auto mr-auto">
            <div class="swiper-container swiper-banner">
                <!-- Wrapper -->
                <div class="swiper-wrapper invisible">
                    <!-- Slides -->


                    <div class="swiper-slide position-relative">
                        <a href="#" target="_blank">
                            <picture>
                                <!-- Small device -->
                                <source media="(max-width: 768px)" srcset="assets/images/boss_s.jpg">
                                <!-- Large device -->
                                <source media="(min-width: 768.7px)" srcset="assets/images/boss.jpg">
                                <!-- Fallback -->
                                <img src="assets/images/boss.jpg" alt="ผู้อำนวยการโรงเรียนธาตุนารายณ์วิทยา">
                            </picture>





                        </a>
                    </div>

                    <div class="swiper-slide position-relative">
                        <picture>
                            <!-- Small device -->
                            <source media="(max-width: 768px)" srcset="assets/images/building_s.jpg">
                            <!-- Large device -->
                            <source media="(min-width: 768.7px)" srcset="assets/images/building.jpg">
                            <!-- Fallback -->
                            <img src="assets/images/building.jpg" alt="">
                        </picture>






                    </div>



                </div>
                <div class="swiper-lazy-preloader"></div>

                <!-- Pagination -->
                <div class="swiper-pagination banner-pagination"></div>
                <!-- Navigation buttons -->
                <div class="swiper-button-prev hero-banner-prev"></div>
                <div class="swiper-button-next hero-banner-next"></div>


            </div>
        </div>
    </div>
    <!-- Herobanner End -->

    <div id="around-ku-comp">

        <h1 class="around-ku-h1 text-center mt-4">ข่าวสารและกิจกรรม</h1>
        <div class="around-ku mb-5" data-aos="fade-up">
            <div class="links-wrapper border-top d-flex justify-content-center">
                <ul id="na-tab" class="no-bullets nav nav-tabs d-flex flex-wrap pl-0 mb-0 border-0" role="tablist">

                    <li class="nav-item active ">
                        <a id="na-u-news-tab-389" href="#na-u-news-tab-content-389" class="w-100 h-100 active" data-toggle="tab" role="tab" aria-controls="na-u-news-tab-content-389" aria-selected="true" data-swiper-init="false" data-swiper-container="ku-news-swiper-389" data-swiper-next-btn="ku-new-next-btn-389" data-swiper-prev-btn="ku-new-prev-btn-389">

                            ข่าวโรงเรียน
                        </a>
                        <div class="small-green"></div>
                    </li>


                    <li>
                        <a href="allcalendar.php" class="w-100 h-100" style="color: #fff; background-color: #A5A5A5;">ปฏิทินกิจกรรม</a>
                        <div class="small-green"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!-- news tnw -->
    <div align="center">
        <div class="row">
            <div class="content-news">
                <?php
                $sql = "Select * from tbl_news order by news_id";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="column-news">
                        <div class="card-news">
                            <img class="img-news" src="uploads/<?php echo $row["picname"]; ?>" alt="news-<?php echo $row["title"]; ?>">
                            <div class="container-news">
                                <div class="text-content">
                                    <div class="text-title"><?php echo $row["title"]; ?></div>
                                    <p class="text-news-detail t-1"><?php echo $row["detail_short"]; ?></p>
                                    <p class="text-news-one t-1 "><?php echo $row["date_post"]; ?> / <i class="fas fa-user-alt mr-1"></i><?php echo $row["n_view"]; ?></p>

                                </div>
                                <a href="news_show.php?news_id=<?php echo $row['news_id']; ?>">
                                    <p><button class="button-news tl-1 tr-1 tb-1 ">รายละเอียด</button></p>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>

            </div>
        </div>
        <a href="news.php">
            <div class="button-all-news">ข่าวทั้งหมด</div>
        </a>
    </div>

    <!--<div class="tab-content" id="na-news-and-act-tab-content">
     <!-- University News Tab Content-->
    <!--<div class="tab-pane fade  show active " id="na-u-news-tab-content-389" role="tabpanel" aria-labelledby="na-u-news-tab">
                  
	<!-- News Swiper -->
    <!-- <div class="swiper-container swiper-news ku-news-swiper-389">

                            <div class="swiper-wrapper">
								
    <!--sql name data.sql -->
    <!--<?php
        $sql = "Select * from tbl_data order by tid";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>  
<div class="swiper-slide news-slide p-1 " style="margin-right: 30px;">	
<a href="#" class="card-hover-effect"> 
<div>
	
            <div class="img">
                <img src="imgnews/<?php echo $row["picname"]; ?>.png" data-src="imgnews/<?php echo $row["picname"]; ?>.png" alt="<?php echo $row["name"]; ?>"  class="swiper-lazy" />
            </div>
            <div class="content ">
              <div class="news-title"><?php echo $row["name"]; ?></div>
              <div class="pt-2">
                <p> <?php echo $row["detail"]; ?></p>
              </div>
            </div>
</div>


            <div class="info d-flex justify-content-between pl-3 pr-3 pb-1">
              <div class="date"><?php echo $row["date"]; ?></div>
              <div class="stat d-flex">
                <span class="mr-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path
      d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"
      fill="#74787b"
    />
  </svg>                  </span>
                  <span>538</span>
                </span>
                <span class="ml-2">
                  <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" fill="#74787b" />
    <path d="M0 0h24v24H0z" fill="none"/>
  </svg>                  </span>
                  <span>2</span>
                </span>
              </div>
            </div>

  </a>
</div>
<?php
        }
?>


     


                            
                               
                          </div>
							
                       <div class="swiper-button-prev swiper-news-prev-btn ku-new-prev-btn-389"></div>
                            <div class="swiper-button-next swiper-news-next-btn ku-new-next-btn-389"></div>
                        </div>

                        <div class="all-news-text">
                                                     <!-- file name news1.php -->
    <!--<a href="news1.php">ข่าวทั้งหมด <i class="fas fa-chevron-right"></i></a>
                                                    </div>
                    </div> 
	</div>-->

    <!-- KU Four Side -->
    <div id="ku-sides-comp">
        <div class="ku-sides ku-check-webp d-flex flex-wrap" data-aos="fade-up">
            <!-- Each Policy -->
            <div class="side-01">
                <div class="bg-wrapper"></div>
                <h2 class="text-white" style="text-shadow: 0px 1px 2px #000">กิจกรรมบังคับ</h2>
                <div class="hover-text-content">
                    <h2>กิจกรรม<br class="two-line-u">บังคับ</h2>
                    <p class="full-content">
                        นักเรียนทุกคนต้องเข้าร่วมกิจกรรมบังคับ<br>
                        ตามที่ทางโรงเรียนกำหนดให้
                    </p>
                    <p class="short-content">
                        นักเรียนทุกคนต้องเข้าร่วมกิจกรรมบังคับ<br>
                        ตามที่ทางโรงเรียนกำหนดให้
                    </p>




                </div>
                <div class="hover-mask">
                    <div class="top-mask"></div>
                    <div class="bottom-mask"></div>
                </div>
            </div>

            <div class="side-02">
                <div class="bg-wrapper"></div>
                <h2 class="text-white" style="text-shadow: 0px 1px 2px #000">กิจกรรมบำเพ็ญประโยชน์</h2>
                <div class="hover-text-content">
                    <h2>กิจกรรม<br class="two-line-u">บำเพ็ญประโยชน์</h2>
                    <p class="full-content">
                        นักเรียนทำกิจกรรมจิตอาสาภายในโรงเรียน
                    </p>
                    <p class="short-content">
                        นักเรียนทำกิจกรรมจิตอาสาภายในโรงเรียน
                    </p>
                </div>
                <div class="hover-mask">
                    <div class="top-mask"></div>
                    <div class="bottom-mask"></div>
                </div>
            </div>

            <div class="side-04">
                <div class="bg-wrapper"></div>
                <h2 class="text-white">
                    <span class="d-block" style="text-shadow: 0px 1px 2px #000">กิจกรรมชุมนุม</span><span class="d-block"></span> </h2>
                <div class="hover-text-content">
                    <h2>
                        กิจกรรม<br class="two-line-u">ชุมนุม </h2>
                    <p class="full-content">
                        นักเรียนต้องเลือกกิจกรรมชุมนุม<br>ตามที่ตนเองสนใจและมีความถนัด
                    </p>
                    <p class="short-content">
                        นักเรียนต้องเลือกกิจกรรมชุมนุม<br>ตามที่ตนเองสนใจและถนัด
                    </p>


                </div>
                <div class="hover-mask">
                    <div class="top-mask"></div>
                    <div class="bottom-mask"></div>
                </div>
            </div>

            <div class="side-03">
                <div class="bg-wrapper"></div>
                <h2 class="text-white" style="text-shadow: 0px 1px 2px #000">กิจกรรมเพื่อสังคม<br>และสาธารณประโยชน์</h2>
                <div class="hover-text-content">
                    <h2>กิจกรรมเพื่อสังคม<br class="two-line-u"><br>และสาธารณประโยชน์</h2>
                    <p class="full-content">
                        นักเรียนทำกิจกรรมจิตอาสานอกโรงเรียนที่เป็นประโยชน์ต่อสังคม
                    </p>
                    <p class="short-content">
                        นักเรียนทำกิจกรรมจิตอาสานอกโรงเรียนที่เป็นประโยชน์ต่อสังคม
                    </p>


                </div>
                <div class="hover-mask">
                    <div class="top-mask"></div>
                    <div class="bottom-mask"></div>
                </div>
            </div>

        </div>
    </div>


    <!-- Bus Station Swiper -->
    <div id="bus-station-comp">
        <!-- Around Uni -->
        <div class="around-uni bus-station ku-check-webp" data-aos="fade-up" data-aos-once="false">
            <div class="bg-wrapper"></div>
            <div class="bg-wrapper-2"></div>
            <div>
                <div class="section-heading d-flex justify-content-center py-xl-5 py-3">
                    <div class="ku small">TNW</div>
                    <div class="d-flex align-items-center">
                        <h1>
                            <a href="#">
                                <div class="more-btn header-box corner-green-light bg-black text-white d-inline-block header-box-animated header-box-animated-light w-100">
                                    <i class="fa fa-arrow-up"></i>
                                    <span class="btn-text pr-3 d-flex align-items-center justify-content-center h-100">รอบรั้ว
                                        ธ.น.ว.</span>
                                </div>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="fac-n-cur-comp">
        <div class="fac-n-cur d-flex justify-content-end align-items-center ku-check-webp" data-aos="fade-up">
            <div class="bg-wrapper rellax" data-rellax-percentage="0.5" data-rellax-speed="-1"></div>
            <div class="gradient-wrapper"></div>
            <div class="content-wrapper">
                <div>
                    <h2>ข้อมูลนักเรียน</h2>
                </div>
                <p>
                    <span class="university-name d-block">โรงเรียนธาตุนารายณ์วิทยา</span>
                    <span class="desc d-block mt-1">
                        เรียนเด่น เล่นดี มีวินัย ใฝ่คุณธรรม นำไอซีที </span>
                </p>
                <article class="d-flex">
                    <div class="pt-2 pb-1">
                        <span id="fac-n-cur-count-one" class="number-count d-block right-separator">6</span>
                        <span class="academic d-inline-block">ระดับชั้นเรียน</span>
                    </div>
                    <div class="pt-2 pb-1">
                        <span id="fac-n-cur-count-two" class="number-count d-block right-separator">80</span>
                        <span class="academic d-inline-block text-nowrap">ห้องเรียน</span>
                    </div>
                    <div class="pt-2 pb-1">
                        <span id="fac-n-cur-count-three" class="number-count d-block right-separator">3122</span>
                        <span class="academic d-inline-block text-nowrap">จำนวนนักเรียน</span>
                    </div>



                </article>
                <span class="d-block mt-1">ข้อมูล ณ ปีการศึกษา 2563</span>

            </div>
        </div>

    </div>


    <div class="footer-section">
        <!-- Color decoration at the top -->
        <div class="d-flex">
            <div class="h-5px w-50 bg-green-light2"></div>
            <div class="h-5px w-50 bg-green"></div>
        </div>


        <!-- Subscription and other home links -->
        <div class="subscription-n-home-links">
            <div class="bg-wrapper d-flex">
                <div></div>
                <div></div>
            </div>

            <div class="content-wrapper">

                <!-- subscription -->
                <a href="https://tnw.ac.th/web/index.php/categories/29-2020-03-09-15-33-34" class="news-letter" target="_blank">
                    <div class="m-3">
                        <svg width="60" height="60" viewBox="0 0 25 25" fill="rgb(255, 255, 255)" xmlns="http://www.w3.org/2000/svg">

                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M5.34 0A5.328 5.328 0 000 5.34v13.32A5.328 5.328 0 005.34 24h13.32A5.328 5.328 0 0024 18.66V5.34A5.328 5.328 0 0018.66 0zm6.525 2.568c2.336 0 4.448.902 6.056 2.587 1.224 1.272 1.912 2.619 2.264 4.392.12.59.12 2.2.007 2.864a8.506 8.506 0 01-3.24 5.296c-.608.46-2.096 1.261-2.336 1.261-.088 0-.096-.091-.056-.46.072-.592.144-.715.48-.856.536-.224 1.448-.874 2.008-1.435a7.644 7.644 0 002.008-3.536c.208-.824.184-2.656-.048-3.504-.728-2.696-2.928-4.792-5.624-5.352-.784-.16-2.208-.16-3 0-2.728.56-4.984 2.76-5.672 5.528-.184.752-.184 2.584 0 3.336.456 1.832 1.64 3.512 3.192 4.512.304.2.672.408.824.472.336.144.408.264.472.856.04.36.03.464-.056.464-.056 0-.464-.176-.896-.384l-.04-.03c-2.472-1.216-4.056-3.274-4.632-6.012-.144-.706-.168-2.392-.03-3.04.36-1.74 1.048-3.1 2.192-4.304 1.648-1.737 3.768-2.656 6.128-2.656zm.134 2.81c.409.004.803.04 1.106.106 2.784.62 4.76 3.408 4.376 6.174-.152 1.114-.536 2.03-1.216 2.88-.336.43-1.152 1.15-1.296 1.15-.023 0-.048-.272-.048-.603v-.605l.416-.496c1.568-1.878 1.456-4.502-.256-6.224-.664-.67-1.432-1.064-2.424-1.246-.64-.118-.776-.118-1.448-.008-1.02.167-1.81.562-2.512 1.256-1.72 1.704-1.832 4.342-.264 6.222l.413.496v.608c0 .336-.027.608-.06.608-.03 0-.264-.16-.512-.36l-.034-.011c-.832-.664-1.568-1.842-1.872-2.997-.184-.698-.184-2.024.008-2.72.504-1.878 1.888-3.335 3.808-4.019.41-.145 1.133-.22 1.814-.211zm-.13 2.99c.31 0 .62.06.844.178.488.253.888.745 1.04 1.259.464 1.578-1.208 2.96-2.72 2.254h-.015c-.712-.331-1.096-.956-1.104-1.77 0-.733.408-1.371 1.112-1.745.224-.117.534-.176.844-.176zm-.011 4.728c.988-.004 1.706.349 1.97.97.198.464.124 1.932-.218 4.302-.232 1.656-.36 2.074-.68 2.356-.44.39-1.064.498-1.656.288h-.003c-.716-.257-.87-.605-1.164-2.644-.341-2.37-.416-3.838-.218-4.302.262-.616.974-.966 1.97-.97z" />

                        </svg>

                    </div>
                    <article class="d-inline-block">
                        <div class="link-name">วารสารประชาสัมพันธ์</div>
                        <div class="link-desc">
                            คุณสามารถเข้าดูวารสารประชาสัมพันธ์ของโรงเรียนได้ที่นี่ </div>
                    </article>
                </a>


                <!-- Other Home Links -->
                <div class="home-links">
                    <a href="" class="home-link community-linkk ku-check-webp disabled">
                        <div class="bg-wrapper">
                            <div></div>
                        </div>
                        <div class="text-link">
                            <!-- <span>community</span>
                            <span>zone</span> -->
                        </div>
                    </a>

                    <a href="" class="home-link newcomer-link ku-check-webp ">
                        <div class="bg-wrapper">
                            <div></div>
                        </div>
                        <div class="text-link">
                            <span>STUDENT</span>
                            <span>Team</span>
                        </div>
                    </a>

                    <a href="" class="home-link partner-link ku-check-webp ">
                        <div class="bg-wrapper">
                            <div></div>
                        </div>
                        <div class="text-link">
                            <span>TEACHER</span>
                            <span>Team</span>
                        </div>
                    </a>
                </div>



                <!-- Note -->
                <a href=" https://www.youtube.com/channel/UC5D64sFjr0GvmV-he9zKeHQ" class="chancellor-letter" target="_blank">
                    <div class="m-3">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="43px">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M47 12.37a6 6 0 0 0-4.25-4.27C39 7.09 24 7.09 24 7.09s-15 0-18.75 1A6 6 0 0 0 1 12.37C0 16.14 0 24 0 24s0 7.86 1 11.63a6 6 0 0 0 4.25 4.27c3.74 1 18.75 1 18.75 1s15 0 18.75-1A6 6 0 0 0 47 35.63C48 31.86 48 24 48 24s0-7.86-1-11.63zM19.09 31.14V16.86L31.64 24z" />
                        </svg>


                    </div>
                    <article class="d-inline-block">
                        <div class="link-name">TNW Channel</div>
                    </article>
                </a>
            </div>
        </div>


        <!-- Footer of Footer (social)-->
        <div class="fin">
            <div class="content-wrapper d-flex">
                <a href="/th/community-home" class="ku-logo"></a>
                <div class="link-content text-white mr-2">
                    <!-- Contact info -->
                    <div class="contact-info d-flex align-items-center">
                        เลขที่ 606 ถนนหมายเลข 22 บ้านชุมชนดงพัฒนา ตำบลธาตุเชิงชุม อำเภอเมือง จังหวัดสกลนคร
                        47000&nbsp;<br>
                        โทรศัพท์ : 042-970128 | โทรสาร : 042-743678 |
                        เว็บไซต์ : www.tnw.ac.th | อีเมล์ : email@tnw.ac.th
                    </div>

                    <!-- Social contact links -->
                    <div class="social-section d-flex  ">
                        <div class="social-button-small facebook">
                            <a href="https://www.facebook.com/FanpageTNW" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <!-- <div class="social-button-small twitter">
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="social-button-small pinterest">
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div> -->
                            <div class="social-button-small fb-msg">
            <a href="#" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
          </div>
                        <div class="social-button-small youtube">
                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>

                        <div class="social-button-small">
                            <a href="mailto:email@tnw.ac.th"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>

                    <!-- License -->
                    <div class="ku-license">
                        สงวนลิขสิทธิ์ © 2020 งานเทคโนโลยีสารสนเทศ โรงเรียนธาตุนารายณ์วิทยา </div>

                    <!-- Usage Plicy -->
                    <ul class="web-usage-policy no-bullets d-flex justify-content-center pl-0 mb-0">
                        <li class="ml-3 mr-3">
                            <a href="#">เงื่อนไขการใช้งานเว็บไซต์</a>
                        </li>
                        <li class="ml-3 mr-3"><a href="#">ข้อตกลงด้านสิทธิ์ใช้งาน</a></li>
                        <!-- <li class="ml-3"><a href="/th/personal-policy">นโยบายความเป็นส่วนตัว</a></li> -->
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <style>
        .cookie-policy {
            position: fixed;
            bottom: 0;
            background-color: #ffff;
            z-index: 9999;
            font-size: 1.3rem;
            border-top: solid 4px #006664;
            color: #006664;
        }

        .cookie-policy button {
            font-size: 1.2rem;
        }

        .cookie-policy a {
            text-decoration: underline;
            color: #b2bb1c;
        }
    </style>
    <!-- <div class="cookie-policy row col-12 m-0 p-0" style="display: none;">
        <div
            class="container-fluid content-wrapper d-flex justify-content-start justify-content-md-between align-items-center py-2 flex-column flex-md-row">
            <div>
                เราใช้คุกกี้ในการให้บริการและปรับปรุงบริการของเรา
                ตลอดจนเพิ่มประสิทธิภาพให้แก่ประสบการณ์การเรียกดูข้อมูลของคุณ หากคุณใช้งานเว็ปไซต์ของเราต่อ
                ถือว่าคุณยินยอมให้มีการใช้งานคุกกี้ </div>
            <a href="/th/cookies">เรียนรู้เพิ่มเติมที่นี่</a>
            <button id="btn-accept-cookie" type="button"
                class="btn btn-sm bg-green text-white px-3 py-1">ยอมรับ</button>
        </div>
    </div> -->


    <script src="js/jquery-3.5.1.min.js"></script>
    <script defer src="assets/js/popper.min.js" type="text/javascript"></script>


    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="assets/js/swiper.min.js"></script>
    <script defer src="js/anime.min.js" type="text/javascript"></script>
    <script defer src="js/header.js" type="text/javascript"></script>
    <script defer src="js/footer.js" type="text/javascript"></script>


    <!-- Script for home -->
    <script defer src="js/news-and-activities.js" type="text/javascript">
    </script>
    <script defer src="jsresearch.bundle.js" type="text/javascript"></script>
    <script defer src="js/home.js" type="text/javascript"></script>
    <script defer src="js/bus-station.js" type="text/javascript"></script>
    <script defer src="js/hero-banner.js" type="text/javascript"></script>
    <script defer src="js/rellax.min.js" type="text/javascript"></script>
    <script defer src="js/fac-n-cur.bundle.js" type="text/javascript"></script>

    <script defer src="assets/js/aos.js"></script>
    <script>
        (function() {
            window.addEventListener("load", function() {
                setTimeout(function() {
                    //Fix KU letter size problem which distort herobanner display //
                    var target = document.querySelector('.around-uni.bus-station .ku.small');
                    if (target) {
                        target.classList.remove('small');
                    }
                }, 500);

                AOS.init();
            });
        })();
    </script>


    <!-- Modernizr checking webp -->
    <script src="js/modernizr-webp.js" type="text/javascript" defer></script>
    <script>
        (function() {

            window.addEventListener("load", function() {
                const mediaGallery = document.querySelector('.media-gallery-swiper');
                if (mediaGallery) {
                    const mediaGallerySwiper = new Swiper('.media-gallery-swiper', {
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        }
                    });
                }

                setKuFZ();
                //setFeedback();

                setTimeout(function() {
                    //Check webp support//
                    var kuCheckWebpElList = document.querySelectorAll(".ku-check-webp");
                    if (!kuCheckWebpElList.length) {
                        return;
                    }
                    Modernizr.on(
                        "webp",
                        function(result) {
                            var kuIfWebpClass;
                            if (result) {
                                // supported
                                kuIfWebpClass = "webp";
                            } else {
                                // not-supported
                                kuIfWebpClass = "no-webp";
                            }
                            for (var i = 0; i < kuCheckWebpElList.length; i++) {
                                kuCheckWebpElList[i].classList.add(kuIfWebpClass);
                            }
                        }
                    );
                }, 500);

            });
        })();

        $(document).ready(function() {
            $('.set-ku-fz').click(function() {
                $('.set-ku-fz').removeClass('active');
                $(this).addClass('active');
                $('html').removeClass('ku-fz-sm ku-fz-md ku-fz-lg');
                $('html').addClass($(this).attr('name'));
                localStorage.setItem("ku-fz", $(this).attr('name'));
            });

            var input = document.getElementById("header-search-input");
            if (input) {
                input.addEventListener("keyup", function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        location.href = '/th/search?keySearch=' + encodeURIComponent(input.value);
                    }
                });
            }

            checkAcceptCookie();
        });

        function setKuFZ() {
            if (localStorage.getItem("ku-fz")) {
                let _kufz = localStorage.getItem("ku-fz");
                $('.set-ku-fz').removeClass('active');
                $('.set-ku-fz[name=' + _kufz + ']').addClass('active');
                $('html').removeClass('ku-fz-sm ku-fz-md ku-fz-lg');
                $('html').addClass(_kufz);
                localStorage.setItem("ku-fz", _kufz);
            } else {
                $('.set-ku-fz').removeClass('active');
                $('.set-ku-fz [name=ku-fz-md]').addClass('active');
                $('html').removeClass('ku-fz-sm ku-fz-md ku-fz-lg');
                $('html').addClass("ku-fz-md");
                localStorage.setItem("ku-fz", "ku-fz-md");
            }

        }

        function checkAcceptCookie() {
            var section = document.querySelector('.cookie-policy');
            if (localStorage.getItem("ku-cookie-accepted")) {
                section.style.display = 'none';
            } else {
                section.style.display = 'flex';
                var button = document.getElementById('btn-accept-cookie');
                button.addEventListener('click', function() {
                    localStorage.setItem("ku-cookie-accepted", 1);
                    section.style.display = 'none';
                });
            }
        }
    </script>

    <!-- <script type="text/javascript">
        (function () {
            var id = "arzokq4xru6xfo2rk1yd6e1l2ro2pmmxhsv";
            var js = document.createElement("script");
            js.setAttribute("type", "text/javascript");
            js.setAttribute("src", "//deploy.mopinion.com/js/pastease.js");
            document.getElementsByTagName("head")[0].appendChild(js);
            var t = setInterval(function () {
                try {
                    new Pastease.load(id);
                    clearInterval(t)
                } catch (e) {}
            }, 50);
            document.addEventListener('mopinion_will_show', function (e) {
                var iframe = document.getElementById('surveyWindow');
                var idoc = iframe.contentDocument;
                var branding = idoc.getElementById('branding');
                if (branding) {
                    branding.style.display = "none";
                } else {
                    var css = idoc.createElement('style');
                    css.append('#branding {display:none;}');
                    idoc.head.appendChild(css);
                }
            });

        })();
    </script> -->

    <script type="text/javascript">
        var move_marquee;
        var marquee_status;
        var marquee_move;
        var marquee_speed;
        var marquee_step;
        var marquee_direction;
        var newLeft;
        var obj;
        $(function() {

            var divCover_w = $(".containMarquee").width(); // หาความกว้างพื้นที่ส่วนแสดง marquee
            var divMarquee_w = $(".obj_marquee").width(); //หาความกว้างของเนื้อหา marquee
            obj = $(".obj_marquee"); // กำหนดเป็น ตัวแปร jQuery object
            marquee_direction = 1; /* กำหนดการเลื่อนซ้ายขวา 1 = จากขวามาซ้าย 2 = จากซ้ายไปขวา */
            marquee_speed = 25; // กำหนดความเร็วของเวลาในการเคลื่อนที่ ค่ายิ่งมาก จะช้า
            marquee_step = 3; // กำหนดระยะการเคลื่อนที่ ค่ายิ่งมาก จะเร็ว

            obj.css("left", (marquee_direction == 1) ? divCover_w : -divMarquee_w);
            marquee_move = function(obj) {
                marquee_status = setTimeout(function() {
                    move_marquee(obj)
                }, marquee_speed);
            }
            move_marquee = function(obj) {
                var condition_mq = (marquee_direction == 2) ? 'newLeft<divCover_w' : 'newLeft>-divMarquee_w';
                var initLeft = (marquee_direction == 1) ? divCover_w : -divMarquee_w;
                newLeft = (marquee_direction == 1) ?
                    parseInt(obj.css('left')) - marquee_step :
                    parseInt(obj.css('left')) + marquee_step;
                if (eval(condition_mq)) {
                    obj.css({
                        'left': newLeft + 'px'
                    });
                } else {
                    obj.css("left", initLeft);
                }
                marquee_move(obj);
            }
            marquee_move(obj);


            $(".containMarquee").mouseover(function() {
                clearTimeout(marquee_status);
            }).mouseout(function() {
                marquee_move(obj);
            });


        });
    </script>
</body>

</html>