<?php

// print_r($_GET);

if (isset($_GET['id'])) {
    editTechnician($_GET['id']);
}
if (isset($_GET['idTrainning'])) {
    trainningUser($_GET['idTrainning']);
}

if (isset($_POST['getToFunction'])) {
    $paramType = $_POST['getToFunction'];

    switch ($paramType) {
        case 'addtechnician':
            addTechnician();
            break;
        case 'searchtechnician':
            searchTechnician();
            break;
        case 'updatetechnician':
            updatetechnician($_POST['idUpdate']);
            break;
        case 'deleteetechnician':
            deleteetechnician($_POST['idUpdate']);
            break;
        case 'Canceletechnician':
            canceletechnician();
            break;
        case 'addTraining':
            addTrainnung();
            break;
        case 'deleteTrainning':
            deleteTrainning($_POST['idTrainning']);
            break;
        case 'editTrainning':
            editTrainning($_POST['idTrainning']);
            break;
        case 'updateTraining':
            updateTraining($_POST['idUpdateTrainning']);
            break;
        case 'cancelTrainning':
            cancelTrainning();
            break;
        case 'addSkill':
            addSkill();
            break;
        case 'deleteSkill':
            deleteSkill($_POST['idSkill']);
            break;
        case 'editSkill':
            editSkill($_POST['idSkill']);
            break;
        case 'updateSkill':
            updateSkill($_POST['idUpdateSkill']);
            break;
        case 'cancelSkill':
            cancelSkill();
            break;
        case 'searchTraning':
            searchTraning();
            break;
        case 'addtechnicianTran':
            addtechnicianTran();
            break;
        case 'canceltechnicianTran':
            canceltechnicianTran();
            break;
        case 'canceleditTrainningUser':
            canceleditTrainningUser();
            break;

        default:
            # code...
            break;
    }
}

function editTechnician($id)
{
    session_start();
    unset($_SESSION['edittechnician']);
    $_SESSION['edittechnician'] = $id;
    return header("Location: edittechnician.php");
}

function searchTechnician()
{
    // include_once 'conn.php';
    session_start();
    unset($_SESSION['searchtechnician']);

    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $_SESSION['searchtechnician'] = $search;

    }

    return header("Location: search.php");

}

