
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel AMANKAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-amber-50">

  <!-- Encabezado -->
  <header class="flex justify-between items-center bg-[#e9c68d] px-4 md:px-12 py-4 shadow-md">
    <div class="flex items-center gap-4">
      <img src="{{ asset('img/Logo.jpg') }}" alt="Logo Hotel Amankay" class="w-14 h-14 rounded-full object-cover border-2 border-white bg-white" />
      <h1 class="text-2xl md:text-3xl font-bold text-yellow-900 tracking-wide">Hotel AMANKAY</h1>
    </div>
    <nav class="flex gap-4 md:gap-8">
      <a href="{{ url('/') }}" class="text-yellow-900 font-semibold hover:text-yellow-700 transition">Inicio</a>
      <a href="{{ url('/catalogo') }}" class="text-yellow-900 font-semibold hover:text-yellow-700 transition">Reserva Ahora</a>
      <a href="{{ url('/login') }}" class="bg-yellow-700 text-white px-4 py-2 rounded-lg font-bold border-2 border-yellow-700 hover:bg-yellow-800 hover:border-yellow-800 transition">Iniciar Sesión</a>
    </nav>
  </header>

  <!-- Sección principal -->
  <main class="flex-1 flex flex-col gap-8">

    <!-- Fondo superior con formulario de fechas -->
    <section class="relative flex items-center justify-center py-12 px-2 md:px-0" style="background-image: url('{{ asset('img/cartel.jpg') }}'); background-size: cover; background-position: center;">
      <div class="absolute inset-0 bg-[#e9c68d]/70"></div>
      <div class="relative flex flex-col md:flex-row items-center gap-6 bg-white/90 rounded-xl shadow-lg p-6 md:p-10 z-10 max-w-3xl w-full">
        <div class="flex flex-col items-center w-full">
          <h2 class="text-lg font-semibold text-yellow-900 mb-2">Fecha Entrada</h2>
          <input type="date" class="px-3 py-2 rounded-md border border-[#e9c68d] focus:border-yellow-700 focus:outline-none text-yellow-900 bg-white w-full" />
        </div>
        <div class="flex flex-col items-center w-full">
          <h2 class="text-lg font-semibold text-yellow-900 mb-2">Fecha Salida</h2>
          <input type="date" class="px-3 py-2 rounded-md border border-[#e9c68d] focus:border-yellow-700 focus:outline-none text-yellow-900 bg-white w-full" />
        </div>
        <button id="btnBuscar" class="bg-yellow-700 text-white font-bold px-6 py-3 rounded-lg mt-4 md:mt-8 md:ml-4 hover:bg-[#e9c68d] hover:text-yellow-900 hover:border-[#e9c68d] border-2 border-yellow-700 transition w-full md:w-auto">Buscar</button>
      </div>
    </section>

    <!-- Carrusel de habitaciones -->
    <section class="flex flex-col items-center py-10 bg-amber-100">
      <div class="relative flex items-center justify-center w-full max-w-5xl h-[480px] md:h-[520px] bg-white rounded-2xl shadow-xl overflow-hidden px-0 py-0">
        <!-- Botón anterior -->
        <button class="carrusel-btn prev absolute left-2 md:left-4 top-1/2 -translate-y-1/2 bg-[#e9c68d] text-yellow-900 text-4xl rounded-full w-14 h-14 flex items-center justify-center shadow hover:bg-yellow-400 transition z-10" aria-label="Anterior">&#10094;</button>
        
        <!-- Slides -->
        <div class="carrusel-slide activo absolute inset-0 flex flex-col md:flex-row items-center justify-center w-full h-full transition-opacity duration-700 ease-in-out">
          <img src="{{ asset('img/habitacion.jpg') }}" alt="Habitación Doble" class="w-full md:w-1/2 h-full object-cover rounded-2xl z-0" />
          <div class="relative z-10 flex flex-col items-center justify-center h-full w-full md:w-1/2 bg-white/80 md:bg-white/70 rounded-2xl p-8">
            <h3 class="text-3xl font-bold text-yellow-900 mb-4 drop-shadow">Habitación Doble</h3>
            <p class="text-yellow-800 text-xl font-medium text-center md:text-left max-w-2xl drop-shadow">Espaciosa, con dos camas, baño privado y vista al jardín. Perfecta para amigos o compañeros de viaje.</p>
          </div>
        </div>
        <div class="carrusel-slide absolute inset-0 flex flex-col md:flex-row items-center justify-center w-full h-full transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none">
          <img src="{{ asset('img/habitacion2.jpg') }}" alt="Suite Familiar" class="w-full md:w-1/2 h-full object-cover rounded-2xl z-0" />
          <div class="relative z-10 flex flex-col items-center justify-center h-full w-full md:w-1/2 bg-white/80 md:bg-white/70 rounded-2xl p-8">
            <h3 class="text-3xl font-bold text-yellow-900 mb-4 drop-shadow">Suite Familiar</h3>
            <p class="text-yellow-800 text-xl font-medium text-center md:text-left max-w-2xl drop-shadow">Ideal para familias, con sala de estar, balcón privado y todas las comodidades para grandes y chicos.</p>
          </div>
        </div>
        <div class="carrusel-slide absolute inset-0 flex flex-col md:flex-row items-center justify-center w-full h-full transition-opacity duration-700 ease-in-out opacity-0 pointer-events-none">
          <img src="{{ asset('img/habitacion3.jpg') }}" alt="Habitación Matrimonial" class="w-full md:w-1/2 h-full object-cover rounded-2xl z-0" />
          <div class="relative z-10 flex flex-col items-center justify-center h-full w-full md:w-1/2 bg-white/80 md:bg-white/70 rounded-2xl p-8">
            <h3 class="text-3xl font-bold text-yellow-900 mb-4 drop-shadow">Habitación Matrimonial</h3>
            <p class="text-yellow-800 text-xl font-medium text-center md:text-left max-w-2xl drop-shadow">Ambiente romántico, cama king size, jacuzzi y detalles pensados para parejas.</p>
          </div>
        </div>

        <!-- Botón siguiente -->
        <button class="carrusel-btn next absolute right-2 md:right-4 top-1/2 -translate-y-1/2 bg-[#e9c68d] text-yellow-900 text-4xl rounded-full w-14 h-14 flex items-center justify-center shadow hover:bg-yellow-400 transition z-10" aria-label="Siguiente">&#10095;</button>
        
        <!-- Indicadores -->
        <div class="absolute bottom-6 left-0 w-full flex justify-center gap-4 z-20">
          <span class="indicador inline-block w-5 h-5 rounded-full bg-[#e9c68d] border-2 border-white opacity-100"></span>
          <span class="indicador inline-block w-5 h-5 rounded-full bg-[#e9c68d] border-2 border-white opacity-50"></span>
          <span class="indicador inline-block w-5 h-5 rounded-full bg-[#e9c68d] border-2 border-white opacity-50"></span>
        </div>
      </div>
    </section>

    <!-- Sección de bienvenida -->
    <section class="flex flex-col md:flex-row items-center justify-center gap-8 py-10 px-4 bg-white/80 rounded-2xl shadow-lg max-w-5xl mx-auto mt-8">
      <img src="{{ asset('img/cartel.jpg') }}" alt="Fachada Hotel Amankay" class="w-full md:w-1/2 rounded-2xl shadow-lg object-cover h-64 md:h-80" />
      <div class="flex flex-col items-center md:items-start">
        <h2 class="text-3xl font-bold text-yellow-900 mb-4">¡Bienvenido a Hotel Amankay!</h2>
        <p class="text-yellow-800 text-lg mb-2 max-w-xl">Disfruta de una experiencia única en el corazón de Cusco. Habitaciones cómodas, atención personalizada y todos los servicios para que tu estadía sea inolvidable.</p>
        <a href="{{ url('/catalogo') }}" class="mt-4 bg-yellow-700 text-white px-6 py-2 rounded-lg font-bold hover:bg-yellow-800 transition">Ver habitaciones</a>
      </div>
    </section>

    <!-- Sección de servicios -->
    <section class="max-w-5xl mx-auto py-10 px-4">
      <h2 class="text-2xl font-bold text-yellow-900 mb-6 text-center">Nuestros Servicios</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="flex flex-col items-center">
          <span class="text-4xl mb-2">🍳</span>
          <span class="font-semibold text-yellow-900">Desayuno Incluido</span>
        </div>
        <div class="flex flex-col items-center">
          <span class="text-4xl mb-2">📶</span>
          <span class="font-semibold text-yellow-900">WiFi Gratis</span>
        </div>
        <div class="flex flex-col items-center">
          <span class="text-4xl mb-2">🅿️</span>
          <span class="font-semibold text-yellow-900">Estacionamiento</span>
        </div>
        <div class="flex flex-col items-center">
          <span class="text-4xl mb-2">🛏️</span>
          <span class="font-semibold text-yellow-900">Habitaciones Familiares</span>
        </div>
      </div>
    </section>

    <!-- Sección de testimonios -->
    <section class="max-w-5xl mx-auto py-10 px-4">
      <h2 class="text-2xl font-bold text-yellow-900 mb-6 text-center">Lo que dicen nuestros huéspedes</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow p-4">
          <p class="text-yellow-800 mb-2">"¡Excelente atención y habitaciones muy cómodas! Volveré sin dudarlo."</p>
          <span class="font-semibold text-yellow-900">- María G.</span>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
          <p class="text-yellow-800 mb-2">"La ubicación es perfecta y el desayuno delicioso."</p>
          <span class="font-semibold text-yellow-900">- Luis P.</span>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
          <p class="text-yellow-800 mb-2">"Ideal para familias, nos sentimos como en casa."</p>
          <span class="font-semibold text-yellow-900">- Andrea R.</span>
        </div>
      </div>
    </section>

    <!-- Sección de ubicación -->
    <section class="max-w-5xl mx-auto py-10 px-4 flex flex-col md:flex-row items-center gap-8">
      <iframe 
        class="rounded-2xl shadow w-full md:w-1/2 h-64"
        src="https://www.openstreetmap.org/export/embed.html?bbox=-71.9781%2C-13.5226%2C-71.9771%2C-13.5216&amp;layer=mapnik&amp;marker=-13.5221,-71.9776"
        style="border:1px solid #ccc"
        allowfullscreen=""
        loading="lazy">
      </iframe>
      <div class="flex flex-col items-center md:items-start">
        <h2 class="text-2xl font-bold text-yellow-900 mb-2">¿Dónde estamos?</h2>
        <p class="text-yellow-800 mb-4">Calle Alabado 523, Cusco, Perú</p>
        <a href="https://wa.me/51900564785" target="_blank" class="bg-green-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-green-700 transition flex items-center gap-2">
          <span>💬</span> WhatsApp
        </a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-[#e9c68d] text-yellow-900 py-8 px-4 mt-8 rounded-t-3xl shadow-inner">
    <div class="flex flex-col items-center gap-3">
      <div class="flex items-center gap-3 font-bold text-lg">
        <img src="{{ asset('img/Logo.jpg') }}" alt="Logo Hotel Amankay" class="w-10 h-10 rounded-full object-cover border-2 border-white bg-white" />
        <span>Hotel AMANKAY</span>
      </div>
      <div class="text-yellow-800 text-center text-base">
        <p>Dirección: Calle Alabado 523, Cusco, Perú</p>
        <p>Tel: 900564785 &nbsp; | &nbsp; Email: contacto@amankay.com</p>
        <p class="text-sm mt-2">&copy; 2025 Hotel AMANKAY. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/buscar-fechas.js') }}"></script>
</body>
</html>
