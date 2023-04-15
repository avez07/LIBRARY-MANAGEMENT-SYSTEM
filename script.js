
function password(){                                //ipassword show hide function for login page 
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
  function password2(){                                                 //ipassword show hide function for login page 
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
    function validate(){                                          //validation for signup form
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
    function admin() {                                                                    //admin and user login
      const user = document.getElementById('user').value;
      const pass = document.getElementById('password-1').value;
      var ad = document.getElementsByClassName('admin');
    
      if (user === 'AAvez' && pass === 'password') {
        
        console.log('Login successful');
        location.href = './admin-dashboard/book-issue.php';
        return false;
      } else {
        alert('Invalid username or password');
        return false;
      }
    }
    
    
      
      function Video() {                                                                 // Adding video validation
        var fileName = document.getElementById("vid-t1").value;
        var vid = document.getElementById("video");
        var vid1 = document.getElementById("vid1");

        if(fileName == null || fileName == ""){ 
          document.getElementById("vid-t").innerHTML = "Field cannot be blank." ;
          return false;
        }
         else if (vid.files.length == 0 && vid1.innerHTML == "") {
          vid1.innerHTML = "This field is required.";
          return false;
        } else if (vid.files.length > 0 && !vid.files[0].name.match(/\.(mp4|avi|mov|wmv)$/i)) {
          vid1.innerHTML = "Please select a video file";
          return false;
        } else {
          vid1.innerHTML = "";
          document.getElementById("vid-t").innerHTML = "" ;
          return true;
        }
      }
      
        function Pdf() {                                                            //Adding pdf validation
          var fileName = document.getElementById("not-t1").value;
          var pdf = document.getElementById("pdf");
          var pd = document.getElementById("pd");
          var thum = document.getElementById("thumb");
          var tum = document.getElementById("tum");

          if(fileName == null || fileName == ""){ 
            document.getElementById("not-t").innerHTML = "Field cannot be blank." ;
            return false;
          }
          else if (pdf.files.length == 0 && pd.innerHTML == "") {
            pd.innerHTML = "This field is required.";
            return false;
          } else if (pdf.files.length > 0 && !pdf.files[0].name.match(/\.(pdf)$/i)) {
            pd.innerHTML = "Please select a PDF file";
            return false;
          } 
          else if (thum.files.length == 0 && tum.innerHTML == "") {
            tum.innerHTML = "This field is required.";
            return false;
          } else if (thum.files.length > 0 && !thum.files[0].name.match(/\.(jpg|png)$/i)) {
            tum.innerHTML = "Please select a IMG file";
            return false;
          }
          else {
            pd.innerHTML = "";
            tum.innerHTML = "";
            document.getElementById("not-t").innerHTML = "" ;
            return true;
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
   
   function validate2(){                                                        //validation for book issued.php add student form
    var name = document.getElementById('s-name1').value;
    var id = document.getElementById('s-id1').value;
    var num = document.getElementById('s-num1').value;
    var addr = document.getElementById('s-add1').value;
    var bname = document.getElementById('b-name1').value;
    var bid = document.getElementById('b-id1').value;
    var issu = document.getElementById('issu1').value;
    var retu = document.getElementById('retu').value;
    // where the message shown id
    var name1 = document.getElementById('s-name');
    var id1 = document.getElementById('s-id')
    var num1 = document.getElementById('s-num');
    var addr1 = document.getElementById('s-add');
    var bname1 = document.getElementById('b-name');
    var bid1 = document.getElementById('b-id');
    var issu1 = document.getElementById('issu');
    var retu1 = document.getElementById('ret');

    if(name == null || name == ""){
      name1.innerHTML = "Please fill the information"
      return false;
    }
    else if(!isNaN(name)){
      name1.innerHTML = "Only character is allowed"
      return false;
    }
    else if(id == null || id == ""){
      id1.innerHTML = "Please fill the information"
      return false;
    }
    else if(/[ \W+]/.test(id)){
     id1.innerHTML = "special characters are not allowed"
      return false
    }
    else if(id.length >= 10){
      id1.innerHTML = "id should be smaller than 10 number"
      return false
    }
     else if(num == null || num == ""){
      num1.innerHTML = "Please fill the information"
      return false;
      }
   else if(isNaN(num)){
    num1.innerHTML = "Please enter valid phone number";
    return false ;
   }
   else if(num.length != 10){
    num1.innerHTML = "Number length should be 10 ";
    return false ;
   }
   else if(addr == null || addr == ""){
    addr1.innerHTML = "Please fill the information"
    return false;
    }
    else  if(bname == null || bname == ""){
     bname1.innerHTML = "Please fill the information"
    return false;
    }
    else if(!isNaN(bname)){
     bname1.innerHTML = "Only character is allowed"
      return false;
    }
    else if(/[ \W+]/.test(bid)){
      bid1.innerHTML = "special characters are not allowed"
       return false
     }
     else if(bid.length >= 10){
       bid1.innerHTML = "id should be smaller than 10 number"
       return false
     }
     else  if(issu == null || issu == ""){
      issu1.innerHTML = "Please fill the information"
     return false;
     }
     else  if(retu == null || retu == ""){
      retu1.innerHTML = "Please fill the information"
     return false;
     }else{
      return true
     }
  }

 