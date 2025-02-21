<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Title -->  
  <title>{{ config('app.name') }} | fabrica de maquina empacadora, fabricacion de maquina para envasado, maquina empacadora, servicios de envasado o empacado, Dosificadora de l&iacute;quidos en peru, Llenadoras de crema, Envasadora de polvos, Envases r&iacute;gido Envases flexible, Botellas, Sachets, Sobres,Enfardadora,En fajadora,T&uacute;nel decalor, Termocontraible, Termoencogible, Termoretractil, Film, Polietileno, Bobina, Lamina,Faja transportadora, Resistencia,Paquetes, Empacadora, Empacado</title> 
  <meta name="title" content="maquinas empacadoras, Dosificadora de líquidos en lima, Llenadoras de crema, Envasadora de polvos, Envases rígido Envases flexible, Botellas, Sachets, Sobres, maquinarias empacadoras, En fajadora, Túnel de calor, Termocontraible, Termoencogible, Termoretractil, Film, Polietileno, Bobina, Lamina,Faja transportadora, Resistencia, Paquetes, Empacadora">
  <meta name="description" content="servicio de envadaso, Dosificadora de líquidos en todo el peru, Llenadoras de crema, Envasadora de polvos, Envases rígido Envases flexible, Botellas, Sachets, Sobres,Enfardadora,En fajadora,Túnel decalor, Termocontraible, Termoencogible, Termoretractil, Film, Polietileno, Bobina, Lamina,Faja transportadora, Resistencia,Paquetes, Empacadora">
  <meta name="keywords" content="maquina selladora de liquido, envasador, transportador,enpacador,dosificador ">
  <meta name="language" content="es">
  <meta name="rating" content="General">
  <meta name="author" content="ticom, pagina web peru, hosting peru, dominios peru">
  <meta name="owner" content="ticom, paginas web peru, hosting peru, dominios peru">
  <meta name="robots" content="all">

  <!-- Dinproperu-icon --> 
  <link rel="icon" type="image/x-icon" href="/assets/images/Dinproperu/dinproperu_logo.png">

  <!-- Font-Awesome (CSS) -->
  <link rel="stylesheet" href="/assets/vendors/font-awesome/css/all.min.css">

  <!-- Magnific-Popup (CSS) -->
  <link rel="stylesheet" href="/assets/vendors/magnific-popup/magnific-popup.css">

  <!-- Swiper (CSS) -->
  <link rel="stylesheet" href="/assets/vendors/swiper/swiper-bundle.min.css">

  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">

</head>
<body>

  <!-- ==================== Scroll-Top Area (Start) ==================== -->
  <a href="#" class="scroll-top">
    <i class="fas fa-long-arrow-alt-up"></i>
  </a>
  <!-- ==================== Scroll-Top Area (End) ==================== -->
  
  <!-- ==================== Header Area (Start) ==================== -->
  @include('partials.nav')
  <!-- ==================== Header Area (End) ==================== -->  


  <!-- ==================== Contenido dinámico (Start) ==================== -->
  @yield('content')
  <!-- ==================== Contenido dinámico (Start) ==================== -->


  <!-- ==================== Footer Area (Start) ==================== -->
  <footer class="footer">

    <div class="box-container">

      <!-- Footer item 1 - Logo and contact information -->
      <div class="footer-item">
        <!-- Logo and site name -->
        <a class="logo" href="{{ route('pages.home') }}">
          <img src="/assets/images/Dinproperu/dinproperu_logo.png" alt="dinproperu-logo">
          <div class="logo-name">
            <h3><span>DINPRO PERU</span></h3>
          </div>
        </a>
        <!-- Short Description -->
        <p>Diseñamos y fabricamos máquinas envasadoras y empacadoras para la industria, combinando experiencia y tecnología para ofrecer soluciones productivas a la medida.</p>
        <!-- Contact Information -->
        <div class="info connect">
          <p><i class="fas fa-phone"></i><span>652-3247</span></p>
          <p><i class="fas fa-mobile"></i><span>+51 998945990</span></p>
          <p><i class="fas fa-envelope"></i><span class="gmail">ventas@dinproperu.com</span></p>
          <p><i class="fas fa-map"></i><span>jr. jorge chavez 376 breña - lima</span></p>
        </div>
      </div>

      <!-- Footer item 2 - Quick links to pages -->
      <div class="footer-item">
        <h2>Enlaces rápidos</h2>
        <div class="info links pages">
          <div class="links-item">
            <p><i class="fa-solid fa-caret-right"></i><a href="{{ route('pages.about') }}">Nosotros</a></p>
            <p><i class="fa-solid fa-caret-right"></i><a href="{{ route('pages.portfolio') }}">Portfolio</a></p>
            <p><i class="fa-solid fa-caret-right"></i><a href="{{ route('pages.contact') }}">contáctenos</a></p>
          </div>
        </div>
      </div>

      <!-- Footer item 3 - List of services offered -->
      <div class='footer-item'>
        <h2>Nuestros servicios</h2> 
        <div class="info service">
          <p><i class="fa-solid fa-caret-right"></i><a href="{{ route('pages.services.empacado') }}">Empacado y envasado</a></p>
          <p><i class="fa-solid fa-caret-right"></i><a href="{{ route('pages.services.ingenieria') }}">Ingeniería y mantenimiento</a></p>
        </div>
      </div>

      <!-- Footer item 4 - Opening hours and social links -->
      <div class='footer-item'>
        <h2>Horario de apertura</h2>
        <div class="info timing">
          <i class="far fa-clock"></i>
          <div class="time-item">
            <p><span>Lunes-Viernes: 9:00 AM - 6:00 PM </span></p>
            <p><span>Sábados: 9:00 AM - 1:30 PM </span></p>
            <p><span>Domingos: Cerrado</span></p>
          </div>
        </div>
        <h2>Social Links</h2>
        <div class="social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com/@LETICANCHO"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

    </div>

    <!-- Copyright information -->
    <div class="content">
      <p><i class="fa fa-copyright"></i> 2025 - TICOM diseño de páginas | Todos los derechos reservados</p>
    </div>

  </footer>
  <!-- ==================== Footer Area (End) ==================== -->



  <!-- Jquery -->
  <script src="/assets/vendors/jquery/jquery.min.js"></script>

  <!-- Magnific-Popup JS -->
  <script src="/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Isotope (JS) -->
  <script src="/assets/vendors/isotope/isotope.pkgd.min.js"></script>

  <!-- Swiper (JS) -->
  <script src="/assets/vendors/swiper/swiper-bundle.min.js"></script>

  <!-- Custom Script Files -->
  <script src="/assets/js/script.js"></script> <!-- Script for Main Website Logic -->
  <script src="/assets/js/nav-link-toggler.js"></script> <!-- Script for Handling Navigation Link Toggling -->
  <script src="/assets/js/home-slider.js"></script> <!-- Script for Home Slider -->
  <script src="/assets/js/service-slider.js"></script> <!-- Script for Service Slider -->
  <script src="/assets/js/counter-up.js"></script>  <!-- Script for Counter Up Animation -->
  <script src="/assets/js/portfolio.js"></script> <!-- Script for Portfolio Section -->
  <script src="/assets/js/testi-slider.js"></script> <!-- Script for Testimonial Slider -->
  <script src="/assets/js/partner-slider.js" ></script> <!-- Script for Partner Slider -->


</body>
</html>