function addTechnician()
{
    include_once 'conn.php';
    session_start();
    require_once 'class.upload.php';

    $iden = $_POST['iden'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $phone2 = $_POST['phone2'];
    $sex = $_POST['sex'];
    $district = $_POST['district'];
    $amphoe = $_POST['amphoe'];
    $province = $_POST['province'];
    $zipcode = $_POST['zipcode'];
    $line = $_POST['line'];
    $facebook = $_POST['facebook'];
    $affiliation = $_POST['affiliation'];
    $inputDate1 = DateTime::createFromFormat('d/m/Y', $_POST['inputDate'])->format('Y-m-d');
    $inputDate = date("Y-m-d", strtotime("-543 year", strtotime($inputDate1)));

    // print_r($inputDate1);

    $skills = '';

    if (isset($iden) && !empty($iden)
        && isset($fname) && !empty($fname)
        && isset($lname) && !empty($lname)
        && isset($address) && !empty($address)
        && isset($phone) && !empty($phone)
        && isset($sex) && $sex != ''
        && isset($amphoe) && !empty($amphoe)
        && isset($province) && !empty($province)) {

        $image_name = '';

        $upload_image = new upload($_FILES['InputFileImg']); // $_FILES['image_name'] ชื่อของช่องที่ให้เลือกไฟล์เพื่ออัปโหลด

        //  ถ้าหากมีภาพถูกอัปโหลดมาจริง
        if ($upload_image->uploaded) {

            // ย่อขนาดภาพให้เล็กลงหน่อย  โดยยึดขนาดภาพตามความกว้าง  ความสูงให้คำณวนอัตโนมัติ
            // ถ้าหากไม่ต้องการย่อขนาดภาพ ก็ลบ 3 บรรทัดด้านล่างทิ้งไปได้เลย
            $upload_image->image_resize = true; // อนุญาติให้ย่อภาพได้
            $upload_image->image_x = 400; // กำหนดความกว้างภาพเท่ากับ 400 pixel
            $upload_image->image_ratio_y = true; // ให้คำณวนความสูงอัตโนมัติ

            $upload_image->process("uploads/technician"); // เก็บภาพไว้ในโฟลเดอร์ที่ต้องการ  *** โฟลเดอร์ต้องมี permission 0777

            // ถ้าหากว่าการจัดเก็บรูปภาพไม่มีปัญหา  เก็บชื่อภาพไว้ในตัวแปร เพื่อเอาไปเก็บในฐานข้อมูลต่อไป
            if ($upload_image->processed) {

                $image_name = $upload_image->file_dst_name; // ชื่อไฟล์หลังกระบวนการเก็บ จะอยู่ที่ file_dst_name
                $upload_image->clean(); // คืนค่าหน่วยความจำ

                // print_r($image_name);

            }
        }

        if (isset($_POST['skill']) && !empty($_POST['skill'])) {

            $i = 0;
            $skillsArray = $_POST['skill'];

            foreach ($skillsArray as $skill) {
                if (isset($skill) && !empty($skill)) {
                    if ($i > 0) {
                        $skills = $skills . ',';
                    }
                    $skills = $skills . $skill;
                    $i++;
                }
            }

            // print_r($skills);
            $mysqli->autocommit(false);

            $mysqli->query("INSERT INTO `technician` (
                technician_first_name,
                technician_last_name,
                technician_address,
                technician_phone,
                technician_phone2,
                technician_sex,
                technician_iden,
                technician_birthday,
                skill_id,
                district,
                amphoe,
                province,
                zipcode,
                facebook,
                line,
                affiliation,
                img
            )VALUES(
                '$fname',
                '$lname',
                '$address',
                '$phone',
                '$phone2',
                '$sex',
                '$iden',
                '$inputDate',
                '$skills',
                '$district',
                '$amphoe',
                '$province',
                '$zipcode',
                '$line',
                '$facebook',
                '$affiliation',
                '$image_name'
            ) "
            );

        } else {

            $mysqli->autocommit(false);

            $mysqli->query("INSERT INTO `technician` (
                technician_first_name,
                technician_last_name,
                technician_address,
                technician_phone,
                technician_phone2,
                technician_sex,
                technician_iden,
                technician_birthday,
                district,
                amphoe,
                province,
                zipcode,
                facebook,
                line,
                affiliation,
                img
            )VALUES(
                '$fname',
                '$lname',
                '$address',
                '$phone',
                '$phone2',
                '$sex',
                '$iden',
                '$inputDate',
                '$district',
                '$amphoe',
                '$province',
                '$zipcode',
                '$line',
                '$facebook',
                '$affiliation',
                '$image_name'
            ) "
            );
        }
    } 
    else {
        $_SESSION['addtechnician'] = 'F';
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    return header("Location: indextech.php");
}

