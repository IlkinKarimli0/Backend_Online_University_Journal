// Confirm Password
function passwordConfirmation() {
	var password = document.querySelector("#password").value;
	var confirmPassword = document.querySelector("#confirmPassword").value;
	var submitBtn = document.querySelector("#submitBtn");
	
	if(password === confirmPassword)
	{
		submitBtn.disabled = false;
		document.querySelector('#passwordsError').hidden = true;
	}
	else {
		submitBtn.disabled = true;
		document.querySelector('#passwordsError').hidden = false;
	}
}