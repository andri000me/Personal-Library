<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome.min.css" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <title>Document</title>
      </head>
      <body>
        <!-- main -->

        <div class="container d-flex justify-content-center main-menu">
          <div class="card-putih p-3 col-md-4">
            <h3 class="judul text-center fw-bold mb-4">MASUK</h3>
            <form class="row g-3">
              <div class="col-md-12">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" />
              </div>
              <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" />
              </div>
              <div class="d-flex justify-content-center mt-5 mb-5">
                <button type="submit" class="btn btn-biru login">Masuk</button>
              </div>
            </form>
            <div class="d-flex d-inline justify-content-around">
              <p><small>Belum punya akun?</small></p>
              <a href="register.php"><small>Buat akun baru</small> </a>
            </div>
          </div>
        </div>
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>
    </html>
  </body>
</html>
