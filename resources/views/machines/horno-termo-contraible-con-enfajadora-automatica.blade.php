@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>horno termo contraíble con enfajadora automática</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.home') }}"><i class="fa-solid fa-wrench"></i> máquinas</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">horno termo contraíble con encajadora automática</span>
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
              <img src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica.png" alt="Product-Image"> <!-- Main product image -->
            </div>
    
            <!-- Product Image Gallery Buttons -->
            <div class="change-btns">
              <img class="active" src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica.png" alt="Product-Gallery-Image-1"> <!-- Active image in the gallery -->
              <img src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica-2.jpg" alt="Product-Gallery-Image-2"> <!-- Image in the gallery -->  
            </div>
    
          </div>
        </div>
    
        <!-- Product Information -->
        <div class="content">
          <div class="text">
    
            <div class="introduction">
              <h3>horno termo contraíble con enfajadora automática</h3> <!-- Product Title -->
            </div>
    
            <p>Fabricado en acero al carbono y acero inoxidable, con resistencias tubulares y recirculación de aire caliente. Cuenta con banda transportadora de velocidad variable, barra de sellado en acero especial, debobinador superior e inferior, controles de temperatura digital y sistema de empacado en modos automático, semiautomático y manual. Incorpora enfriador de paquetes y rampa de acumulación a la salida.</p> <!-- Product Description -->

            <ul>
              <li><i class="fa-solid fa-check"></i>Diseñado para la producción en serie de paquetes termo contraídos</li>
              <li><i class="fa-solid fa-check"></i>Compatible con distintos tipos de envases, como frascos, baldes, botellas de vidrio y cajas</li>
              <li><i class="fa-solid fa-check"></i>Sistema de sellado eficiente para garantizar la seguridad y presentación del paquete</li>
              <li><i class="fa-solid fa-check"></i>Ofrece opciones de automatización para adaptarse a distintos volúmenes de producción</li>
            </ul>
    
          </div>
        </div>
    
      </div>
    </div>
    <!-- ========== Product-Description Area (End) ========== -->
  </section>
  <!-- ==================== Single Product Area (End) ==================== -->
  
@endsection