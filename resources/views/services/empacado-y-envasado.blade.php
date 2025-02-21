@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  @include('services.partials.page-title')
  <!-- ==================== Page-Title (End) ==================== -->

  <!-- ==================== Service Single (Start) ==================== -->
  <section class="service-single page-single">

    <!-- ========== Service Sidebar Area (Start) ========== -->
    @include('services.partials.our-services')
    <!-- ========== Service Sidebar Area (End) ========== -->

    <!-- ========== Service Info Container (Start) ========== -->
    <div class="service-info page-info">

      <!-- Service Image -->
      <div class="image">
        <img src="/assets/images/Dinproperu/empacadora-al-vacio-2.jpg" alt="Service-Image">
      </div>

      <div class="content">

        <!-- Main Heading -->
        <h3 class="main-heading">Optimice su Producción con Nuestras Máquinas de Envasado y Empacado</h3>

        <!-- Service Description -->
        <p>Debido a nuestra preocupación por apoyarlo en su crecimiento industrial, contamos con máquinas manuales y semiautomáticas para servicios de envasado o empacado de su producción. Porque sus productos requieren de una alta calidad en su presentación, lo invitamos a contactarse con nosotros y permitirnos asesorarlo. Existe una amplia gama de posibilidades para lograr presentaciones de calidad para sus productos.</p>

        <!-- Service Gallery -->
        <div class="page-gallery">
          <iframe src="https://www.youtube.com/embed/sdufvrp0Ph0" 
                frameborder="0"
                allowfullscreen></iframe> 

          <iframe src="https://www.youtube.com/embed/Hz5GGeHdQpU" 
                  frameborder="0"
                  allowfullscreen></iframe>
        </div>

      </div>

    </div>
    <!-- ========== Service Info Container (End) ========== -->

  </section>
  <!-- ==================== Service Single (End) ==================== -->

@endsection