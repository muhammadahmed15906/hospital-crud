<?php
    include('dbinfo.php');
    $id = $_REQUEST['id'];
    $qry = "Delete FROM patient_tbl where Patient_id ='$id' ";
    $res = mysqli_query($conn, $qry);
   if($res != null){
     header('location:fetch.php');
   }else{
    echo "<script>alert('Your Data has not been Deleted')</script>";
   }
    ?>