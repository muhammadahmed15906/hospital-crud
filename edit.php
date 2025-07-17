<?php 
include('dbinfo.php');

$id =$_POST['eid'];
$name = $_POST['ename'];
$age =$_POST['eage'];
$disease =$_POST['edisease'];
$gender =$_POST['egender'];

$qry = "UPDATE  patient_tbl SET  Patient_name='$name', Patient_age='$age', Patient_disease='$disease', Patient_gender='$gender' where Patient_id ='$id'";
$res= mysqli_query($conn, $qry);
if($res != null){
    header('location:fetch.php');
}else{
    echo "<script>alert('Your Record has not been Updated')</script>";
}

mysqli_close($conn);
?>