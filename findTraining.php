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
            <strong>ค้นหาผู้อบรม</strong>
            <!-- <small> Small Text Mask</small> -->
          </div>
          <div class="card-body card-block">
            <form action="findTraining.php" method="POST" enctype="multipart/form-data">
            <input value="searchTraning" name="getToFunction" hidden>
              <div class="form-group col-md-12">
                <label class=" form-control-label">หัวข้อการอบรม</label>
                <div class="input-group">
                    <div class="card-body">
                        <select data-placeholder="หัวข้ออบรม..." name="searchTraning" class="standardSelect" tabindex="1">
                            <option value=""></option>
                            <?php
$sqlTraining = "SELECT * FROM `trainning` ";
$result = $mysqli->query($sqlTraining);

while ($row = $result->fetch_assoc()) {
    echo '<option value="' . $row['trainning_id'] . '">' . $row['trainning_name'] . '</option>';
}

?>


                        </select>
                    </div>
                </div>
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> ค้นหา
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">ช่างที่เข้าร่วมการอบรม</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
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

if (isset($_POST['getToFunction'])) {

    $idTran = $_POST['searchTraning'];
    
   

    $sqlTraining = "SELECT 
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
    $result = $mysqli->query($sqlTraining);

    while ($row1 = $result->fetch_assoc()) {
      // print_r($row1);

        $phone2 =  $row1['technician_phone2'] == 0 ? "" : $row1['technician_phone2'] ;
        $skillId = $row1['skill_id'];

        $sqlTSkill = "SELECT * FROM `skill` WHERE skill_id IN ($skillId)";
        $resultSkill = $mysqli->query($sqlTSkill);

        $strSkill = '';
        $i = 0;

        while ($row2 = $resultSkill->fetch_assoc()) {
          if($i > 0){
            $strSkill = $strSkill.',';
          }
          $strSkill = $strSkill.$row2['skill_name'];
          $i++;
        }

        // print_r($strSkill);

        echo '<tr>
                  <td>' . $row1['technician_first_name'] . ' '. $row1['technician_last_name'].'</td>
                  <td>' . $row1['technician_phone'] . ', '.  $phone2 .'</td>
                  <td>' . $strSkill . '</td>
                  <td>' . $row1['affiliation'] . '</td>
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