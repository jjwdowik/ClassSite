function checkEmail(theForm){
	if (theForm.email.value != theForm.verifyEmail.value) {
		alert('Those emails don\'t match!');
		return false;
	}
	else{
		alert("Thank you for contacting me!");
		return true;
	}
}

