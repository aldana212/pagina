document.getElementById("edita").addEventListener("click", open);
document.getElementById("cancelar").addEventListener("click", close);

function open(){
    document.getElementById("register").style.display = 'block';

}

function close(){
    document.getElementById("register").style.display='none';
}