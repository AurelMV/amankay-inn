
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Catálogo de Habitaciones - Hotel AMANKAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-amber-100 via-[#e9c68d]/60 to-white flex flex-col">

  <!-- Header -->
  <header class="flex justify-between items-center bg-[#e9c68d] px-4 md:px-12 py-4 shadow-md">
    <div class="flex items-center gap-4">
      <img src="{{ asset('img/Logo.jpg') }}" alt="Logo Hotel Amankay" class="w-14 h-14 rounded-full object-cover border-2 border-white bg-white" />
      <h1 class="text-2xl md:text-3xl font-bold text-yellow-900 tracking-wide">Hotel AMANKAY</h1>
    </div>
    <a href="{{ url('/') }}" class="bg-yellow-700 text-white px-4 py-2 rounded-lg font-bold border-2 border-yellow-700 hover:bg-yellow-800 hover:border-yellow-800 transition">Volver</a>
  </header>

  <!-- Fechas seleccionadas -->
  <section class="flex flex-col items-center mt-8 mb-4">
    <h2 class="text-xl font-bold text-yellow-900 mb-2">Habitaciones disponibles</h2>
    <div class="flex gap-6 text-yellow-900 text-lg">
      <span id="fechaEntrada"></span>
      <span>-</span>
      <span id="fechaSalida"></span>
    </div>
  </section>

  <!-- Catálogo de habitaciones -->
  <main class="flex-1 flex flex-col items-center px-2 pb-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl">
      <!-- Habitación Doble -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
        <img src="{{ asset('img/habitacion.jpg') }}" alt="Habitación Doble" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col flex-1">
          <h3 class="text-2xl font-bold text-yellow-900 mb-2">Habitación Doble</h3>
          <p class="text-yellow-800 mb-4 flex-1">Espaciosa, con dos camas, baño privado y vista al jardín. Perfecta para amigos o compañeros de viaje.</p>
          <button class="bg-[#e9c68d] text-yellow-900 font-bold py-2 rounded-lg shadow hover:bg-yellow-400 transition">Reservar</button>
        </div>
      </div>
      <!-- Suite Familiar -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
        <img src="{{ asset('img/habitacion2.jpg') }}" alt="Suite Familiar" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col flex-1">
          <h3 class="text-2xl font-bold text-yellow-900 mb-2">Suite Familiar</h3>
          <p class="text-yellow-800 mb-4 flex-1">Ideal para familias, con sala de estar, balcón privado y todas las comodidades para grandes y chicos.</p>
          <button class="bg-[#e9c68d] text-yellow-900 font-bold py-2 rounded-lg shadow hover:bg-yellow-400 transition">Reservar</button>
        </div>
      </div>
      <!-- Habitación Matrimonial -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
        <img src="{{ asset('img/habitacion3.jpg') }}" alt="Habitación Matrimonial" class="w-full h-56 object-cover">
        <div class="p-6 flex flex-col flex-1">
          <h3 class="text-2xl font-bold text-yellow-900 mb-2">Habitación Matrimonial</h3>
          <p class="text-yellow-800 mb-4 flex-1">Ambiente romántico, cama king size, jacuzzi y detalles pensados para parejas.</p>
          <button class="bg-[#e9c68d] text-yellow-900 font-bold py-2 rounded-lg shadow hover:bg-yellow-400 transition">Reservar</button>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal de detalles de habitación -->
  <div id="modalHabitacion" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-6 relative">
      <button id="cerrarModal" class="absolute top-3 right-3 text-yellow-900 text-2xl font-bold hover:text-yellow-700">&times;</button>
      <img id="modalImg" src="" alt="Imagen Habitación" class="w-full h-56 object-cover rounded-xl mb-4">
      <h3 id="modalTitulo" class="text-2xl font-bold text-yellow-900 mb-2"></h3>
      <p id="modalDesc" class="text-yellow-800 mb-2"></p>
      <ul id="modalServicios" class="mb-2 text-yellow-900 text-sm"></ul>
      <p id="modalDesayuno" class="mb-2"></p>
      <p id="modalPrecio" class="font-bold text-lg text-yellow-900 mb-4"></p>
      <button class="w-full bg-yellow-700 text-white font-bold py-2 rounded-lg hover:bg-yellow-800 transition">Confirmar Reserva</button>
    </div>
  </div>

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

 <script src="{{ asset('js/catalogo-fechas.js') }}"></script>
 <script src="{{ asset('js/catalogo-modal.js') }}"></script>
</body>
</html>