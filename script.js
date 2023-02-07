
function password(){
  var x = document.getElementsByClassName("log");
  if (x[1].type === "password") {
    x[1].type = "text";
    document.getElementById("eye-1").style.display = "none";
    document.getElementById("eye-2").style.display = "inline";
   
  } 
   else {
    x[1].type = "password";
    document.getElementById("eye-1").style.display = "inline";
    document.getElementById("eye-2").style.display = "none";
  }
  }
  function password2(){
    var y = document.getElementsByClassName("sign");
    if (y[3].type === "password" || y[4].type === "password") {
      y[3].type = "text";
      y[4].type = "text";

      document.getElementById("eye-1").style.display = "none";
      document.getElementById("eye-2").style.display = "inline";
     
    } 
     else {
      y[3].type = "password";
      y[4].type = "password";
      document.getElementById("eye-2").style.display = "none";
      document.getElementById("eye-1").style.display = "inline";
     
    }
    }
    function validate(){
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var user = document.getElementById("username").value;
      var pass1 = document.getElementById("password1").value;
      var pass2 = document.getElementById("password2").value;
    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
      


      if(name == null || name == ""){
          document.getElementById("names").innerHTML = "please fill the text" ;
          return false;
      }
      else if(!isNaN(name)){
        document.getElementById("names").innerHTML= "only characters is allowed";
        return false;
      }
      else if(email == null || email == ""){
      document.getElementById("email-id").innerHTML = "please fill the text" ;
        return false;
    }
    else if (/[^a-z0-9@.]/.test(email)) {
      document.getElementById("email-id").innerHTML="email contain only alphanumeric character";
        
        return false;
    }
    
    else if(email.indexOf('@') <= 0 || email.indexOf('.') <= 0){
      document.getElementById('email-id').innerHTML = "@  '.' position are invalid ";
      return false
    }
    
    else if(email.charAt(email.length-1) == "@" || email.charAt(email.length-1) == "."){
      document.getElementById('email-id').innerHTML = "you canot type a @ or '.' in the end of email";
      return false
    }
    
    else if(email.charAt(email.length-4) != "." && email.charAt(email.length-3) != "."){
      document.getElementById('email-id').innerHTML = "'.' position are invalid";
      return false
    }
   

    else if (user== null || user == ""){
      document.getElementById("user").innerHTML = "please fill the text" ;
      return false
    }
    else if (pass1== null || pass1 == ""){
      document.getElementById("pass1").innerHTML = "please fill the text" ;
      return false
    }
    else if(/[^A-z]/.test(pass1)){
      document.getElementById('pass1').innerHTML = "atleast one uppercase character is allowed"
      return false
    }
  }
