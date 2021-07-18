<?php
session_start();
$con = mysqli_connect("localhost","root","","form");

    $fio = $_POST['fio'];
    $dob = date('Y-m-d', strtotime($_POST['birthday']));
    $iin = $_POST['iin'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];

    // File image
    $filename = $_FILES["image"]["name"];
    // image Path
  	$image_Path = "images/".basename($filename);
    
    if(empty($_POST['id'])) {
        echo "fail";
    }

    $query = "INSERT INTO register_user (fio, dob, iin, tel, address, image) VALUES ('$fio','$dob','$iin','$tel','$address','$filename')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Insertion Failed";
        header("Location: index.php");
    }



?>