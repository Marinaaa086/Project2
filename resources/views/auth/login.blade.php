<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <a href="/">
      <i class="bi-arrow-left h1"></i>
    </a>
  </div>
  
  <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
    <div class="card" style="width: 35%">
      <div class="card-body p-4">
        <h3 class="card-title text-center">Login</h3>
        <form>
          @csrf
          <div class="form-group mt-4">
            <label class="text-secondary">Email Anda</label>
            <input type="email" class="form-control border border-secondary form-control-lg" name="email"><br>
          </div>
          
          <div class="form-group mt-1">
            <label class="text-secondary">Password Anda</label>
            <input type="password" class="form-control border border-secondary form-control-lg" name="password">
          </div>
          
          <button type="submit" class="form-control btn btn-primary mt-5">Login</button>
        </form>
        
        <p class="mt-2 text-center">Belum punya akun? <a href="#" style="text-decoration: none">Ayo buat akun!</a></p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
