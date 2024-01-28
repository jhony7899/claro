$(document).ready(main);
var contador= 1;
function main(){
$('.menu_bar').click(function(){
if(contador == 1){

$('.nav2').animate({
left:'0'
});
contador=0;
}
else{

$('.nav2').animate({
left:'-100%'
});
contador=1;
}
});
}