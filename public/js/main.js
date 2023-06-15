const inputArchivo = document.getElementById("imagen");
const textoArchivo = document.getElementById("texto-archivo");

inputArchivo.addEventListener("change", (e) =>{
    if(e.target.files.length){
        textoArchivo.innerText= 'Haz agregado una imagen con exito';
    }
})
