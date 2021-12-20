
<?php

require_once 'connect.php';

function showImage($name)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `warden` where Name = '$name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function updateProfilePicture($username, $file){
    $conn = db_conn();
    $selectQuery = "UPDATE warden set Image = '$file' where Username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function showJailer($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `jailerse` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showPrisoner($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `prisoner` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showLawyer($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `lawyerse` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function show($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `warden` where Username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}function showAllJailers($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `jailerse` where Username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}function showAllLawyers($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `lawyerse` where Username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function showAllPrisoners($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `prisoner` where Username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `warden` WHERE Username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function searchUsernamej($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `jailerse` WHERE Username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}function searchUsernamel($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `lawyerse` WHERE Username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}function searchUsernamep($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `prisonerse` WHERE Username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addJailerInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into jailerse (Name, Email,Username,Position,Address)
VALUES (:name, :email,:username, :position, :address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
					':username' => $data['username'],
					':position' => $data['position'],
					':address' => $data['address'],
          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateWarden($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE warden set Name = ?, Email = ?, Designation = ? where Username = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['designation']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updateJailer($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE jailerse set Name = ?, Email = ?, Position = ? where Username = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['position']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePasswordWarden($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE warden set Password = '$password' where Username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}