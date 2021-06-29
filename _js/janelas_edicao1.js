// Get the modal
var modalsEditar = document.getElementsByClassName('modal-editar')[0];
    
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     if(event.target == modalsEditar) {
        modalsEditar.style.display = "none";
     }
}
function sairModeloEdicao() {
    modalsEditar.style.display = "none";
}