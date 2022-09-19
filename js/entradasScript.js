const formularios = document.querySelectorAll('.entradas');
const parteUno = document.getElementById('parteUno');
const parteDos = document.getElementById('parteDos');
const parteTres = document.getElementById('parteTres');
const parteCuatro = document.getElementById('parteCuatro');

const progess1 = document.getElementById('progess-1');
const progess2 = document.getElementById('progess-2');
const progess3 = document.getElementById('progess-3');
const progess4 = document.getElementById('progess-4');
const progess5 = document.getElementById('progess-5');

/*
const icon1 = document.getElementById('icon-1');
const icon2 = document.getElementById('icon-2');
const icon3 = document.getElementById('icon-3');
const icon4 = document.getElementById('icon-4');
*/

function mostrar(form) {
    ocultarForms();
    switch(form) {
        case 1: parteUno.removeAttribute('oculto'); break;
        case 2: parteDos.removeAttribute('oculto'); break;
        case 3: parteTres.removeAttribute('oculto'); break;
        case 4: parteCuatro.removeAttribute('oculto'); break;
        case 5: window.location.href = "index.html"; break;
    }
}


let listElements = document.querySelectorAll('.cards__button');
listElements.forEach(element => {
    element.addEventListener('click', () => {
        element.classList.toggle('cards__rotate');
        let height = 0, list = element.nextElementSibling;
        if(list.clientHeight == '0') height = list.scrollHeight;
        list.classList.toggle("cards__hover");
        list.style.height = `${height}px`;
    })
})

const ocultarForms = () => { formularios.forEach(element => { element.setAttribute('oculto', '') } ) }