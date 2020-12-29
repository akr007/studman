<?php

$school = $_POST['school'];
$academic = $_POST['academic'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$games = $_POST['games'];
$animation = $_POST['animation'];
$business = $_POST['business'];
$softwaretesting = $_POST['softwaretesting'];
$objectoriented = $_POST['objectoriented'];
$computersystem = $_POST['computersystem'];
$project = $_POST['project'];
$score = $_POST['score'];
$average = $_POST['average'];
$class = $_POST['class'];

if(!empty($school) || !empty($academic) || !empty($firstname) || !empty($surname) || !empty($email) || !empty($games) || !empty($animation) || !empty($business) || !empty($softwaretesting) || !empty($objectoriented) || !empty($computersystem) || !empty($project) || !empty($score) || !empty($average) || !empty($class)) {
    $host = "localhost";
    $dbUserName = "root";
    $dbPwd = "";
    $dbName = "login";

    $conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);
    if(mysqli_connect_error()) {
        die('Connection Failed (' . mysqli_connect_errno() . ') - ' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT email FROM studentdata WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO studentdata(school, academic, firstname, surname, email, games, animation, business, softwaretesting, objectoriented, computersystem, project, score, average, class) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt =$conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows();
        if($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssssssssssss", $school, $academic, $firstname, $surname, $email, $games, $animation, $business, $softwaretesting, $objectoriented, $computersystem, $project, $score, $average, $class);
            $stmt->execute();
            echo "New record inserted successfully.";
        } else {
            echo "Someone already registered using this email.";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All field required.";
    die();
}

?>