function onBlurDeInputs(inputId) {
    var input = document.getElementById(inputId);

    var auxParaReq = inputId.split("_");
    var textoId = auxParaReq[0];

    if (textoId == "login-username") {
        regex = new RegExp("^([\\w-]+(?:\\.[\\w-]+)*)@((?:[\\w-]+\\.)*\\w[\\w-]{0,66})\\.([a-z]{2,6}(?:\\.[a-z]{2})?)$");
    } else if (inputId == "login-password") {
        regex = new RegExp("^((?=\\S*?[A-Z])(?=\\S*?[a-z])(?=\\S*?[0-9]).{6,})\\S$");
    } else if (textoId == "signup-username") {
        regex = new RegExp("^([\\w-]+(?:\\.[\\w-]+)*)@((?:[\\w-]+\\.)*\\w[\\w-]{0,66})\\.([a-z]{2,6}(?:\\.[a-z]{2})?)$");
    } else if (inputId == "signup-password") {
        regex = new RegExp("^((?=\\S*?[A-Z])(?=\\S*?[a-z])(?=\\S*?[0-9]).{6,})\\S$");
    } else if (inputId == "signup-cpassword") {
        regex = new RegExp("^((?=\\S*?[A-Z])(?=\\S*?[a-z])(?=\\S*?[0-9]).{6,})\\S$");
    }

    var resultado = regex.test(input.value);

    if (inputId == "signup-cpassword") {
        var pwd = document.getElementById("signup-password").value;
        var cpwd = input.value;

        if (pwd != cpwd){
            resultado = false;
            document.getElementById("signup-clabel").style.display = 'inline';
            document.getElementById("signup-clabel").style.marginLeft = '20px';
        } else {
            document.getElementById("signup-clabel").style.display = 'none';
        }
    }

    if (resultado == false && input.value != "") {
        input.style.borderColor = "red";
    }
    else if (resultado == false && input.value == "") {
        input.style.borderColor = "#ccc";
    }
    else {
        input.style.borderColor = "#00FF00"
    }

}
