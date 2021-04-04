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
        <h1>แก้ไขทักษะช่าง</h1>
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
            <strong>แก้ไขทักษะช่าง</strong>
            <!-- <small> Small Text Mask</small> -->
          </div>
          <div class="card-body card-block">
            <form action="function.php" method="POST" enctype="multipart/form-data">
            <?php
$name = '';
$idUpdateSkill = '';

if (isset($_SESSION['idEditSkill']) && !empty($_SESSION['idEditSkill'])) {

    $idEdit = $_SESSION['idEditSkill'];
    $sqlUpdateSkill = "SELECT * FROM `skill` WHERE skill_id = '$idEdit' ";
    $resultUpdate = $mysqli->query($sqlUpdateSkill);

    

    while ($resultUpdateSkill = $resultUpdate->fetch_assoc()) {
        $idUpdateSkill = $resultUpdateSkill['skill_id'];
        $name = $resultUpdateSkill['skill_name'];

?>
              <input value="updateSkill" id="updateSkill" name="getToFunction" hidden>
              <div class="form-group col-md-12">
                <label class=" form-control-label">ชื่อทักษะช่าง</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <input class="form-control" id="nameSkill" name="nameSkill" value="<?=isset($name) ? $name : ''?>" type="text">
                </div>
              </div>
              <div class="pull-right">

                      <button type="submit" class="btn btn-primary btn-sm" onclick="updateSkill('<?=$idUpdateSkill ?>')">
                        <i class="fa fa-dot-circle-o"></i> แก้ไข
                      </button>
                      <input value="<?=$idUpdateSkill ?>" id="idUpdateSkill" name="idUpdateSkill" hidden>
                      <button type="submit" class="btn btn-danger btn-sm" onclick="cancelSkill()">
                        <i class="fa fa-dot-circle-o"></i> ยกเลิก
                      </button>
              </div>
              <?php
 }

}else{
  return header("Location: skill.php");
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