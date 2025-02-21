<header>

    <!-- ===== Header Area (Start) ===== -->
    <div class="header">

      <div class="header-1">

        <ul class="header-contacts">
          <li><i class="fas fa-phone"></i><span>652-3247</span></li>
          <li><i class="fas fa-mobile"></i><span>+51 998945990</span></li>
          <li><i class="fas fa-envelope"></i><span class="gmail">ventas@dinproperu.com</span></li>
        </ul>

        <!-- Contacts -->
        <ul class="social-contacts">
          <li><a href="https://www.facebook.com/dinpro.peru" target="_blank" class="fab fa-facebook-f"></a></li>
          <li><a href="https://www.youtube.com/@LETICANCHO" target="_blank" class="fab fa-youtube"></a></li>
        </ul>

      </div>

      <div class="header-2">

        <div id="menu-btn" class="icon fa-solid fa-bars-staggered"></div>

        <!-- Logo --> 
        <a class="logo" href="{{ route('pages.home') }}">
          <img src="/assets/images/Dinproperu/dinproperu_logo.png" alt="dinproperu-logo">
          <div class="logo-name">
            <h3><span>DINPRO PERU</span></h3>
          </div>
        </a>

        <div class="container">

          <!-- Navbar --> 
          <nav class="navbar">

            <a class="nav-btn {{ setActiveRoute('pages.home') }}" href="{{ route('pages.home') }}">Inicio</a>

            <a class="nav-btn {{ setActiveRoute('pages.about') }}" href="{{ route('pages.about') }}">Nosotros</a> 

            <a class="nav-btn {{ setActiveRoute(['pages.services.empacado', 'pages.services.ingenieria']) }}" href="{{ route('pages.services.empacado') }}">Servicios</a>

            <a class="nav-btn {{ setActiveRoute('pages.machines') }}" href="{{ route('pages.machines') }}">Máquinas</a>
              
            <a class="nav-btn {{ setActiveRoute('pages.portfolio') }}" href="{{ route('pages.portfolio') }}">Portfolio</a>   

            <a class="nav-btn {{ setActiveRoute('pages.contact') }}" href="{{ route('pages.contact') }}">Contáctenos</a>

          </nav> 

        </div>

      </div>

    </div>
    <!-- ===== Header Area (Ends) ===== -->

    <!-- ===== Mobile Menu Area (Start) ===== -->
    <div class="mobile-menu"> 

      <div id="close-side-bar" class="fa-solid fa-angles-left"></div> 
    
      <nav class="mobile-navbar">

        <div class="nav-link">
          <div class="main-nav-link"> 
            <a class="nav-btn" href="{{ route('pages.home') }}">Inicio</a> 
          </div>
        </div>   

        <div class="nav-link">
          <div class="main-nav-link"> 
            <a class="nav-btn" href="{{ route('pages.about') }}">Nosotros</a>
          </div>
        </div> 

        <div class="nav-link">
          <div class="main-nav-link">
            <a class="nav-btn" href="{{ route('pages.services.empacado') }}">Servicios</a>
          </div>
        </div>

        <div class="nav-link">
          <div class="main-nav-link">
            <a class="nav-btn" href="{{ route('pages.machines') }}">Máquinas</a>
          </div>
        </div>

        <div class="nav-link">
          <div class="main-nav-link">
            <a class="nav-btn" href="{{ route('pages.portfolio') }}">Portfolio</a>
          </div>
        </div>
        
        <div class="nav-link">
          <div class="main-nav-link">
            <a class="nav-btn" href="{{ route('pages.contact') }}">Contáctenos</a>
          </div>
        </div>

      </nav>
    
    </div>
    <!-- ===== Mobile Menu Area (Ends) ===== -->

</header>
 