function updatetechnician($id)
{

    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    include_once 'conn.php';
    session_start();
    require_once 'class.upload.php';

    $iden = $_POST['iden'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $phone2 = $_POST['phone2'];
    $sex = $_POST['sex'];
    $district = $_POST['district'];
    $amphoe = $_POST['amphoe'];
    $province = $_POST['province'];
    $zipcode = $_POST['zipcode'];
    $line = $_POST['line'];
    $facebook = $_POST['facebook'];
    $affiliation = $_POST['affiliation'];
    $inputDate1 = DateTime::createFromFormat('d/m/Y', $_POST['inputDate'])->format('Y-m-d');
    $inputDate = date("Y-m-d", strtotime("-543 year", strtotime($inputDate1)));
    $skills = '';
    $trainings = '';

    if (isset($iden) && !empty($iden)
        && isset($fname) && !empty($fname)
        && isset($lname) && !empty($lname)
        && isset($address) && !empty($address)
        && isset($phone) && !empty($phone)
        && isset($sex) && $sex != '') {

        $image_name1 = '';
        $upload_image = new upload($_FILES['img']); // $_FILES['image_name'] ชื่อของช่องที่ให้เลือกไฟล์เพื่ออัปโหลด

        //  ถ้าหากมีภาพถูกอัปโหลดมาจริง
        if ($upload_image->uploaded) {

            // ย่อขนาดภาพให้เล็กลงหน่อย  โดยยึดขนาดภาพตามความกว้าง  ความสูงให้คำณวนอัตโนมัติ
            // ถ้าหากไม่ต้องการย่อขนาดภาพ ก็ลบ 3 บรรทัดด้านล่างทิ้งไปได้เลย
            $upload_image->image_resize = true; // อนุญาติให้ย่อภาพได้
            $upload_image->image_x = 400; // กำหนดความกว้างภาพเท่ากับ 400 pixel
            $upload_image->image_ratio_y = true; // ให้คำณวนความสูงอัตโนมัติ

            $upload_image->process("uploads/technician"); // เก็บภาพไว้ในโฟลเดอร์ที่ต้องการ  *** โฟลเดอร์ต้องมี permission 0777

            // ถ้าหากว่าการจัดเก็บรูปภาพไม่มีปัญหา  เก็บชื่อภาพไว้ในตัวแปร เพื่อเอาไปเก็บในฐานข้อมูลต่อไป
            if ($upload_image->processed) {

                $image_name1 = $upload_image->file_dst_name; // ชื่อไฟล์หลังกระบวนการเก็บ จะอยู่ที่ file_dst_name
                $upload_image->clean(); // คืนค่าหน่วยความจำ

                // print_r($image_name);

            }
        }

        $t = 0;

        // print_r($_POST['training']);

        // print_r(count($trainingsArray));

        $sql = "SELECT COUNT(*) as count FROM Iden_Train WHERE iden = '$id'";
        $result = $mysqli->query($sql);

        while ($rowCount = $result->fetch_assoc()) {
            $count = $rowCount['count'];
        }

        $mysqli->query("DELETE FROM `Iden_Train`
                WHERE
                    iden = '$id' "
        );

        if (isset($_POST['training']) && !empty($_POST['training'])) {
            $trainingsArray = $_POST['training'];

            for ($i = 0; $i < count($trainingsArray); $i++) {

                $mysqli->query("INSERT INTO `Iden_Train`(iden, train) VALUE ('$id', '$trainingsArray[$i]') ");

            }
        }

        $i = 0;
        $skillsArray = $_POST['skill'];
        // print_r($skills);

        foreach ($skillsArray as $skill) {
            if (isset($skill) && !empty($skill)) {
                if ($i > 0) {
                    $skills = $skills . ',';
                }
                $skills = $skills . $skill;
                $i++;
            }
        }

        // print_r($skills);

        if (!isset($image_name1) || empty($image_name1) || $image_name1 == '') {
            // print_r($skills);
            $mysqli->autocommit(false);

            $mysqli->query("UPDATE `technician` SET
                technician_first_name = '$fname',
                technician_last_name = '$lname',
                technician_address = '$address',
                technician_phone = '$phone',
                technician_phone2 = '$phone2',
                technician_sex = '$sex',
                technician_iden = '$iden',
                technician_birthday = '$inputDate',
                skill_id = '$skills',
                district = '$district',
                amphoe = '$amphoe',
                province = '$province',
                zipcode = '$zipcode',
                facebook = '$facebook',
                line = '$line',
                affiliation = '$affiliation'
            WHERE
                technician_id = '$id' "
            );

            //     echo("UPDATE `technician` SET
            //     technician_first_name = '$fname',
            //     technician_last_name = '$lname',
            //     technician_address = '$address',
            //     technician_phone = '$phone',
            //     technician_phone2 = '$phone2',
            //     technician_sex = '$sex',
            //     technician_iden = '$iden',
            //     technician_birthday = '$inputDate',
            //     skill_id = '$skills',
            //     district = '$district',
            //     amphoe = '$amphoe',
            //     province = '$province',
            //     zipcode = '$zipcode',
            //     facebook = '$facebook',
            //     line = '$line',
            //     affiliation = '$affiliation'
            // WHERE
            //     technician_id = '$id'");

        } else {
            // print_r($skills);
            $mysqli->autocommit(false);

            $mysqli->query("UPDATE `technician` SET
                technician_first_name = '$fname',
                technician_last_name = '$lname',
                technician_address = '$address',
                technician_phone = '$phone',
                technician_phone2 = '$phone2',
                technician_sex = '$sex',
                technician_iden = '$iden',
                technician_birthday = '$inputDate',
                skill_id = '$skills',
                district = '$district',
                amphoe = '$amphoe',
                province = '$province',
                zipcode = '$zipcode',
                facebook = '$facebook',
                line = '$line',
                affiliation = '$affiliation',
                img = '$image_name1'
            WHERE
                technician_id = '$id' "
            );
        }
    } else {
        $_SESSION['addtechnician'] = 'F';
        return header("Location: edittechnician.php");
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
        unset($_SESSION['edittechnician']);
        return header("Location: search.php");
    } else {
        $_SESSION['addtechnician'] = 'F';
        return header("Location: edittechnician.php");
    }

}

function deleteetechnician($id)
{
    include_once 'conn.php';
    session_start();

    // print_r($skills);
    $mysqli->autocommit(false);

    $mysqli->query("DELETE FROM `technician` WHERE technician_id = '$id' ");
    $mysqli->query("DELETE FROM `Iden_Train` WHERE iden = '$id' ");

    if ($mysqli->commit()) {
        $_SESSION['deletetechnician'] = 'T';
        unset($_SESSION['edittechnician']);
        return header("Location: search.php");
    } else {
        $_SESSION['deletetechnician'] = 'F';
        return header("Location: edittechnician.php");
    }

}

function canceletechnician()
{
    session_start();
    unset($_SESSION['edittechnician']);
    unset($_SESSION['searchtechnician']);
    return header("Location: search.php");
}

//////// / trainnung //////////

function addTrainnung()
{
    include_once 'conn.php';
    session_start();

    $name = $_POST['nameTraining'];
    $date1 = DateTime::createFromFormat('d/m/Y', $_POST['DateTraining'])->format('Y-m-d');
    $date = date("Y-m-d", strtotime("-543 year", strtotime($date1)));
    $timeStart = $_POST['timeStart'];
    $timeEnd = $_POST['timeEnd'];
    $location = $_POST['nameLocation'];

    if (isset($name) && !empty($name)
        && isset($date) && !empty($date)) {

        // print_r($skills);
        $mysqli->autocommit(false);

        $mysqli->query("INSERT INTO `trainning` (
                trainning_name,
                date,
                timeStrat,
                timeEnd,
                location
            )VALUES(
                '$name',
                '$date',
                '$timeStart',
                '$timeEnd',
                '$location'
            ) "
        );

    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    return header("Location: training.php");
}

function deleteTrainning($id)
{
    include_once 'conn.php';
    session_start();

    // print_r($skills);
    $mysqli->autocommit(false);

    $mysqli->query("DELETE FROM `trainning` WHERE trainning_id = '$id' ");

    if ($mysqli->commit()) {
        $_SESSION['deletetechnician'] = 'T';
        return header("Location: training.php");
    } else {
        $_SESSION['deletetechnician'] = 'F';
        return header("Location: training.php");
    }
}
function editTrainning($id)
{
    session_start();
    $_SESSION['idEditTrainning'] = $id;
    return header("Location: updateTraining.php");
}

function updateTraining($id)
{
    include_once 'conn.php';
    session_start();

    $name = $_POST['nameTraining'];
    $date1 = DateTime::createFromFormat('d/m/Y', $_POST['DateTraining'])->format('Y-m-d');
    $date = date("Y-m-d", strtotime("-543 year", strtotime($date1)));
    $timeStart = $_POST['timeStart'];
    $timeEnd = $_POST['timeEnd'];
    $location = $_POST['nameLocation'];

    if (isset($name) && !empty($name)
        && isset($date) && !empty($date)) {

        $mysqli->autocommit(false);

        $mysqli->query("UPDATE `trainning` SET
                trainning_name = '$name',
                date = '$date',
                timeStrat = '$timeStart',
                timeEnd = '$timeEnd',
                location = '$location'
            WHERE
                trainning_id = '$id' "
        );

    } else {
        $_SESSION['addtechnician'] = 'F';
        return header("Location: updateTraining.php");
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
        unset($_SESSION['idEditTrainning']);
        return header("Location: training.php");
    } else {
        $_SESSION['addtechnician'] = 'F';
        return header("Location: updateTraining.php");
    }
}
function cancelTrainning()
{
    session_start();
    unset($_SESSION['idEditTrainning']);
    return header("Location: training.php");
}

function searchTraning()
{
    // include_once 'conn.php';
    session_start();
    unset($_SESSION['searchTraning']);

    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $_SESSION['searchTraning'] = $search;

    }

    return header("Location: searchTraining.php");

}

