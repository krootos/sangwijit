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
                <h1>เพิ่มงาน</h1>
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
                        <strong>เพิ่มงาน</strong>
                    </div>


                    <div class="card-body card-block">
                        <small>ข้อมูลลูกค้า</small>
                        <small>ข้อมูลลูกค้าหดหดหฆโำดำดโ</small>
                        <hr>


                        <form action="function.php" method="POST" enctype="multipart/form-data">
                            <input value="addJob" name="getToFunction" hidden>

                            <div class="form-group col-md-4">
                                <label class=" form-control-label">ชื่อลูกค้า</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                    <input class="form-control" id="fname" name="fname" type="text">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">นามสกุลลูกค้า</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                    <input class="form-control" id="lname" name="lname" type="text">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">เบอร์โทรศัพท์</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-mobile-phone"></i></div>
                                    <input class="form-control" id="cusTel" name="cusTel" type="text">
                                </div>
                            </div>



                            <div class="form-group col-md-4">
                                <label class=" form-control-label">ที่อยู่</label>
                                <div class="input-group">
                                    <input class="form-control" id="address" name="address"></input>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">ตำบล / แขวง</label>
                                <input type="text" class="form-control" id="district" name="district">
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">อำเภอ / เขต</label>
                                <input type="text" class="form-control" id="amphoe" name="amphoe">
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">จังหวัด</label>
                                <input type="text" class="form-control" id="province" name="province">
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode">
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">พิกัด (ละติจูด)</label>
                                <input type="text" class="form-control" id="latitude" name="latitude">
                            </div>
                            <div class="form-group col-md-4">
                                <label class=" form-control-label">พิกัด (ลองติจูด)</label>
                                <input type="text" class="form-control" id="longtitude" name="longtitude">
                            </div>

                            <div class="clearfix"></div>

                            <small>ข้อมูลช่าง</small>
                            <hr>
                            <div class="form-group col-md-6">
                                <label class=" form-control-label">เลขที่ Job</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                                    <input class="form-control" id="jobNo" name="jobNo" type="text" max="13" min="13" onkeyup="scriptCheckIden(this.value.length)">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" form-control-label">S/N</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                                    <input class="form-control" id="snJob" name="snJob" type="text" max="13" min="13" onkeyup="scriptCheckIden(this.value.length)">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" form-control-label">ช่างผู้ปฏิบัติงาน</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                    <input class="form-control" id="technicianName" name="technicianName">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" form-control-label">เบอร์โทรศัพท์</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input class="form-control" id="technicianTel" name="technicianTel">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" form-control-label">วันที่ให้บริการ</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input class="form-control inputDate" id="inputDate" name="inputDate">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" form-control-label">สถานะการให้บริการ</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-handshake-o"></i></div>
                                    <select class="form-control" id="service_status" name="service_status">
                                        <option value="">เลือกสถานะ</option>
                                        <option value="เสร็จแล้ว">เสร็จแล้ว</option>
                                        <option value="รออะไหล่">รออะไหล่</option>
                                        <option value="ยกเลิก">ยกเลิก (กรณีติดต่อลูกค้าไม่ได้)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" form-control-label">ประเภทงาน</label>
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input" onclick="disableBtn()">งานติดตั้ง
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="'งานซ่อม'" class="form-check-input" onclick="enableBtn()">งานซ่อม (ระบุรายละเอียด)
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="far fa-building"></i></div>
                                    <input class="form-control" id="affiliation" name="affiliation" onclick="enableckb()">
                                </div>
                            </div>


                            <div class="clearfix"></div>

                            <small>ภาพการให้บริการ</small>
                            <hr>

                            <div class="form-group col-md-6">
                                <label class=" form-control-label">ภาพที่ถ่ายกับลูกค้า</label>
                                <div class="input-group">
                                    <input type="file" class="form-control-file" name="InputFileImgCus" id="InputFileImgCus" aria-describedby="fileHelp">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" form-control-label">ภาพสินค้า/ภาพอะไหล่</label>
                                <div class="input-group">
                                    <input type="file" class="form-control-file" name="InputFileImgProduct" id="InputFileImgProduct" aria-describedby="fileHelp">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" form-control-label">ภาพก่อนติดตั้ง</label>
                                <div class="input-group">
                                    <input type="file" class="form-control-file" name="InputFileImgBefore" id="InputFileImgBefore" aria-describedby="fileHelp">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" form-control-label">ภาพหลังติดตั้ง</label>
                                <div class="input-group">
                                    <input type="file" class="form-control-file" name="InputFileImgAfter" id="InputFileImgAfter" aria-describedby="fileHelp">
                                </div>
                            </div>



                            <div class="form-group col-md-4">
                                <label class=" form-control-label">&nbsp;</label>

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

<?php include 'footer.php'; ?>