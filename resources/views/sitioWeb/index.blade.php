<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de exemplo</title>
  <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="{{asset('sitioweb/img/logo.png')}}" type="image/x-icon">
</head>
<body>
  <header>
    <section>
      <img style="width: 200px;" src="{{asset('sitioweb/img/logo.png')}}" alt="">
    </section>
    
    <section class="links">
      <nav>
        <div class="hamburger-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
        <ul class="nav-links">
          <li><a href="#mision"><i class="fa-solid fa-rocket fa-beat"></i> Misión</a></li>
          <li><a href="#vision"><i class="fa-solid fa-lightbulb fa-beat"></i> Visión</a></li>
          <li><a href="#objetivos"><i class="fa-solid fa-shop fa-beat-fade"></i> Objetivos</a></li>
          <li><a href="#footer"><i class="fa-solid fa-server fa-beat"></i> Contactos</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <main>
    <br>
    <section class="mainCarrusel">
    <div class="imgCarrusel">
      <img src="{{asset('sitioweb/img/asociacion.JPG')}}" alt="">
    </div>
    </section>
         <section class="flex-contenido">
            <section id="mision" class="flex-item">
              <section  class="flex-itemImg">
              <img style="width: 300px; height: 310px;" class="img1" src="{{asset('sitioweb/img/imagen1.jpg')}}" alt="">
              </section>
              <br>
              <br>
              <section class="flex-itemInfo">
              <h2><span>*</span>MISIÓN</h2>
              <p>"Contribuir al bienestar integral y al mejoramiento de la calidad de vida de las mujeres, socias y socios que se encuentran en situaciones de vulnerabilidad en los ámbitos laboral, familiar y social, a través del fortalecimiento de sus capacidades y habilidades para la generación e implementación de proyectos de promoción social e iniciativas autogestionadas. Además, brindar servicios complementarios de limpieza y alimentación, permitiéndoles ser reconocidas, respetadas y avanzar por sus propios medios en igualdad de condiciones."</p>
              </section>
            </section>
            <section id="vision" class="flex-item2">
              <section class="flex-itemInfo2">
              <h2><span>*</span>VISIÓN</h2>
              <p>"Ser una organización líder, independiente y solidaria, reconocida a nivel local y nacional, que ofrece servicios y productos de calidad y con calidez, donde sus socias, a través de la reflexión y construcción colectiva de conocimiento, alcanzan su máximo potencial y se reconocen como personas titulares de derechos."</p>  
              </section>
              <section class="flex_itemImg2">
                <img style="width: 300px; height: 310px;" class="img2" src="{{asset('sitioweb/img/imagen2.jpg')}}" alt="">
              </section>
            </section>
         </section>
        
        <section class="estrategias-futuro">
          <h4 id="objetivos" class="titulo-seccion">OBJETIVOS</h4>
          <div class="planes">
            <div class="plan">
                <h5 class="titulo-plan">Objetivo 1</h5>
                <ul class="lista-detalles">
                  <li>Promover el desarrollo integral de las socias para que alcancen su máximo potencial y puedan desenvolverse.</li>
                </ul>
            </div>
            <div class="plan">
                <h5 class="titulo-plan">Objetivo 2</h5>
                <ul class="lista-detalles">
                    <li>Mejorar las condiciones sociales, económicas y culturales de las socias a través de la generación de empleo digno.</li>
                </ul>
            </div>
            <div class="plan">
                <h5 class="titulo-plan">Objetivo 3</h5>
                <ul class="lista-detalles">
                    <li>Generar espacios de participación para la construcción de capacidades para un cambio individual, familiar y social.</li>
                </ul>
            </div>
          </div>
        </section>
         <br><br>
         
         <section class="carrusel">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style="width: 720px; height: 490px;" src="{{asset('sitioweb/img/imagenCarrusel1.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="width: 720px; height: 490px;" src="{{asset('sitioweb/img/imagenCarrusel2.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="width: 720px; height: 490px;" src="{{asset('sitioweb/img/imagenCarrusel3.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
         
  </main>

  
  <footer id="footer">
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.27,150.50 C158.86,-8.36 338.31,213.66 499.72,108.06 L539.78,-36.00 L-4.79,-13.30 Z" style="stroke: none; fill: rgb(253, 255, 255);"></path></svg></div><br><br>
    <section class="flex-footer">

      <section class="flex-redes">
        <section class="title-redes">
          <h3>REDES SOCIALES</h3>
        </section>
        <section class="redes">
          <nav>
            <ul class="ul-redes">
              @foreach($getRedes as $getRedess)
              <li><a href="($getRedess->1)" target="_blank"><i class="fa-brands fa-facebook fa-beat"></i> FACEBOOK</a></li>
              <li><a href=""><i class="fa-brands fa-tiktok fa-beat"></i> TIK TOK</a></li>
              <li><a href=""><i class="fa-brands fa-instagram fa-beat"></i> INSTAGRAM</a></li>
              @endforeach
            </ul>
          </nav>
        </section>
      </section>
  
      <section class="flex-contactos">
        <section class="title-contactos">
          <h3>CONTACTOS</h3>
        </section>
        <section class="contactos">
          <nav>
            <ul class="ul-contactos">
              <li><a href=""><i class="fa-solid fa-phone-volume fa-beat"></i> 099 262 9651</i></a></li>
              <li><a href=""><i class="fa-solid fa-envelope fa-beat"></i> reinosorose@hotmail.com</a></li>
            </ul>
          </nav>
        </section>
      </section>
  
      <section class="flex-localisacion">
        <section class="title-localisacion">
          <h3>GEOLOCALIZACION</h3>
        </section>
        <section class="mapa">
          <nav>
            <ul>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57435.633753676884!2d-78.53673396515975!3d-0.1936656732581628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a39fb318fd9%3A0xafe9580b3977f171!2sAv.%20Universitaria%2C%20Quito!5e0!3m2!1ses!2sec!4v1733843440094!5m2!1ses!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
          </nav>
        </section>
      </section>
    </section>
  </footer>
  <script style="height: 20px; width: 50px;" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{asset('sitioWeb/js/scrip.js')}}"></script>
</body>
</html>