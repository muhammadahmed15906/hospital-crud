<?php
    include('dbinfo.php');
    $name =$_POST['ename'];
    $age =$_POST['eage'];
    $disease = $_POST['edisease'];
    $gender = $_POST['egender'];
    
    $qry = "insert into patient_tbl values(null ,'$name','$age','$disease','$gender')";
    $res = mysqli_query($conn,$qry);
    if($res != null){
        header('location:fetch.php');
    }else{
        echo"<script>alert('You Data has not been added')</script>";
    }
?>