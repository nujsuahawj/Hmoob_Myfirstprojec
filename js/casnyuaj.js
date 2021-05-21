var email=document.getElementById('Email');
var pass=document.getElementById('Pass');
var E_error=document.getElementById('E_error');
var P_error=document.getElementById('P_error');
function casnyuaj(){
    if(email.value.length <8){
        //email.style.border="1px solid red";
       E_error.style.display="block";
        email.focus();
       return false;
    }
    if(pass.value.length <6){
        //pass.style.border="1px solid red";
       P_error.style.display="block";
       Pass.focus();
        return false;
      }
}
function Email_varify(){
    if(email.value.length>=8){
        E_error.style.display="none";
        return true;
    }
}
function Pass_varify(){
    if(pass.value.length>=6){
        P_error.style.display="none";
        return true;
    }
}
var form=document.getElementById('formlogin');
var fogetform=document.getElementById('fogetpassowordform');
var lue=document.getElementById('lue');
lue.addEventListener('click',plojlogin);
function plojlogin(){
    fogetform.style.display="block";
    form.style.display="none";
    return true;
}
email.addEventListener('input',Email_varify);
pass.addEventListener('input',Pass_varify);
var foget=document.getElementById('fogetpassword');
var foget_error=document.getElementById('fogetpassword_error');
function tsincos(){
    if(foget.value.length <8){
        foget_error.style.display="block";
        foget.focus();
        return false;
    }
}
foget.addEventListener('input',tsincos);
function foget_varify(){
    if(foget.value.length >=8){
        foget_error.style.display="none";
        return true;
    }
}