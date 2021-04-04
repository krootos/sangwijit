</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
 -->

 <!-- <script src="dist/js/bootstrap-datepicker-custom.js"></script>
    <script src="dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script> -->



<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>

<!-- <script src="jquery-2.1.3.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
<script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="dist/js/bootstrap-datepicker-custom.js"></script>
    <script src="dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>



<script>
     jQuery(document).ready(function () {
        jQuery('.inputDate').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: true,
                language: 'th',             //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
                todayBtn: "linked",
                thaiyear: true              //Set เป็นปี พ.ศ.
            });
         // }).datepicker("setDate", "0");  //กำหนดเป็นวันปัจุบัน
        });

        jQuery(document).ready(function () {
        jQuery('.inputDateEdit').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: true,
                language: 'th',             //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
                todayBtn: "linked",
                thaiyear: false              //Set เป็นปี พ.ศ.
            });
         // }).datepicker("setDate", "0");  //กำหนดเป็นวันปัจุบัน
        });


    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });

        if(document.getElementById("affiliation").value && document.getElementById("affiliation").value !=  'งานติดตั้ง' ){
            document.getElementById("radio2").checked = true;
        }
    });


    jQuery(document).ready(function(){

    jQuery("#iden").change(function(){

      jQuery.ajax({
         url: "checkIdenAjax.php" ,
         type: "POST",
         data: {
                "iden": jQuery("#iden").val(),
            },
      })
      .success(function(data) {

        //   console.log(data == "true" );

            if(data == "true"){
                swal({
                    text: 'เลขบัตรประชาชนมีในระบบแล้ว',
                    icon: "warning"
                });
                jQuery("#iden").val('');
                // exit(0);
            } 

            // var obj = jQuery.parseJSON(result);

            // if(obj != '')
            // {
            //      jQuery.each(obj, function(key, inval) {

            //             if(jQuery("#txtUser").val() == inval["user"])
            //            {
            //             //    jQuery("#sUser").html(" <font color='red'>ชื่อมีอยู่แล้ว</font>");
            //            }

            //      });
            // }

      });

   });
});

</script>

<?php
if (isset($_SESSION['addtechnician']) && $_SESSION['addtechnician'] != '') {
    if ($_SESSION['addtechnician'] == 'T') {
        echo "<script>";
        echo "swal('สำเร็จ', 'ทำการบันทึกเรียบร้อยแล้ว', 'success');";
        echo "</script>";
        unset($_SESSION['addtechnician']);
    } else if ($_SESSION['addtechnician'] == 'F') {
        echo "<script>";
        echo "swal('ผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้ โปรทำรายการอีกครัั้ง', 'error');";
        echo "</script>";
        unset($_SESSION['addtechnician']);
    }
}

if (isset($_SESSION['deletetechnician']) && $_SESSION['deletetechnician'] != '') {
    if ($_SESSION['deletetechnician'] == 'T') {
        echo "<script>";
        echo "swal('สำเร็จ', 'ทำการลบเรียบร้อยแล้ว', 'success');";
        echo "</script>";
        unset($_SESSION['deletetechnician']);
    } else if ($_SESSION['deletetechnician'] == 'F') {
        echo "<script>";
        echo "swal('ผิดพลาด', 'ไม่สามารถลบข้อมูลได้ โปรทำรายการอีกครัั้ง', 'error');";
        echo "</script>";
        unset($_SESSION['deletetechnician']);
    }
}
?>
<script>
//insert script
function scriptCheckIden(countIden){
    if(countIden == 13){
        var iden = $('#iden').val();
        $.ajax({
            type:'POST',
            url: "checkIdenAjax.php",
            data:{iden:iden},
            success:function(data){
                // console.log(data)
                // swal('ผิดพลาด', data, 'error');
                if(data == 'true'){
                    swal('ผิดพลาด', 'ไม่สามารถเพิ่มข้อมูลได้ เนื่องจากมีข้อมูลอยู่แล้ว', 'error');
                    $('#iden').val("");
                    $('#iden').focus();
                }
            }
        });
    }
}

