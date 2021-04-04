<?php
include 'connect.php';
$dbh = new PDO($dsn, $username, $password, $option);

// ///getData
// $sql = 'SELECT * FROM technician';
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $stmt = $dbh->prepare($sql);
// try {
//     $stmt->execute();
// } catch (PDOException $e) {
//     echo 'ERROR CONNECT'.$e->getMessage();
// }

// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row['technician_first_name'];
// }
// ///getData

// ////insertData
// $paramInsert = 'test';

// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = 'INSERT  INTO technician (newfile) VALUE (:p1,:p2....)';
// $stmt = $dbh->prepare($sql);
// $stmt->bindParam(':p1',$paramInsert);
// $stmt->bindParam(':p1',$paramInsert);
// $stmt->bindParam(':p1',$paramInsert);
// .
// .
// .
// .
// try {
//     $stmt->execute();
// } catch (PDOException $e) {
//     echo 'ERROR CONNECT'.$e->getMessage();
// }
// ////insertData

//// edit PDO

//// delete PDO

// Transaction
// $dbh->beginTransaction();
// $sql

// try{
// $stmt->execute();
// $dbh->commit();
// }catch(){
//     $dbh->rollBack()
// }


// $dbh->lastInsertId(); // แสดง id ล่าสุดที่ insert เข้าไป

// <?php
//  header("Access-Control-Allow-Origin: *");
//  header("Content-type: application/json", true); 
//  $connect = mysql_connect("localhost", "root", "123") or die(mysql_error());
//  mysql_select_db("shop") or die (mysql_error());
//  mysql_query("SET NAMES utf8");
//  $json_return = array();
//  $query = mysql_query("SELECT * FROM product");
//  while ($row = mysql_fetch_assoc($query)) {
//  array_push($json_return, 
//  array(
//  "product_name" => $row["product_name"],
//  "product_price" => $row["product_price"],
//  "product_detail" => $row["product_detail"],
//  "product_img" => $row["product_img"]
//  )
//  );
//  }
//  echo json_encode($json_return);
// ?>