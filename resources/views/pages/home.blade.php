@extends('layout')

@section('content')

  <!-- ==================== Home-Slider Area (Start) ==================== -->  
  <section class="home">

    <div class="swiper-container home-slider">
      <div class="swiper-wrapper">

        <!-- Slide 1: Expert Car Repairs -->
        <div class="swiper-slide home-item">
          <img src="/assets/images/Dinproperu/fabricacion-de-maquinas-para-envasado-de-productos-sanitarios-y-afines-banner.jpg" alt="feature-image1"> <!-- Slide Image -->
        </div>

        <!-- Slide 2: Quality Repairs -->
        <div class="swiper-slide home-item">
          <img src="/assets/images/Dinproperu/diseno-y-fabricacion-de-maquinas-para-envasado-y-empacado-banner.jpg" alt="feature-image2"> <!-- Slide Image -->
        </div>

        <!-- Slide 3: Car Care Experts -->
        <div class="swiper-slide home-item">
          <img src="/assets/images/Dinproperu/empacadora-al-vacio-banner.jpg" alt="feature-image3"> <!-- Slide Image -->
          <div class="content-2">
            <div class="text">
              <h4><i class="fas fa-tools"></i>fabricación de máquinas según sus necesidades</h4>
              <h3>revisa nuestros magníficos servicios</h3>
              <a href="{{ route('pages.services.empacado') }}" class="btn">Servicios</a> <!-- Button to Services Page -->
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination for Swiper -->
      <div class="swiper-pagination swiper-pagination1"></div>

      <!-- Navigation Buttons for Swiper -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>
  <!-- ==================== Home-Slider Area (End) ==================== -->    

  <!-- ==================== Feature Area (Start) ==================== -->
  <section class="features">
    
    <div class="box-container">

      <div class="feature-item">
        <i class="fa-solid fa-user-gear"></i>
        <div class="content">
          <h3>pruebas de empacado real con sus productos</h3>
        </div>
      </div>

      <div class="feature-item">
        <i class="fa-solid fa-screwdriver-wrench"></i>
        <div class="content">
          <h3>aplicación de tecnología actualizada</h3>
        </div>
      </div>

      <div class="feature-item">
        <i class="fa-regular fa-face-smile"></i>
        <div class="content">
          <h3>experiencia en máquinas de envasado y empacado</h3>
        </div>
      </div>

    </div>

    

  </section>  
  <!-- ==================== Feature Area (End) ==================== -->

  <!-- ==================== About Area (Start) ==================== -->
  <section class="about">

    <div class="box-container">

      <div class="iframe">
        <iframe src="https://www.youtube.com/embed/kFI8mjQZbNw" 
                frameborder="0"
                allowfullscreen></iframe>
      </div>

      <div class="content">
        <div class="text">

          <!-- Main Text Content -->
          <h3>Diseño y Fabricación de máquinas para empacado y envasado</h3>
          <p>diseño y la fabricación de maquinas 
            envasadoras y empacadoras para las diferentes empresas dedicadas a 
            la producción. Nuestra experiencia en el rubro y la aplicación de 
            tecnología actualizada, nos permite brindarles maquinas productivas 
            de acuerdo a sus necesidades.</p>
          
          <!-- Bullet Points Section -->
          <div class="point">

            <!-- Bullet Point Item: Skilled and certified mechanics -->
            <div class="point-item">
              <i class="fa-solid fa-cog"></i>
              <p>Fabricados en acero inoxidable</p>
            </div>

            <!-- Bullet Point Item: High-quality parts and services -->
            <div class="point-item">
              <i class="fa-solid fa-cog"></i>
              <p>Fabricados en acero al carbono</p>
            </div>

            <!-- Bullet Point Item: Commitment to customer satisfaction -->
            <div class="point-item">
              <i class="fa-solid fa-cog"></i>
              <p>Sistema de empacado automático</p>
            </div>

            <!-- Bullet Point Item: Commitment to customer satisfaction -->
            <div class="point-item">
              <i class="fa-solid fa-cog"></i>
              <p>Sistema Semiautomático y Manual</p>
            </div>

          </div>
        </div>
      </div>
    
    </div>
    
  </section>
  <!-- ==================== About Area (End) ==================== -->

  <!-- ==================== Services Area (Start) ==================== -->
  <section class="services">
    
    <!-- Heading -->
    <div class="heading">
      <span><i class="fas fa-wrench"></i>algunas de nuestras máquinas<i class="fas fa-wrench"></i></span>
      <h2>tecnología que se adapta a sus necesidades</h2>
    </div>

    <!-- Services -->
    <div class="box-container">

      <!-- Service Item 1: Brake Repairs -->
      <div class="service-item">
        <div class="image">
          <img src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica-2.png" alt="Service-Image"> <!-- Service Image -->
        </div>
        <div class="content">
          <a href="{{ route('pages.machines.horno-termo-contraible-con-enfajadora-automatica') }}">horno termo contraíble con enfajadora automática</a> <!-- Service Title with Link -->
          <p>fabricado en acero al carbono y acero inoxidable, resistencias tubulares con recirculación de aire caliente.</p> <!-- Service Description -->
        </div>
      </div>

      <!-- Service Item 2: Engine Repair -->
      <div class="service-item">
        <div class="image">
          <img src="/assets/images/Dinproperu/horno-etiquetador-600x400.png" alt="Service-Image"> <!-- Service Image -->
        </div>
        <div class="content">
          <a href="{{ route('pages.machines.horno-etiquetador') }}">horno etiquetador</a> <!-- Service Title with Link -->
          <p>fabricado en acero inoxidable, banda transportadora de velocidad variable, resistencias eléctricas con recirculadora de aire control de temperatura digital.</p> <!-- Service Description -->
        </div>
      </div>

      <!-- Service Item 3: Oil & Filters -->
      <div class="service-item">
        <div class="image">
          <img src="/assets/images/Dinproperu/empacadora-al-vacio-600x400.png" alt="Service-Image"> <!-- Service Image -->
        </div>
        <div class="content">
          <a href="{{ route('pages.machines.empacadora-al-vacio') }}">empacadora al vacío</a> <!-- Service Title with Link -->
          <p>máquina fabricada en acero inoxidable diseñada para empacar por presión negativa, vacuo metro de control de presión negativa.</p> <!-- Service Description -->
        </div>
      </div>
    </div>
    
  </section>
  <!-- ==================== Services Area (End) ==================== -->

  <!-- ==================== Portfolio Area (Start) ==================== -->
  <section class="portfolio">
    
    <!-- Heading Section -->
    <div class="heading">
      <span><i class="fas fa-wrench"></i>nuestro trabajo<i class="fas fa-wrench"></i></span>
      <h2>portfolio <a href="{{ route('pages.portfolio') }}"><i class="fa fa-arrow-right"></i></a></h2>
    </div>

    <!-- Container for Portfolio Items -->
    <div class="box-container"> 

      <!-- Image -->
      <div class="portfolio-item image">
        <div class="portfolio-content">
          <img src="./assets/images/Dinproperu/dinproperu_logo.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <div class="text">
              <h5>Revisa nuestro trabajo</h5>
              <a href="{{ route('pages.portfolio') }}"><h4>ir al portfolio</h4></a> <!-- Link to Single Portfolio Page -->
            </div>
          </div>
        </div>
      </div>

      <!-- Image-->
      <div class="portfolio-item image">
        <div class="portfolio-content">
          <img src="./assets/images/Dinproperu/empacadora-al-vacio-2.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="./assets/images/Dinproperu/empacadora-al-vacio-2.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item image">
        <div class="portfolio-content">
          <img src="./assets/images/Dinproperu/fajas-transportadoras.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="./assets/images/Dinproperu/fajas-transportadoras.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item image">
        <div class="portfolio-content">
          <img src="./assets/images/Dinproperu/horno-etiquetador-2.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="./assets/images/Dinproperu/horno-etiquetador-2.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item image">
        <div class="portfolio-content">
          <img src="./assets/images/Dinproperu/fabricaciones-especiales.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="./assets/images/Dinproperu/fabricaciones-especiales.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item image">
        <div class="portfolio-content">
          <img src="./assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica-2.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="./assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica-2.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- ==================== Portfolio Area (End) ==================== -->  

  <!-- ==================== Banner Area (Start) ==================== -->
  <section class="Banner">
    @include('partials.banner-contact')
  </section>
  <!-- ==================== Banner Area (End) ==================== -->

  <!-- ==================== Partners Area (Start) ==================== -->
  @include('partials.partners')
  <!-- ==================== Partners Area Area (End) ==================== -->

@stop