<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/indexStyles.css">
    <link rel="stylesheet" href="css/templateStyles.css">
    <title>Museo</title>
</head>
<body>
  <?php
    include('addons/background.php');
    include('addons/configLanguage.php')
  ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider/a.png" class="d-block w-100" alt="Arte Wallpaper">
            <div class="carousel-caption d-none d-md-block">
                <h4><span class="badge text-bg-primary">Slider 1</span></h4>
                <h5><span class="badge text-bg-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae neque necessitatibus doloremque dolorem fugit? Ullam.</span></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider/b.png" class="d-block w-100" alt="Arte Wallpaper">
            <div class="carousel-caption d-none d-md-block">
                <h5><span class="badge text-bg-primary">Slider 2</span></h5>
                <h5><span class="badge text-bg-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat porro iusto velit iste tempore consequatur.</span></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider/c.png" class="d-block w-100" alt="Arte Wallpaper">
            <div class="carousel-caption d-none d-md-block">
                <h5><span class="badge text-bg-primary">Slider 3</span></h5>
                <h5><span class="badge text-bg-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempore corrupti et praesentium.</span></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider/d.png" class="d-block w-100" alt="Arte Wallpaper">
            <div class="carousel-caption d-none d-md-block">
                <h5><span class="badge text-bg-primary">Slider 4</span></h5>
                <h5><span class="badge text-bg-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis enim molestias, illum ipsum delectus.</span></h5>
            </div>
          </div>
        </div>
        <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <header>
        <nav class="nav__bar nav__bar--desktop">
            <img class="nav__logo" src="img/logoarte.png" alt="Museo de Arte">
            <ul class="nav__list">
                <a class="nav__link" href="#"><li class="nav__item"><?php echo $lang['visit'] ?></li></a>
                <a class="nav__link" href="exhibicion.php"><li class="nav__item"><?php echo $lang['exhibition'] ?></li></a>
                <a class="nav__link" href="#"><li class="nav__item"><?php echo $lang['museum'] ?></li></a>
                <a class="nav__link" href="coleccion.php"><li class="nav__item"><?php echo $lang['collections'] ?></li></a>
                <svg class="nav__item nav__acces" alt="Icono de Accesibilidad" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g><path d="m28 21c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z"/><path d="m30.5 30c0 1.1164.2268 2.2212.6666 3.2474l3.7121 8.6617c.3264.7615-.0264 1.6433-.7878 1.9696-.7615.3264-1.6433-.0264-1.9696-.7878l-3.7122-8.6617c-.0288-.0672-.0569-.1346-.0843-.2023-.0552-.136-.1863-.2269-.333-.2269-.1503 0-.2837.0951-.336.236-.0773.208-.1597.4144-.2474.6188l-3.5297 8.2361c-.3263.7614-1.2081 1.1142-1.9696.7878-.7614-.3263-1.1142-1.2081-.7878-1.9696l3.5297-8.236c.5602-1.307.849-2.7142.849-4.1362v-2.6775c-3.6006-.4075-6.9399-1.6847-9.7997-3.6164-.6865-.4637-.8672-1.3961-.4035-2.0826s1.3962-.8671 2.0826-.4034c3.0314 2.0475 6.6841 3.243 10.6206 3.243s7.5892-1.1955 10.6206-3.243c.6865-.4637 1.6189-.2831 2.0826.4034s.283 1.6189-.4035 2.0826c-2.8598 1.9317-6.1991 3.2089-9.7997 3.6164z"/><path clip-rule="evenodd" d="m52 28c0 13.2548-10.7452 24-24 24s-24-10.7452-24-24 10.7452-24 24-24 24 10.7452 24 24zm-3 0c0 11.598-9.402 21-21 21s-21-9.402-21-21 9.402-21 21-21 21 9.402 21 21z" fill-rule="evenodd"/></g></svg>
            </ul>
        </nav>
        <nav class="nav__bar nav__bar--mobile">
          <img class="nav__logo" src="img/logoarte.png" alt="Museo de Arte">
          <ul class="nav__list">
            <li> 
                <svg class="nav__item nav__acces" id="open__menu" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">.st0{fill:#f5f5f5;}</style><g><g><path class="st0" d="M381,190.9H131c-11,0-20-9-20-20s9-20,20-20h250c11,0,20,9,20,20S392,190.9,381,190.9z"/></g><g><path class="st0" d="M381,361.1H131c-11,0-20-9-20-20s9-20,20-20h250c11,0,20,9,20,20S392,361.1,381,361.1z"/></g><g><path class="st0" d="M381,276H131c-11,0-20-9-20-20s9-20,20-20h250c11,0,20,9,20,20S392,276,381,276z"/></g></g></svg>
                <ul class="submenu">
                  <a class="nav__link" href="#"><li class="nav__item"><?php echo $lang['visit'] ?></li></a>
                  <a class="nav__link" href="exhibicion.php"><li class="nav__item"><?php echo $lang['exhibition'] ?></li></a>
                  <a class="nav__link" href="#"><li class="nav__item"><?php echo $lang['museum'] ?></li></a>
                  <a class="nav__link" href="coleccion.php"><li class="nav__item"><?php echo $lang['collections'] ?></li></a>
                </ul>
            </li>
          </ul>
      </nav>
    </header>

    <main>
      
        <section class="cards__seciton">
            <h1><?php echo $lang['welcome']?></h1>
            <h3><b><?php echo $lang['welcomet']?></b></h3>
             
            
            <article class="cards__container">
              
            <div class="card">
              <img src="img/ticket.svg" class="card-img-top" alt="">
              <div class="card-body">
                  <h5><span class="badge text-bg-primary"><?php echo $lang['card__tittle1'] ?></span></h5>
                  <a class="links" href="entradas.php"><h4><B><?php echo $lang['card__link'] ?></B></h4></a>
                  <p class="card-text"><b><?php echo $lang['costOnline'] ?></b></p>
                  <p class="card-text"><b><?php echo $lang['costFisic'] ?></b></p>
                  <p class="card-text"><b><?php echo $lang['costMinor'] ?></b></p>
                  <p class="card-text"><?php echo $lang['costOthers'] ?> </p>
                  <p><b><?php echo $lang['free'] ?>  </b></p>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni consequuntur placeat esse. Suscipit rerum atque tempore aliquid excepturi dolor iusto eaque quas? Ea, culpa! Deserunt eius fugit voluptatibus possimus quam dolores rem fuga ad, nostrum, aliquid a sunt necessitatibus quae similique totam numquam reiciendis ea atque, ex iure non architecto!</p>
              </div>
            </div>
            <div class="card">
              <img src="img/horario.svg" class="card-img-top" alt="">
              <div class="card-body">
                  <h5><span class="badge text-bg-primary"> <?php echo $lang['card__tittle2'] ?></span></h5>
                  <p class="card-text"><?php echo $lang['time'] ?></p>
                  <p class="card-text"><?php echo $lang['timeSpecial'] ?> </p>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni consequuntur placeat esse. Suscipit rerum atque tempore aliquid excepturi dolor iusto eaque quas? Ea, culpa! Deserunt eius fugit voluptatibus possimus quam dolores rem fuga ad, nostrum, aliquid a sunt necessitatibus quae similique totam numquam reiciendis ea atque, ex iure non architecto!</p>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni consequuntur placeat esse. Suscipit rerum atque tempore aliquid excepturi dolor iusto eaque quas? Ea, culpa! Deserunt eius fugit voluptatibus possimus quam dolores rem fuga ad, nostrum, aliquid a sunt necessitatibus quae similique totam numquam reiciendis ea atque, ex iure non architecto!</p>

                </div>
            </div>
            <div class="card">
              <img src="img/localizacion.svg" class="card-img-top" alt="">
              <div class="card-body">
                  <h5><span class="badge text-bg-primary"><?php echo $lang['card__tittle3'] ?> </span></h5>
                  <p class="card-text"><b><?php echo $lang['address'] ?>: 25 de Mayo 131, B1824 Lanús, Provincia de Buenos Aires</b></p>
                  <iframe class="card__maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5516.079647935739!2d-58.393756558127095!3d-34.70819183814083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a53525ef6c60945!2sMuseo%20de%20Arte%20Contempor%C3%A1neo%20del%20Sur!5e0!3m2!1ses-419!2sar!4v1663177991473!5m2!1ses-419!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <p class="card-text"><b><?php echo $lang['advice'] ?> </b></p>
                  <div class="indicaciones">
                    <p class="card-text"><b><?php echo $lang['train'] ?></b></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore necessitatibus dolorem.</p>
                    <p class="card-text"><b>En Omnibus</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore necessitatibus dolorem.</p>
                    <p class="card-text"><b><?php echo $lang['car'] ?></b></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore necessitatibus dolorem.</p>
                  </div>
              </div>
            </div>
            </article>
        </section>

        <section>
            <div class="visita__container">
              <h3 class="visita__tittle"><?php echo $lang['visitPublic__tittle'] ?></h3>
              <h5 class="visita__subtittle"><?php echo $lang['visitPublic__schedule'] ?></h5>
              <ul class="visita__list">
                <li class="visita__item"><?php echo $lang['visitPublic__week'] ?></li>
                <li class="visita__item"><?php echo $lang['visitPublic__week-end'] ?></li>
                <li class="visita__item"><?php echo $lang['visitPublic__holidays'] ?></li>
              </ul>
              <p class="visita__text"><i><?php echo $lang['visitPublic__cost'] ?></i></p>
              <p class="visita__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti pariatur dignissimos ipsum eaque quos, nam odio? Asperiores corrupti tempora repudiandae voluptate, officia incidunt? Ducimus sint quas dicta, voluptates tenetur cum.</p>
            </div>

            <div class="visitaEsc__container">
              <h3 class="visitaEsc__tittle"><?php echo $lang['visitSchool__tittle'] ?></h3>
              <h5 class="visitaEsc__subtittle"><?php echo $lang['visitPublic__schedule'] ?></h5>
              <ul class="visitaEsc__list">
                <li class="visitaEsc__item"><?php echo $lang['visitSchool__week'] ?></li>
                <li class="visitaEsc__item"><?php echo $lang['visitSchool__week-end'] ?><</li>
              </ul>
              <p class="visitaEsc__text"><i><?php echo $lang['visitSchool__text'] ?></i></p>
              <p class="visitaEsc__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus et quisquam consectetur odit! Ducimus dolores vitae reprehenderit velit aliquam placeat recusandae, veniam omnis! Illum mollitia vel rem quibusdam tempore aut?</p>
            </div>
        </section>

    </main>
    
    <footer class="footer">
        <div class="datos__container">
          <h2 class="datos__tittle"><?php echo $lang['footer__tittle'] ?></h2>
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
            <input class="form__input" type="text" class="form-control" id="floatingInputValue" placeholder="Asunto | subject">
            <input class="form__input" type="text" class="form-control" id="floatingInputValue" placeholder="Nombre | name">
            <input class="form__input" type="email" class="form-control" id="floatingInputValue" placeholder="Introduzca su email | enter your e-mail">
            <textarea class="form__input" placeholder="Deje su comentario aquí | leave your comment here" id="floatingTextarea"></textarea>
            <button type="reset" class="btn btn-primary btn-lg"><?php echo $lang['footer__form__button__reset'] ?></button>
            <button type="submit" class="btn btn-secondary btn-lg"><?php echo $lang['footer__form__button__send'] ?></button>
          </form>
        </div>
    </footer>
    <div>
    <a href="index.php?lang=es"> <?php echo $lang['es'] ?> </a> | <a href="index.php?lang=en"> <?php echo $lang['en'] ?></a>          
    </div>
    <div class="accesibilidad">
      <svg class="nav__item nav__acces btn__accesibilidad" alt="Icono de Accesibilidad" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g><path d="m28 21c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z"/><path d="m30.5 30c0 1.1164.2268 2.2212.6666 3.2474l3.7121 8.6617c.3264.7615-.0264 1.6433-.7878 1.9696-.7615.3264-1.6433-.0264-1.9696-.7878l-3.7122-8.6617c-.0288-.0672-.0569-.1346-.0843-.2023-.0552-.136-.1863-.2269-.333-.2269-.1503 0-.2837.0951-.336.236-.0773.208-.1597.4144-.2474.6188l-3.5297 8.2361c-.3263.7614-1.2081 1.1142-1.9696.7878-.7614-.3263-1.1142-1.2081-.7878-1.9696l3.5297-8.236c.5602-1.307.849-2.7142.849-4.1362v-2.6775c-3.6006-.4075-6.9399-1.6847-9.7997-3.6164-.6865-.4637-.8672-1.3961-.4035-2.0826s1.3962-.8671 2.0826-.4034c3.0314 2.0475 6.6841 3.243 10.6206 3.243s7.5892-1.1955 10.6206-3.243c.6865-.4637 1.6189-.2831 2.0826.4034s.283 1.6189-.4035 2.0826c-2.8598 1.9317-6.1991 3.2089-9.7997 3.6164z"/><path clip-rule="evenodd" d="m52 28c0 13.2548-10.7452 24-24 24s-24-10.7452-24-24 10.7452-24 24-24 24 10.7452 24 24zm-3 0c0 11.598-9.402 21-21 21s-21-9.402-21-21 9.402-21 21-21 21 9.402 21 21z" fill-rule="evenodd"/></g></svg>
    </div>
    <script src="js/bootstrap.js"></script>
    
</body>

</html>