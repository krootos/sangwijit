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
                        <h1>การอบรม</h1>
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
                                <strong>การอบรม</strong>
                                <!-- <small> Small Text Mask</small> -->
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group col-md-12">
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <form action="function.php" method="POST">
                                            <div class="input-group">
                                                <input value="searchTraning" name="getToFunction" hidden>
                                                <input type="text" id="search" name="search" placeholder="หัวข้อการอบรม, สถานที่" class="form-control">
                                                <div class="input-group-btn"><button class="btn btn-primary"  onclick="validateScarch()">ค้นหา</button></div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php 

                                    if(isset($_SESSION['searchTraning'])){

                                        $search = $_SESSION['searchTraning'];


                                         $sqlSearch = "SELECT trainning_id,trainning_name, location, date, timeStrat, timeEnd  FROM `trainning` 
                                         WHERE 
                                            trainning_name LIKE '%$search%'
                                         OR
                                            location LIKE '%$search%'
                                         ORDER BY 
                                            trainning_name 
                                         LIMIT
                                             6
                                        ";

// print_r($sqlSearch);

                                        $result = $mysqli->query($sqlSearch);

                                        while  ($row = $result->fetch_assoc()){ 
                                           $dateTrani1 =  DateTime::createFromFormat('Y-m-d', $row['date'])->format('d/m/Y');
                                           $AA=substr($dateTrani1,0,6);
                                           $BB=substr($dateTrani1,6,4);
                                              $CC=$BB+543;
                                          $dateTrani="$AA$CC";


                                           $start =  date ('H:i',strtotime($row['timeStrat']));
                                           $end =  date ('H:i',strtotime($row['timeEnd']));

                                            echo '
                                            <div class="col-md-6">
                                            <div class="card">  
                                                <div class="card-body">
                                                    <div class="clearfix">
                                                        <div class="h5 text-secondary mb-0 mt-1">'.$row['trainning_name'].'</div>
                                                        <div class=" text-secondary mb-0 mt-1"> สถานที่ : '.$row['location'].'</div>
                                                        <div class=" text-secondary mb-0 mt-1"> วันที่ : '.$dateTrani.'</div>
                                                        <div class=" text-secondary mb-0 mt-1"> เวลา : '.$start.' - '.$end.'</div>
                                                    </div>
                                                    <hr>
                                                    <div class="more-info" style="margin-bottom:-10px;">
                                                        <a class="font-weight-bold font-xs btn-block text-muted small" href="function.php?idTrainning='.$row['trainning_id'].'" >ดูข้อมูล <i class="fa fa-angle-right float-right font-lg"></i></a>
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