window.addEventListener('load', loadEvents = () => {
    
});

const accionAccesibilidad = (accion) => {
    switch(accion) {
        case 'enlacesRealce' : enlacesRealce(); break;
    }
}

const enlacesRealce = () => {
    let links = document.getElementsByTagName("a");
    for(let i = 0 ; i < links.length ; i++) links[i].classList.toggle("enlacesRealce");
}

var currentFontSize = 1;
const fontSize = () => {
    switch(currentFontSize) {
        case 0 : currentFontSize++;
    }
    let body = document.getElementsByTagName("body");
    body[0].style.fontSize=""
}
