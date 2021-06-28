var modalExclusao = document.getElementById("janela-exclusao")
var linkExclusao = document.getElementById("link-exclusao")
var btnCancelarExclusao = document.getElementById("btn-cancelar-exclusao")
var btnSairModal = document.querySelector("button.btn-close")

btnCancelarExclusao.addEventListener('click', sairModeloExclusao)
btnSairModal.addEventListener('click', sairModeloExclusao)
linkExclusao.addEventListener('click', abrirModeloExclusao)

function abrirModeloExclusao() {
    modalExclusao.style.display = "block"
}
function sairModeloExclusao() {
    modalExclusao.style.display = "none"
}