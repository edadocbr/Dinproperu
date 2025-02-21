@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Empacadora al vacío</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.machines') }}"><i class="fa-solid fa-wrench"></i> Máquinas</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Empacadora al vacío</span>
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
              <img src="/assets/images/Dinproperu/empacadora-al-vacio.jpg" alt="dinproperu-empacadora-al-vacio"> <!-- Main product image -->
            </div>
    
            <!-- Product Image Gallery Buttons -->
            <div class="change-btns">
              <img class="active" src="/assets/images/Dinproperu/empacadora-al-vacio.jpg" alt="dinproperu-empacadora-al-vacio"> <!-- Active image in the gallery -->
              <img src="/assets/images/Dinproperu/empacadora-al-vacio-2.jpg" alt="dinproperu-empacadora-al-vacio"> <!-- Image in the gallery -->
            </div>
    
          </div>
        </div>
    
        <!-- Product Information -->
        <div class="content">
          <div class="text">
    
            <div class="introduction">
              <h3>Empacadora al vacío</h3> <!-- Product Title -->
            </div>
    
            <p>Máquina fabricada en acero inoxidable, diseñada para empacar por presión negativa. Cuenta con vacuómetro de control, una o dos barras de sellado con opción de sellado doble o simple, y un panel de mando digital o analógico. Incorpora tapa totalmente transparente, bomba de vacío monofásica o trifásica con caudal ajustable según necesidad, ruedas para fácil transporte y sistema de empacado automático.</p> <!-- Product Description -->

            <ul>
              <li><i class="fa-solid fa-check"></i>diseñada para empacar productos orgánicos mediante extracción de oxígeno</li>
              <li><i class="fa-solid fa-check"></i>previene el desarrollo de microorganismos, prolongando la vida útil del producto</li>
              <li><i class="fa-solid fa-check"></i>opciones de control digital o analógico para mayor precisión</li>
              <li><i class="fa-solid fa-check"></i>sistema de vacío adaptable a diferentes necesidades de producción</li>
              <li><i class="fa-solid fa-check"></i>fácil de transportar gracias a su diseño con ruedas</li>
            </ul>
          </div>
        </div>
    
      </div>
  
    </div>
    <!-- ========== Product-Description Area (End) ========== -->
  </section>
  <!-- ==================== Single Product Area (End) ==================== -->

@endsection