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
        <h1>ค้นหาผู้อบรม</h1>
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
            <strong class="card-title">จัดการผู้อบรม</strong>
            <form action="function.php" method="POST">
              <input id="optionTranUser" value="canceleditTrainningUser" name="getToFunction" hidden>
              <button type="submit"  class="btn btn-danger btn-sm pull-right">
              กลับ
            </button>
            </form>
          </div>
          <div class="card-body">
            <div class="col-md-12">
            <?php 

if(isset($_SESSION['editTrainningUser'])){

    $search = $_SESSION['editTrainningUser'];


     $sqlSearch = "SELECT trainning_id,trainning_name, location, date, timeStrat, timeEnd  FROM `trainning` 
     WHERE 
     trainning_id = '$search'
     ORDER BY 
      trainning_id 
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

                    <div class="h5  mb-0 mt-1 ">'.$row['trainning_name'].'</div>
                    <div class="h6  mb-0 mt-1 pull-right"> วันที่ : '.$dateTrani.' เวลา : '.$start.' - '.$end.' น. </div>
                    <div class="h6  mb-0 mt-1 "> สถานที่ : '.$row['location'].'</div>
                    <br/><br/>
               ';
    }
}?>
            </div>
            <div class="clearfix"></div>
            

            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ชื่อ - นามสกุล</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ทักษะ</th>
                  <th>สังกัด</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
              <?php

if (isset($_SESSION['editTrainningUser'])) {

    $idTran = $_SESSION['editTrainningUser'];
    
    $sqlTraining = "SELECT 
                      technician_id,
                      technician_first_name, 
                      technician_last_name, 
                      technician_phone, 
                      technician_phone2, 
                      skill_id, 
                      affiliation 
                    FROM 
                      technician 
                    ";

    // print_r($sqlTraining);
    $result = $mysqli->query($sqlTraining);

    while ($row1 = $result->fetch_assoc()) {
      // print_r($row1);

        $phone2 =  $row1['technician_phone2'] == 0 ? "" : ", ".$row1['technician_phone2'] ;
        $skillId = $row1['skill_id'];

        $sqlTSkill = "SELECT * FROM `skill` WHERE skill_id IN ($skillId)";
        $resultSkill = $mysqli->query($sqlTSkill);

        $strSkill = '';
        $i = 0;

        if(isset($resultSkill) && !empty($resultSkill)){
        while ($row2 = $resultSkill->fetch_assoc()) {
          if($i > 0){
            $strSkill = $strSkill.',';
          }
          $strSkill = $strSkill.$row2['skill_name'];
          $i++;
        }
      }

        // print_r($strSkill);

        echo '<tr>
                  <td>' . $row1['technician_first_name'] . ' '. $row1['technician_last_name'].'</td>
                  <td>' . $row1['technician_phone'] . ''.  $phone2 .'</td>
                  <td>' . $strSkill . '</td>
                  <td>' . $row1['affiliation'] . '</td>
                  <td>
                  ';


                    // $idTran = $_SESSION['editTrainningUser'];
                    $technicianid = $row1['technician_id'];

                    $sqltechnicianid = "SELECT 
                                      train
                                    FROM 
                                      Iden_Train 
                                    WHERE
                                      iden = '$technicianid'
                                      ";
                
                    // print_r($sqlTraining);
                    $result1 = $mysqli->query($sqltechnicianid);

                    $haveTran = array();
                    while ($rowTechnicianid = $result1->fetch_assoc()) {
                      array_push($haveTran, $rowTechnicianid['train']);
                    }
                    // $haveTran

                    // $idTran
                    // print_r();


                    if(!in_array($idTran, $haveTran)){
                      echo'
                      <form name="optionSkill" action="function.php" method="POST">
                      <input id="optionTranUser" value="addtechnicianTran" name="getToFunction" hidden>
                      <input value="'.$idTran.'" id="traningId" name="traningId" hidden>
                      <input value="'.$technicianid.'" id="techId" name="techId" hidden>
                      <button type="submit" class="btn btn-primary btn-sm" onclick="addtechnicianTran()">
                        เพิ่ม
                      </button>
                      
                      ';
                    }else{
                      echo'
                      <form name="optionSkill" action="function.php" method="POST">
                      <input id="optionTranUser" value="canceltechnicianTran" name="getToFunction" hidden>
                      <input value="'.$idTran.'" id="traningId" name="traningId" hidden>
                      <input value="'.$technicianid.'" id="techId" name="techId" hidden>
                      <button type="submit"  class="btn btn-danger btn-sm" onclick="canceltechnicianTran()">
                        ยกเลิก
                      </button>
                      
                      ';
                    }
                    echo '</form>
                  
              </td>
                </tr>';
    }
}
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">ผู้เข้าอบรม</strong>
          </div>
          <div class="card-body">
            <div class="col-md-12">
            </div>
            <div class="clearfix"></div>
            

            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ชื่อ - นามสกุล</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ทักษะ</th>
                  <th>สังกัด</th>
                </tr>
              </thead>
              <tbody>
              <?php

if (isset($_SESSION['editTrainningUser'])) {

    // $idTran = $_SESSION['editTrainningUser'];
    
   
    //เช็คว่ามีใครบ้างที่เข้าแล้ว
    $sqlTraining1 = "SELECT 
                      technician_first_name, 
                      technician_last_name, 
                      technician_phone, 
                      technician_phone2, 
                      skill_id, 
                      affiliation 
                    FROM 
                      technician 
                    WHERE 
                      technician_id 
                    IN 
                      (
                        SELECT 
                          iden 
                        FROM 
                          `Iden_Train` 
                        WHERE 
                          train = '$idTran' 
                        GROUP BY 
                        iden
                      ) ";

    
    $result1 = $mysqli->query($sqlTraining1);
    // print_r($result1);
    while ($row11 = $result1->fetch_assoc()) {
      // print_r($row1);

        $phone21 =  $row11['technician_phone2'] == 0 ? "" : ", ".$row11['technician_phone2'] ;
        $skillId1 = $row11['skill_id'];

        $sqlTSkill1 = "SELECT * FROM `skill` WHERE skill_id IN ($skillId1)";
        $resultSkill1 = $mysqli->query($sqlTSkill1);

        $strSkill1 = '';
        $i1 = 0;

        if(isset($resultSkill1) && !empty($resultSkill1)){
        while ($row21 = $resultSkill1->fetch_assoc()) {
          if($i1 > 0){
            $strSkill1 = $strSkill1.',';
          }
          $strSkill1 = $strSkill1.$row21['skill_name'];
          $i1++;
        }
      }

        // print_r($strSkill);

        echo '<tr>
                  <td>' . $row11['technician_first_name'] . ' '. $row11['technician_last_name'].'</td>
                  <td>' . $row11['technician_phone'] . ''.  $phone21 .'</td>
                  <td>' . $strSkill1 . '</td>
                  <td>' . $row11['affiliation'] . '</td>
                </tr>';
    }
}
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div><!-- .animated -->
</div><!-- .content -->

<?php include 'footer.php';?>