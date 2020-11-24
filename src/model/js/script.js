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
  }
  return true
}
