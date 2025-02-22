@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Máquinas dosificadoras y llenadoras</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.machines') }}"><i class="fa-solid fa-wrench"></i> Máquinas</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Máquinas dosificadoras y llenadoras</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->
   
  <!-- ==================== Single Product Area (Start) ==================== -->
  <section class="product-single">
      
    <!-- ========== Product-Description Area (Start) ========== -->
    <div class="product-des">
    
      <div class="box-container">
    
        <!-- Product Image -->
        <div class="image">
          <div class="image-container">
    
            <!-- Main product image -->
            <div class="main">
              <img src="/assets/images/Dinproperu/maquinas-dosificadoras-y-llenadoras.jpg" alt="dinproperu-maquinas-dosificadoras-y-llenadoras"> <!-- Main product image -->
            </div>
    
          </div>
        </div>
    
        <!-- Product Information -->
        <div class="content">
          <div class="text">
    
            <div class="introduction">
              <h3>Máquinas dosificadoras y llenadoras</h3> <!-- Product Title -->
            </div>
    
            <p>Fabricadas en acero inoxidable, con control de temperatura digital y sistema de accionamiento electro-neumático de velocidad regulable. Disponibles en versiones manual, semiautomática o automática.</p> <!-- Product Description -->

            <ul>
              <li><i class="fa-solid fa-check"></i>Diseñadas para dosificar líquidos, cremas o polvo según el requerimiento del cliente</li>
              <li><i class="fa-solid fa-check"></i>Equipadas con un sistema de control preciso para garantizar una dosificación uniforme</li>
              <li><i class="fa-solid fa-check"></i>Adaptables a diferentes niveles de automatización según las necesidades de producción</li>
            </ul>
    
          </div>
        </div>
    
      </div>
    
    </div>
    <!-- ========== Product-Description Area (End) ========== -->

  </section>
  <!-- ==================== Single Product Area (End) ==================== -->
@endsection

@push('scripts')
  <!-- Custom Script Files -->
  <script src="/assets/js/Product-Gallery.js"></script> <!-- Manages the interactive display of product galleries -->
@endpush