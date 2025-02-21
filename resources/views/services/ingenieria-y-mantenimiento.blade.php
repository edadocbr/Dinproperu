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

      <div class="content">

        <!-- Main Heading -->
        <h3 class="main-heading">Soluciones a la medida en ingeniería y mantenimiento</h3>

        <!-- Service Description -->
        <p>Diseñamos y desarrollamos máquinas de acuerdo a sus necesidades, tomando como dato inicial su compromiso hacia el futuro de sus productos.</p>
        <p>Nuestra experiencia nos permite ofertarle proyectos para la optimización de sus procesos de envasado y empacado actuales. Nuestro interés es participar en su desarrollo.</p>
        <div class="sub-section">
          <h3 class="sub-heading">Podemos resumir el conjunto de servicios que ofrecemos en este departamento en los siguientes ítems:</h3>
          <div class="work">
            <ul>
              <li><i class="fas fa-caret-right"></i>Mantenimiento preventivo y correctivo de todo tipo de máquinas envasadoras y empacadoras</li>
              <li><i class="fas fa-caret-right"></i>Suministro de partes y repuestos</li>
              <li><i class="fas fa-caret-right"></i>Fabricaciones especiales en acero inoxidable</li>
              <li><i class="fas fa-caret-right"></i>Servicio metalmecánico en general</li>
              <li><i class="fas fa-caret-right"></i>Fabricación de transportadores de botellas, cajas y otros</li>
              <li><i class="fas fa-caret-right"></i>Fabricación de unidades modulares de envasado</li>
            </ul>
            <div class="work-image">
              <img src="/assets/images/Dinproperu/fabricaciones-especiales.jpg" alt="dinproperu-fabricaciones-especiales">
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- ========== Service Info Container (End) ========== -->

  </section>
  <!-- ==================== Service Single (End) ==================== -->


@endsection