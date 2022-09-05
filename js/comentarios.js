// comentarios
document.getElementById("abrir").addEventListener("click", open_close);
document.getElementById("cerrar").addEventListener("click", cerrar);
ocument.getElementById("edita").addEventListener("click", open_editar);

function  open_close(){
    document.getElementById('boton_form').style.display ='block';
}
  
function cerrar(){
    document.getElementById('boton_form').style.display ='none';
}

function open_editar(){
    document.getElementById("register").style.display = 'block';
}