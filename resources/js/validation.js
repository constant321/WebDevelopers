
function ValidationEvent(){
   
    var name = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    passReg= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}$/;
    if(name!='' && pass != '') {
    if(pass.match(passReg)) {
    console.log("confirm");
    alert("All type of validation has been done.");
    return true;

    } else {
    alert("Invalid password.");
    return false;
    }
    } else {
    alert("All fields are required!");
    return false;
    }
    }
