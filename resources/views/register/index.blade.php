<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Register</title>
    <link rel="icon" href="logo.png">

    {{-- Bootstrap CSS --}}   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="css/register.css" rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    
</head>

<body class="text-center">   
    <div class="row justify-content-center">
        <div class="col-md-4">
<main class="form-register w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <img class="mb-4" src="logo.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 fw-normal">Silahkan Mendaftar</h1>
    <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan nama anda" required autofocus value="{{ old('name') }}">
        <label for="floatingPassword"> Nama</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="name" placeholder="Masukkan username anda" required value="{{ old('username') }}">
      <label for="floatingPassword"> Username</label>
      @error('username')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
  </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" required value="{{ old('email') }}">
      <label for="floatingPassword"> Alamat Email</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="floatingPassword"> Sandi</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="masuk w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
    <small>Sudah mendaftar?<a href="/login" class="daftar"> Masuk.</a></small>
    <p class="mt-2 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>

</div>
</div>
    
  </body>
</html>
