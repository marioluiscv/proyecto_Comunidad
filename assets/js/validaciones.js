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