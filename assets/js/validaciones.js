function mostrarCargos() {
    element1 = document.getElementById("cargoRepresentante");
    element2 = document.getElementById("cargoNormal");
    check = document.getElementById("checkCargo");
    
    if (check.checked) {
        element1.style.display='none';
        element2.style.display='block';
    }
    else {
        element1.style.display='block';
        element2.style.display='none';
    }
}

function mostrarFoto() {
    foto = document.getElementById("fotografia");
    checkfoto = document.getElementById("cbofoto");
    
    if (checkfoto.checked) {
        foto.style.display='block';
    }
    else {
        foto.style.display='none';
    }
}
function mostrarFirma() {
    firma = document.getElementById("firma");
    checkfirma = document.getElementById("cbofirma");
    
    if (checkfirma.checked) {
        firma.style.display='block';
    }
    else {
        firma.style.display='none';
    }
}