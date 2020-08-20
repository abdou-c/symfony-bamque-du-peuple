var login = document.getElementById("login");
var password = document.getElementById("password");


function login(){
    let login = document.getElementById("login");
    if(login.value == ""){
        login.style.border == "1px solid red";
    }
    return false;
}