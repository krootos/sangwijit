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
        <h1>อบรม</h1>
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
            <strong>อบรม</strong>
            <!-- <small> Small Text Mask</small> -->
          </div>
          <div class="card-body card-block">
            <form action="function.php" method="POST" enctype="multipart/form-data">
            <input value="addTraining" name="getToFunction" hidden>
              <div class="form-group col-md-6">
                <label class=" form-control-label">หัวข้อการอบรม</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <input class="form-control" id="nameTraining" name="nameTraining" type="text">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class=" form-control-label">สถานที่</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <input class="form-control" id="nameLocation" name="nameLocation" type="text">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label class=" form-control-label">วันที่อบรม</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  <input class="form-control inputDate" id="DateTraining" name="DateTraining">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label class=" form-control-label">ตั้งแต่เวลา</label>
                 <input type="time"  class="form-control checkTimeStart" id="timeStart" name="timeStart" required="required"/>
              </div>
              <div class="form-group col-md-4">
                <label class=" form-control-label">ถึงเวลา</label>
                  <input type="time"  class="form-control checkTimeStart" id="timeEnd" name="timeEnd" required="required"/>
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm" onclick="validateTrainning()">
                    <i class="fa fa-dot-circle-o"></i> บันทึก
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">รายการ</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>หัวข้อ</th>
                  <th>วันที่</th>
                  <th>สถานที่</th>
                  <th>เวลา</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
              <?php
$sqlTraining = "SELECT * FROM `trainning` ";
$result = $mysqli->query($sqlTraining);

while ($row = $result->fetch_assoc()) {
  $inputDate1 = DateTime::createFromFormat('Y-m-d', $row['date'])->format('d/m/Y');
  $AA=substr($inputDate1,0,6);
  $BB=substr($inputDate1,6,4);
     $CC=$BB+543;
 $XX="$AA$CC";


    echo '<tr>
                  <td>' . $row['trainning_name'] . '</td>
                  <td>' . $XX . '</td>
                  <td>'. $row['location'].'</td>
                  <td>'. date('H:i',strtotime($row['timeStrat'])).' - '.date ('H:i',strtotime($row['timeEnd'])).'</td>
                  <td>
                  <form name="optionTrainning" action="function.php" method="POST">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="editTrainning(' . $row['trainning_id'] . ')">
                    แก้ไข
                    </button>
                    <input id="optionTrainninggetToFunction" value="editTrainning" name="getToFunction" hidden>
                    <input value="' . $row['trainning_id'] . '" id="idTrainning" name="idTrainning" hidden>
                    <button type="submit"  class="btn btn-danger btn-sm" onclick="deleteTrainning(' . $row['trainning_id'] . ')">
                    ลบ
                    </button>
                    </form>
                  </td>
                </tr>';
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