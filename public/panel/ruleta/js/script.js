let wheel = document.querySelector('.wheel');
let spinbtn = document.querySelector('.spinbtn');

let btnusar = document.querySelector('#btnusar');


 

btnusar.addEventListener('click', validar);

function validar() {

  var token = document.getElementById("usar_token").value
  var validartoken = document.getElementById("validartoken");

  //

  if (token === "") {
    Swal.fire({
      icon: 'error',
      title: 'Selecciona un tóken válido',
      confirmButtonColor: '#D52B1E',
      confirmButtonText: 'Aceptar',
      allowOutsideClick: false
    })
  } else {
    validartoken.style.display = "none";
    document.getElementById("token").value = token;
  }

  //document.getElementById("token").value=token;

}

spinbtn.addEventListener('click', girar);

function girar() {


  //if (giros > 0) {
  let rang = Math.random() * 7200;
  calcular(rang);

  //document.querySelector('.contador').innerHTML = 'TURNOS <span>' + giros + '</span>'; 

  /*
  }else{
    Swal.fire({
      title: 'VUELVA PRONTO EL JUEGO TERMINO!!',
      confirmButtonColor: '#D52B1E',
      confirmButtonText: 'Aceptar',
      allowOutsideClick: false
    }).then((result)=>{
      if (result.value == true) {
        giros = 3;
         document.querySelector('.elije').innerHTML = 'GIRAR PARA GANAR PREMIO';
         document.querySelector('.contador').innerHTML = 'TURNOS  <span>' + giros + '</span>';        
      }
    }) 
  } */

  function premio(premios, cant, foto) {

    //document.querySelector('.elije').innerHTML = 'TU PREMIO ES: ' + premios;
    document.getElementById("premios").value = premios;
    document.getElementById("cant").value = cant;

    let formulario = new FormData(document.getElementById('formulario'));
    fetch('ganador_add.php', {
      method: 'POST',
      body: formulario
    })
      .then(res => res.json())
      .then(data => {
        if (data == 'true') {

        } else {
          console.log(data);
        }
      });

    Swal.fire({
      icon: 'success',
      title: '¡GANASTE!<br><div class="cont-img" style="width:200px;background-image: url(' + foto + ');background-position:top center;background-size:75%;background-repeat:no-repeat"><img src="assets/images/bg1.png" alt=""></div> ' + premios ,
      confirmButtonColor: '#D52B1E',
      confirmButtonText: 'Guardar',
      allowOutsideClick: false
    })
    validartoken.style.display = "flex";
    var tokenremove = document.getElementById("usar_token");
    tokenremove.remove(tokenremove.selectedIndex);
    document.getElementById("usar_token").selectedIndex = "0";

  }



  function calcular(rang) {

    var premios1 = new Array()
    var cant_premio = new Array()
    var foto_premio = new Array()

    for (var i = 1; i < 13; i++) {

      var premioid = "premio" + i,
      cant_premioid = "cant_premio" + i,
      foto_prmeioid = "foto_premio" + i

      var premio1 = document.getElementById(premioid).value;
        premios1[i] = premio1

      var cant_premio1 = document.getElementById(cant_premioid).value;
      cant_premio[i] = cant_premio1

      var foto_premio1 = document.getElementById(foto_prmeioid).value;
      foto_premio[i] = foto_premio1   
    }

    deg = rang / 360;
    deg = (deg - parseInt(deg.toString().split(".")[0])) * 360;
    wheel.style.transform = "rotate(" + rang + "deg)";
    console.log(rang, deg);

    rang += Math.random() * 7200;

    setTimeout(() => {
      switch (true) {
        case deg > 0 && deg <= 30:
          premio(premios1[1], cant_premio[1], foto_premio[1]);
          break;
        case deg > 30 && deg <= 60:
          premio(premios1[12], cant_premio[12], foto_premio[12]);
          break;
        case deg > 60 && deg <= 90:
          premio(premios1[11], cant_premio[11], foto_premio[11]);
          break;
        case deg > 90 && deg <= 120:
          premio(premios1[10], cant_premio[10], foto_premio[10]);
          break;
        case deg > 120 && deg <= 150:
          premio(premios1[9], cant_premio[9], foto_premio[9]);
          break;
        case deg > 150 && deg <= 180:
          premio(premios1[8], cant_premio[8], foto_premio[8]);
          break;
        case deg > 180 && deg <= 210:
          premio(premios1[7], cant_premio[7], foto_premio[7]);
          break;
        case deg > 210 && deg <= 240:
          premio(premios1[6], cant_premio[6], foto_premio[6]);
          break;
        case deg > 240 && deg <= 270:
          premio(premios1[5], cant_premio[5], foto_premio[5]);
          break;
        case deg > 270 && deg <= 300:
          premio(premios1[4], cant_premio[4], foto_premio[4]);
          break;
        case deg > 300 && deg <= 330:
          premio(premios1[3], cant_premio[3], foto_premio[3]);
          break;
        case deg > 330 && deg <= 360:
          premio(premios1[2], cant_premio[2], foto_premio[2]);
          break;
      }

    }, 5000);

  }

}