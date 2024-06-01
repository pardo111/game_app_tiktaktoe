<!doctype html>
<html lang="en">

<head>
  <title>registrarse</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>



<body style="background-color: #508bfc;">
  <header>
    <form action="{{route('register')}}" method="post">
      @csrf

      <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <h3 class="mb-5">Crear cuenta</h3>
                  @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>

                    @foreach($errors->all() as $e)


<li>{{$e}}</li>
@endforeach
                    </ul>
                  </div>
                   @endif
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input id="name" type="text" name="name" class="form-control form-control-lg" value="{{old('name')}}"/>
                    <label class="form-label" for="typeEmailX-2">nombre</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input id="email" type="email" name="email" class="form-control form-control-lg"value="{{old('email')}}" />
                    <label class="form-label" for="typeEmailX-2">Email</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input id="password" type="password" name="password" class="form-control form-control-lg" value="{{old('password')}}"/>
                    <label class="form-label" for="typePasswordX-2">Contraseña</label>
                  </div>


                  <div data-mdb-input-init class="form-outline mb-4">
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control form-control-lg" value="{{old('password_confirmation')}}"/>
                    <label class="form-label" for="typePasswordX-2">Confirmar Contraseña</label>
                  </div>


                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">registrarse</button>
                  <hr class="my-4">

                  <a href="{{route('login')}}">iniciar sesion</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>