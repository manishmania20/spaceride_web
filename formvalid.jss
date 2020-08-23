function formValidation() {
	var username = document.getElementById('firstname');
	var addr = document.getElementById('addr');
	var zip = document.getElementById('zip');
	var state = document.getElementById('state');
	var username = document.getElementById('username');
	var email = document.getElementById('email');

if (firstname.value.length == 0) 
	{
	document.getElementById('head').innerText = "* All fields are mandatory *"; 
	firstname.focus();
	return false;
	}

if (inputAlphabet(firstname, "* For your name please use alphabets only *")) {
	return true;
	}
	return false;
	}
	
function inputAlphabet(inputtext, alertMsg){
var alphaExp = /^[a-zA-Z]+$/;
if(inputtext.value.match(alphaExp)){
return true;
}else{
document.getElementById('p1').innerText = alertMsg;
inputtext.focus();
return false;
}
}