function mostrarMapa1(){
    cerrarMapa2();
    cerrarMapa3();
    document.getElementById("container__groundFloor").style.display="block";
    document.getElementById("fondo2").style.fill="#0761d6";
    document.getElementById("fondo3").style.fill="#0761d6";
    document.getElementById("fondo4").style.fill="#0761d6";
    document.getElementById("area2").style.cursor="pointer";
    document.getElementById("area3").style.cursor="pointer";
    document.getElementById("area4").style.cursor="pointer";
}
function cerrarMapa1(){
    document.getElementById("fondo2").style.fill="#F5F5F5";
    document.getElementById("fondo3").style.fill="#F5F5F5";
    document.getElementById("fondo4").style.fill="#F5F5F5";
    document.getElementById("area2").style.cursor="default";
    document.getElementById("area3").style.cursor="default";
    document.getElementById("area4").style.cursor="default";
}
function mostrarMapa2(){
    cerrarMapa1();
    cerrarMapa3();
    document.getElementById("container__groundFloor").style.display="block";
    document.getElementById("fondo7").style.fill="#0761d6";
    document.getElementById("fondo8").style.fill="#0761d6";
    document.getElementById("fondo9").style.fill="#0761d6";
    document.getElementById("area7").style.cursor="pointer";
    document.getElementById("area8").style.cursor="pointer";
    document.getElementById("area9").style.cursor="pointer";
    
}
function cerrarMapa2(){
    document.getElementById("fondo7").style.fill="#F5F5F5";
    document.getElementById("fondo8").style.fill="#F5F5F5";
    document.getElementById("fondo9").style.fill="#F5F5F5";
    document.getElementById("area7").style.cursor="default";
    document.getElementById("area8").style.cursor="default";
    document.getElementById("area9").style.cursor="default";
}
function mostrarMapa3(){
    cerrarMapa1();
    cerrarMapa2();
    document.getElementById("container__groundFloor").style.display="block";
    document.getElementById("fondo10").style.fill="#0761d6";
    document.getElementById("fondo11").style.fill="#0761d6";
    document.getElementById("fondo12").style.fill="#0761d6";
    document.getElementById("area10").style.cursor="pointer";
    document.getElementById("area11").style.cursor="pointer";
    document.getElementById("area12").style.cursor="pointer";
}
function cerrarMapa3(){
    document.getElementById("fondo10").style.fill="#F5F5F5";
    document.getElementById("fondo11").style.fill="#F5F5F5";
    document.getElementById("fondo12").style.fill="#F5F5F5";
    document.getElementById("area10").style.cursor="default";
    document.getElementById("area11").style.cursor="default";
    document.getElementById("area12").style.cursor="default";
}
function mostrarArea(area) {
    cerrarAreas();
    
    
        document.querySelectorAll(`.${area}`).forEach(elemento => elemento.style.display="block");
    
}
function mostrarArea2(area) {
    cerrarAreas();
    
        document.querySelectorAll(`.${area}`).forEach(elemento => elemento.style.display="block");
    
}
function mostrarArea3(area) {
    cerrarAreas();
   
        document.querySelectorAll(`.${area}`).forEach(elemento => elemento.style.display="block");
    
}
function cerrarAreas() {
    document.querySelectorAll('.areas').forEach(elemento => elemento.style.display="none");
}