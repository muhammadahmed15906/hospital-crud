<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include('dbinfo.php');
$qry = "Select *From patient_tbl";
$res = mysqli_query($conn , $qry);
?>
<div class="container mt-3 ">
  <h2 class="diplay-1 text-center">Patient Record</h2>
  <a href="add.php" class="btn btn-primary mb-3">Add Patient</a>      
  <table class="table table-dark table-hover text-center">
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>Patient Name</th>
        <th>Patient Age</th>
        <th>Patient Disease</th>
        <th>Patient Gender</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_array($res)){
        ?>
      <tr>
       <td><?php echo $row['Patient_id'];?></td>
       <td><?php echo $row['Patient_name'];?></td>
       <td><?php echo $row['Patient_age'];?></td>
       <td><?php echo $row['Patient_disease'];?></td>
       <td><?php echo $row['Patient_gender'];?></td>
       <td><a href="update.php?id=<?php echo $row['Patient_id'];?>" class="btn btn-success" >Edit</a></td>
       <td><a href="delete.php?id=<?php echo $row['Patient_id'];?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
    
</div>

</body>
</html>
