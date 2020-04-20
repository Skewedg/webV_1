

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xTrabajos Registro</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
      var onloadCallback = function() {
        alert("grecaptcha is ready!");
      };
    </script>
</head>
<body>
    <div class="col-lg-12 mb-5">
        <h2 class="mb-4 title-form">Registro para Usuarios</h2>


            
        <form action="" method="post" enctype='multipart/form-data'
              class="p-4 border rounded formContainer">


            <!-- Datos de la cuenta-->
            <fieldset class="form-group mb-4">
                <legend>Datos de la cuenta</legend>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Nombre</label>
                        <input type="text" id="userForm" class="form-control"
                            placeholder="Nombre(s)">
                    </div>
                     <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Apellido Paterno</label>
                        <input type="text" id="userForm" class="form-control"
                            placeholder="Apellido paterno">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Apellido materno</label>
                        <input type="text" id="userForm" class="form-control"
                            placeholder="Apellido materno">
                    </div>
                </div>
                <div class="row form-group justify-content-center">
                
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Correo</label>
                        <input type="text" id="userForm" class="form-control"
                            placeholder="Dirección de E-mail" require>
                    </div>
                 
                </div>
                <div class="row form-group ">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Contraseña</label>
                        <input type="password" id="userForm" class="form-control" placeholder="Contraseña" require>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="userForm">Repetir Contraseña</label>
                        <input type="password" id="userForm" class="form-control"
                            placeholder="Repetir Contraseña" require>
                    </div>
                </div>
            
            </fieldset>
             <!-- Recaptcha-->
             <div class="row form-group justify-content-center">
             <div class="g-recaptcha col-6" data-sitekey="6Lc2d-sUAAAAAKv9FnOZWkCeXJ2iZjqnCRsbFE6G"></div>
                <br>
             </div>
            
            <div class="row form-group justify-content-center">
                <div class="col-md-12 ">
                    <input type="submit" value="Registrarse" class="btn px-4 btn-primary text-white">
                </div>
                
            </div>
      
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    <script src="js/previsualizar.js"></script>

    <script src="js/bootstrap-select.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/previsualizar.js"></script>
</body>
</html>