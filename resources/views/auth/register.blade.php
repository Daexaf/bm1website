<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Register</title>
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h3>Halaman Registrasi</h3>
        <form action="{{route('register-proses')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="form1Example12" class="form-label">Name</label>
                <input type="text" id="form1Example12" class="form-control form-control-lg" name="name" placeholder="Nama lengkap" value="{{old('name')}}">
              </div>
              @error('name')
                <small>{{$message}}</small>
              @enderror
          <div class="mb-4">
            <label for="form1Example13" class="form-label">Email address</label>
            <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" placeholder="Alamat Email" value="{{old('email')}}">
          </div>
          @error('email')
            <small>{{$message}}</small>
          @enderror
          <div class="mb-4">
            <label for="form1Example23" class="form-label">Password</label>
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" placeholder="Password" value="{{old('password')}}">
          </div>
          @error('password')
            <small>{{$message}}</small>
          @enderror
          <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
        </form>
      </div>
    </div>
  </div>
</section>
<script src="{{asset('lte/assets/js/core/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('lte/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('lte/assets/js/core/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

  @if($message = Session::get('failed'))
  <script>
    Swal.fire({
        icon: "error",
        title: "Register Gagal",
        text: "{{ $message }}",
    });
  </script>
  @endif

  @if($message = Session::get('success'))
  <script>
    Swal.fire({
        icon: "success",
        title: "Berhasil Register",
        text: "{{ $message }}",
    });
  </script>
  @endif
</body>
</html>