function trainningUser($id)
{
    session_start();
    unset($_SESSION['editTrainningUser']);
    $_SESSION['editTrainningUser'] = $id;
    return header("Location: editTrainningUser.php");
}

//////// / skill //////////

function addSkill()
{
    include_once 'conn.php';
    session_start();

    $name = $_POST['nameSkill'];

    if (isset($name) && !empty($name)) {

        // print_r($skills);
        $mysqli->autocommit(false);

        $mysqli->query("INSERT INTO `skill` (
                skill_name
            )VALUES(
                '$name'
            ) "
        );

    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    return header("Location: skill.php");
}

function deleteSkill($id)
{
    include_once 'conn.php';
    session_start();

    // print_r($skills);
    $mysqli->autocommit(false);

    $mysqli->query("DELETE FROM `skill` WHERE skill_id = '$id' ");

    if ($mysqli->commit()) {
        $_SESSION['deletetechnician'] = 'T';
        return header("Location: skill.php");
    } else {
        $_SESSION['deletetechnician'] = 'F';
        return header("Location: skill.php");
    }
}
function editSkill($id)
{
    session_start();
    $_SESSION['idEditSkill'] = $id;
    return header("Location: updateSkill.php");
}

function updateSkill($id)
{
    include_once 'conn.php';
    session_start();

    $name = $_POST['nameSkill'];

    if (isset($name) && !empty($name)) {

        $mysqli->autocommit(false);

        $mysqli->query("UPDATE `skill` SET
                skill_name = '$name'
            WHERE
                skill_id = '$id' "
        );

    } else {
        $_SESSION['addtechnician'] = 'F';
        return header("Location: updateSkill.php");
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
        unset($_SESSION['idEditTrainning']);
        return header("Location: skill.php");
    } else {
        $_SESSION['addtechnician'] = 'F';
        return header("Location: updateSkill.php");
    }
}
function cancelSkill()
{
    session_start();
    unset($_SESSION['idEditSkill']);
    return header("Location: skill.php");
}

