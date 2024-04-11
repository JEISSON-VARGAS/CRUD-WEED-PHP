<!doctype html>
<html lang="en">
    <head>
        <title>REGISTER | PHP</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href ="{{ asset('assets/estilos.css')}}"
    
</head>

    <body>
    <section class="h-100 gradient-form" style="background-color: #d8363a;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://cdn.itsyourepilepsy.com/wp-content/uploads/2021/09/Cannabis-768x512.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">CRUD | PHP</h4>
                </div>

                <form action="{{ route('register') }}" method="post">
    @csrf
                  <p>REGISTRARSE</p>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Nombre</label>
                    <input type="text" name="name" id="form2Example11" class="form-control"
                      placeholder="Nombre Y Apellido" />
                  </div>


                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Correo</label>
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Correo" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Contraseña</label>
                    <input type="password" name ="password_confirmation" id="form2Example22" class="form-control"/>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Confirmar Contraseña</label>
                    <input type="password" name ="password" id="form2Example22" class="form-control" placeholder="Debe Coincidir" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">REGISTRARSE</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Ya tienes una cuenta?</p>
                    <a href="{{ route('login') }}" class="btn btn-outline-danger">Iniciar Sesion</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">MARIA AMIGA</h4>
                <p class="small mb-0">La marihuana, también conocida como cannabis, es una planta con propiedades psicoactivas que ha sido utilizada con diversos fines a lo largo de la historia. Sus principales componentes activos son el tetrahidrocannabinol (THC) y el cannabidiol (CBD).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
