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
                        <h1>เพิ่มช่าง</h1>
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
                                <strong>เพิ่มช่าง</strong>
                                <!-- <small> Small Text Mask</small> -->
                            </div>
                            <div class="card-body card-block">
                                <small>ข้อมูลส่วนตัว</small>
                                <hr>
                                <form action="function.php" method="POST" enctype="multipart/form-data">
                                <input value="addtechnician" name="getToFunction" hidden>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">รหัสบัตรประชาชน</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                                        <input class="form-control" id="iden" name="iden" type="text" max="13" min="13" onkeyup="scriptCheckIden(this.value.length)">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ชื่อ</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" id="fname" name="fname" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">นามสกุล</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                        <input class="form-control" id="lname" name="lname" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">วัน/เดือน/ปีเกิด</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control inputDate" id="inputDate" name="inputDate">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">เพศ</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-venus-mars"></i></div>
                                        <select class="form-control" id="sex" name="sex">
                                            <option value="">เลือกเพศ</option>
                                            <option value="1">ชาย</option>
                                            <option value="0">หญิง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ที่อยู่</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="address" name="address" row=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ตำบล / แขวง</label>
                                    <input type="text" class="form-control" id="district" name="district" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">อำเภอ / เขต</label>
                                    <input type="text" class="form-control" id="amphoe" name="amphoe" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">จังหวัด</label>
                                    <input type="text" class="form-control" id="province" name="province" >
                                </div>
                                <div class="form-group col-md-5">
                                    <label class=" form-control-label">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" >
                                </div>
                                <div class="form-group col-md-7">
                                    <label class=" form-control-label">รูปช่าง</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control-file" name="InputFileImg" id="InputFileImg" aria-describedby="fileHelp"> 
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                              
                                <small>ข้อมูลติดต่อ</small>
                                <hr>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">เบอร์โทรศัพท์</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">เบอร์โทรศัพท์ สำรอง</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" id="phone2" name="phone2">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">Line</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-line"></i></div>
                                        <input class="form-control" id="line" name="line">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-facebook-f"></i></div>
                                        <input class="form-control" id="facebook" name="facebook">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" form-control-label">ทักษะของช่าง</label>
                                    <div class="input-group">
                                        <select class="form-control" data-placeholder="เลือกทักษะ..." multiple="multiple" tabindex="1" id="skill" name="skill[]" class="standardSelect">
                                            <option value="" selected>---- เลือกทักษะช่าง ----</option>
                                            <?php 
                                            $sqlSkill = "SELECT * FROM `skill` ORDER BY skill_name ASC ";
                                            $result = $mysqli->query($sqlSkill);
                                            
                                            while  ($row = $result->fetch_assoc()){ 
                                                ?>
                                                <option value="<?= $row['skill_id']; ?>" ><?= $row['skill_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
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
                                        <input class="form-control" id="affiliation" name="affiliation" onclick="enableckb()">
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="validateForm()">
                                        <i class="fa fa-dot-circle-o"></i> บันทึก
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php include 'footer.php';?>