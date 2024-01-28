<html lang="es">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Registro Los Imparables de Claro up</title>
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
                
                </div>
            </div>
          </div>
          <!-- Welcome Text End --> 
          
          <!-- Register Form
		  ========================= -->
          <div class="col-md-6 d-flex align-items-center py-5">
            <div class="container my-auto py-4 shadow-lg bg-white">
              <div class="row">
                <div class="col-11 col-lg-10 mx-auto">
                  <h3 class="text-9 fw-600 text-center my-3">Registrarme </h3>
                  <p class="text-center mb-4">Ya estas registrado? <a href="{{ route('claro.index') }}"><u>Ingresar</u></a></p>
                  <form id="registerForm" method="post" enctype="multipart/form-data" action="{{ route('claro.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="emailAddress">Correo corporativo</label>
                      <input type="email" class="form-control rounded-0" id="email"  name="email" required placeholder="Ingresa tu correo de Claro" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                    <input type="email" class="form-control rounded-0" id="email_confirmation" name="email_confirmation" required placeholder="Confirma tu correo corporativo" value="{{old('email_confirmation')}}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-input-error :messages="$errors->get('email_confirmation')" class="mt-2" /> 
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="text">Cedula</label>
                      <input type="text" class="form-control rounded-0" id="cedula" name="cedula" required placeholder="Ingresa tu numero de cedula sin puntos ni comas" value="{{old('cedula')}}">
                      <x-input-error :messages="$errors->get('cedula')" class="mt-2" /> 
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="text">Ciudad</label>
                      <select id='primerSelect' class='form-control' name='ciudad' value="{{old('ciudad')}}" onchange="cargarSegundoSelect(this)">
                      <option value=''>Selecciona...</option>
                     @foreach ($ciudades as $ciudad)
                     <option value='{{$ciudad->id}}'>{{$ciudad->nombre}}</option>
                     @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('ciudad')" class="mt-2" /> 
                    </div>
                    
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="text">CAV</label>
                      <select id="cav" class='form-control' name='CAV'>
                      <option value=''>Selecciona...</option>
                    </select>
                    <x-input-error :messages="$errors->get('CAV')" class="mt-2" /> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="loginPassword">Contraseña</label>
                      <input type="password" class="form-control rounded-0" id="password" name="password" required placeholder="ingresa una contraseña">
                    </div>
                    <div class="mb-3">                      
                      <input type="password" class="form-control rounded-0" id="password_confirmation" name="password_confirmation" required placeholder="Confirma tu contraseña">
                      <!-- Contenedor para mensaje de error -->
                      <x-input-error :messages="$errors->get('password')" class="mt-2" /> 
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> 
                    </div>

                    <div class="d-grid my-4">
			 			        <button class="btn btn-dark rounded-0" type="submit">Registrarme</button>
				          	</div>
                    <p class="text-center text-muted text-2 mb-0">Al registrarte en portal aceptas nuestros  <a href="#">Terminos y Condiciones</a> y  <a href="#">Privacidad</a></p>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Register Form End --> 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>
<script>
  function cargarSegundoSelect(ciudad){
     let ciudadId = ciudad.value;
     fetch('registro/'+ciudadId+'/cavs').then(response=> response.json()).then(jsonData => buildCAVS(jsonData))
  }

  function buildCAVS(jsonCavs){
  let CavSelected = document.getElementById('cav');
  ClearSelect(CavSelected);
  jsonCavs.forEach(cav => {
    let Optiontag = document.createElement('option');
    Optiontag.value = cav.id;
    Optiontag.innerHTML = cav.cav;
    CavSelected.append(Optiontag);
  });
  }
 
  function ClearSelect(select){
    while(select.options.length > 1){
      select.remove(1);
    }
  }
 
</script>
</body>
</html>