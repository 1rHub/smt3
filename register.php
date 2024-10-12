<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>
  <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <div class="row rounded-1 border border-3">
      <div class="row pt-4 pb-4">
        <div class="col-12">
          <h3 class="text-center">Register</h3>
        </div>
        <div class="col-12">
          <form action="" method="post">
            <div class="row">
              <div class="form-group my-2">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control">
              </div>
              <div class="form-group my-2">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <div class="form-group my-2">
                <label for="" class="form-label">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">
              </div>
              <div class="form-group my-2">
                <input type="submit" value="Kirim" name="submit" id="submit" class="form-control btn btn-info">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>