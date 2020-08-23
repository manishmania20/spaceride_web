function formValidation()
{
var uname = document.registration.username;
var uemail = document.registration.email;
var passid = document.registration.password;
var umsex = document.registration.msex;
var ufsex = document.registration.fsex; 
var ucountry = document.registration.location;
var uadd = document.registration.addr;
var uzip = document.registration.zip;
if(allLetter(uname))
{
if(ValidateEmail(uemail))
{
if(passid_validation(passid,7,12))
{
if(validsex(umsex,ufsex))
{
if(countryselect(ucountry))
{
if(alphanumeric(uadd))
{ 
if(allnumeric(uzip))
{
}
} 
}
} 
}
}
}
return false;
}

function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}