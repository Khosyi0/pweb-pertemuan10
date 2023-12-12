<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
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
      <h2 class="mt-4">Registration Form For New Student</h2>
      <h1 class="display-5">English Course A+</h1>
    </div>
  </header>

  <div class="container">
    <div class="form-container">
      <form action="proses-pendaftaran.php" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Insert your name" aria-label="Nama" name="nama" required />
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Address</label>
          <input type="text" class="form-control" placeholder="Insert your address" aria-label="Alamat" name="alamat" required />
        </div>

        <div class="mb-2">
          <label for="jenis-kelamin" class="form-label">Gender</label>
          <div class="row">
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" value="Male">
                <label class="form-check-label" for="laki-laki">
                  Male
                </label>
              </div>
            </div>
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" value="Female">
                <label class="form-check-label" for="perempuan">
                  Female
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="agama" class="form-label">Religion</label>
          <select class="form-select" aria-label="Agama" name="agama" required>
            <option selected disabled>Choose</option>
            <option value="Islam">Islam</option>
            <option value="Christian">Christian</option>
            <option value="Catholic">Catholic</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Confucian">Confucian</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sekolah-asal" class="form-label">School</label>
          <input type="text" class="form-control" placeholder="Your School" aria-label="Sekolah Asal" name="sekolah-asal" required />
        </div>

        <input type="submit" value="Register" class="btn btn-primary" name="daftar"></input>
      </form>
    </div>
  </div>
</body>

</html>
