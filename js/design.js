// hau nos choce lo yog coj cais//
var choose=document.getElementById('choose');
var choose1=document.getElementById('choose1');
var cais=document.getElementById('cais');
function showcais(){
	cais.style.display="block";
}
choose.addEventListener('click',showcais);
choose1.addEventListener('click',showcais);

function lawm(){
  var valid= false;
  var x=document.kuv.nou;
  for(var i=0;i<x.length;i++){
    if(x[i].checked){
      valid=true;
      break;
    }
  }
  if(valid){
    //alert("Puas sai lis nos tiag");

  }else{
    alert("choose girls or man");
    return false;
  }
}