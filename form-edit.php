<?php
include("config.php");

if (!isset($_GET['id'])) {
  header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  die("Data not found!");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Form</title>
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

    .form-container {
      max-width: 100vh;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <header>
    <div class="container text-center">
      <h2 class="mt-4">Edit Form For Student</h2>
      <h1 class="display-5">English Course A+</h1>
    </div>
  </header>

  <div class="container">
    <div class="form-container">
      <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <div class="mb-3">
          <label for="nama" class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Insert your name" aria-label="Nama" name="nama" value="<?php echo $siswa['nama']; ?>" required />
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Address</label>
          <input type="text" class="form-control" placeholder="Insert your address" aria-label="Alamat" name="alamat" value="<?php echo $siswa['alamat']; ?>" required />
        </div>

        <div class="mb-2">
          <?php $jk = $siswa['jenis_kelamin']; ?>
          <label for="jenis-kelamin" class="form-label">Gender</label>
          <div class="row">
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" value="Male" <?php echo ($jk == 'Male') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="laki-laki">
                  Male
                </label>
              </div>
            </div>
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" value="Female" <?php echo ($jk == 'Female') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="perempuan">
                  Female
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <?php $agama = $siswa['agama']; ?>
          <label for="agama" class="form-label">Religion</label>
          <select class="form-select" aria-label="Agama" name="agama" required>
            <option <?php echo ($agama == 'Islam') ? 'selected' : ''; ?>>Islam</option>
            <option <?php echo ($agama == 'Christian') ? 'selected' : ''; ?>>Christian</option>
            <option <?php echo ($agama == 'Catholic') ? 'selected' : ''; ?>>Catholic</option>
            <option <?php echo ($agama == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
            <option <?php echo ($agama == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
            <option <?php echo ($agama == 'Confucian') ? 'selected' : ''; ?>>Confucian</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sekolah-asal" class="form-label">School</label>
          <input type="text" class="form-control" placeholder="Your School" aria-label="Sekolah Asal" name="sekolah-asal" value="<?php echo $siswa['sekolah_asal']; ?>" required />
        </div>

        <input type="submit" value="Save" class="btn btn-primary" name="simpan"></input>
      </form>
    </div>
  </div>
</body>

</html>