function addtechnicianTran()
{
    include_once 'conn.php';

    $traningId = $_POST['traningId'];
    $techId = $_POST['techId'];

    if (isset($traningId) && !empty($traningId)
        && isset($techId) && !empty($techId)) {

        $mysqli->autocommit(false);

        $mysqli->query("INSERT INTO `Iden_Train` (
                iden,
                train
            )VALUES(
                '$techId',
                '$traningId'
            ) "
        );

    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    return header("Location: editTrainningUser.php");
}

function canceltechnicianTran()
{
    include_once 'conn.php';

    $traningId = $_POST['traningId'];
    $techId = $_POST['techId'];

    if (isset($traningId) && !empty($traningId)
        && isset($techId) && !empty($techId)) {

        $mysqli->autocommit(false);

        $mysqli->query("DELETE FROM `Iden_Train` WHERE iden = '$techId' AND train = '$traningId' ");

    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    if ($mysqli->commit()) {
        $_SESSION['addtechnician'] = 'T';
    } else {
        $_SESSION['addtechnician'] = 'F';
    }

    return header("Location: editTrainningUser.php");
}

function canceleditTrainningUser(){
    session_start();
    unset($_SESSION['editTrainningUser']);
    unset($_SESSION['searchTraning']);
    return header("Location: searchTraining.php");
}