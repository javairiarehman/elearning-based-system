function ValidateEmail() {
    var email = document.getElementById("stuemail").value;
    var lblError = document.getElementById("lblError");
    lblError.innerHTML = "";
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!expr.test(email)) {
        lblError.innerHTML = "email should be in a formate of example@mail.com";
    }
    else{
        lblError.innerHTML = "valid email.thanks";
    }
}



