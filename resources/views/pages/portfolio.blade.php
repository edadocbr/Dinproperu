@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>portfolio</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.home') }}"><i class="fa-solid fa-house-chimney"></i> inicio</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">portfolio</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->

  <!-- ==================== portfolio Area (Start) ==================== -->
  <section class="portfolio">
    
    <!-- Heading Section -->
    <div class="heading">
      <span><i class="fas fa-wrench"></i>nuestro trabajo<i class="fas fa-wrench"></i></span>
      <h2>portfolio</h2>
    </div>

    <!-- Filter Buttons for Portfolio Categories -->
    <ul class="tab-buttons">
      <li class="button active" data-filter="*">todo</li>
      <li class="button" data-filter=".imagenes">imágenes</li>
      <li class="button" data-filter=".videos">videos</li>
    </ul>

    <!-- Container for Portfolio Items -->
    <div class="box-container"> 

      <!-- Video -->
      <div class="portfolio-item videos">
        <div class="portfolio-content">
          <iframe src="https://www.youtube.com/embed/X9RjY7Dfwko" 
                  frameborder="0"
                  allowfullscreen></iframe> 
        </div>
      </div>

      <!-- Video -->
      <div class="portfolio-item videos">
        <div class="portfolio-content">
          <iframe src="https://www.youtube.com/embed/Hz5GGeHdQpU" 
                  frameborder="0"
                  allowfullscreen></iframe> 
        </div>
      </div>

      <!-- Video -->
      <div class="portfolio-item videos">
        <div class="portfolio-content">
          <iframe src="https://www.youtube.com/embed/7g-2YS5C6C4" 
                  frameborder="0"
                  allowfullscreen></iframe> 
        </div>
      </div>

      <!-- Video -->
      <div class="portfolio-item videos">
        <div class="portfolio-content">
          <iframe src="https://www.youtube.com/embed/kFI8mjQZbNw" 
                  frameborder="0"
                  allowfullscreen></iframe> 
        </div>
      </div>
      
      <!-- Video -->
      <div class="portfolio-item videos">
        <div class="portfolio-content">
          <iframe src="https://www.youtube.com/embed/sdufvrp0Ph0" 
                  frameborder="0"
                  allowfullscreen></iframe> 
        </div>
      </div>

      <!-- Video -->
      <div class="portfolio-item videos">
        <div class="portfolio-content">
          <iframe src="https://www.youtube.com/embed/Mcjyzx1n3rE" 
                  frameborder="0"
                  allowfullscreen></iframe> 
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/empacadora-al-vacio.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/empacadora-al-vacio.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/empacadora-al-vacio-2.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/empacadora-al-vacio-2.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/fabricaciones-especiales.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/fabricaciones-especiales.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/fajas-transportadoras.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/fajas-transportadoras.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/fajas-transportadoras-2.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Portfolio/Portfolio/fajas-transportadoras-2.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/horno-etiquetador.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/horno-etiquetador.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/horno-etiquetador-2.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/horno-etiquetador-2.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica-2.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica-2.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/maquinas-dosificadoras-y-llenadoras.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/maquinas-dosificadoras-y-llenadoras.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/maquina-empacadora-portfolio-1.jpg" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/maquina-empacadora-portfolio-1.jpg"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="portfolio-item imagenes">
        <div class="portfolio-content">
          <img src="/assets/images/Dinproperu/maquina-empacadora-portfolio-2.png" alt="portfolio-Image"> <!-- Image for Portfolio Item -->
          <div class="content">
            <a class="view" href="/assets/images/Dinproperu/maquina-empacadora-portfolio-2.png"><i class="fas fa-expand-alt"></i></a> <!-- View Link -->
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- ==================== portfolio Area (End) ==================== -->

@endsection