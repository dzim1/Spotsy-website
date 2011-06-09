function validateReg() {
	alert("Your passwords don't match");
   /*var valid = true;
   if (isEmpty(document.getElementById('firstname')) || isEmpty( document.getElementById('lastname')) ||  document.getElementById('currlastname')) {
      valid = false;
   } else if (checkpasswords() == false) {
      valid = false;
   } else if (checkemail() == false) {
      valid = false;
   }
   return valid;*/
   return false;
}

function isEmpty(input) {
	if (input.value.length == 0) { 
		alert("You must fill in all fields");
		return true; 
	} else {
		return false;
	}
}

function checkpasswords() {
	var pass1 = document.getElementById('password1');
	var pass2 = document.getElementById('password2');
	
	if (pass1 != pass2) {
		alert("Your passwords don't match");
		return false;
	} else {
		return true;
	}
}

function checkemail() {
	var email = document.getElementById('email');
	
	if((email.indexOf(".") > 2) && (email.indexOf("@") > 0)) {
		return true;
	} else {
	   return false;
	}
}
