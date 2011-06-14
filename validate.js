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
   var x=document.forms["basicInfo"]["email"].value
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>x.length)
	{
	alert("Not a valid e-mail address");
	return false;
	}else{
	return true;
}
}

function checknames(){
	var fname=document.forms["basicInfo"]["firstname"].value
	//lgname = last name at graduation
	var lgname=document.forms["basicInfo"]["lastname"].value
	if(fname == "" || lgname == ""){
	alert("You forgot to enter your name.");
	return false;
}else{
	return true;
}
}

