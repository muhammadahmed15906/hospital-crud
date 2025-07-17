<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Patient Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(to right, #e0f7fa, #c8e6c9); /* Hospital color gradient */
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      width: 100%;
      max-width: 480px;
      border: none;
      border-radius: 12px;
      background-color: #ffffff;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #009688; /* Hospital teal */
      color: white;
      text-align: center;
      font-size: 1.7rem;
      font-weight: bold;
      padding: 1.2rem;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      position: relative;
    }

    .card-header::before {
      content: "➕";
      font-size: 1.5rem;
      position: absolute;
      left: 20px;
      top: 18px;
    }

    .form-container {
      background-color: #f9fdfc;
      padding: 2rem;
      border-radius: 0 0 12px 12px;
    }

    .form-label {
      font-weight: 600;
      color: #37474f;
    }

    .form-control {
      border-radius: 6px;
      border: 1px solid #cfd8dc;
    }

    .btn-primary {
      background-color: #00796b;
      border: none;
      font-weight: 600;
    }

    .btn-primary:hover {
      background-color: #00695c;
    }
    @media (max-width: 576px) {
      .card {
        margin: 1rem;
      }
    }
  </style>
</head>
<body>

<div class="card">
  <div class="card-header">
    Add New Patient Record
  </div>
  <div class="card-body form-container">
    <form action="insert.php" method="post">
      <div class="mb-3">
        <label class="form-label">Patient Name:</label>
        <input type="text" class="form-control" placeholder="Enter Patient Name" name="ename">
      </div>
      <div class="mb-3">
        <label class="form-label">Patient Age:</label>
        <input type="text" class="form-control" placeholder="Enter Patient Age" name="eage">
      </div>
      <div class="mb-3">
        <label class="form-label">Patient Disease:</label>
        <input type="text" class="form-control" placeholder="Enter Patient Disease" name="edisease">
      </div>
      <div class="mb-3">
        <label class="form-label">Patient Gender:</label>
        <input type="text" class="form-control" placeholder="Enter Patient Gender" name="egender">
      </div>
      <button type="submit" class="btn btn-primary w-100">Add Record</button>
    </form>
  </div>
</div>

</body>
</html>
