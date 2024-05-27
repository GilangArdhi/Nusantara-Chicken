<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara chiken</title>
  <link rel="icon" href="{{asset('/assets/images/logo.png')}}" type="image">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/assets/css/login.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container">
  <div class="row w-100">
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <div class="login-form text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
        <h1>Sign up</h1>
       
        <form action="{{url('/register')}}" method="post">
          @csrf
          <div class="mb-3 text-start">
            <label for="email" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama anda disini">
          </div>
          <div class="mb-3 text-start">
            <label for="email" class="form-label">Alamat email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@address.com">
          </div>
          <div class="mb-3 text-start position-relative">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">

              <i class="bi bi-eye-slash center " id="togglePasswordIcon"></i>
           
          </div>
          <button class=" btn btn-purple w-100">Daftar</button>
          <div class="mt-3">
            <p>Sudah memiliki akun? <a href="/login">Masuk</a></p>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
      <h1><b>NUSANTARA CHICKEN</b>!</h1>
      <img src="{{asset('/assets/images/ayam login.png')}}" alt="Illustration" class="img-fluid">
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('togglePasswordIcon').addEventListener('click', function () {
    const passwordInput = document.getElementById('password');
    const passwordIcon = document.getElementById('togglePasswordIcon');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    passwordIcon.classList.toggle('bi-eye');
    passwordIcon.classList.toggle('bi-eye-slash');
  });
</script>
</body>
</html>
