function validaForm() {
  var campos = document.querySelectorAll('.campo')
  let mensagens = document.querySelectorAll('.mensagem')

  for (let i = 0; i < campos.length; i++) {
    mensagens[i].innerHTML = ''
    if (campos[i].value == '') {
      mensagens[i].appendChild(document.createTextNode('Campo obrigatório.'))
      return false
    }
    else if (campos[i].value.length < 6) {
      mensagens[i].appendChild(document.createTextNode('O mínimo de caracteres é 6.'))
      return false
    }
    else if (campos[i].name == "email") {
      if (!validaEmail(campos[i].value)) {
        mensagens[i].appendChild(document.createTextNode('E-mail inválido.'))
        return false
      }
    }
  }
  return true
}

function validaEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}