function formValidation() {
	var username = document.getElementById('username');
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var gender = document.getElementById('gender')
	var dob = document.getElementById('dob');
	var contact = document.getElementById('contact');
	var location = document.getElementById('country');
	var addr = document.getElementById('addr');
	var zip = document.getElementById('zip');

if (username.value.length == 0) 
	{
	document.getElementById('head').innerText = "* All fields are mandatory *"; 
	username.focus();
	return false;
	}

if (inputAlphabet(username, "* For your name please use alphabets only *")) {
	if (emailValidation(email, "* Please enter a valid email address *")) {
		if (passwordValidation(password, "* Please enter a valid password *")) {
			if(genderValidation(msex,fsex,osex, "*Please select something *")){
				if(dobValidation(dob, "*Please enter valid dob * ")){
					if(contValidation(contact, "* Please enter valid contact *")){
						if(locSelection(location, "* Please select a country *")){
							if (textAlphanumeric(addr, "* Please enter proper addr *")) {
								if(zipValidation(zip, "* Please enter proper zip code *")) {
			}
	return true;
	}
	}
	}
	}
	}
	}
	}
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

function genderValidation(msex,fsex,osex,alertMsg)
{
x=0;
if(msex.checked) 
{
x++;
} if(fsex.checked)
{
x++; 
} if(osex.checked)
{
x++; 
}

if(x==0)
{
document.getElementById('p8').innerText = alertMsg;
msex.focus();
return false;
}else{
	return true;
}
}

function dobValidation(inputtext, alertMsg){
var dobExpression = /^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/;
if (inputtext.value.match(dobExpression)){
return true;
}else{
document.getElementById('p4').innerText = alertMsg;
inputtext.focus();
return false;
}
}

function contValidation(inputtext, alertMsg) {
var contExpression = /^[0-9]+$/;
if (inputtext.value.match(contExpression)) {
return true;
} else {
document.getElementById('p5').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

function locSelection(inputtext, alertMsg) {
if (inputtext.value == "Please Choose") {
document.getElementById('p6').innerText = alertMsg; 
inputtext.focus();
return false;
} else {
return true;
}
}

function textAlphanumeric(inputtext, alertMsg) {
var alphaExpression = /^[0-9,a-zA-Z]+$/;
if (inputtext.value.match(alphaExpression)) {
return true;
} else {
document.getElementById('p7').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

function textAlphanumeric(inputtext, alertMsg) {
var contExpression = /^[0-9]+$/;
if (inputtext.value.match(contExpression)) {
return true;
} else {
document.getElementById('p9').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

