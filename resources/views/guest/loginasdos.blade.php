<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Asdos</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark py-2">
        <div class="container-fluid mx-4">
          <a class="navbar-brand">
            <img src="https://wp-data-ukdw.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2017/10/10124012/logo-ukdw.png" class="float-right px-4" alt="Gambar Biro 2" width="120px" height="90px">
            <span class="text-success fw-bold">UNIVERSITAS KRISTEN DUTA WACANA</span>
          </a>
        </div>
    </nav>
    <main>
        <div class="mt-4 mx-4">
            <div class="container-fluid d-flex justify-content-center mt-5">
                <form action="/login" method="POST" class="w-50 border border-primary p-5"> {{-- add url for action and metode post --}}
                  @csrf {{-- add csrf for protected--}}
                    <h2 class="mb-4 text-center">Login Asdos</h2>
                    {{-- can input alert here (optional) --}}
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="username" name="username"> {{-- provide a username input name --}}
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" name="password"> {{-- provide a password input name--}}
                        </div>
                      </div>
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary px-4">Login</,button>
                      </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
