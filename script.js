function showform(){
 var b = document.getElementById('frist-form');
    b.style.display = 'none';                                       //show login form on click function

 var head = document.getElementsByClassName('login-form');
 for(i = 0; i < head.length; i++){
   head[i].style.display = 'block';

 }
}


function signup(){
   var b = document.getElementById('frist-form');
      b.style.display = 'none';
  
   var head = document.getElementsByClassName('signup-form');               //show signup  form on click function         
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
   var hide = document.getElementsByClassName('fa-eye')
   var show = document.getElementsByClassName('fa-eye-slash')                                    //password hide & show on mouseup and doun function 
   if(pass[2].type === "password"||pass[9].type === "password"||pass[10].type === "password"){
      pass[2].type = "text";
      pass[9].type = "text";
      pass[10].type = "text";
      
    
       for(i = 0; i < hide.length; i++){
         hide[i].style.display = 'none';
       }
       for(i = 0; i < show.length; i++){
         show[i].style.display = 'inline';

       }
         }
   else{
      pass[2].type = "password";
      pass[9].type = "password";
      pass[10].type = "password";
      var hides = document.getElementById('fa-eye-slash')
     var shows = document.getElementById('fa-eye')
     for(i = 0; i < hide.length; i++){
      hide[i].style.display = 'inline';
    }
    for(i = 0; i < show.length; i++){
      show[i].style.display = 'none';

    }
   }
  }
 
     
   
 

