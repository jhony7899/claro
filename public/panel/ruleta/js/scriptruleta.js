const ruleta = document.querySelector('#ruleta');

ruleta.addEventListener('click', girar);
giros = 3;

function girar(){
  
  if (giros > 0) {
    let rand = Math.random() * 7200;
    calcular(rand);
    giros--;
    var sonido = document.querySelector('#audio');
    sonido.setAttribute('src', 'sonido/ruleta.mp3');
    document.querySelector('.contador').innerHTML = 'TURNOS <span>' + giros + '</span>'; 
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
  } 


function premio(premios){

  document.querySelector('.elije').innerHTML = 'TU PREMIO ES: ' + premios;

  Swal.fire({
    icon: 'success',
    title:'GANASTE!!!<br> ' + premios,
    confirmButtonColor: '#D52B1E',
    confirmButtonText: 'Aceptar',
    allowOutsideClick: false
  })
}


 function calcular(rand) {
  var premio1=document.getElementById("premio1").value; 
  var premio2=document.getElementById("premio2").value; 
  var premio3=document.getElementById("premio3").value; 
  var premio4=document.getElementById("premio4").value; 
  var premio5=document.getElementById("premio5").value; 
  var premio6=document.getElementById("premio6").value; 
  var premio7=document.getElementById("premio7").value; 
  var premio8=document.getElementById("premio8").value; 
  var premio9=document.getElementById("premio9").value; 
  var premio10=document.getElementById("premio10").value; 
  var premio11=document.getElementById("premio11").value; 
  var premio12=document.getElementById("premio12").value; 
  valor = rand / 360;
  valor = (valor - parseInt(valor.toString().split(".")[0]))* 360;
  ruleta.style.transform = "rotate("+rand+"deg)";

  setTimeout(() => {
  switch (true) {
    case valor > 0 && valor <= 30:
     premio(premio1);
     break;
     case valor > 30 && valor <= 60:
     premio(premio2);
     break;
     case valor > 60 && valor <= 90:
     premio(premio3); 
     break; 
     case valor > 90 && valor <= 120:
     premio(premio4);
     break;
     case valor > 120 && valor <= 150:
     premio(premio5);
     break; 
     case valor > 150 && valor <= 180:
     premio(premio6);
     break;
     case valor > 180 && valor <= 210:
     premio(premio7);
     break;
     case valor > 210 && valor <= 240:
     premio(premio8); 
     break;
     case valor > 240 && valor <= 270:
      premio(premio9); 
      break;
      case valor > 270 && valor <= 300:
        premio(premio10); 
        break;
        case valor > 300 && valor <= 330:
          premio(premio11); 
          break;
          case valor > 330 && valor <= 360:
            premio(premio12); 
            break;
  }

 }, 5000);

}
}