// Get the modal
var modal = document.getElementById('container-cadastro-escola');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if(event.target == modal) {
        sairModelo()
    }
}

function abrirModelo() {
    document.getElementById('container-cadastro-escola').style.display = 'block'
    document.getElementsByTagName('body')[0].style.overflow = 'hidden'
    document.getElementsByClassName('navbar')[0].style.zIndex = '-1'
}
function sairModelo() {
    document.getElementById('container-cadastro-escola').style.display = 'none'
    document.getElementsByTagName('body')[0].style.overflow = 'auto'
    document.getElementsByClassName('navbar')[0].style.zIndex = '1'
}

var inputFicheiro = document.getElementById('img_escola');
var img = document.getElementById("img")

function previewImage() {
    var oFReader = new FileReader()
    oFReader.readAsDataURL(inputFicheiro.files[0])
    oFReader.onload = function(oFREvent) {
        img.src = oFREvent.target.result
    }
}

// MENSAGEM DE SUCESSO DO LOGIN
var corpoPagina = document.getElementsByTagName('body')[0]
var msgSucesso  = document.getElementsByClassName("alert-success")[0]

corpoPagina.addEventListener('mousemove', sairMensagemSucesso)

function sairMensagemSucesso() {
    msgSucesso.style.opacity = "0"
}