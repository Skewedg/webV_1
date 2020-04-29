<!doctype html>
<html lang="en">

<head>
  <title>X Trabajos &mdash; - Encuentra el trabajo de tus sueños</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />
  <link rel="shortcut icon" href="ftco-32x32.png">

  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li class="has-children">
                <span class="text-white"> CANDIDATO</span>
                <ul class="dropdown">
                  <li>
                    <form action="#" class="p-4 border rounded col-12">

                      <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Correo Electrónico</label>
                          <input type="text" id="fname" class="form-control" placeholder="Correo Electrónico">
                        </div>
                      </div>
                      <div class="row form-group mb-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Contraseña</label>
                          <input type="password" id="fname" class="form-control" placeholder="Contraseña">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                          <a href="usuarioIndex.html"><input type="button" value="Iniciar Sesión" class="btn px-4 btn-primary text-white"></a>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="has-children">
                <span class="text-success nav-link"> EMPRESA</span>
                  <ul class="dropdown">
                    <form action="#" class="p-4 border rounded col-12">

                      <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Correo Electrónico</label>
                          <input type="text" id="fname" class="form-control" placeholder="Correo Electrónico">
                        </div>
                      </div>
                      <div class="row form-group mb-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Contraseña</label>
                          <input type="password" id="fname" class="form-control" placeholder="Contraseña">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                          <a href="empresaIndex.html"> <input type="button" value="Iniciar Sesión" class="btn px-4 btn-primary text-white"></a>
                        </div>
                      </div>
                    </form>
                  </ul>
              </li>

    
              <li class="has-children ">
                <span class="text-success nav-link">   REGISTRARSE   </span>
                
                  <ul class="dropdown p-4 border rounded col-12">
                    <li>
                      <div>
                        <a href="formUsuario.php">USUARIO</a>
                      </div>
                    </li>
                    <hr>
                    <li> 
                      <div>
                        <a href="formEmpresa.php">EMPRESA</a>
                      </div>
                    </li>
                  </ul>
              </li>

            </ul>
          </nav>


          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                class="icon-menu h3 m-0 p-0 mt-2">
              </span>
            </a>
          </div>

        </div>
      </div>
    </header>


    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');"
      id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">El Trabajo de tus Sueños te está Esperando</h1>

            </div>


            <form method="post" class="search-jobs-form">

              <div class="row mb-5 align-items-center">

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Título del trabajo, compañía..">
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                    title="Estado">
                    <?php include 'app/region.php'?>
                  </select>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                    title="Municipio">
                    <?php include 'app/municipios.php'?>
                  </select>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                    title="Jornada Laboral">
                    <option>Medio Tiempo</option>
                    <option>Tiempo completo</option>
                  </select>
                </div>

              </div>

              <div class="row justify-content-center">
                <div class="col align-self-end col-12 col-sm-4 col-md-6 col-lg-4 mb-4 mb-lg-12 ">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span
                      class="icon-search icon mr-2"></span>Buscar Empleo</button>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 popular-keywords">
                  <h3>Trending Keywords:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                    <li><a href="#" class="">UI Designer</a></li>
                    <li><a href="#" class="">Python</a></li>
                    <li><a href="#" class="">Developer</a></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

        <a href="#next" class="scroll-button smoothscroll">
          <span class=" icon-keyboard_arrow_down"></span>
        </a>

      </section>
    
    
      <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2 class="text-white">¿Buscas un trabajo?</h2>
              <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
                impedit.</p>
            </div>
            <div class="col-md-3 ml-auto">
              <a href="#top" class="btn btn-warning btn-block btn-lg">Registrate</a>
            </div>
          </div>
        </div>
      </section>



      <footer class="site-footer">
        <!-- Botones Sliders
        <a href="#top" class="smoothscroll scroll-top">
          <span class="icon-keyboard_arrow_up"></span>
        </a>
  -->
        <div class="container">
          <div class="row mb-5">
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Search Trending</h3>
              <ul class="list-unstyled">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Web Developers</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">CSS3</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Company</h3>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Support</h3>
              <ul class="list-unstyled">
                <li><a href="#">Support</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Contact Us</h3>
              <div class="footer-social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-12">
              <p class="copyright"><small>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                  with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                    target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
            </div>
          </div>
        </div>
      </footer>
  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/bootstrap-select.min.js"></script>

  <script src="js/custom.js"></script>
  <script src="js/previsualizar.js"></script>


</body>

</html>