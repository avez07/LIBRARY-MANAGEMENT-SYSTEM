function login(){
  window.location.assign("/login.html");
return false
}
function signup(){
  window.location.assign("/signup.html");
  return false
}
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
   
