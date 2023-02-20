
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
      document.getElementById("eye-4").style.display = "none";
      document.getElementById("eye-3").style.display = "inline";
    } 
     else {
      y[3].type = "password";
      y[4].type = "password";
      document.getElementById("eye-2").style.display = "none";
      document.getElementById("eye-1").style.display = "inline";
      document.getElementById("eye-3").style.display = "none";
      document.getElementById("eye-4").style.display = "inline";
     
    }
    }
    function validate(){
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var user = document.getElementById("username").value;
      var pass1 = document.getElementById("password1").value;
      var pass2 = document.getElementById("password2").value;
  

      if(name == null || name == ""){
          document.getElementById("names").innerHTML = "Please fill the text" ;
          return false;
      }
      else if(!isNaN(name)){
        document.getElementById("names").innerHTML= "Only characters is allowed";
        return false;
      }
      else if(email == null || email == ""){
      document.getElementById("email-id").innerHTML = "Please fill the text" ;
        return false;
    }
    else if (/[^a-z0-9@.]/.test(email)) {
      document.getElementById("email-id").innerHTML="Email contain only Alphanumeric character";
        
        return false;
    }
    
    else if(email.indexOf('@') <= 0 || email.indexOf('.') <= 0){
      document.getElementById('email-id').innerHTML = "@  '.' Position are Invalid ";
      return false
    }
    
    else if(email.charAt(email.length-1) == "@" || email.charAt(email.length-1) == "."){
      document.getElementById('email-id').innerHTML = "You canot type a @ or '.' in the end of email";
      return false
    }
    
    else if(email.charAt(email.length-4) != "." && email.charAt(email.length-3) != "."){
      document.getElementById('email-id').innerHTML = "'.' Position are invalid";
      return false
    }
    else if (user== null || user == ""){
      document.getElementById("user").innerHTML = "Please fill the text" ;
      return false
    }
    else if (pass1== null || pass1 == ""){
      document.getElementById("pass1").innerHTML = "Please fill the text" ;
      return false
    }
    else if(pass1[0] !== pass1[0].toUpperCase()){
      document.getElementById('pass1').innerHTML = "Frist letter should be uppercase "
      return false
    }
     else if(!/[a-z]/.test(pass1)){
      document.getElementById('pass1').innerHTML = "Atleast one lowercase character"
      
      return false
     }
     else if(!/[0-9]/.test(pass1)){
      document.getElementById('pass1').innerHTML = "Atleast one number"
      
      return false
     }
     else if(!/[ \W+]/.test(pass1)){
      document.getElementById('pass1').innerHTML = "Atleast one special characters"
      
      return false
     }
     else if (pass2 == null || pass2 == ""){
      document.getElementById('pass2').innerHTML = "Plese fill the text"
      return false;
     }
     else if( pass1 != pass2){
      document.getElementById('pass2').innerHTML = "Password don't match"
      return false;
     }

    }
    function admin(){
      const user = document.getElementById('user').value;
      const pass = document.getElementById('password-1').value;
     

      if(user === 'admin' && pass === 'password'){
        console.log('Login successful');
        location.href=("/admin-dashboard/book-issue.html")
        // document.getElementById('l-name').innerHTML= "Welcome";
       
        return false
       
    }
    else{
        console.log('Login failed. Incorrect Username or Password');
       
    }
      }
      
      function Video(){
      var fileName = document.getElementById("video").value;
      var allowedExtensions = ['mp4', 'avi', 'mov', 'wmv', 'flv'];
      for(var i = 0; i < allowedExtensions.length; i++){
      if(fileName.indexOf(allowedExtensions[i]) > -1) {
        return true;
      }
    
      else {
        document.getElementById('vid').innerHTML = "Please add video only"      
        return false;
      }
    }
    
    }
    function Pdf(){
      var fileName = document.getElementById("pdf").value;
      var allowedExtensions2 = ['pdf', 'html','docx','pptx'];
      for(var i = 0; i < allowedExtensions2.length; i++){
      if(fileName.indexOf(allowedExtensions[i]) > -1) {
        console.log("login")
        return true;
        
      }
    
      else {
        document.getElementById('pd').innerHTML = "Please add notes only"
        alert("pleas type note")
        return false;
      }
    }
    }

    function addrow(){
      var table = document.getElementById('datatables');
      var name = document.getElementById('name').value;
      var nid = document.getElementById('id').value;
      var num = document.getElementById('num').value;
      var adrr = document.getElementById('adrr').value;
      var book = document.getElementById('i-book').value;
      var bookid = document.getElementById('i-book-id').value;
      var issue = document.getElementById('issued').value;
      var retuen = document.getElementById('return').value;
      count = 0

      var row = table.insertRow(1);

      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
      var cell7 = row.insertCell(6);
      var cell8 = row.insertCell(7);
      var cell9 = row.insertCell(8);
      count++;
      
      cell1.innerHTML = count
      cell2.innerHTML = name;
      cell3.innerHTML = nid;
      cell4.innerHTML = num;
      cell5.innerHTML = adrr;
      cell6.innerHTML = book;
      cell7.innerHTML = bookid;
      cell8.innerHTML = issue;
      cell9.innerHTML = retuen;
    }
    // window.onload = function() {
    //   window.history.forward();
    // };
   
   
    

    

   
 
   