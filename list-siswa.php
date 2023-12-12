<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/82d0e7f3eb.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }

    header {
      background-color: #007bff;
      color: #ffffff;
      padding: 20px 0;
    }

    .btn-add {
      background-color: #28a745;
      color: #ffffff;
      border: none;
    }

    .btn-add:hover {
      background-color: #218838;
    }

    .table th,
    .table td {
      text-align: center;
    }

    .btn-edit {
      background-color: #ffc107;
      color: #212529;
    }

    .btn-edit:hover {
      background-color: #e0a800;
    }

    .btn-remove {
      background-color: #dc3545;
      color: #ffffff;
    }

    .btn-remove:hover {
      background-color: #c82333;
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
    <a href="form-daftar.php">
      <button type="button" class="btn btn-add mb-3"><i class="fa-solid fa-plus"></i> Add New Student</button>
    </a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Religion</th>
          <th>School</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql_script = 'SELECT * FROM calon_siswa';
        $query = mysqli_query($db, $sql_script);
        while ($siswa = mysqli_fetch_array($query)) {
          echo '<tr>';
          echo '<td>' . $siswa['id'] . '</td>';
          echo '<td>' . $siswa['nama'] . '</td>';
          echo '<td>' . $siswa['alamat'] . '</td>';
          echo '<td>' . $siswa['jenis_kelamin'] . '</td>';
          echo '<td>' . $siswa['agama'] . '</td>';
          echo '<td>' . $siswa['sekolah_asal'] . '</td>';
          echo '<td>';
          echo '<a class="btn btn-edit btn-sm" href="form-edit.php?id=' . $siswa['id'] . '">Edit</a> ';
          echo '<button class="btn btn-remove btn-sm" data-id="' . $siswa['id'] . '">Remove</button>';
          echo '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
  </div>

  <script>
    const deleteButton = document.querySelectorAll('.btn-remove');
    deleteButton.forEach((button) => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        Swal.fire({
          title: 'Delete Confirmation',
          text: "Are you sure you want to delete this data? It can't be undone",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#dc3545',
          confirmButtonText: 'Yes, delete this data',
          cancelButtonText: 'Cancel'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'hapus.php?id=' + button.getAttribute('data-id');
          }
        })
      });
    });
  </script>
</body>

</html>
