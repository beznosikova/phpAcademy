window.onload = function(){
	var formElement = document.getElementById("contactForm");
	formElement.addEventListener("submit", checkData);
}

function checkData(e){
	var errorElement = document.getElementById("contactError");
	errorElement.innerText = "";

	var name = /[а-яА-Яa-zA-Z]{2,}/,
		email = /\b[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,4}\b/i,
		phone = /\+38 \(\d{3}\) \d{3}-\d{2}-\d{2}/,
		mes = /.{5,}/;
	var patterns = {name, email, phone, mes};
	var currentElement = null;
	var isValid = true;

	for (key in patterns){
		currentElement = document.getElementById(key);
		if (!patterns[key].test(currentElement.value)){
			isValid = false;
			break;
		}
	}

	if (!isValid) {
		errorElement.innerText = "Вы ввели неверные данные!";
		e.preventDefault();
	}
}