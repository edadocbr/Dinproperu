@extends('layout')  

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Contáctenos</h2>
    </div> 

    <div class="link">
      <a href="{{ route('pages.home') }}"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Contáctenos</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->
 
  <!-- ==================== Contact Area (Start) ==================== -->
  <section class="contact" id="contact">

    <!-- ========== Contact Info (Start) ========== -->
    <div class="contact-info">

      <!-- Phone Info -->
      <div class="info-item">
        <div class="info">
          <i class="fas fa-phone"></i>
          <div class="content">
            <h3>Teléfono</h3>
            <p>652-3247</p>
          </div>
        </div>
      </div>

      <!-- Cellphone Info -->
      <div class="info-item">
        <div class="info">
          <i class="fas fa-mobile"></i>
          <div class="content">
            <h3>Celular</h3>
            <p>+51 998945990</p>
          </div>
        </div>
      </div>

      <!-- Email Info -->
      <div class="info-item">
        <div class="info">
          <i class="fas fa-envelope"></i>
          <div class="content">
            <h3>Email</h3>
            <p class="gmail">ventas@dinproperu.com</p>
          </div>
        </div>
      </div>

      <!-- Address Info -->
      <div class="info-item">
        <div class="info">
          <i class="fa-solid fa-map-location-dot"></i>
          <div class="content">
            <h3>Dirección</h3>
            <p>Jr. Jorge Chavez 376 Breña - Lima</p>
          </div>
        </div>
      </div>

    </div>
    <!-- ========== Contact Info (End) ========== -->

    <div class="box-container"> 

      <!-- ========== Contact Form (Start) ========== -->
      <div class="contact-container">

        <!-- Section Heading -->
        <div class="heading">  
          <span><i class="fas fa-wrench"></i>envianos un mensaje<i class="fas fa-wrench"></i></span>
          <h2>Ponte En Contacto</h2>  
        </div>

        <!-- Contact Form -->
        <form action="{{  route('contact.send') }}" method="post" class="contact-form" id="contact-form"> 
          
          @csrf
          
          <div class="input-box">
            <input type="text" name="name" class="box" id="name" placeholder="Nombre" required> <!-- Name Input Field -->
            <input type="email" name="email" class="box" id="email" placeholder="Email" required> <!-- Email Input Field -->
          </div>

          <div class="input-box"><input type="text" name="subject" class="box" id="subject" placeholder="Asunto" required></div><!-- Subject Input Field -->
          <div class="input-box"><textarea cols="30" rows="10" name="message" class="box" id="comment" placeholder="Mensaje" required></textarea></div> <!-- Message Input Field -->

          <button type="submit" class="btn" id="sendButton">enviar</button> <!-- Submit Button -->

          <span class="alert" id="msg"></span> <!-- Placeholder for Alert or Confirmation Messages -->

        </form>
        
        <script>
          document.addEventListener("DOMContentLoaded", function () {
              const form = document.getElementById("contact-form");
              const sendButton = document.getElementById("sendButton");
      
              form.addEventListener("submit", function (event) {
                  sendButton.disabled = true; // Deshabilita el botón
                  sendButton.innerText = "Enviando..."; // Cambia el texto
                  
                  // Guarda en localStorage el tiempo en que se hizo clic
                  localStorage.setItem("sendTimestamp", Date.now());
      
                  // Espera 30 segundos antes de volver a habilitar el botón
                  setTimeout(() => {
                      sendButton.disabled = false;
                      sendButton.innerText = "Enviar"; // Restaurar el texto
                  }, 30000);
              });
      
              // Si el usuario recarga la página, revisamos si han pasado los 30 segundos
              const lastSent = localStorage.getItem("sendTimestamp");
              if (lastSent) {
                  const elapsed = Date.now() - parseInt(lastSent);
                  if (elapsed < 30000) {
                      sendButton.disabled = true;
                      sendButton.innerText = "Mensaje Enviado";
                      setTimeout(() => {
                          sendButton.disabled = false;
                          sendButton.innerText = "Enviar";
                          localStorage.removeItem("sendTimestamp"); // Limpiamos el almacenamiento
                      }, 30000 - elapsed);
                  }
              }
          });
        </script>
        <!-- Contact Form (End) -->
        

      </div>
      <!-- ========== Contact Form (End) ========== --> 

      <!-- ========== Google Map (Start) ========== -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124859.35013108313!2d-77.19202595664065!3d-12.053517199999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8da62a19529%3A0xa265b0bcba1864b1!2sDINPRO%20PER%C3%9A%20SRL!5e0!3m2!1ses!2spe!4v1739918158756!5m2!1ses!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- ========== Google Map (End) ========== -->

    </div>

  </section>
  <!-- ==================== Contact Area (End) ==================== -->


@endsection