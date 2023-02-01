function showform(){
 var b = document.getElementById('frist-form');
    b.style.display = 'none';

 var head = document.getElementsByClassName('login-form');
 for(i = 0; i < head.length; i++){
   head[i].style.display = 'block';

 }
}
function signup(){
   var b = document.getElementById('frist-form');
      b.style.display = 'none';
  
   var head = document.getElementsByClassName('signup-form');
   for(i = 0; i < head.length; i++){
     head[i].style.display = 'block';
  
   }
  }
  function login(){
   var b = document.getElementsByClassName('signup-form');
   for(i = 0; i < b.length; i++){
      b[i].style.display = 'none';
   }
  
   var head = document.getElementsByClassName('login-form');
   for(i = 0; i < head.length; i++){
     head[i].style.display = 'block';
  
   }
  }
  function password(){
   var pass = document.getElementsByClassName('form-input')
   if(pass[2].type === "password"){
      pass[2].type = "text";
      document.getElementById('eye-1').style.display = 'none';
      document.getElementById('eye-2').style.display = 'inline';
   }
   else{
      pass[2].type = "password";
      document.getElementById('eye-1').style.display = 'inline';
      document.getElementById('eye-2').style.display = 'none';
      
   }
  }
 
     
   
 

