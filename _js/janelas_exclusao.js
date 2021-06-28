var modalExclusao = document.getElementById("janela-exclusao")
var btnCancelarExclusao = document.getElementById("btn-cancelar-exclusao")
var btnSairModal = document.querySelector("button.btn-close")

btnCancelarExclusao.addEventListener('click', sairModeloExclusao)
btnSairModal.addEventListener('click', sairModeloExclusao)

function sairModeloExclusao() {
    modalExclusao.style.display = "none"
    document.getElementsByTagName('body')[0].style.overflow = 'auto'
}