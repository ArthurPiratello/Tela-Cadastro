function validar() {


    if(document.form.nome.value == "") {
       alert('Preencha o campo NOME.')
       return false;
    }

    if(document.form.cpf.value == ""){
        alert('Preencha o campo CPF.')
        return false;
    }

}