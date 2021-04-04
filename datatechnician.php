<?php
include_once 'headertech.php';
include_once 'functiontech.php';
?>
<!-- Header-->
<!-- สร้าง session ขึ้นมาเพื่อรับ alert -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ข้อมูลช่าง</h1>
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
                                <strong>ข้อมูลช่าง</strong>
                                <!-- <small> Small Text Mask</small> -->
                            </div>
                            <div class="card-body card-block">
                                <form name="formForUpdate" action="function.php" method="POST" enctype="multipart/form-data">
                                <?php
                                  if(isset($_GET['iden'])){
                                    $iden = $_GET['iden'];
                                    $sql = "SELECT technician_id FROM technician WHERE technician_iden = '$iden'";
                                    $result = $mysqli->query($sql);
                            
                                    while ($rowCount = $result->fetch_assoc()) {
                                        $key = $rowCount['technician_id'];
                                    }

                                    $sqlEdit = "SELECT * FROM technician LEFT JOIN Iden_Train ON technician.technician_id = Iden_Train.iden WHERE technician.technician_id = '$key' GROUP BY technician_id ";
                                    $resultEdit = $mysqli->query($sqlEdit);

                                    $sqlEdit2 = "SELECT train FROM technician LEFT JOIN Iden_Train ON technician.technician_id = Iden_Train.iden WHERE technician.technician_id = '$key'";
                                    $resultEdit2 = $mysqli->query($sqlEdit2);
                                    $train = array();
                                    while  ($rowEdit2 = $resultEdit2->fetch_assoc()){
                                        
                                        array_push($train,$rowEdit2['train']);
                                    }

                                    $trainings = '';
                                    foreach ($train as $training) {
                                        if (isset($training) && !empty($training)) {
                                            if ($t > 0) {
                                                $trainings = $trainings . ',';
                                            }
                                            $trainings = $trainings . $training;
                                            $t++;
                                        }
                                    }

                                    // print_r($trainings);
                                            
                                    while  ($rowEdit = $resultEdit->fetch_assoc()){ 
                                        
                                ?>
                                <small>ข้อมูลส่วนตัว</small>
                                <hr>
                                <div class="form-group col-md-4">
                                        <img id="showImage" class="img-responsive" src="uploads/technician/<?=  $rowEdit['img'] ?>" width="290" height="210"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">รูปช่าง</label>
                                    <div class="input-group">
                                        <input type="file" name="img" id="img">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">รหัสบัตรประชาชน</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                                        <input class="form-control" id="iden" name="iden" type="text" max="13" min="13" value="<?= $rowEdit['technician_iden'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ชื่อ</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" id="fname" name="fname" type="text" value ="<?= $rowEdit['technician_first_name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">นามสกุล</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                        <input class="form-control" id="lname" name="lname" type="text" value ="<?= $rowEdit['technician_last_name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">วัน/เดือน/ปีเกิด</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>   
                                        <input class="form-control inputDateEdit" id="inputDate" name="inputDate" value="<?php
                                         $inputDate1 = DateTime::createFromFormat('Y-m-d', $rowEdit['technician_birthday'])->format('d/m/Y');
                                         $AA=substr($inputDate1,0,6);
                                         $BB=substr($inputDate1,6,4);
                                            $CC=$BB+543;
                                        $XX="$AA$CC";
                                        //  $inputDate = date("d/m/Y", strtotime("+543 year", strtotime($inputDate1)));
                                         echo $XX;
                                         ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">เพศ</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-venus-mars"></i></div>
                                        <select class="form-control" id="sex" name="sex">
                                            <option value="">เลือกเพศ</option>
                                            <option value="1" <?= $rowEdit['technician_sex'] == 1 ? 'selected' : '' ?>>ชาย</option>
                                            <option value="0" <?= $rowEdit['technician_sex'] == 0 ? 'selected' : '' ?>>หญิง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ที่อยู่</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="address" name="address" row=""><?= $rowEdit['technician_address'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ตำบล / แขวง</label>
                                    <input type="text" class="form-control" id="district" name="district" value = "<?= $rowEdit['district'] ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">อำเภอ / เขต</label>
                                    <input type="text" class="form-control" id="amphoe" name="amphoe" value = "<?= $rowEdit['amphoe'] ?>">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">จังหวัด</label>
                                    <input type="text" class="form-control" id="province" name="province" value = "<?= $rowEdit['province'] ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" value = "<?= $rowEdit['zipcode'] ?>">
                                </div>
                                <div class="clearfix"></div>
                                <small>ข้อมูลติดต่อ</small>
                                <hr>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">เบอร์โทรศัพท์</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" id="phone" name="phone" value="<?= $rowEdit['technician_phone'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">เบอร์โทรศัพท์ สำรอง</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" id="phone2" name="phone2" value="<?= $rowEdit['technician_phone2'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">Line</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-line"></i></div>
                                        <input class="form-control" id="line" name="line" value = "<?= $rowEdit['line'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-facebook-f"></i></div>
                                        <input class="form-control" id="facebook" name="facebook" value = "<?= $rowEdit['line'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ทักษะของช่าง</label>
                                    <div class="input-group">
                                        <select  data-placeholder="เลือกทักษะ..." multiple="multiple" tabindex="1" id="skill" name="skill[]" class="standardSelect">
                                             <option value=" "></option>
                                            <?php 
                                            $sqlSkill = "SELECT * FROM `skill` ORDER BY skill_name ASC ";
                                            $result = $mysqli->query($sqlSkill);

                                            $skillId = explode( ',', $rowEdit['skill_id']);
                                            while  ($row = $result->fetch_assoc()){ 
                                                ?>
                                                <option value="<?= $row['skill_id']; ?>" <?php 
                                                for($sk = 0 ; $sk < count($skillId) ; $sk++ ){
                                                    echo (string)$row['skill_id'] == $skillId[$sk] ? 'selected' : '' ;
                                                }
                                                ?> ><?= $row['skill_name']; ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group col-md-4">
                                    <label class=" form-control-label">สังกัด</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="far fa-building"></i></div>
                                        <input class="form-control" id="affiliation" name="affiliation" value = "<?= $rowEdit['affiliation'] ?>">
                                    </div>
                                </div> -->
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">สังกัด</label>
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input" onclick="disableBtn()">ช่างอิสระ
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="ช่างอิสระ" class="form-check-input" onclick="enableBtn()">สังกัดร้าน
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="far fa-building"></i></div>
                                        <input class="form-control" id="affiliation" name="affiliation" value = "<?= $rowEdit['affiliation'] ?>" onclick="enableckb()">
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php include 'footertech.php';?>