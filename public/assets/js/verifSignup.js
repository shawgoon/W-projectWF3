window.onload = function() {
  function changeBackgroundColor(elemnt) {
    if (elemnt) {
       elemnt.style.backgroundColor = "red";
     }
     return;
 }

  function verification() {
    var mess = '';
    if(document.formulaire.name.value == "")  {
     mess+="Veuillez entrer votre nom!\n";
     changeBackgroundColor(document.formulaire.name);
     document.formulaire.name.focus();
    }
   if(document.formulaire.firstname.value == "") {
     mess+="Veuillez entrer votre prenom!\n";
     changeBackgroundColor(document.formulaire.prenom);
     document.formulaire.firstname.focus();
    }
   if(document.formulaire.phonenumber.value == "") {
     mess+="Veuillez entrer votre adresse!\n";
     changeBackgroundColor(document.formulaire.Address);
     document.formulaire.phonenumber.focus();
    }
   if(document.formulaire.email.value == "") {
     mess+="Veuillez entrer votre adresse électronique!\n";
     changeBackgroundColor(document.formulaire.email);
     document.formulaire.email.focus();
    }

   var model_email = /^[^@]+@[^\.]+\.[^\.]+$/;
   if( ! model_email.test(document.formulaire.email.value) ) {
     mess+="Veuillez entrer une adresse électronique correcte !\n";
     changeBackgroundColor(document.formulaire.email);
     document.formulaire.email.focus();
    }

   if(document.formulaire.password.value == "") {
     mess+="Veuillez entrer votre password!\n";
     changeBackgroundColor(document.formulaire.pass);
     document.formulaire.password.focus();
    }
   if(document.formulaire.confirmPassword.value == "") {
     mess+="Veuillez entrer votre confirmation de password!\n";
     changeBackgroundColor(document.formulaire.cpass);
     document.formulaire.confirmPassword.focus();
    }
    if(document.formulaire.password.value != document.formulaire.confirmPassword.value) {
      mess += "Le mot de passe et la confirmation ne sont pas identiques !";
     changeBackgroundColor(document.formulaire.cpass);
     document.formulaire.confirmPassword.focus();
    }

      if(mess!='')
      {
          alert(mess);
          return false;
      }
  }
};
