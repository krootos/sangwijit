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
        <h1>แก้ไขอบรม</h1>
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
            <strong>แก้ไขอบรม</strong>
            <!-- <small> Small Text Mask</small> -->
          </div>
          <div class="card-body card-block">
            <form action="function.php" method="POST" enctype="multipart/form-data">
            <?php
$name = '';
$date = '';
$idUpdateTraining = '';

if (isset($_SESSION['idEditTrainning']) && !empty($_SESSION['idEditTrainning'])) {

    $idEdit = $_SESSION['idEditTrainning'];
    $sqlUpdateTraining = "SELECT * FROM `trainning` WHERE trainning_id = '$idEdit' ";
    $resultUpdate = $mysqli->query($sqlUpdateTraining);

    while ($resultUpdateTraining = $resultUpdate->fetch_assoc()) {
        $idUpdateTraining = $resultUpdateTraining['trainning_id'];
        $name = $resultUpdateTraining['trainning_name'];
        $date1 = DateTime::createFromFormat('Y-m-d', $resultUpdateTraining['date'])->format('d/m/Y');
        $AA=substr($date1,0,6);
        $BB=substr($date1,6,4);
           $CC=$BB+543;
            $date="$AA$CC";
        // echo $XX;
        $location =  $resultUpdateTraining['location'];
        $stratTime = $resultUpdateTraining['timeStrat'];
        $endTime = $resultUpdateTraining['timeEnd'];

?>
              <input value="updateTraining" id="updateTrainning" name="getToFunction" hidden>
              <div class="form-group col-md-6">
                <label class=" form-control-label">ชื่ออบรม</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <input class="form-control" id="nameTraining" name="nameTraining" value="<?=isset($name) ? $name : ''?>" type="text">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class=" form-control-label">สถานที่</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <input class="form-control" id="nameLocation" name="nameLocation" type="text" value="<?=isset($location) ? $location : ''?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label class=" form-control-label">วันที่อบรม</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  <input class="form-control inputDateEdit" id="DateTraining" name="DateTraining" value="<?=isset($date) ? $date : ''?>">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label class=" form-control-label">ตั้งแต่เวลา</label>
                  <input type="time" pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" class="form-control checkTimeStart" id="timeStart" name="timeStart" value="<?=isset($stratTime) ? $stratTime : ''?>" />
              </div>
              <div class="form-group col-md-4">
                <label class=" form-control-label">ถึงเวลา</label>
                  <input type="time" pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" class="form-control checkTimeStart" id="timeEnd" name="timeEnd"  value="<?=isset($endTime) ? $endTime : ''?>"/>
              </div>
              <div class="pull-right">

                      <button type="submit" class="btn btn-primary btn-sm" onclick="updateTrainning('<?=$idUpdateTraining ?>')">
                        <i class="fa fa-dot-circle-o"></i> แก้ไข
                      </button>
                      <input value="<?=$idUpdateTraining ?>" id="idUpdateTrainning" name="idUpdateTrainning" hidden>
                      <button type="submit" class="btn btn-danger btn-sm" onclick="cancelTrainning()">
                        <i class="fa fa-dot-circle-o"></i> ยกเลิก
                      </button>
              </div>
              <?php
 }

}else{
  return header("Location: training.php");
}
?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->

<?php include 'footer.php';?>