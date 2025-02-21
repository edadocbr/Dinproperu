@extends('layout')

@section('content')

    <!-- ==================== Page-Title (Start) ==================== -->
    <div class="page-title">

        <div class="title">
            <h2>Máquinas</h2>
        </div> 
   
        <div class="link">
            <a href="{{ route('pages.home') }}"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
            <i class="fas fa-angle-double-right"></i>
            <span class="page">Máquinas</span>
        </div>
  
    </div>
    <!-- ==================== Page-Title (End) ==================== -->

    <!-- ==================== Shop-Grid Area (Start) ==================== -->
    <section class="shop">

        <!-- ========== Shop Container (Start) ========== -->
        <div class="shop-container">

            <!-- ===== Shop Header (Start) ===== -->
            <div class="intro">
            
                <!-- Showing Products Count -->
                <div class="showing">Mostrando 6 de 6 máquinas </div>
                        
                <!-- Display Styles -->
                <div class="styles">
                    <a href="" class="fas fa-th"></a>
                </div>
            </div>
            <!-- ===== Shop Header (End) ===== -->
            
            <!-- ===== Products (Start) ===== -->
            <div class="product-container grid">

                <!-- Product-1 -->
                <div class="product-item">
                  <div class="image">
                      <img src="/assets/images/Dinproperu/fabricaciones-especiales.jpg" alt="dinproperu-fabricaciones-especiales"> <!-- Product Image -->
                      <div class="icon-box">
                          <a href="{{ route('pages.machines.fabricaciones-especiales') }}"><i class="fa-solid fa-eye"></i></a><!-- Product Single Link Button -->
                      </div>
                  </div>
                  <div class="content">
                      <div class="text">
                          <a href="{{ route('pages.machines.fabricaciones-especiales') }}"><h3>Fabricaciones especiales</h3></a> <!-- Product Title -->
                      </div>
                  </div>
                </div>
            
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
                            <a href="{{ route('pages.machines.horno-termo-contraible-con-enfajadora-automatica') }}"><h3>Horno termo contraíble con enfajadora automática</h3></a> <!-- Product Title -->
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
            
                <!-- Product-6 -->
                <div class="product-item">
                    <div class="image">
                        <img src="/assets/images/Dinproperu/fajas-transportadoras.png" alt="dinproperu-fajas-transportadoras"> <!-- Product Image -->
                        <div class="icon-box">
                            <a href="{{ route('pages.machines.fajas-transportadoras') }}"><i class="fa-solid fa-eye"></i></a><!-- Product Single Link Button -->
                        </div>
                    </div>
                    <div class="content">
                        <div class="text">
                            <a href="{{ route('pages.machines.fajas-transportadoras') }}"><h3>Fajas transportadoras</h3></a> <!-- Product Title -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== Products (Ends) ===== -->
        </div>
        <!-- ========== Shop Container (End) ========== --> 

    </section>
    <!-- ==================== Shop-Grid (End) ==================== -->

@endsection