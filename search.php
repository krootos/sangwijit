<?php
include_once 'header.php';
include_once 'function.php';
?>
<!-- Header-->
<!-- สร้าง session ขึ้นมาเพื่อรับ alert -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ค้นหาช่าง</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>ค้นหาช่าง</strong>
                                <!-- <small> Small Text Mask</small> -->
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group col-md-12">
                                    <label class=" form-control-label">ค้นหา</label>
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <form action="function.php" method="POST">
                                            <div class="input-group">
                                                <input value="searchtechnician" name="getToFunction" hidden>
                                                <input type="text" id="search" name="search" placeholder="ชื่อ,รหัสบัตรประชาชน,เบอร์โทรศัพท์" class="form-control">
                                                <div class="input-group-btn"><button class="btn btn-primary"  onclick="validateScarch()">ค้นหา</button></div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php 

                                    if(isset($_SESSION['searchtechnician'])){

                                        $search = $_SESSION['searchtechnician'];


                                         $sqlSearch = "SELECT technician_id, technician_first_name, technician_last_name, technician_phone  FROM `technician` 
                                         WHERE 
                                             technician_first_name LIKE '%$search%'
                                         OR
                                             technician_last_name LIKE '%$search%'
                                         OR
                                             technician_phone LIKE '%$search%'
                                         OR 
                                            technician_iden LIKE '%$search%'
                                         ORDER BY 
                                             technician_first_name 
                                         LIMIT
                                             6
                                        ";
                                        $result = $mysqli->query($sqlSearch);

                                        while  ($row = $result->fetch_assoc()){ 
                                            echo '
                                            <div class="col-md-6">
                                            <div class="card">  
                                                <div class="card-body">
                                                    <div class="clearfix">
                                                        <div class="h4 mb-0 mt-1">'.$row['technician_first_name'].'  '.$row['technician_last_name'].'</div>
                                                        <div class="h6 mb-0 mt-1">'.$row['technician_phone'].'</div>
                                                    </div>
                                                    <hr>
                                                    <div class="more-info" style="margin-bottom:-10px;">
                                                        <a class="font-weight-bold font-xs btn-block text-muted small" href="function.php?id='.$row['technician_id'].'" >ดูข้อมูล <i class="fa fa-angle-right float-right font-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php include 'footer.php';?>