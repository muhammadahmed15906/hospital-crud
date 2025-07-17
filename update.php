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
    $id = $_REQUEST['id'];
    $qry = "SELECT * FROM patient_tbl where Patient_id ='$id' ";
    $res = mysqli_query($conn, $qry);
    $row = mysqli_fetch_array($res);
    ?>

<div class="container mt-3">
  <h2>Update Patient Record</h2>
  <form action="edit.php" method="post">
    <div class="mb-3 mt-3">
      <label>Patient ID :</label>
      <input type="text" class="form-control" value="<?php echo $row['Patient_id']; ?>" placeholder="Enter Patient ID" name="eid">
    </div>
    <div class="mb-3 mt-3">
      <label>Patient Name :</label>
      <input type="text" class="form-control" value="<?php echo $row['Patient_name'];?>" placeholder="Enter Patient Name" name="ename">
    </div>
    <div class="mb-3 mt-3">
      <label>Patient Age :</label>
      <input type="text" class="form-control" value="<?php echo $row['Patient_age'];?>"  placeholder="Enter Patient Disease" name="eage">
    </div>
    <div class="mb-3 mt-3">
      <label>Patient Disease :</label>
      <input type="text" class="form-control" value="<?php echo $row['Patient_disease'];?>" placeholder="Enter Patient Age" name="edisease">
    </div>
    <div class="mb-3 mt-3">
      <label>Patient Gender :</label>
      <input type="text" class="form-control" value="<?php echo $row['Patient_gender'];?>" placeholder="Enter Patient Gender" name="egender">
    </div>
    <button type="submit" class="btn btn-primary">Update Record</button>
  </form>
</div>
</body>
</html>
