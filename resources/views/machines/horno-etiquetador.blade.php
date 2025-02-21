@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>horno etiquetador</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.home') }}"><i class="fa-solid fa-wrench"></i> máquinas</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">horno etiquetador</span>
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
              <img src="/assets/images/Dinproperu/horno-etiquetador.png" alt="Product-Image"> <!-- Main product image -->
            </div>
    
            <!-- Product Image Gallery Buttons -->
            <div class="change-btns">
              <img class="active" src="/assets/images/Dinproperu/horno-etiquetador.png" alt="Product-Gallery-Image-1"> <!-- Active image in the gallery -->
              <img src="/assets/images/Dinproperu/horno-etiquetador-2.png" alt="Product-Gallery-Image-2"> <!-- Image in the gallery -->
            </div>
    
          </div>
        </div>
    
        <!-- Product Information -->
        <div class="content">
          <div class="text">
    
            <div class="introduction">
              <h3>horno etiquetador</h3> <!-- Product Title -->
            </div>
    
            <p>Fabricado en acero inoxidable, con banda transportadora de velocidad variable, resistencias eléctricas con recirculador de aire, control de temperatura digital y patas regulables.</p> <!-- Product Description -->

            <ul>
              <li><i class="fa-solid fa-check"></i>Diseñado para la colocación de etiquetas termo selladas a alta velocidad</li>
              <li><i class="fa-solid fa-check"></i>Compatible con distintos tipos de envases para mayor versatilidad</li>
              <li><i class="fa-solid fa-check"></i>Optimiza el proceso de etiquetado con precisión y eficiencia</li>
            </ul>

          </div>
        </div>
    
      </div>
    
    </div>
    <!-- ========== Product-Description Area (End) ========== -->
  </section>
  <!-- ==================== Single Product Area (End) ==================== -->
  
@endsection