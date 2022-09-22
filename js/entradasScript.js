


const mostrar = (form, anim) => {
    document.querySelectorAll('.entradas').forEach(element => { element.setAttribute('oculto', '') });
    document.getElementById(`parte-${form}`).removeAttribute('oculto');
    anim == 2 ? progressAnim(form) : progressAnim(form + 1);
}
const progressAnim = form => {
    document.getElementById(`progess-${form}`).toggleAttribute("bar-full");
    document.getElementById(`icon-${form}`).toggleAttribute("icon-full");
    document.getElementById(`svg-${form}`).toggleAttribute("svg-full");
}