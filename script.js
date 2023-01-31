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

