<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
    }

    header {
      background-color: #007bff;
      color: #ffffff;
      padding: 20px 0;
    }

    .card {
      border: none;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <header>
    <div class="container text-center">
      <h2 class="mt-4">Registration Form For New Student</h2>
      <h1 class="display-5">English Course A+</h1>
    </div>
  </header>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="https://images.pexels.com/photos/3807755/pexels-photo-3807755.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Register</h5>
            <p class="card-text">Form page to registering a new student</p>
            <a href="form-daftar.php" class="btn btn-primary">Register</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="https://images.pexels.com/photos/159740/library-la-trobe-study-students-159740.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Student List</h5>
            <p class="card-text">Page of all the new student list.</p>
            <a href="list-siswa.php" class="btn btn-primary">List</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
