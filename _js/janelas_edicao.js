// Get the modal
var modalEditarAluno = document.getElementById('container-editar-aluno');
    
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if(event.target == modalEditarAluno) {
        sairModeloEdicao()
    }
}

var btnCancelarEdicao = document.getElementById("btn-cancelar-edicao")

btnCancelarEdicao.addEventListener('click', sairModeloEdicao)

function sairModeloEdicao() {
    modalEditarAluno.style.display = "none"
    document.getElementsByTagName('body')[0].style.overflow = 'auto'
}