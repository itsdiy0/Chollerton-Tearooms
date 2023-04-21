
<?php
    include "connect.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $user_email = $_POST['eMail'];
    $user_pNumber =  $_POST['pNumber'];
    $user_message = $_POST['message'];
    $user_category =  $_POST['category'];
    $user_address = $_POST['address'];
    $user_sendMethod = $_POST['sendMethod'];
    $fullName = $_POST['fullName'];
    $nameArray = explode(" ", $fullName);
    $firstName = $nameArray[0];	
    $lastName = $nameArray[1];
    $stmt = $conn->prepare("INSERT INTO CT_expressedInterest (forename,surname,postalAddress,mobileTelNo,email,sendMethod,catID) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$firstName,$lastName,$user_address,$user_pNumber,$user_email,$user_sendMethod,$user_category);
    $stmt->execute();
    header("Location: findmore.php?s=success");
    die();
?>