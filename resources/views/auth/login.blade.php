<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
        <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">
        <style>
            .image-container {
              width: 730px; /* Ancho deseado del contenedor */
              height: 730px; /* Altura deseada del contenedor */
              overflow: hidden; /* Para recortar cualquier parte de la imagen que se desborde del contenedor */
            }
          
        
          </style>
        <style>
            .image-container {
                border: 2px groove #f0f0f0; /* Borde estilo groove de 2px con color gris claro */
                border-radius: 15px; /* Esquinas redondeadas de 15px */
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave alrededor del elemento */
                overflow: hidden; /* Oculta el contenido que se desborda del contenedor */
            }
            
            .image-container img {
                width: 100%; /* La imagen ocupa todo el ancho del contenedor */
                height: 100%; /* La imagen ocupa todo el alto del contenedor */
                object-fit: cover; /* La imagen se ajusta para cubrir el contenedor */
                object-position: left; /* Posiciona la imagen a la izquierda dentro del contenedor */
            }
          </style>

        <style>
            body {
                background-image: url('https://images.pexels.com/photos/326333/pexels-photo-326333.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
                background-size: cover; /* Para que el fondo se ajuste al tamaño de la pantalla */
                background-repeat: repeat; /* Para repetir el patrón de madera en todo el fondo */
            }
        </style>
    </head>


    <body>
        
        <section class="vh-100">
            
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 text-black">
          
                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" ></i>
                        <span class="h1 fw-bold mb-0" style="color:blanchedalmond;">Notes</span>
                      </div>
          
                  <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          
                    <form style="width: 23rem;">
          
                      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:beige" >Registrate</h3>
          
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form2Example18" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example18" style="color:bisque">Correo electronico</label> 
                      </div>
          
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form2Example28" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example28" style="color:bisque">Contraseña</label>
                      </div>
          
                      <div class="pt-1 mb-4">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="button">Login</button>
                      </div>
          
                      <p class="small mb-5 pb-lg-2" >
                        <a class="text-muted"  href="#!"> Olvidaste la contraseña?</a>
                        </p>
                        
                      <p style="color:bisque" >No tienes una cuenta? 
                        <a href="{{route('register')}}" class="link-info" >Registrate acá</a>
                    </p>
          
                    </form>
          
                  </div>
          
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block image-container">
                    <img src="https://images.pexels.com/photos/768474/pexels-photo-768474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                      alt="Login image">
                  </div>
              </div>
            </div>
        </section>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
