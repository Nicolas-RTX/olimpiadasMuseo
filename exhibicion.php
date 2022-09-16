<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/indexStyles.css">
    <link rel="stylesheet" href="css/templateStyles.css">
    <link rel="stylesheet" href="css/exhibicionStyles.css">
    <title>Museo</title>
</head>
<body>
  <?php include('addons/background.php') ?>
  
    <header>
        <nav class="nav__bar nav__bar--desktop">
            <img class="nav__logo" src="img/logoarte.png" alt="Museo de Arte">
            <ul class="nav__list">
                <a class="nav__link" href="index.php"><li class="nav__item">VISITA</li></a>
                <a class="nav__link" href="#"><li class="nav__item">EXHIBICIÓN</li></a>
                <a class="nav__link" href="#"><li class="nav__item">MUSEO</li></a>
                <a class="nav__link" href="coleccion.php"><li class="nav__item">COLECCIONES</li></a>
                <svg class="nav__item nav__acces" alt="Icono de Accesibilidad" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g><path d="m28 21c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z"/><path d="m30.5 30c0 1.1164.2268 2.2212.6666 3.2474l3.7121 8.6617c.3264.7615-.0264 1.6433-.7878 1.9696-.7615.3264-1.6433-.0264-1.9696-.7878l-3.7122-8.6617c-.0288-.0672-.0569-.1346-.0843-.2023-.0552-.136-.1863-.2269-.333-.2269-.1503 0-.2837.0951-.336.236-.0773.208-.1597.4144-.2474.6188l-3.5297 8.2361c-.3263.7614-1.2081 1.1142-1.9696.7878-.7614-.3263-1.1142-1.2081-.7878-1.9696l3.5297-8.236c.5602-1.307.849-2.7142.849-4.1362v-2.6775c-3.6006-.4075-6.9399-1.6847-9.7997-3.6164-.6865-.4637-.8672-1.3961-.4035-2.0826s1.3962-.8671 2.0826-.4034c3.0314 2.0475 6.6841 3.243 10.6206 3.243s7.5892-1.1955 10.6206-3.243c.6865-.4637 1.6189-.2831 2.0826.4034s.283 1.6189-.4035 2.0826c-2.8598 1.9317-6.1991 3.2089-9.7997 3.6164z"/><path clip-rule="evenodd" d="m52 28c0 13.2548-10.7452 24-24 24s-24-10.7452-24-24 10.7452-24 24-24 24 10.7452 24 24zm-3 0c0 11.598-9.402 21-21 21s-21-9.402-21-21 9.402-21 21-21 21 9.402 21 21z" fill-rule="evenodd"/></g></svg>
            </ul>
        </nav>
        <nav class="nav__bar nav__bar--mobile">
          <img class="nav__logo" src="img/logoarte.png" alt="Museo de Arte">
          <ul class="nav__list">
            <li> 
              <svg class=" nav__item nav__acces" id="open__menu" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">.st0{fill:#f5f5f5;}</style><g><g><path class="st0" d="M381,190.9H131c-11,0-20-9-20-20s9-20,20-20h250c11,0,20,9,20,20S392,190.9,381,190.9z"/></g><g><path class="st0" d="M381,361.1H131c-11,0-20-9-20-20s9-20,20-20h250c11,0,20,9,20,20S392,361.1,381,361.1z"/></g><g><path class="st0" d="M381,276H131c-11,0-20-9-20-20s9-20,20-20h250c11,0,20,9,20,20S392,276,381,276z"/></g></g></svg>
                <ul class="submenu">
                  <a class="nav__link" href="index.php"><li class="nav__item">VISITA</li></a>
                  <a class="nav__link" href="#"><li class="nav__item">EXHIBICIÓN</li></a>
                  <a class="nav__link" href="#"><li class="nav__item">MUSEO</li></a>
                  <a class="nav__link" href="coleccion.php"><li class="nav__item">COLECCIONES</li></a>
                </ul>
            </li>
          </ul>
      </nav>
    </header>

    <main>
      <section class="coleccion__container">
        <h1><b>¡BIENVENIDOS A NUESTRO RECORRIDO POR EL MUSEO DE ARTE DE LANÚS!</b></h1>
        <h4>Dale click a alguna de estas colecciones para veer donde se situal y su contenido</h4>
        <article>
          <div class="row row-cols-1 row-cols-md-3 g-1">
              <div class="col" onclick="mostrarMapa1()" ondblclick="cerrarmapa1()">
                <div class="card text-bg-dark">
                  <img src="img/slider/a.png" class="card-img" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title">Obreas maestras</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, nam?</p>
                  </div>
                </div>
              </div>
              <div class="col" onclick="mostrarMapa2()">
              <div class="card text-bg-dark">
                <img src="img/slider/b.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Paisajes</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, culpa.!</p>
                </div>
              </div>
            </div>
            <div class="col" onclick="mostrarMapa3()">
              <div class="card text-bg-dark">
                <img src="img/slider/c.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Arte argentino</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
          </div>
          
        </article>
     </section>
       <section class="floor">  
          
          <article class="container__floor" id="container__groundFloor">
            <h2>PLANTA BAJA</h2>      
            <svg version="1.1" id="groundFloor" class="floor__img" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="581px" height="381px" viewBox="0 0 581 381" enable-background="new 0 0 581 381" xml:space="preserve">
              <g id="area0">
                <rect id="fondo0" x="233" y="214.293" fill="#F5F5F5" width="108" height="113.707"></rect>
                <circle class="circle" id="punto0" fill="#BF311A" cx="290" cy="249" r="10"></circle>
                <text id="numero0" x="285.6094" y="253.7959" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">0</text>
              </g>
                <g id="area2" class="mapa1" onclick="mostrarArea('area2')">
                  <rect id="fondo2" x="162" y="234" fill="#F5F5F5" width="67" height="58" ></rect>
                  <circle id="punto2" fill="#BF311A" cx="198" cy="260" r="10"></circle>
                  <text id="numero2" x="193.6094" y="264.7334" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">2</text>
                </g>
                <g id="area3" class="mapa1" onclick="mostrarArea('area3')">
                  <polygon id="fondo3" fill="#F5F5F5" points="158.053,328.016 47,328 47,234 158,234 	"></polygon>
                  <circle id="punto3" fill="#BF311A" cx="104.5" cy="278.008" r="10"></circle>
                  <text id="numero3" x="101.1357" y="282.5322" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">3</text>
                </g>
                <g id="area4" class="mapa1" onclick="mostrarArea('area4')">
                  <polygon id="fondo4" fill="#F5F5F5" points="158,230 94.964,230 94.964,203.963 158,204 	"></polygon>
                  <circle id="punto4" fill="#BF311A" cx="126.482" cy="216.98" r="10"></circle>
                  <text id="numero4" x="122.0918" y="221.5068" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">4</text>
                </g>
              <g id="area5">
                <rect id="fondo5" x="80" y="176" fill="#F5F5F5" width="82" height="24"></rect>
                <circle id="punto5" fill="#BF311A" cx="121" cy="188" r="10"></circle>
                <text id="numero5" x="116.6094" y="193.8584" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">5</text>
              </g>
              <g id="area14" >
                <rect id="fondo14" x="402" y="120" fill="#F5F5F5" width="47" height="61"></rect>
                <circle id="punto14" fill="#BF311A" cx="425" cy="163" r="11"></circle>
                <text id="numero14" x="416.2188" y="167.5645" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">14</text>
              </g>
              <g id="area6">
                <rect id="fondo6" x="80" y="120" fill="#F5F5F5" width="81" height="52"></rect>
                <circle id="punto6" fill="#BF311A" cx="120.5" cy="163" r="10"></circle>
                <text id="numero6" x="116.1094" y="167.9424" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">6</text>
              </g>
              <g id="area7" onclick="mostrarArea('area7')">
                <rect id="fondo7" x="165" y="120" fill="#F5F5F5" width="45" height="52"></rect>
                <circle id="punto7" fill="#BF311A" cx="187.5" cy="163" r="10"></circle>
                <text id="numero7" x="183.1094" y="167.917" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">7</text>
              </g>
              <g id="area8" onclick="mostrarArea('area8')">
                <rect id="fondo8" x="214" y="120" fill="#F5F5F5" width="34" height="52"></rect>
                <circle id="punto8" fill="#BF311A" cx="231" cy="163" r="10"></circle>
                <text id="numero8" x="226.6094" y="167.917" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">8</text>
              </g>
              <g id="area9" onclick="mostrarArea('area9')">
                <rect id="fondo9" x="162" y="176" fill="#F5F5F5" width="83" height="33"></rect>
                <circle id="punto9" fill="#BF311A" cx="203.5" cy="195.5" r="10"></circle>
                <text id="numero9" x="199.1094" y="200.2881" fill="#FFFFFF" font-family="'ArialMT'" font-size="20">9</text>
              </g>
              <g id="area10" onclick="mostrarArea('area10')">
                <rect id="fondo10" x="252" y="120" fill="#F5F5F5" width="72" height="86"></rect>
                <circle id="punto10" fill="#BF311A" cx="286.898" cy="163" r="11"></circle>
                <text id="numero10" x="278.1172" y="167.5771" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">10</text>
              </g>
              <g id="area11" onclick="mostrarArea('area11')">
                <rect id="fondo11" x="328" y="120" fill="#F5F5F5" width="40" height="61"></rect>
                <circle id="punto11" fill="#BF311A" cx="348" cy="163" r="11"></circle>
                <text id="numero11" x="339.4043" y="167.5635" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">11</text>
              </g>
              <g id="area12" onclick="mostrarArea('area12')">
                <rect id="fondo12" x="328" y="185" fill="#F5F5F5" width="58" height="21"></rect>
                <circle id="punto12" fill="#BF311A" cx="357" cy="195.5" r="11"></circle>
                <text id="numero12" x="347.2188" y="201.0234" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">12</text>
              </g>
              <g id="area13">
                <rect id="fondo13" x="372" y="120" fill="#F5F5F5" width="26" height="61"></rect>
                <circle id="punto13" fill="#BF311A" cx="384.865" cy="163" r="11"></circle>
                <text id="numero13" x="376.084" y="168.5645" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">13</text>
              </g>
              <g id="area16">
                <rect id="fondo16" x="498" y="120" fill="#F5F5F5" width="54" height="101"></rect>
                <circle id="punto16" fill="#BF311A" cx="525" cy="163" r="11"></circle>
                <text id="numero16" x="516.2188" y="168.751" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">16</text>
              </g>
              <g id="area15">
                <polygon id="fondo15" fill="#F5F5F5" points="494,206.014 453,206.014 453,133 494,133 	"></polygon>
                <circle id="punto15" fill="#BF311A" cx="473" cy="163" r="11"></circle>
                <text id="numero15" x="464.2188" y="168.751" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">15</text>
              </g>
              <g id="area17">
                <rect id="fondo17" x="556" y="120" fill="#F5F5F5" width="19" height="101"></rect>
                <circle id="punto17" fill="#BF311A" cx="565.5" cy="163" r="11"></circle>
                <text id="numero17" x="556.7188" y="168.751" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">17</text>
              </g>
              <g id="area18">
                <rect id="fondo18" x="386" y="185" fill="#F5F5F5" width="67" height="21"></rect>
                <circle id="punto18" fill="#BF311A" cx="419.5" cy="195.5" r="11"></circle>
                <text id="numero18" x="410.7188" y="201.0225" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">18</text>
              </g>
              <g id="area19">
                <rect id="fondo19" x="420" y="225" fill="#F5F5F5" width="34" height="67"></rect>
                <circle id="punto19" fill="#BF311A" cx="437" cy="258.5" r="11"></circle>
                <text id="numero19" x="428.2188" y="264.2949" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">19</text>
              </g>
              <g id="area20">
                <rect id="fondo20" x="458.002" y="210" fill="#F5F5F5" width="35.996" height="82"></rect>
                <circle id="punto20" fill="#BF311A" cx="475" cy="258.5" r="11"></circle>
                <text id="numero20" x="466.2188" y="263.1152" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">20</text>
              </g>
              <g id="area21">
                <rect id="fondo21" x="498" y="225" fill="#F5F5F5" width="32" height="67"></rect>
                <circle id="punto21" fill="#BF311A" cx="513.951" cy="258.5" r="11"></circle>
                <text id="numero21" x="505.1699" y="264.2949" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">21</text>
              </g>
              <g id="area23">
                <rect id="fondo23" x="345" y="296" fill="#F5F5F5" width="71" height="32"></rect>
                <circle id="punto23" fill="#BF311A" cx="381" cy="312" r="11"></circle>
                <text id="numero23" x="372.2188" y="317.7324" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">23</text>
              </g>
              <g id="area22">
                <rect id="fondo22" x="420" y="296" fill="#F5F5F5" width="110" height="32"></rect>
                <circle id="punto22" fill="#BF311A" cx="475" cy="312" r="11"></circle>
                <text id="numero22" x="466.2188" y="317.6494" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">22</text>
              </g>
              <g id="area24">
                <polygon id="fondo24" fill="#F5F5F5" points="416,292 345,292 345,234 416,234 	"></polygon>
                <circle id="punto24" fill="#BF311A" cx="380.5" cy="258.5" r="11"></circle>
                <text id="numero24" x="371.7188" y="264.0244" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">24</text>
              </g>
              <g id="area25">
                <polygon id="fondo100" fill="#F5F5F5" points="575,94 322,94.057 322,6 575,6 	"></polygon>
                <circle id="punto100" fill="#BF311A" cx="443.25" cy="50" r="10"></circle>
                <text id="numero100" x="432.8594" y="55.7959" fill="#FFFFFF" font-family="'ArialMT'" font-size="18">25</text>
              </g>
              <g id="area45">
                <polygon id="fondo45" fill="#F5F5F5" points="90.948,203.963 76,204 76,120 24.941,120 25,230 91,230 	" display="none"></polygon>
                <text id="nombre45" x="43.4893" y="217.9814" font-family="'ArialMT'" font-size="6">Biblioteca</text>
                <circle id="punto45" fill="#BF311A" cx="49.75" cy="175" r="5" display="none"></circle>
                <text id="numero45" x="46.7188" y="176.7959" fill="#FFFFFF" font-family="'ArialMT'" font-size="5" display="none">45</text>
              </g>
              <g id="area28">
                <rect id="fondo28" x="162" y="296" fill="#F5F5F5" width="67" height="32" display="none"></rect>
                <text id="nombre28" x="169.4634" y="305.1035" font-family="'ArialMT'" font-size="6">Tienda del museo</text>
              </g>
              <g id="mapa0">
                <path id="path4452" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" d="M541,282v46h29v-46H541z
                   M568,326h-25v-42h25V326z"></path>
                
                  <line id="line4454" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="295.133" x2="554" y2="295.133"></line>
                
                  <line id="line4456" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="297.24" x2="554" y2="297.24"></line>
                
                  <line id="line4458" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="299.348" x2="554" y2="299.348"></line>
                
                  <line id="line4460" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="301.459" x2="554" y2="301.459"></line>
                
                  <line id="line4462" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="303.566" x2="554" y2="303.566"></line>
                
                  <line id="line4464" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="305.676" x2="554" y2="305.676"></line>
                
                  <line id="line4466" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="307.785" x2="554" y2="307.785"></line>
                
                  <line id="line4468" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="309.895" x2="554" y2="309.895"></line>
                
                  <line id="line4470" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="543" y1="312" x2="554" y2="312"></line>
                
                  <line id="line4472" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="295.133" x2="568" y2="295.133"></line>
                
                  <line id="line4474" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="297.24" x2="568" y2="297.24"></line>
                
                  <line id="line4476" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="299.348" x2="568" y2="299.348"></line>
                
                  <line id="line4478" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="301.459" x2="568" y2="301.459"></line>
                
                  <line id="line4480" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="303.566" x2="568" y2="303.566"></line>
                
                  <line id="line4482" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="305.676" x2="568" y2="305.676"></line>
                
                  <line id="line4484" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="307.785" x2="568" y2="307.785"></line>
                
                  <line id="line4486" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="309.895" x2="568" y2="309.895"></line>
                
                  <line id="line4488" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="556" y1="312" x2="568" y2="312"></line>
                
                  <rect id="rect4490" x="462" y="127" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="12" height="6"></rect>
                
                  <line id="line4492" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="442" y1="342" x2="366" y2="346"></line>
                
                  <line id="line4494" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="442" y1="350" x2="366" y2="346"></line>
                
                  <line id="line4496" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="347" y1="332" x2="442" y2="336"></line>
                
                  <line id="line4498" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="347" y1="340" x2="442" y2="336"></line>
                
                  <line id="line4500" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="233" y1="244" x2="239" y2="282"></line>
                
                  <line id="line4502" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="239" y1="282" x2="245" y2="244"></line>
                
                  <line id="line4504" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="245" y1="234" x2="272" y2="239"></line>
                
                  <line id="line4506" fill="none" stroke="#939598" stroke-width="0.5" stroke-miterlimit="10" x1="272" y1="239" x2="245" y2="244"></line>
                
                  <line id="line4508" fill="none" stroke="#939598" stroke-width="0.334" stroke-miterlimit="10" x1="239" y1="209" x2="233" y2="234"></line>
                
                  <line id="line4510" fill="none" stroke="#939598" stroke-width="0.332" stroke-miterlimit="10" x1="245" y1="234" x2="239" y2="209"></line>
                <polygon id="polygon4512" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="307,292 332,292 
                  332,288 313,288 313,281 307,281 	"></polygon>
                <polygon id="polygon4514" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="268,292 243,292 
                  243,288 262,288 262,281 268,281 	"></polygon>
                <polygon id="polygon4516" fill="none" points="268.769,292.504 245.372,292.504 245.372,288.619 262.938,288.619 262.938,281.434 
                  268.769,281.434 	"></polygon>
                <g id="g4538">
                  
                    <line id="line4518" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="370" x2="336" y2="370"></line>
                  
                    <line id="line4520" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="368" x2="336" y2="368"></line>
                  
                    <line id="line4522" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="366" x2="336" y2="366"></line>
                  
                    <line id="line4524" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="364" x2="336" y2="364"></line>
                  
                    <line id="line4526" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="362" x2="336" y2="362"></line>
                  
                    <line id="line4528" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="360" x2="336" y2="360"></line>
                  
                    <line id="line4530" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="358" x2="336" y2="358"></line>
                  
                    <line id="line4532" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="356" x2="336" y2="356"></line>
                  
                    <line id="line4534" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="240" y1="354" x2="336" y2="354"></line>
                  
                    <rect id="rect4536" x="240" y="352" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="96" height="20"></rect>
                </g>
                <g id="g4548">
                  
                    <line id="line4540" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="270" y1="284" x2="305" y2="284"></line>
                  
                    <line id="line4542" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="270" y1="282" x2="305" y2="282"></line>
                  
                    <line id="line4544" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="270" y1="280" x2="305" y2="280"></line>
                  
                    <rect id="rect4546" x="270" y="278" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="35" height="8"></rect>
                </g>
                <g id="g4558">
                  
                    <line id="line4550" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="249" y1="212" x2="275" y2="212"></line>
                  
                    <line id="line4552" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="249" y1="210" x2="275" y2="210"></line>
                  
                    <line id="line4554" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="249" y1="208" x2="275" y2="208"></line>
                  
                    <rect id="rect4556" x="249" y="206" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="26" height="8"></rect>
                </g>
                <g id="g4568">
                  
                    <line id="line4560" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="302" y1="212" x2="324" y2="212"></line>
                  
                    <line id="line4562" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="302" y1="210" x2="324" y2="210"></line>
                  
                    <line id="line4564" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="302" y1="208" x2="324" y2="208"></line>
                  
                    <rect id="rect4566" x="302" y="206" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="22" height="8"></rect>
                </g>
                <g id="g4576">
                  
                    <line id="line4570" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="478" y1="131" x2="494" y2="131"></line>
                  
                    <line id="line4572" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="478" y1="129" x2="494" y2="129"></line>
                  
                    <rect id="rect4574" x="478" y="127" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="16" height="6"></rect>
                </g>
                <g id="g4582">
                  
                    <line id="line4578" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="476" y1="127" x2="476" y2="120"></line>
                  
                    <rect id="rect4580" x="474" y="120" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="4" height="7"></rect>
                </g>
                <g id="g4620">
                  
                    <rect id="rect4584" x="259" y="328" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="23" height="4"></rect>
                  
                    <rect id="rect4586" x="494" y="241" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="4" height="33"></rect>
                  <polygon id="polygon4588" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="233,302 233,209 
                    205,209 205,234 229,234 229,292 162,292 162,234 187,234 187,209 162,209 162,200 110.988,199.932 110.988,203.963 158,204 
                    158,230 111,230 111,234 158,234 158,302 162,302 162,296 229,296 229,302 		"></polygon>
                  <polygon id="polygon4590" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="331,234 341,234 
                    341,302 345,302 345,296 370,296 370,292 345,292 345,234 374,234 374,215 370,215 370,230 345,230 345,210 374,210 374,206 
                    324,206 324,214 341,214 341,230 305,230 305,234 327,234 327.021,278.039 306,278 306,282 331,282 		"></polygon>
                  <polygon id="polygon4592" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="390,292 390,296 
                    416,296 416,301 420,301 420,296 466,296 466,292 458,292 458,283 454,283 454,292 420,292 420,225 454,225 454,231 458,231 
                    458,221 420,221 420,210 454,210 454,213 458,213 458,206 393,206 393,234 416,234 416,292 		"></polygon>
                  
                    <rect id="rect4594" x="454" y="245" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="4" height="29"></rect>
                  <polygon id="polygon4596" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="245,282 269,282 
                    269,278 249,278 249,246 272,246 272,244 245,244 		"></polygon>
                  <polygon id="polygon4598" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="245,206 245,234 
                    272,234 272,230 249,230 249,206 		"></polygon>
                  
                    <rect id="rect4600" x="275" y="210" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="27" height="4"></rect>
                  
                    <rect id="rect4602" x="99" y="172" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="43" height="4"></rect>
                  <polygon id="polygon4604" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="247,332 247,328 
                    233,328 233,321 229,321 229,328 224,328 224,332 		"></polygon>
                  <polygon id="polygon4606" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="478,116 478,97 
                    579,97 579,2 248,2 248,64 287,64 286.947,108.057 322,108 322,97 458,97 458,116 21,116 21,234 43,234 43,332 167,332 167,328 
                    162,328 162,321 158,321 158.053,328.016 47,328 47,234 95.03,234 95,213 91,213 91,230 25,230 25,120 76,120 76,204 95,204 
                    95,200 80,200 80,120 161,120 161,176 187,176 187,172 165,172 165,120 210,120 210,172 202,172 202,176 223,176 223,172 214,172 
                    214,120 248,120 248,172 239,172 239,176 252,176 252,120 324,120 324,185 339,185 339,181 328,181 328,120 368,120 368,181 
                    354,181 354,185 378,185 378,181 372,181 372,120 398,120 398,181 393,181 393,185 418,185 418,181 402,181 402,120 449,120 
                    449,181 433,181 433,185 453,185 453,133 462,133 462,94 322,94 322,61 319,61 319,106 305.924,106 306,84 313,84 313,82 296,82 
                    296,84 304,84 304,106 290,106 290,74 303,74 303,72 290,72 290,64 306,64 306,74 308,74 308,61 252,61 252,6 319,6 319,44 
                    265,44 265,46 319,46 319,48 322,48 322,6 575,6 575,94 474,94 474,120 494,120 494,158 498,158 498,120 552,120 552,158 556,158 
                    556,120 575,120 575,221 556,221 556,171 552,171 552,221 498,221 498,171 494,171 494,231 498,231 498,225 530,225 530,292 
                    498,292 498,283 494,283 494,292 483,292 483,296 530,296 530,328 420,328 420,321 416,321 416,328 345,328 345,320 341,320 
                    341,328 330,328 330,332 534,332 534,225 579,225 579,116 		"></polygon>
                  
                    <rect id="rect4608" x="176" y="328" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="39" height="4"></rect>
                  
                    <rect id="rect4610" x="294" y="328" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="23" height="4"></rect>
                  
                    <circle id="circle4612" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" cx="339.5" cy="344.5" r="5.5"></circle>
                  
                    <circle id="circle4614" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" cx="305.167" cy="344.5" r="5.5"></circle>
                  
                    <circle id="circle4616" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" cx="270.834" cy="344.5" r="5.5"></circle>
                  
                    <circle id="circle4618" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" cx="236.502" cy="344.5" r="5.5"></circle>
                </g>
                <rect id="rect4622" x="162" y="213" fill="#E6E7E8" width="21" height="17"></rect>
                <rect id="rect4624" x="209" y="213" fill="#E6E7E8" width="20" height="17"></rect>
                <polygon id="polygon4626" fill="#E6E7E8" points="416,230 397,230.082 397,210 416,210 	"></polygon>
                <polyline id="polyline4628" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="347,332 347,374 
                  229,374 228.944,332 	"></polyline>
                
                  <line id="line4630" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="325" y1="214.042" x2="325" y2="229.968"></line>
                <polyline id="polyline4632" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="442,342 366,342 
                  366,350 452,350 452,332 	"></polyline>
                <path id="path4634" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" d="M442,342"></path>
                <path id="path4636" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" d="M442,340"></path>
                
                  <line id="line4638" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="347" y1="340" x2="442" y2="340"></line>
                
                  <line id="line4640" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="442" y1="341" x2="347" y2="341"></line>
                <line id="line4642" fill="none" x1="283.143" y1="44.685" x2="283.143" y2="46.276"></line>
                <line id="line4644" fill="none" x1="260.707" y1="3.384" x2="263.892" y2="3.384"></line>
                
                  <line id="line4646" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="233" y1="209" x2="245" y2="209"></line>
                
                  <line id="line4648" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="233" y1="234" x2="244.979" y2="234"></line>
                
                  <line id="line4650" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="245" y1="282" x2="233" y2="282"></line>
                
                  <line id="line4652" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="244.979" y1="244" x2="233" y2="244"></line>
                
                  <line id="line4654" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="245" y1="244" x2="245" y2="234"></line>
                
                  <line id="line4656" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="272" y1="244" x2="272" y2="234"></line>
                
                  <line id="line4658" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="343" y1="304" x2="343" y2="302"></line>
                
                  <line id="line4660" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="343" y1="308" x2="343" y2="306"></line>
                
                  <line id="line4662" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="343" y1="312" x2="343" y2="310"></line>
                
                  <line id="line4664" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="343" y1="316" x2="343" y2="314"></line>
                
                  <line id="line4666" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="343" y1="320" x2="343" y2="318"></line>
                <g id="g4692">
                  
                    <line id="line4668" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="256" y1="278" x2="256" y2="271"></line>
                  
                    <line id="line4670" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="254" y1="278" x2="254" y2="275"></line>
                  
                    <line id="line4672" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="258" y1="268" x2="267.991" y2="267.991"></line>
                  
                    <line id="line4674" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="249" y1="267.009" x2="251" y2="267"></line>
                  
                    <line id="line4676" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="253" y1="267.009" x2="255" y2="267"></line>
                  
                    <line id="line4678" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="259" y1="265" x2="252" y2="279"></line>
                  
                    <line id="line4680" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="266" y1="278" x2="266" y2="268"></line>
                  
                    <line id="line4682" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="264" y1="278" x2="264" y2="268"></line>
                  
                    <line id="line4684" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="262" y1="278" x2="262" y2="268"></line>
                  
                    <line id="line4686" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="260" y1="278" x2="260" y2="268"></line>
                  
                    <line id="line4688" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="258" y1="278" x2="258" y2="267"></line>
                  <polyline id="polyline4690" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="257,267 
                    268,266.984 268,267 268,278 		"></polyline>
                </g>
                <g id="g4718">
                  
                    <line id="line4694" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="319" y1="278" x2="319" y2="271"></line>
                  
                    <line id="line4696" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="321" y1="278" x2="321" y2="275"></line>
                  
                    <line id="line4698" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="317" y1="268" x2="307.009" y2="267.991"></line>
                  
                    <line id="line4700" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="326" y1="267.009" x2="324" y2="267"></line>
                  
                    <line id="line4702" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="322" y1="267.009" x2="320" y2="267"></line>
                  
                    <line id="line4704" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="316" y1="265" x2="323" y2="279"></line>
                  
                    <line id="line4706" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="309" y1="278" x2="309" y2="268"></line>
                  
                    <line id="line4708" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="311" y1="278" x2="311" y2="268"></line>
                  
                    <line id="line4710" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="313" y1="278" x2="313" y2="268"></line>
                  
                    <line id="line4712" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="315" y1="278" x2="315" y2="268"></line>
                  
                    <line id="line4714" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="317" y1="278" x2="317" y2="267"></line>
                  <polyline id="polyline4716" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" points="318,267 
                    307,266.984 307,267 307,278 		"></polyline>
                </g>
                
                  <line id="line4720" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="327" y1="216" x2="339" y2="228"></line>
                
                  <line id="line4722" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="333" y1="222" x2="339" y2="216"></line>
                
                  <rect id="rect4724" x="327" y="216" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="12" height="12"></rect>
                
                  <line id="line4726" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="442" y1="332" x2="442" y2="350"></line>
                
                  <rect id="rect4728" x="462" y="128" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="11" height="4"></rect>
                <path id="path4730" fill="none" stroke="#67696B" stroke-width="0.498" stroke-miterlimit="10" d="M542.928,311.561"></path>
                <path id="path4732" fill="none" stroke="#67696B" stroke-width="0.498" stroke-miterlimit="10" d="M568.016,311.561"></path>
                
                  <rect id="rect4734" x="554" y="293" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="2" height="19"></rect>
                
                  <line id="line4736" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="167" y1="330.134" x2="224" y2="330.134"></line>
                <path id="path4738" fill="#5E6E66" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" d="M7,282v46h29v-46H7z M34,326H9
                  v-42h25V326z"></path>
                
                  <line id="line4740" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="295.133" x2="20" y2="295.133"></line>
                
                  <line id="line4742" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="297.24" x2="20" y2="297.24"></line>
                
                  <line id="line4744" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="299.348" x2="20" y2="299.348"></line>
                
                  <line id="line4746" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="301.459" x2="20" y2="301.459"></line>
                
                  <line id="line4748" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="303.566" x2="20" y2="303.566"></line>
                
                  <line id="line4750" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="305.676" x2="20" y2="305.676"></line>
                
                  <line id="line4752" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="307.785" x2="20" y2="307.785"></line>
                
                  <line id="line4754" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="309.895" x2="20" y2="309.895"></line>
                <line id="line4756" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="9" y1="312" x2="20" y2="312"></line>
                
                  <line id="line4758" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="295.133" x2="34" y2="295.133"></line>
                
                  <line id="line4760" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="297.24" x2="34" y2="297.24"></line>
                
                  <line id="line4762" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="299.348" x2="34" y2="299.348"></line>
                
                  <line id="line4764" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="301.459" x2="34" y2="301.459"></line>
                
                  <line id="line4766" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="303.566" x2="34" y2="303.566"></line>
                
                  <line id="line4768" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="305.676" x2="34" y2="305.676"></line>
                <line id="line4770" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="308" x2="34" y2="308"></line>
                <line id="line4772" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="310" x2="34" y2="310"></line>
                <line id="line4774" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" x1="22" y1="312" x2="34" y2="312"></line>
                <path id="path4776" fill="none" stroke="#67696B" stroke-width="0.498" stroke-miterlimit="10" d="M34.016,311.561"></path>
                
                  <rect id="rect4778" x="20" y="293" fill="none" stroke="#5E6E66" stroke-width="0.5" stroke-miterlimit="10" width="2" height="19"></rect>
              </g>
              
                <g id="informacion">
                  <path id="path4961" fill="#141006" d="M264.693,300.645c0,2.486-2.015,4.5-4.5,4.5s-4.5-2.014-4.5-4.5
                    c0-2.479,2.015-4.498,4.5-4.498C262.678,296.146,264.693,298.16,264.693,300.645"></path>
                  <path id="path4963" fill="#FFFFFF" d="M260.913,303c0.027,0.032,0.037,0.052,0.009,0.104c-0.045,0.082-0.617,1.064-1.799,1.064
                    c-0.276,0-0.36-0.152-0.36-0.307c0-0.188,0.157-0.656,0.545-1.904l0.249-0.813c0.064-0.275,0.138-0.451,0.138-0.572
                    c0-0.072-0.037-0.135-0.12-0.135c-0.147,0-0.563,0.521-0.674,0.688c-0.037,0.043-0.073,0.043-0.101,0.011l-0.082-0.091
                    c-0.029-0.032-0.048-0.072-0.029-0.094c0.047-0.063,0.784-1.26,1.771-1.26c0.287,0,0.406,0.164,0.406,0.369
                    c0,0.226-0.111,0.522-0.295,1.127l-0.498,1.563c-0.11,0.381-0.147,0.521-0.147,0.625c0,0.072,0.027,0.146,0.119,0.146
                    c0.186,0,0.627-0.543,0.683-0.644c0.019-0.022,0.057-0.022,0.074-0.011L260.913,303z M261.31,297.63
                    c0,0.349-0.332,0.761-0.71,0.761c-0.397,0-0.656-0.268-0.656-0.697c0-0.35,0.287-0.688,0.637-0.688
                    C261.069,296.995,261.31,297.282,261.31,297.63"></path>
                </g>

              <!--<g class="svgTooltip">
                <rect class="bubble" x="0" y="0" width="50" height="50" stroke="black" stroke-width="10" stroke-linecap="round"/>
                <polygon class="arrow" points="0,0 5,6 10,0" fill="black"/>
              </g>
              <text class="nombreSala" transform="matrix(1 0 0 1 20 110.5)">
                <tspan x="0" y="0" font-family="'MyriadPro-Regular'" font-size="6">1</tspan><tspan x="0" y="8" font-family="'MyriadPro-Regular'" font-size="6">2</tspan><tspan x="0" y="16" font-family="'MyriadPro-Regular'" font-size="6">3</tspan><tspan x="0" y="24" font-family="'MyriadPro-Regular'" font-size="6">4</tspan><tspan x="0" y="32" font-family="'MyriadPro-Regular'" font-size="6">5</tspan>
              </text>-->
              
              </svg>
          </article>
          <article class="container__img">
            <div class="area2 areas">
              <h3>Area 2</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/meninas.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area3 areas">
              <h3>Area 3</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/grito.png" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area4 areas">
              <h3>Area 4</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/gioconda.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area7 areas">
              <h3>Area 7</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/atardecer.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area8 areas">
              <h3>Area 8</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/atardecer2.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area9 areas">
              <h3>Area 9</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/bioma.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>  
            <div class="area10 areas">
              <h3>Area 10</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/juanito laguna.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area11 areas">
              <h3>Area 11</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/Manifestacion.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
            <div class="area12 areas">
              <h3>Area 12</h3>
              <div class="card mb-3 card__row">
                  <div > <img class="img__card" src="img/maria.jpg" alt=""></div>
                  <div class="tittle__card"><h5 class="card-title">Lorem, ipsum.</h5></div>
              </div>
            </div>
          </article>
       </section>  
       
    </main>
    
    <footer class="footer">
        <div class="datos__container">
          <h2 class="datos__tittle">CONTACTO</h2>
          <ul class="datos__list">
            <li class="datos__item"><b>Dirección | Address</b></li>
            <li class="datos__item">25 de Mayo 131 - B1824</li>
            <li class="datos__item">Lanús - Provincia de Buenos Aires</li>
            <li class="datos__item"><b>Telefono | Phone</b></li>
            <li class="datos__item">11 1234-5678</li>
          </ul>
          <div class="datos__red">
            <svg class="datos__redes" enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M256.8,5c74.3,0,148.6,0,222.9,0C498.9,5,511,17,511,36.1c0,147.3,0,294.6,0,441.9c0,18.8-12.1,31-30.8,31   c-148.8,0-297.6,0-446.4,0C15.3,509,3,496.8,3,478.4C3,330.8,3,183.2,3,35.5C3,17.1,15.3,5,33.8,5C108.1,5,182.5,5,256.8,5z    M257,495c74,0,148,0,222,0c12.3,0,18-5.7,18-18c0-146.7,0-293.3,0-440c0-12.3-5.7-18-18-18c-148,0-296,0-444,0   c-12.3,0-18,5.7-18,18c0,146.7,0,293.3,0,440c0,12.3,5.7,18,18,18C109,495,183,495,257,495z"/><path d="M289.9,256.8c0,65.1,0,129.2,0,194c-2,0.1-3.7,0.4-5.5,0.4c-25.7,0-51.3-0.1-77,0.1c-4.8,0-5.7-1.6-5.7-6   c0.1-60.5,0.1-121,0.1-181.5c0-2.1,0-4.2,0-6.8c-14.4,0-28.2,0-42.4,0c0-21.9,0-43.5,0-65.6c14,0,27.9,0,42.4,0c0-2.4,0-4.2,0-6   c0-16.8-0.2-33.7,0.1-50.5c0.3-21.9,7.4-40.8,25.3-54.6c12.6-9.7,27.4-15.2,42.9-16c27.8-1.4,55.6-1.3,83.4-1.8   c2.4,0,3.8,0.6,3.7,3.3c-0.1,21.2-0.1,42.3-0.2,63.5c0,0.3-0.2,0.6-0.7,1.6c-1.5,0-3.2,0-5,0c-13.7,0-27.3,0-41,0   c-12.4,0.1-20.2,8-20.2,20.2c0,13.1,0,26.3,0,40c22.4,0,44.3,0,67.5,0c-2.8,22.3-5.5,43.8-8.3,65.8   C329.3,256.8,309.9,256.8,289.9,256.8z"/></g></svg>
            <svg class="datos__redes" enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M505,257c0,34.8-0.7,69.7,0.2,104.5c1.5,61.6-37.2,109.2-86.5,130.4c-19.8,8.5-40.6,13-62.1,13c-67.3,0.1-134.7,1-202-0.3   c-50.7-1-92.4-22.2-122.3-64c-15.7-22-23.2-47-23.2-74.1c0-71.7,0-143.3,0-215c0-58.5,28.5-99.4,79.1-126C110.2,14,134.1,9.1,159,9   c65.3,0,130.7-0.4,196,0.2c50.7,0.4,93,19.8,124.2,60.6c17.4,22.8,25.8,49,25.8,77.8C505,184,505,220.5,505,257z M46,257   c0,36.7,0,73.3,0,110c0,16.4,3.8,31.8,12.3,45.7c22.3,36.5,56,54.3,97.8,55c67.1,1,134.3,0.4,201.5,0.2c16.5,0,32.5-3.4,47.4-10.5   c40.6-19.4,63.3-50.3,63.1-96.7c-0.4-71-0.1-142-0.1-213c0-20.1-5.7-38.5-17.6-54.7c-23-31.1-54.8-46.4-92.8-46.8   c-67-0.8-134-0.3-201-0.2c-14.3,0-28.1,2.9-41.5,7.9c-36.8,13.7-71,48.4-69.4,99.5C46.9,188,46,222.5,46,257z"/><path d="M257.6,363c-64.5,0-116.5-51.4-116.6-115.4c-0.1-63,52.3-114.6,116.4-114.6c64.3-0.1,116.5,51.4,116.6,114.9   C374,311.3,321.9,362.9,257.6,363z M257.6,326c43.9,0,79.5-35.1,79.4-78.3c-0.1-42.8-35.7-77.8-79.4-77.8   c-43.9,0-79.7,34.9-79.7,78C178,291.1,213.7,326.1,257.6,326z"/><path d="M387.5,98c13.5,0,24.5,11.5,24.5,25.6c-0.1,14.1-11.2,25.5-24.7,25.4c-13.3-0.1-24.2-11.5-24.2-25.3   C363,109.6,374,98,387.5,98z"/></g></svg>
            <svg class="datos__redes" enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M260.4,449c-57.1-1.8-111.4-3.2-165.7-5.3c-11.7-0.5-23.6-2.3-35-5c-21.4-5-36.2-17.9-43.8-39c-6.1-17-8.3-34.5-9.9-52.3   C2.5,305.6,2.5,263.8,4.2,222c1-23.6,1.6-47.4,7.9-70.3c3.8-13.7,8.4-27.1,19.5-37c11.7-10.5,25.4-16.8,41-17.5   c42.8-2.1,85.5-4.7,128.3-5.1c57.6-0.6,115.3,0.2,172.9,1.3c24.9,0.5,50,1.8,74.7,5c22.6,3,39.5,15.6,48.5,37.6   c6.9,16.9,9.5,34.6,11,52.6c3.9,45.1,4,90.2,1.8,135.3c-1.1,22.9-2.2,45.9-8.7,68.2c-7.4,25.6-23.1,42.5-49.3,48.3   c-10.2,2.2-20.8,3-31.2,3.4C366.2,445.7,311.9,447.4,260.4,449z M205.1,335.3c45.6-23.6,90.7-47,136.7-70.9   c-45.9-24-91-47.5-136.7-71.4C205.1,240.7,205.1,287.6,205.1,335.3z"/></g></svg>
            <svg class="datos__redes" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.144 137.144" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 137.144 137.144"><g><path d="m107.382,35.507c-3.367,2.02-6.921,3.419-10.667,4.201-3.429-3.646-7.557-5.471-12.382-5.471-4.699,0-8.765,1.617-11.952,5.08-1.342,1.458-3.809,3.931-3.809,8.684 0,1.562-0.254,5.75 0,6.857-6.921-0.39-14.361-0.989-20.096-4.551-10.5-6.522-11.866-10.96-14.19-16.02-4.012,6.608-5.107,18.014 4.047,26.227-2.881,1.865-8.492-0.645-10.905-2.012-0.214,7.315 13.445,16.376 16.81,17.055-2.138,0.559-6.401,0.336-10.19-0.564 1.079,3.453 5.634,7.158 8.524,9.405 2.888,2.246 6.143,3.404 9.762,3.468-6.667,5.47-13.652,8.205-20.953,8.205-1.333,0-2.667-0.097-4-0.293 7.11,4.689 15.746,7.033 25.905,7.033 6.031,0 11.667-0.977 16.905-2.93 5.238-1.954 9.729-4.558 13.476-7.815 3.746-3.255 6.968-7.017 9.667-11.283 2.698-4.264 4.698-8.709 6-13.333 1.301-4.623 1.953-9.246 1.953-13.871v-2.247c3.3-2.474 6.096-5.469 8.381-8.987-3.238,1.433-6.476,2.345-9.714,2.736 3.681-2.215 6.157-5.406 7.428-9.574zm2.333-35.507h-82.286c-15.149,0-27.429,12.28-27.429,27.429v82.287c0,15.148 12.28,27.429 27.429,27.429h82.286c15.149,0 27.429-12.28 27.429-27.429v-82.287c0-15.149-12.28-27.429-27.429-27.429zm13.715,102.858c0,11.361-9.21,20.572-20.572,20.572h-68.572c-11.361,0-20.572-9.211-20.572-20.572v-68.572c0-11.362 9.21-20.572 20.572-20.572h68.572c11.361,0 20.572,9.21 20.572,20.572v68.572z"/></g></svg>
          </div>
        </div>

        <div class="formulario__container">
          <form class="form-floating" action="">
            <input class="form__input" type="text" class="form-control" id="floatingInputValue" placeholder="Asunto">
            <input class="form__input" type="text" class="form-control" id="floatingInputValue" placeholder="Nombre">
            <input class="form__input" type="email" class="form-control" id="floatingInputValue" placeholder="Introduzca su email">
            <textarea class="form__input" placeholder="Deje su comentario aquí" id="floatingTextarea"></textarea>
            <button type="reset" class="btn btn-primary btn-lg">Borrar</button>
            <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
          </form>
        </div>
    </footer>

    <div class="accesibilidad">
      <svg class="nav__item nav__acces btn__accesibilidad" alt="Icono de Accesibilidad" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g><path d="m28 21c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z"/><path d="m30.5 30c0 1.1164.2268 2.2212.6666 3.2474l3.7121 8.6617c.3264.7615-.0264 1.6433-.7878 1.9696-.7615.3264-1.6433-.0264-1.9696-.7878l-3.7122-8.6617c-.0288-.0672-.0569-.1346-.0843-.2023-.0552-.136-.1863-.2269-.333-.2269-.1503 0-.2837.0951-.336.236-.0773.208-.1597.4144-.2474.6188l-3.5297 8.2361c-.3263.7614-1.2081 1.1142-1.9696.7878-.7614-.3263-1.1142-1.2081-.7878-1.9696l3.5297-8.236c.5602-1.307.849-2.7142.849-4.1362v-2.6775c-3.6006-.4075-6.9399-1.6847-9.7997-3.6164-.6865-.4637-.8672-1.3961-.4035-2.0826s1.3962-.8671 2.0826-.4034c3.0314 2.0475 6.6841 3.243 10.6206 3.243s7.5892-1.1955 10.6206-3.243c.6865-.4637 1.6189-.2831 2.0826.4034s.283 1.6189-.4035 2.0826c-2.8598 1.9317-6.1991 3.2089-9.7997 3.6164z"/><path clip-rule="evenodd" d="m52 28c0 13.2548-10.7452 24-24 24s-24-10.7452-24-24 10.7452-24 24-24 24 10.7452 24 24zm-3 0c0 11.598-9.402 21-21 21s-21-9.402-21-21 9.402-21 21-21 21 9.402 21 21z" fill-rule="evenodd"/></g></svg>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/exhibicion.js"></script>
</body>
</html>