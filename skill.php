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
        <h1>ทักษะช่าง</h1>
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
            <strong>ทักษะช่าง</strong>
            <!-- <small> Small Text Mask</small> -->
          </div>
          <div class="card-body card-block">
            <form action="function.php" method="POST" enctype="multipart/form-data">
            <input value="addSkill" name="getToFunction" hidden>
              <div class="form-group col-md-12">
                <label class=" form-control-label">ชื่อทักษะช่าง</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <input class="form-control" id="nameSkill" name="nameSkill" type="text">
                </div>
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm" onclick="validateSkill()">
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
                  <th>ทักษะช่าง</th>
                  <th>ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $sqlTraining = "SELECT * FROM `skill` ";
                $result = $mysqli->query($sqlTraining);
                
                while  ($row = $result->fetch_assoc()){ 
                
                echo'<tr>
                  <td>'.$row['skill_name'].'</td>
                  <td>
                  <form name="optionSkill" action="function.php" method="POST">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="editSkill('.$row['skill_id'].')">
                    แก้ไข
                    </button>
                    <input id="optionSkillgetToFunction" value="editSkill" name="getToFunction" hidden>
                    <input value="'.$row['skill_id'].'" id="idSkill" name="idSkill" hidden>
                    <button type="submit"  class="btn btn-danger btn-sm" onclick="deleteSkill('.$row['skill_id'].')">
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