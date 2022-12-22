var password = document.getElementById("inputSenha");
var confirm_password = document.getElementById("confirmSenha");
var botao_confirmar = document.getElementById("botaoConfirmar");
var msg_erro = document.getElementById("text-erro");
var msg_tam = document.getElementById("text-tam");

function validatePassword() {
	if (password.value.length == 0 || confirm_password.value.length == 0){
		botao_confirmar.disabled = true;
	}
    if (0 < password.value.length && password.value.length < 4) {
        if (msg_tam.classList.contains('d-none')) {
            msg_tam.classList.remove('d-none')
        }
    } else {
        if (!msg_tam.classList.contains('d-none')) {
            msg_tam.classList.add('d-none')
        }
    }
    if (password.value != confirm_password.value && confirm_password.value.length > 0) {
        if (!confirm_password.classList.contains('border-danger')) {
            confirm_password.classList.add('border-danger');
            if (msg_erro.classList.contains('d-none')) {
                msg_erro.classList.remove('d-none')
            }
            botao_confirmar.disabled = true;
        }
    } else {
        if (confirm_password.classList.contains('border-danger')){
            confirm_password.classList.remove('border-danger');
            if (!msg_erro.classList.contains('d-none')) {
                msg_erro.classList.add('d-none')
            }
            botao_confirmar.disabled = false;
        }
    }
}

if (password !== null){
    password.onkeyup = validatePassword;
}
if (confirm_password !== null){
    confirm_password.onkeyup = validatePassword;
}