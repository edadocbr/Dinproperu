@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Fajas transportadoras</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.machines') }}"><i class="fa-solid fa-wrench"></i> Máquinas</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Fajas transportadoras</span>
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
              <img src="/assets/images/Dinproperu/fajas-transportadoras-2.jpg" alt="dinproperu-fajas-transportadoras"> <!-- Main product image -->
            </div>
    
            <!-- Product Image Gallery Buttons -->
            <div class="change-btns">
              <img class="active" src="/assets/images/Dinproperu/fajas-transportadoras-2.jpg" alt="dinproperu-fajas-transportadoras"> <!-- Active image in the gallery -->
              <img src="/assets/images/Dinproperu/fajas-transportadoras.png" alt="dinproperu-fajas-transportadoras"> <!-- Image in the gallery -->
            </div>
    
          </div>
        </div>
    
        <!-- Product Information -->
        <div class="content">
          <div class="text">
    
            <div class="introduction">
              <h3>Fajas transportadoras</h3> <!-- Product Title -->
            </div>
    
            <p>Fabricación y acondicionamiento de fajas transportadoras en acero al carbono o acero inoxidable. Equipadas con banda transportadora de lona o banda modular en material termoplástico, según el tipo de producto a transportar. La velocidad puede ser variable o fija según el requerimiento del cliente.</p> <!-- Product Description -->

            <ul>
              <li><i class="fa-solid fa-check"></i>Diseñadas para optimizar el transporte de productos en distintos procesos industriales</li>
              <li><i class="fa-solid fa-check"></i>Fabricadas con materiales resistentes y duraderos según las necesidades de producción</li>
              <li><i class="fa-solid fa-check"></i>Opciones de velocidad fija o variable para mayor flexibilidad</li>
              <li><i class="fa-solid fa-check"></i>Bandas adaptables a diferentes tipos de carga y condiciones de trabajo.</li>
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