document.getElementById("submitBtn").addEventListener("click", ValidateInput);

function ValidateInput(form){

    if(form.passwordFirst.value != form.passwordSecond.value){
        window.alert("passwords are not matching!")
        return false;
    }
    if(form.mailFirst.value != form.mailSecond.value){
        window.alert("mails are not mathing!")
        return false;
    }

    return true;

    window.alert(firstName)
}
