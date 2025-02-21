<!-- Font-Awesome (CSS) -->
<link rel="stylesheet" href="/assets/vendors/font-awesome/css/all.min.css">

<!-- Magnific-Popup (CSS) -->
<link rel="stylesheet" href="/assets/vendors/magnific-popup/magnific-popup.css">

<!-- Swiper (CSS) -->
<link rel="stylesheet" href="/assets/vendors/swiper/swiper-bundle.min.css">

<!-- Custom Stylesheets -->
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/responsive.css">

     
<!-- ==================== Register Area (Start) ==================== -->
<section class="register">

    <!-- Registration Form -->
    <form class="account-form">
        <div class="content" style="padding: 5%">
            <br>
            <br>
            <!-- Icon -->
            <div class="icon"><img src="/assets/images/Dinproperu/dinproperu_logo.png" alt="" width="13%"></div>
            <br>
            <!-- Form Heading -->
            <h3 style="color: #FF0032"> Se ha recibido un mensaje para DINPRO PERU de:</h3>
            
            <h3>Nombre:</h3>
            <h2 style="text-transform: none">{{ $data['name'] }}</h2>
            <br>
            <h3>Email:</h3>
            <h2 style="text-transform: none">{{ $data['email'] }}</h2>
            <br>
            <h3>Asunto:</h3>
            <h2 style="text-transform: none">{{ $data['subject'] }}</h2>
            <br>
            <h3>Mensaje:</h3>
            <h2 style="text-transform: none">{{ $data['message'] }}</h2>
            <br>
            <br>
        </div>
    </form>

</section>
<!-- ==================== Register Area (End) ==================== -->
