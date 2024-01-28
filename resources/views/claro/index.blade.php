<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="shortcut icon" />
<title>Los Imparables de Claro up</title>
<meta name="description" content="Login and Register Form Html Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register">
  <div class="hero-wrap d-flex align-items-center">
    <div class="hero-mask opacity-4 bg-secondary"></div>
    <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/image-1.jpg');"></div>
    <div class="hero-content w-100">
      <div class="container">
        <div class="row g-0 min-vh-100"> 
          <!-- Welcome Text
		  ========================= -->
          <div class="col-md-6 d-flex flex-column">
            <div class="logointro cont-img">
              <img src="panel/assets/images/Logo_LosImparables_2023.png" alt="">
            </div>
            <div class="row g-0 my-auto">
              <div class="col-11 col-sm-10 col-lg-9 mx-auto text-center">
                <div class="logo mt-5 mb-3"> <a href="#" title=""><img src="" alt=""></a> </div>
                <h1 class="text-5 fw-400 text-white mb-5"></h1>
                
                <p class="text-light text-2 mx-lg-5"></p>
              </div>
            </div>
          </div>
          <!-- Welcome Text End --> 
          
          <!-- Login Form
		  ========================= -->
      <x-auth-session-status class="mb-4" :status="session('status')" />
          <div class="col-md-6 d-flex align-items-center py-5">
            <div class="container my-auto py-4 shadow-lg bg-white">
              <div class="row">
                <div class="col-11 col-lg-10 mx-auto">
                  <h3 class="text-9 fw-600 text-center my-3">INGRESAR</h3>
                  <p class="text-center mb-4">No estas Registrado? <a href="{{ route('claro.registro') }}"><u>Registrate aqui</u></a></p>
                  <form id="loginForm" enctype="multipart/form-data" method="POST" action="{{ route('claro.login') }}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="email">Correo corporativo</label>
                      <input type="text"name="email" class="form-control rounded-0" id="email" value="{{old('email')}}" required placeholder="Ingresa tu correo de Claro">
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="password">Contraseña</label>
                      <input type="password" name="password" class="form-control rounded-0" id="password" required placeholder="Ingresa una contraseña">
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="row mt-4">
                      <div class="col">
                        <div class="form-check">
                          <input id="remember-me" name="remember" class="form-check-input rounded-0" type="checkbox">
                          <label class="form-check-label" for="remember-me">Recordar mi correo</label>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid my-4">
						<button class="btn btn-danger rounded-0" type="submit">Ingresar</button>
					</div>
                  </form>
                  
                  <p class="text-center">Olvidaste tu contraseña <a href="forgot-password-5.html"><u> Recupérala aquí</u></a>  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Login Form End --> 
        </div>
      </div>
    </div>
  </div>
</div>




<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  chat-icon="https:&#x2F;&#x2F;losimparablesdeclaroup.com&#x2F;images&#x2F;avatar&#x2F;sofia.png"
  chat-title="SofIA"
  agent-id="78459f24-c0ee-448f-9438-c8db302d1509"
  language-code="es"
></df-messenger>

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>