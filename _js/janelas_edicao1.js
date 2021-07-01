// Get the modal
var modalsEditar = document.getElementsByClassName('modal-editar')[0];
    
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     if(event.target == modalsEditar) {
        modalsEditar.style.display = "none";
     }
}
var inputFicheiroEdit = document.getElementById('img_escola_edit');
var imgEdit = document.getElementById("img_edit");

function previewImageEdit() {
    var oFReader = new FileReader()
    oFReader.readAsDataURL(inputFicheiroEdit.files[0])
    oFReader.onload = function(oFREvent) {
        imgEdit.src = oFREvent.target.result
    }
}
function sairModeloEdicao() {
    modalsEditar.style.display = "none";
}