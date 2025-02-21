@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Nosotros</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.home') }}"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Nosotros</span>
    </div>

  </div>
  <!-- ==================== Page-Title Area (End) ==================== -->

  <!-- ==================== About-Us Area (Start) ==================== -->
  <section class="about-us">

    <!-- ========== About Area (Start) ========== -->
    <section class="about">

      <div class="box-container">

        <div class="image">
          <img src="/assets/images/Dinproperu/fabricaciones-especiales.jpg" alt="dinproperu-fabricaciones-especiales"> <!-- About Image -->
          <div class="tag"> <!-- Experience Tag -->
            <span>21</span>
            <div>Años De <br> Experiencia</div>
          </div>
        </div>

        <div class="content">
          <div class="text">

            <!-- Heading Section -->
            <div class="heading">
              <span><i class="fas fa-wrench"></i>Conoce sobre nosotros<i class="fas fa-wrench"></i></span>
            </div>

            <!-- Main Text Content -->
            <h3>Sus expertos en fabricación de máquinas empacadoras y envasadoras</h3>
            <p>Somos una empresa peruana, nos dedicamos al diseño y la fabricación de máquinas para empacado y envasado. brindamos servicio de mantenimiento, maestranza y suministro de piezas y repuestos de neumática, electrónica y otros.</p>
            <br>
            <p>Valores de la empresa:</p>
            
            <!-- Bullet Points Section -->
            <div class="point">

              <!-- Bullet Point Item: Skilled and certified mechanics -->
              <div class="point-item">
                <i class="fa-solid fa-check"></i>
                <p>Calidad</p>
              </div>

              <!-- Bullet Point Item: High-quality parts and services -->
              <div class="point-item">
                <i class="fa-solid fa-check"></i>
                <p>Compromiso</p>
              </div>

               <!-- Bullet Point Item: High-quality parts and services -->
               <div class="point-item">
                <i class="fa-solid fa-check"></i>
                <p>Responsabilidad</p>
              </div>

              <!-- Bullet Point Item: Commitment to customer satisfaction -->
              <div class="point-item">
                <i class="fa-solid fa-check"></i>
                <p>Profesionalismo</p>
              </div>

            </div>

          </div>
        </div>
      
      </div>
      
    </section>
    <!-- ========== About Area (End) ========== -->

    <!-- ========== Count Area (Start) ========== -->
    <div class="counting">
      
      <!-- Box: Repair Parts -->
      <div class="box">
        <i class="fa-solid fa-check-circle"></i>
        <div class="text">
          <div class="count" data-count="100">5000+</div>
          <h3>Calidad y Diseño</h3>
        </div>
      </div>

      <!-- Box: Technicians -->
      <div class="box">
        <i class="fa-solid fa-user-gear"></i>
        <div class="text">
          <div class="count" data-count="1000">1000+</div>
          <h3>Máquinas Fabricadas</h3>
        </div>
      </div>

      <!-- Box: Satisfied Customers -->
      <div class="box">
        <i class="fa-regular fa-face-smile"></i>
        <div class="text">
          <div class="count" data-count="5000">5000+</div>
          <h3>Clientes Satisfechos</h3>
        </div>
      </div>

      <!-- Box: Years of Experience -->
      <div class="box">
        <i class="fa-regular fa-calendar"></i>
        <div class="text">
          <div class="count" data-count="20">20+</div>
          <h3>Años de Experiencia</h3>
        </div>
      </div>
      
    </div>
    <!-- ========== Count Area (End) ========== -->

    <!-- ========== Process Area (Start) ========== -->
    <section class="process">
    
      <!-- Section Heading -->
      <div class="heading">
        <span>se preguntará</span>
        <h2>¿POR QUÉ ELEGIR A DINPRO PERU?</h2>
      </div>
    
      <!-- Process Steps -->
      <div class="box-container">
    
        <!-- Process Step 1 -->
        <div class="process-item">
          <div class="image">
            <img src="/assets/images/Dinproperu/dinproperu-profesionales.jpg" alt="dinproperu-profesionales"> <!-- Process Image -->
            <span class="step-no">01</span> <!-- Process Step Number 1 -->
          </div>
          <div class="content">
            <h3>profesionales</h3> <!-- Process Title -->
            <p>Tenemos un equipo de profesionales que trabaja incansablemente para alcanzar la máxima calidad</p> <!-- Process Description -->
          </div>
        </div>
    
        <!-- Process Step 2 -->
        <div class="process-item">
          <div class="image">
            <img src="/assets/images/Dinproperu/dinproperu-trayectoria.jpg" alt="dinproperu-trayectoria"> <!-- Process Image -->
            <span class="step-no">02</span><!-- Process Step Number 2 -->
          </div>
          <div class="content">
            <h3>trayectoria</h3> <!-- Process Title -->
            <p>Amplia experiencia en fabricación de maquinas para envasado de productos sanitarios y afines.</p> <!-- Process Description -->
          </div>
        </div>
    
        <!-- Process Step 3 -->
        <div class="process-item">
          <div class="image">
            <img src="/assets/images/Dinproperu/dinproperu-compromiso.jpg" alt="dinproperu-compromiso"> <!-- Process Image -->
            <span class="step-no">03</span> <!-- Process Step Number 3 -->
          </div>
          <div class="content">
            <h3>compromiso</h3> <!-- Process Title -->
            <p>Nuestro principal objetivo es la satisfacción del cliente, realizamos trabajos con total garantía.</p> <!-- Process Description -->
          </div>
        </div>
    
        <!-- Process Step 4 -->
        <div class="process-item">
          <div class="image">
            <img src="/assets/images/Dinproperu/dinproperu-adaptables.jpg" alt="dinproperu-adaptables"> <!-- Process Image -->
            <span class="step-no">04</span> <!-- Process Step Number 4 -->
          </div>
          <div class="content">
            <h3>Adaptables</h3> <!-- Process Title -->
            <p>Fabricamos maquinas para empacado con técnología que se adapta a la necesidad del cliente</p> <!-- Process Description -->
          </div>
        </div>
    
      </div>
    
    </section>
    <!-- ========== Process Area (End) ========== -->

    <!-- ========== Banner Area (Start) ========== -->
    <section class="Banner-2">
      @include('partials.banner-contact')  
    </section>
    <!-- ========== Banner Area (End) ========== -->

    <!-- ========== Testimonials Area (Start) ========== -->
    <section class="testimonial-bg linear-bg">

      <!-- Testimonial Heading -->
      <div class="heading"> 
        <span><i class="fas fa-wrench"></i>qué dicen nuestros clientes<i class="fas fa-wrench"></i></span>
        <h2>Nuestros testimonios</h2>
      </div>
    
      <!-- Testimonial Slider Container -->
      <div class="swiper-container testimonial-slider">
        <div class="swiper-wrapper">
    
          <!-- Testimonial Item 1 -->
          <div class="swiper-slide testi-item">
            <div class="image">
              <img src="/assets/images/Dinproperu/comentario-dinproperu-fondo-blanco.png" alt="dinproperu-comentario"> <!-- Testimonial Image -->
            </div>
            <div class="content">
              <i class="fas fa-quote-left icon-1"></i> <!-- Quotation Icon -->
              <i class="fas fa-quote-left icon-2"></i> <!-- Quotation Icon -->
              <p>Experiencia y un equipo de profesionales altamente cualificados, así como las más avanzadas tecnologías de diseño y fabricación de maquinas para empacado y envasado soluciones amplias e innovadoras.</p> <!-- Testimonial Text -->
              <h4>Manuel Vasques</h4> <!-- Testimonial Author's Name -->
              <h6>Cliente</h6> <!-- Testimonial Author's Role -->
            </div>
          </div>
    
          <!-- Testimonial Item 2 -->
          <div class="swiper-slide testi-item">
            <div class="image">
              <img src="/assets/images/Dinproperu/comentario-dinproperu-fondo-blanco.png" alt="dinproperu-comentario"> <!-- Testimonial Image -->
            </div>
            <div class="content">
              <i class="fas fa-quote-left icon-1"></i> <!-- Quotation Icon -->
              <i class="fas fa-quote-left icon-2"></i> <!-- Quotation Icon -->
              <p>Fabricando máquinas con sus detalles propios de producción, Dinpro es una empresa muy comprometida con sus clientes. Se destaca por su servicio de asistencia técnica, caracterizándose por la rapidez y eficiencia.</p> <!-- Testimonial Text -->
              <h4>Carlos Jimenes</h4> <!-- Testimonial Author's Name -->
              <h6>Cliente</h6> <!-- Testimonial Author's Role -->
            </div>
          </div>
  
        </div>
    
        <!-- Testimonial Pagination -->
        <div class="swiper-pagination swiper-pagination3"></div>
  
      </div>
    
    </section>
    <!-- ========== Testimonials Area (End) ========== -->

    <!-- ========== Partners Area (Start) ========== -->
    @include('partials.partners')
    <!-- ========== Partners Area Area (End) ========== -->

  </section>
  <!-- ==================== About-Us Area (End) ==================== -->
  
@endsection