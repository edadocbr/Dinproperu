@extends('layout')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Fabricaciones especiales</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.machines') }}"><i class="fa-solid fa-wrench"></i> Máquinas</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Fabricaciones especiale</span>
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
              <img src="/assets/images/Dinproperu/fabricaciones-especiales-500x500.jpg" alt="dinproperu-fabricaciones-especiales"> <!-- Main product image -->
            </div>
          </div>
        </div>
    
        <!-- Product Information -->
        <div class="content">
          <div class="text">
    
            <div class="introduction">
              <h3>Fabricaciones especiales</h3> <!-- Product Title -->
              <div class="intro"> 
                <!-- Product Rating -->
              </div>
    
              <p>Fabricamos máquinas especiales para el envasado, empacado y procesado de alimentos, químicos, cosméticos y afines, adaptadas a las necesidades del cliente.

              Nuestras máquinas están fabricadas con componentes de las mejores marcas del entorno nacional, permitiendo un fácil y rápido recambio de partes y piezas, lo que favorece un mantenimiento eficiente.
              
              Ponemos toda nuestra experiencia y capacidad técnica a su servicio.</p> <!-- Product Description -->


              <a href="{{ route('pages.contact') }}" class="btn">Contáctenos</a> <!-- Add to cart -->   
            </div>
    
          </div>
        </div>
    
      </div>
    
    </div>
    <!-- ========== Product-Description Area (End) ========== -->


    <!-- ========== Features products Area (Start) ========== -->
    <div class="featured-items">

      <div class="sidebar-heading">
        <h2>nuestros productos</h2>
      </div>

      <div class="box-container">

        <!-- Product-2 -->
        <div class="product-item">
          <div class="image">
              <img src="/assets/images/Dinproperu/horno-etiquetador.png" alt="dinproperu-horno-etiquetador"> <!-- Product Image -->
              <div class="icon-box">
                  <a href="{{ route('pages.machines.horno-etiquetador') }}"><i class="fa-solid fa-eye"></i></a><!-- Product Single Link Button -->
              </div>
          </div>
          <div class="content">
              <div class="text">
                  <a href="{{ route('pages.machines.horno-etiquetador') }}"><h3>Horno etiquetador</h3></a> <!-- Product Title -->
              </div>
          </div>
        </div>
  
        <!-- Product-3 -->
        <div class="product-item">
            <div class="image">
                <img src="/assets/images/Dinproperu/maquinas-dosificadoras-y-llenadoras.jpg" alt="dinproperu-maquinas-dosificadoras-y-llenadoras"> <!-- Product Image -->
                <div class="icon-box">
                    <a href="{{ route('pages.machines.maquinas-dosificadoras-y-llenadoras') }}"><i class="fa-solid fa-eye"></i></a><!-- Product Single Link Button -->
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <a href="{{ route('pages.machines.maquinas-dosificadoras-y-llenadoras') }}"><h3>Máquinas dosificadoras y llenadoras</h3></a> <!-- Product Title -->
                </div>
            </div>
        </div>
  
        <!-- Product-4 -->
        <div class="product-item">
            <div class="image">
                <img src="/assets/images/Dinproperu/horno-termo-contraible-con-enfajadora-automatica.png" alt="dinproperu-horno-termo-contraible-con-enfajadora-automatica"> <!-- Product Image -->
                <div class="icon-box">
                    <a href="{{ route('pages.machines.horno-termo-contraible-con-enfajadora-automatica') }}"><i class="fa-solid fa-eye"></i></a><!-- Product Single Link Button -->
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <a href="{{ route('pages.machines.horno-termo-contraible-con-enfajadora-automatica') }}"><h3>Horno termo contraible con enfajadora automática</h3></a> <!-- Product Title -->
                </div>
            </div>
        </div>
  
        <!-- Product-5 -->
        <div class="product-item">
            <div class="image">
                <img src="/assets/images/Dinproperu/empacadora-al-vacio.jpg" alt="dinproperu-empacadora-al-vacio">
                <div class="icon-box">
                    <a href="{{ route('pages.machines.empacadora-al-vacio') }}"><i class="fa-solid fa-eye"></i></a><!-- Product Single Link Button -->
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <a href="{{ route('pages.machines.empacadora-al-vacio') }}"><h3>Empacadora al vacío</h3></a> <!-- Product Title -->
                </div>
            </div>
        </div>

      </div>
    </div>
    <!-- ========== Features products Area (End) ========== -->  

  </section>
  <!-- ==================== Single Product Area (End) ==================== -->
@endsection

@push('scripts')
  <!-- Custom Script Files -->
  <script src="/assets/js/Product-Gallery.js"></script> <!-- Manages the interactive display of product galleries -->
@endpush