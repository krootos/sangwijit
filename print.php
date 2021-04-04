<?php
$user =  $_SESSION['user_login'];
$corepage = explode('/', $_SERVER['PHP_SELF']);
$corepage = end($corepage);
if ($corepage !== 'index.php') {
  if ($corepage == $corepage) {
    $corepage = explode('.', $corepage);
    header('Location: index.php?page=' . $corepage[0]);
  }
}
?>
<div class="row">&nbsp;</div>
<h1 class="text-primary" style="margin-top: 10%"><i class="fas fa-user"></i> พิมพ์รายงาน</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page"><a href="index.php" style="color: #ddd">ภาพรวมกิจกรรม </a></li>
    <li class="breadcrumb-item active" aria-current="page">พิมพ์รายงาน</li>
  </ol>
</nav>

<?php
$query_std = mysqli_query($db_con, "SELECT * FROM `users` WHERE `username` ='$user';");
$row_std = mysqli_fetch_array($query_std);

?>




<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css'>
<link rel="stylesheet" type="text/css" href="./styleTablePrint.css">


<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


<section class="container" aria-describedby="demos">





  <div class="row">
    <div class="demo twelve columns">
      <table class="table table-borderless">
        <tr>
          <td>
            <img src="../assets/images/logoReport.png" width="80%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
          <td>
            <img src="../assets/images/obec.png" height="70px" width="60px" style="margin-top: 10px;"> &nbsp;&nbsp;&nbsp;<img src="../assets/images/worldClass.png" height="60px" width="120px" style="margin-top: 10px;"> &nbsp;&nbsp;&nbsp;<img src="../assets/images/46ict500.png" height="75px" width="80px" style="margin-top: 10px;">
          </td>

        </tr>
      </table>

      <img src="../assets/images/hrLine.png" width="100%" height="40px" style="margin-top: -40px;">



      <h3 align="center" class="align-baseline"><b>รายงานกิจกรรมชุมนุม </b></h3>
      <h5 align="center">
        <b>ชื่อ </b><u style="text-decoration-style: dotted; "><?php echo $row_std['name']; ?></u>
        &nbsp;&nbsp;<b>ชื่อเล่น</b> <u style="text-decoration-style: dotted; "><?php echo $row_std['nickname']; ?></u>
        &nbsp; <b>เลขประจำตัวนักเรียน</b> <u style="text-decoration-style: dotted; "> <?php echo $row_std['stdNo']; ?></u>
        <br><b>ระดับชั้นมัธยมศึกษาปีที่</b> <u style="text-decoration-style: dotted; "><?php echo $row_std['room']; ?> </u>
            <b>&nbsp;&nbsp;เลขที่</b> <u style="text-decoration-style: dotted; "><?php echo $row_std['stdNum']; ?> </u>
        <b>&nbsp;&nbsp; แผนการเรียน</b> <u style="text-decoration-style: dotted; "><?php echo $row_std['plan']; ?> </u>
        <br><b>เบอร์โทร</b> <u style="text-decoration-style: dotted; "><?php echo $row_std['tel']; ?> </u>
        <b>&nbsp;&nbsp;อีเมล์</b> <u style="text-decoration-style: dotted; "><?php echo $row_std['email']; ?></u>
      </h5>

      <?php
      $stdNo = $row_std['stdNo'];
      $query = mysqli_query($db_con, "SELECT * FROM `student_info`  WHERE `stdNo` = '$stdNo' AND `actType` = 'กิจกรรมชุมนุม' ORDER BY `student_info`.`datetime` DESC;");
      $numrows = mysqli_num_rows($query);
      ?>
      <center>
        <h5>จำนวนกิจกรรมชุมนุมทั้งหมด <?php echo $numrows ?> กิจกรรม ผลการประเมินกิจกรรมชุมนุม
            <?php
            if($numrows>=8){
                echo '<b class="text-success" style="font-size:30px">ผ่าน</b>';
            }else{
              echo '<b class="text-danger" style="font-size:30px">ไม่ผ่าน</b>';              
            }
            ?>
        </h5>
      </center>

      <div class="col-sm-12">

        <div class="row well">



          <table class="table table-borderless" width="80%">

            <?php
            $i = 1; //first, i set a counter
            while ($fetch = mysqli_fetch_assoc($query)) {
              //counter is zero then we are start new row
              if ($i == 0) {
                echo '<tr>';
              }
              //here we creating normal cells <td></td>
              $image_name = $fetch['photo'];
              // $image_location = $fetch['image_location'];
              $image_location = "images/";
              echo '<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="' . $image_location . $image_name . '" alt="' . $image_name . '" width="75%" height="350px"/>
              <br><br>
      <span align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรม : ' . $fetch['actType'] . '</span><br>' .
                '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อกิจกรรม : ' . $fetch['actName'] . '<br>' .
                '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำกิจกรรม : ' . $fetch['actPos'] . '<br>' .
                '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ทำกิจกรรม : ' . $fetch['actDate'] . '<br><br>
      
      </td>';



              //there is a magic - if our counter is greater then 5 we set counter to zero and close tr tag
              if ($i > 1) {
                $i = 0;
                echo '</tr>';
              };


              $i++; //$i = $i + 1 - counter + 1

            }
            echo '</table>';
            ?>



        </div>



      </div>



    </div>
  </div>


  <div class="one-half column">
    <a id="basic" href="#nada" class="button button-primary"><button class="btn btn-primary hidden-print one-half column" id="basic">
        <span class="" aria-hidden="true"></span> Print</button></a>
  </div>


</section>
<hr />








<!-- printThis -->

<script type="text/javascript" src="printThis.js"></script>

<!-- demo -->
<script>
  $('#basic').on("click", function() {
    $('.demo').printThis({
      base: "print.php"
    });
  });
</script>

<!-- partial -->
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
<script src='https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js'></script>
<script src="./scriptTable.js"></script>