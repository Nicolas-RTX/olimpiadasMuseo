<?php 
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $hoy = date("Y-m-d", strtotime("now"));
    $fecha = date("Y-m-d", strtotime("last day of +2 month"));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/templateStyles.css">
    <link rel="stylesheet" href="css/entradasStyles.css">
    <title>Museo Argentino - Entradas</title>
</head>
<body>
    <?php include('addons/background.php') ?>
    <header>
        <section class="entradasHeader">
            <div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" id="progess-1" bar-full></div></div>
            <div class="entradasHeader__icon" id="icon-1" icon-full><svg class="entradasHeader__svg" id="svg-1" svg-full xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485 485"><g><path d="M60.652,75.816V15.163C60.652,6.781,67.433,0,75.817,0c8.38,0,15.161,6.781,15.161,15.163v60.653 c0,8.38-6.781,15.161-15.161,15.161C67.433,90.978,60.652,84.196,60.652,75.816z M318.424,90.978 c8.378,0,15.163-6.781,15.163-15.161V15.163C333.587,6.781,326.802,0,318.424,0c-8.382,0-15.168,6.781-15.168,15.163v60.653 C303.256,84.196,310.042,90.978,318.424,90.978z M485.212,363.906c0,66.996-54.312,121.307-121.303,121.307 c-66.986,0-121.302-54.311-121.302-121.307c0-66.986,54.315-121.3,121.302-121.3C430.9,242.606,485.212,296.919,485.212,363.906z M454.89,363.906c0-50.161-40.81-90.976-90.98-90.976c-50.166,0-90.976,40.814-90.976,90.976c0,50.171,40.81,90.98,90.976,90.98 C414.08,454.886,454.89,414.077,454.89,363.906z M121.305,181.955H60.652v60.651h60.653V181.955z M60.652,333.584h60.653V272.93 H60.652V333.584z M151.629,242.606h60.654v-60.651h-60.654V242.606z M151.629,333.584h60.654V272.93h-60.654V333.584z M30.328,360.891V151.628h333.582v60.653h30.327V94c0-18.421-14.692-33.349-32.843-33.349h-12.647v15.166 c0,16.701-13.596,30.325-30.322,30.325c-16.731,0-30.326-13.624-30.326-30.325V60.651H106.14v15.166 c0,16.701-13.593,30.325-30.322,30.325c-16.733,0-30.327-13.624-30.327-30.325V60.651H32.859C14.707,60.651,0.001,75.579,0.001,94 v266.892c0,18.36,14.706,33.346,32.858,33.346h179.424v-30.331H32.859C31.485,363.906,30.328,362.487,30.328,360.891z M303.256,242.606v-60.651h-60.648v60.651H303.256z M409.399,363.906h-45.49v-45.49c0-8.377-6.781-15.158-15.163-15.158 s-15.159,6.781-15.159,15.158v60.658c0,8.378,6.777,15.163,15.159,15.163h60.653c8.382,0,15.163-6.785,15.163-15.163 C424.562,370.692,417.781,363.906,409.399,363.906z"/></g></svg></div>
            <div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" id="progess-2"></div></div>
            <div class="entradasHeader__icon" id="icon-2"><svg class="entradasHeader__svg" id="svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g><path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"/><path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"/></g></svg></div>
            <div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" id="progess-3"></div></div>
            <div class="entradasHeader__icon" id="icon-3"><svg class="entradasHeader__svg" id="svg-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM4 6h16v2H4V6zm0 12v-6h16.001l.001 6H4z"></path></svg></div>
            <div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" id="progess-4"></div></div>
            <div class="entradasHeader__icon" id="icon-4"><svg class="entradasHeader__svg" id="svg-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><g><path d="M26.474,70c-2.176,0-4.234-1.018-5.557-2.764L3.049,43.639C0.725,40.57,1.33,36.2,4.399,33.875 c3.074-2.326,7.441-1.717,9.766,1.35l11.752,15.518L55.474,3.285c2.035-3.265,6.332-4.264,9.604-2.232 c3.268,2.034,4.266,6.334,2.23,9.602l-34.916,56.06c-1.213,1.949-3.307,3.175-5.6,3.279C26.685,69.998,26.58,70,26.474,70z"/></g></svg></div>
            <div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" id="progess-5"></div></div>
        </section>
    </header>

    <form class="entradasForm" action="entradasPosnet">
        <section class="entradas" id="parteUno">
            <h3>Día de la visita</h3>
            <label for="fecha">Seleccione una fecha</label>
            <input type="date" name="fecha" value="<?php echo $hoy; ?>" min="<?php echo $hoy; ?>" max="<?php echo $fecha; ?>">

            <h3>Entradas Disponibles</h3>

            <label for="general">General</label>
            <input type="number" name="general" min="0" max="15" placeholder="0">

            <label for="menores">Menores</label>
            <input type="number" name="menores" min="0" max="15" placeholder="0">

            <label for="jubilados">Jubilado/Pensionado</label>
            <input type="number" name="jubilados" min="0" max="15" placeholder="0">

            <label for="estudiantes">Estudiantes Univ. Nacionales</label>
            <input type="number" name="estudiantes" min="0" max="15" placeholder="0">

            <label for="discapacitados">Personas con discapacidad (Con Acompañante)</label>
            <input type="number" name="discapacitados" min="0" max="15" placeholder="0">

            <h3>Horarios Disponibles</h3>

            <input type="radio" name="horario">
            <label for="horario">10:00 - 14:00 hs</label>

            <input type="radio" name="horario">
            <label for="horario">14:00 - 18:00 hs</label>

            <button class="btn btn-primary" type="button" onclick="mostrar(2)">Continuar</button>
        </section>
        <section class="entradas" id="parteDos" oculto>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nombre">
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Apellido">
                <label for="floatingInput">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Celular">
                <label for="floatingInput">Celular</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Ciudad">
                <label for="floatingInput">Ciudad</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                <label for="floatingInput">Email confirmar</label>
            </div>

            <button class="btn btn-outline-primary" type="button" onclick="mostrar(1)">Volver</button>
            <button class="btn btn-primary" type="button" onclick="mostrar(3)">Continuar</button>
        </section>
        <section class="entradas" id="parteTres" oculto>
            <p>* Insertar API de Mercago Pago aquí :) *</p>

            <button class="btn btn-outline-primary" type="button" onclick="mostrar(2)">Volver</button>
            <button class="btn btn-primary" type="button" onclick="mostrar(4)">Continuar</button>
        </section>        
        <section class="entradas" id="parteCuatro" oculto>
            <p>¡Gracias por su Compra y su Visita!</p>
            <p>Disfrute su excursión :)</p>
            <button class="btn btn-outline-primary" type="button" onclick="mostrar(3)">Volver</button>
            <button class="btn btn-primary" type="button" onclick="mostrar(5)">Finalizar</button>
        </section>
    </form>

    <script src="js/bootstrap.js"></script>
    <script src="js/entradasScript.js"></script>
</body>
</html>