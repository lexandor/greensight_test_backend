
form = document.querySelector('.form')
label = document.querySelector('.info')

form.addEventListener('submit', (e)=>{
	e.preventDefault()
	label.innerHTML = ''

	formBody = new FormData(form)
	// Допилить валидацию на Js

	fetch('form_validation.php',{
		method: "POST",
		body: formBody
	})
	.then(response => response.json())
	.then(data => {
		console.log(data);

		if (!data.res) {

			for (let i = 0; i < data.errors.length; i++){
				label.innerHTML += '<div class="alert alert-danger" role="alert">' + data.errors[i] + '</div>'
			}

		} else {
			form.style.display = "none";
			label.innerHTML = '<div class="alert alert-success" role="alert">Форма успешно отпралена</div>'
		}
	})

})

