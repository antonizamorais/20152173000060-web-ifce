function validar() {
	var nome = form.nome.value;
	var sexo = form.sexo.value;
	var datanasc = form.datanasc.value;
	var cpf = form.cpf.value;
	var endereco = form.endereco.value;
	var bairro = form.bairro.value;
	var cidade = form.cidade.value;
	var estado = form.estado.value;
	var cep = form.cep.value;
	var email = form.email.value;
	var senha = form.senha.value;
	var conf_senha = form1.conf_senha.value;

	if (nome.length < 10) {
		alert('Digite seu nome completo');
		form1.nome.focus();
		return false;
	}

	if ((email.length != 0) && ((email.indexOf("@")<1)||(email.indexOf('.')<1)))  {
		alert("email inválido");
		form.email.value = "";
		form.email.focus();
		return false;
	}

	if (senha != rep_senha) {
		alert('Senhas diferentes');
		form1.senha.focus();
		return false;
	}
}