function clickDelete() {
      event.preventDefault(); // prevent form submit
      var form = document.forms["formForUpdate"]; // storing the form
      document.getElementById("typeClick").value = "deleteetechnician";
      swal({
             title: "ยืนยันการลบ",
             text: "ต้องการลบ ? ",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
          .then((willDelete) => {
               if (willDelete) {
                     form.submit();
               }
        });
}

function clickEdit(){
    validateForm();
    document.getElementById("typeClick").value = "updatetechnician";
}
function clickCancel(){
    document.getElementById("typeClick").value = "Canceletechnician";
}

function validateScarch(){
    var checkValue = document.getElementById("search");
    if(checkValue == null || checkValue.value == ''){
        // alert("sryhgdgjh");
        event.preventDefault();
        swal({
             text: "กรุณาระบุคำค้นหา",
             icon: "warning"
           });
    }
}

function validateForm(){
    var iden = document.getElementById("iden");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var address = document.getElementById("address");
    var phone = document.getElementById("phone");
    var sex = document.getElementById("sex");
    var district = document.getElementById("district");
    var amphoe = document.getElementById("amphoe");
    var province = document.getElementById("province");
    var zipcode = document.getElementById("zipcode");


    if(isNaN(iden.value)){
        event.preventDefault();
        swal({
             text: '"รหัสบัตรประชาชน" เป็นตัวเลขเท่านั้น',
             icon: "warning"
           });
        exit(0);
    }
    if(iden == null || iden.value == ''){
        event.preventDefault();
        swal({
             text: '"รหัสบัตรประชาชน" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(iden.value.length != 13 ){
        event.preventDefault();
        swal({
             text: "กรุณาใส่รหัสบัตรประชาชน 13 หลัก",
             icon: "warning"
           });
        exit(0);
    }
    if(fname == null || fname.value == ''){
        event.preventDefault();
        swal({
             text: '"ชื่อ" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(lname == null || lname.value == ''){
        event.preventDefault();
        swal({
             text: '"นามสกุล" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(address == null || address.value == ''){
        event.preventDefault();
        swal({
             text: '"ที่อยู่" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(amphoe == null || amphoe.value == ''){
        event.preventDefault();
        swal({
             text: '"อำเภอ/เขต" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(province == null || province.value == ''){
        event.preventDefault();
        swal({
             text: '"จังหวัด" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(isNaN(phone.value)){
        event.preventDefault();
        swal({
             text: '"หมายเลขโทรสัพท์" เป็นตัวเลขเท่านั้น',
             icon: "warning"
           });
        exit(0);
    }
    if(phone == null || phone.value == ''){
        event.preventDefault();
        swal({
             text: '"หมายเลขโทรศัพท์" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
    if(phone.value.length != 10 ){
        event.preventDefault();
        swal({
             text: "กรุณาใส่หมายเลขโทรศัพท์ 10 หลัก",
             icon: "warning"
           });
        exit(0);
    }
    if(sex == null || sex.value == ''){
        event.preventDefault();
        swal({
             text: "กรุณาเลือกเพศ",
             icon: "warning"
           });
        exit(0);
    }
    if(inputDate == null || inputDate.value == ''){
        event.preventDefault();
        swal({
             text: "กรุณาระบุ วันเ/ดือน/ปีเกิด",
             icon: "warning"
           });
        exit(0);
    }
    if(iden == null || iden.value == ''){
        event.preventDefault();
        swal({
             text: '"รหัสบัตรประชาชน" ไม่ควรเป็นค่าว่าง',
             icon: "warning"
           });
        exit(0);
    }
}


$.Thailand({
    database: './jquery.Thailand.js/database/db.json', // path หรือ url ไปยัง database
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
});

$('#InputFileImg').change( function () {
  var fileExtension = ['jpg','png','gif','pdf'];
  if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
        swal({
             text: 'กรุณาใส่เฉพาะรูปภาพ',
             icon: "warning"
           });
     this.value = '';
     return false;
  }
});
$('#img').change( function () {
  var fileExtension = ['jpg','png','gif','pdf'];
  if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
        swal({
             text: 'กรุณาใส่เฉพาะรูปภาพ',
             icon: "warning"
           });
     this.value = '';
     return false;
  }
});

var img = document.getElementById('img');
img.onchange = function(){
    var files = img.files[0];
    var reader = new FileReader();
    reader.readAsDataURL(files);
    reader.onload = function(){
        var result = reader.result;
        document.getElementById('showImage').src = result;
    };
};

// trining

function editTrainning(id){
    document.getElementById("optionTrainninggetToFunction").value = "editTrainning";
    document.getElementById("idTrainning").value = id;
}

function deleteTrainning(id){

    // alert(id);

    event.preventDefault(); // prevent form submit
      var form = document.forms["optionTrainning"]; // storing the form
      document.getElementById("optionTrainninggetToFunction").value = "deleteTrainning";
      document.getElementById("idTrainning").value = id;
      swal({
             title: "ยืนยันการลบ",
             text: "ต้องการลบ ? ",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
          .then((willDelete) => {
               if (willDelete) {
                     form.submit();
               }
        });
}

function validateTrainning(){
    var name = document.getElementById("nameTraining");
    var date = document.getElementById("DateTraining");

    if(name == null || name.value == '' || date == null || date.value == ''){
        event.preventDefault();
        swal({
             text: 'กรุณากรอกข้อมูลในครบ',
             icon: "warning"
           });
        exit(0);
    }
}

function updateTrainning(id){
    document.getElementById("updateTrainning").value = "updateTrainning";
    document.getElementById("idUpdateTrainning").value = id;
}

function cancelTrainning(){
    document.getElementById("updateTrainning").value = "cancelTrainning";
}

//skill

function editSkill(id){
    document.getElementById("optionSkillgetToFunction").value = "editSkill";
    document.getElementById("idSkill").value = id;
}

function deleteSkill(id){

    // alert(id);

    event.preventDefault(); // prevent form submit
      var form = document.forms["optionSkill"]; // storing the form
      document.getElementById("optionSkillgetToFunction").value = "deleteSkill";
      document.getElementById("idSkill").value = id;
      swal({
             title: "ยืนยันการลบ",
             text: "ต้องการลบ ? ",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
          .then((willDelete) => {
               if (willDelete) {
                     form.submit();
               }
        });
}

function validateSkill(){
    var name = document.getElementById("nameSkill");

    if(name == null || name.value == ''){
        event.preventDefault();
        swal({
             text: 'กรุณากรอกข้อมูลในครบ',
             icon: "warning"
           });
        exit(0);
    }
}

function updateSkill(id){
    document.getElementById("updateSkill").value = "updateSkill";
    document.getElementById("idUpdateSkill").value = id;
}

function cancelSkill(){
    document.getElementById("updateSkill").value = "cancelSkill";
}

function disableBtn() {
    document.getElementById("affiliation").value = 'งานติดตั้ง';
    document.getElementById("affiliation").readOnly = true;
}

function enableBtn() {
    document.getElementById("affiliation").value = '';
    document.getElementById("affiliation").readOnly = false;
}
function enableckb(){
    document.getElementById("radio2").checked = true;
    if(document.getElementById("affiliation").value == 'งานติดตั้ง'){
        document.getElementById("affiliation").value = '';
    }
    document.getElementById("affiliation").readOnly = false;
}

// function addtechnicianTran(){
//     document.getElementById("optionTranUser").value = "addtechnicianTran";
// }
// function canceltechnicianTran(){
//     document.getElementById("optionTranUser").value = "canceltechnicianTran";
// }


</script>

</body>
</html>
