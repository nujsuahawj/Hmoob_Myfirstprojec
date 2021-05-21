var email=document.getElementById('email');
var pass=document.getElementById('password');
var email_error=document.getElementById('email_error');
var pass_error=document.getElementById('password_error');
var nl=document.getElementById('nl');
var nl_error=document.getElementById('nl_error');
var nb=document.getElementById('nb');
var nb_error=document.getElementById('nb_error');
var pwone=document.getElementById('pwone');
var pwone_error=document.getElementById('pwone_error');
function login_error(){
  if(nl.value.length <10){
    nl_error.style.display="block";
    nl.focus();
    return false;
  }
  if(nb.value.length !=11){
    nb_error.style.display="block";
    nb.focus();
    return false;
  }
  if(email.value.length <8){
    //email.style.border="1px solid red";
   email_error.style.display="block";
    email.focus();
   return false;
}
if(pass.value.length <6){
  //pass.style.border="1px solid red";
 pass_error.style.display="block";
 pass.focus();
  return false;
}
if(pwone.value.length<6){
  pwone_error.style.display="block";
  pwone.focus();
  return false;
}
}
function nlvarify(){
  if(nl.value.length>=10){
    nl_error.style.display="none";
    return true;
  }
}
function nbvarify(){
  if(nb.value.length=11){
    nb_error.style.display="none"
  }
}
function emailvarify(){
  if(email.value.length>=8){
    //email.style.border="0px";  
    email_error.style.display="none";
   return true;

}}
function passvarify(){
if(pass.value.length>=6){
   // pass.style.border="0px";  
    pass_error.style.display="none";
   return true;
 }
}
function pwonevarify(){
  if(pwone.value.length>=6){
    pwone_error.style.display="none";
    return true;
  }
}
nl.addEventListener('input',nlvarify);
nb.addEventListener('input',nbvarify);
email.addEventListener('input',emailvarify);
pass.addEventListener('input',passvarify);
pwone.addEventListener('input',pwonevarify);
