function formValidation1() {
	var email = document.getElementById('email');
	var password = document.getElementById('pwd');

	if (emailValidation(email, "* Please enter a valid email address *")) {
		if (passwordValidation(password, "* Please enter a valid password *")) {
		}
		return true;
	}
	return false;
}

function emailValidation(inputtext, alertMsg) {
var emailExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (inputtext.value.match(emailExp)) {
return true;
} else {
document.getElementById('p2').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

function passwordValidation(inputtext, alertMsg) {
var pswrdExp = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
if (inputtext.value.match(pswrdExp)) {
return true;
} else {
document.getElementById('p3').innerText = alertMsg; 
inputtext.focus();
return false;
}
}