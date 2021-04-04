<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
// header('Access-Control-Allow-Headers: Origin, Content-Type');
// include 'connect.php';

// $json_return = array();
// $dbh = new PDO($dsn, $usernamedb, $passworddb, $option);

$username = $_POST['username'];
$password = $_POST['password'];

// $username = 'nutchakkarin';
// $password = 'nutchakkarin';

if (!isset($username) || !isset($password)) {
    array_push($json_return,
        array(
            "status" => "N",
            "message" => "NULL",
        )
    );
    echo json_encode($json_return);
    return;
}

$sql = 'SELECT * FROM user_login WHERE (username = :username || email = :username) AND password = :password';
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

try {
    $stmt->execute();
} catch (PDOException $e) {
    echo 'ERROR CONNECT' . $e->getMessage();
}

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     array_push($json_return,
//         array(
//             "technician_id" => $row["technician_id"],
//             "skill_id" => $row["skill_id"],
//             "technician_first_name" => $row["technician_first_name"],
//             "technician_last_name" => $row["technician_last_name"],
//             "technician_address" => $row["technician_address"],
//             "technician_phone" => $row["technician_phone"],
//             "technician_phone2" => $row["technician_phone2"],
//             "district" => $row["district"],
//             "amphoe" => $row["amphoe"],
//             "province" => $row["province"],
//             "zipcode" => $row["zipcode"],
//         )
//     );
// }

if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($json_return,
        array(
            "status" => "S",
            "message" => "login",
        )
    );
} else {
    array_push($json_return,
        array(
            "status" => "F",
            "message" => "no login",
        )
    );
}

echo json_encode($json_return);
