<?php
include('config/cekpegawai.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Halaman Pegawai</title>
    <!-- Favicon-->
    <link rel="icon" href="mts.png" type="image/x-icon" />
    <!--<link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
     <!-- Bootstrap Select Css -->
    <link href="asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="asset/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="asset/plugins/animate-css/animate.css" rel="stylesheet" />
     <!-- Range Slider Css -->
    <link href="asset/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="asset/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" />
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
    <!-- JQuery DataTable Css -->
    <link href="asset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="asset/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="icon" href="mts.png" type="image/x-icon" />

</head>
<body class="theme-red">    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
               <!-- <a class="navbar-brand" href=""><img src="asset/images/logo.png" class="img-responsive"></a> -->
               <a class="navbar-brand" href="" style="font-family: FZShuTi;"> <b style="font-family: FZShuTi; font-size: 39px;">SIPEG </b><b>SMK EI Bukittinggi</b> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="#"> <b> <?php echo date (" d F Y") ?></b></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
           <!-- User Info -->
            <div class="user-info">
                <div class="image">
                 <br>
                 <?php
                $img = $_SESSION['img'];
                ?>
                 <img src="asset/images/user/<?php echo $_SESSION['img']; ?>" width="68" height="68" alt="user" style="
                    border: 3px solid silver;
                    border-radius: 100%;">
                    <?php echo "<b style='color:white; font-size:19px; font-family:FZShuTi;'>". $_SESSION['nama']."</b>"; ?>
                </div>


                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color: white;" data-toggle="tooltip" data-placement="top" title="Klik Disini Untuk Keluar !! ">keyboard_arrow_down</i>

                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>                           
                            <li role="seperator" class="divider"></li>
                            <li><a onclick="return confirm('Yakin ingin Keluar ??')" href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>

                        </ul> <br>
                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo "<b style='color:white; font-family:FZShuTi;'>". $_SESSION['level']."</b>"; ?><br>
                    <!-- <div class="email"><b style="color: white;">Administrator</b></div>-->

            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                     
                    <li class="header">MENU UTAMA</li>
                    <li class="active">
                        <a href="pegawai.php">
                            <i class="material-icons">dashboard</i>
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                         <a class="menu-toggle" style="color: black">
                            <i class="material-icons" style="color: black">assignment</i>
                            <span style="color: black">Data Master</span>
                        </a>
                        <ul class="ml-menu">                            
                            <li>
                                <a href="?page=admin&action=addpeg">
                                <i class="material-icons">note_add</i><span>Input Pegawai</span></a>
                            </li>                            
                    </li> 
                        </ul>
                        <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">people</i>
                            <span style="color: black">Kepegawaian</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                 <a href="?page=admin&action=pegawai">
                                <i class="material-icons">book</i><span>Data Pegawai</span></a>
                            </li> 
                            <li>
                                <a href="?page=admin&action=ppdk">
                                <i class="material-icons">school</i><span>Data Pendidikan </span></a>
                            </li> 
                            <li>
                                <a href="?page=admin&action=diklat">
                                <i class="material-icons">assistant</i><span>Data Diklat </span></a>
                            </li>                        
                        </ul>
                    </li>
                    
                    <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">insert_chart</i>
                            <span style="color: black">Grafik</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?page=guru&action=grafik"><i class="material-icons">pie_chart</i><span> Pegawai</span></a>
                            </li>
                            <li>
                                <a href="?page=guru&action=grafik_guru"> <i class="material-icons"> insert_chart</i><span> Guru</span></a>
                            </li>
                            <li>
                                <a href="?page=guru&action=grafik1"> <i class="material-icons">bubble_chart</i><span> Jabatan</span></a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">print</i>
                            <span style="color: black">Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a style="color: black" href="?page=admin&action=lapeg"><i class="material-icons">content_copy</i><span>Laporan Pegawai</span></a>
                            </li>
                          
                        </ul>
                    </li>                   
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->

            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="yaminbae.blogspot.com">AbduL Yamin | 2513001</a>.
                </div>
                <div class="version">
                    <b>SIPEG SMK EI Bukittinggi </b>
                </div>
            </div>

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>
<section class="content">
    <div class="container-fluid">
    <?php
        $page = @$_GET['page'];
        $action = @$_GET['action'];
        if ($page == "admin") {
        if ($action=="") {
        include "page/user/input_user.php";
        }elseif ($action=="pegawai") {
        include "page/Pegawai/+pegawai.php";
        }elseif ($action=="hapus_peg") {
        include "page/Pegawai/del_peg.php";
        }elseif ($action=="addpeg") {
        include "page/Pegawai/addpegawai.php";
        }elseif ($action=="lembaga") {
        include "page/Pegawai/+lembaga.php";
        }elseif ($action=="edit_peg") {
        include "page/Pegawai/edit_peg.php";
        }elseif ($action=="lapeg") {
        include 'Laporan/laporan_pegawai.php';
        }elseif ($action==".detail"){
        include 'page/Pegawai/.detail_pegawai.php';
        }elseif ($action=="ppdk") {
        include 'page/Pegawai/+pendidikan.php';
        }elseif ($action=="diklat") {
        include 'page/Pegawai/+pelatihan.php';
        }
        } elseif ($page == "guru"){
        if ($action==""){
        include"page/Guru/view_guru.php";
        }else if ($action=="grafik") {
        include 'page/Grafik/pegawai.php';
        }else if ($action=="grafik1") {
        include 'page/Grafik/grafik1.php';
        }else if ($action=="grafik_guru") {
        include 'page/Grafik/guru.php';
        }
        } elseif ($page == "") {
        include"page/peg_dashboard.php";
        } else{
        include '404.php';
        }
    ?>
    </div>
</section>
    




    <!-- Jquery Core Js -->
    <script src="asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="asset/plugins/bootstrap/js/bootstrap.js"></script>
    

    <!-- Select Plugin Js -->
    <script src="asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="asset/plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <!-- Waves Effect Plugin Js -->
    <script src="asset/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="asset/plugins/autosize/autosize.js"></script>
      <!-- JQuery Steps Plugin Js -->
    <script src="asset/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Moment Plugin Js -->
    <script src="asset/plugins/momentjs/moment.js"></script>


     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
     <!-- Select Plugin Js -->
    <script src="asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>
     <!-- RangeSlider Plugin Js -->
    <script src="asset/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
   

    <!-- Custom Js -->
    <script src="asset/js/admin.js"></script>   
     <script src="asset/js/pages/ui/range-sliders.js"></script>

    <script src="asset/js/pages/tables/jquery-datatable.js"></script>
    <script src="asset/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="asset/js/demo.js"></script>
    <script type="text/javascript">
        $(function () {
         $("#yamin_01").ionRangeSlider();
          $("#yamin_02").ionRangeSlider();
         });
    </script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#date').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#time').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'dddd DD MMMM YYYY - HH:mm'
            });
            $('#date-fr').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1, 
                cancelText : 'ANNULER',
                nowButton : true,
                switchOnClick : true
            });

            $('#date-end').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm'
            });
            $('#date-start').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
            }).on('change', function(e, date)
            {
                $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
            });

            $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

            $.material.init()
        });
        </script>
        
         
</body>

</html>