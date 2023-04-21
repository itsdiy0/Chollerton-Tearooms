'use strict'

function checkInputsNotEmpty(){
    let fullName = document.forms["dataForm"]["fullName"].value;
    let eMail = document.forms["dataForm"]["eMail"].value;
    let pNumber = document.forms["dataForm"]["pNumber"].value;
    let message = document.forms["dataForm"]["message"].value;
    let warningMessage = document.getElementById("warningMessage");
    if((fullName==="") || (eMail==="") || (pNumber==="") || (message==="")){
        warningMessage.style.display = "block";
        return false;
    }
    return true;
};

