<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar Sesión - Hotel Amankay</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('img/fondo.png');">
  <!-- Botón regresar -->
  <a href="{{ url('/') }}" class="fixed top-6 left-6 z-50 flex items-center gap-2 bg-[#e9c68d] text-yellow-900 font-bold px-4 py-2 rounded-xl shadow hover:bg-yellow-400 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    Regresar
  </a>
  <div class="bg-amber-100/90 rounded-3xl shadow-2xl px-4 py-8 sm:px-8 sm:py-10 max-w-md w-full flex flex-col items-center mx-2">
    <img src="img/Logo.jpg" alt="Logo Hotel Amankay" class="w-16 h-16 rounded-full object-cover border-2 border-yellow-700 bg-white mb-4" />
    <h2 class="text-2xl font-bold text-yellow-900 mb-6 tracking-wide text-center">Iniciar Sesión</h2>
    <form class="w-full flex flex-col gap-4 mb-4">
      <div>
        <label for="email" class="block text-yellow-900 font-medium mb-1">Correo Electrónico</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-2 rounded-md border border-yellow-300 focus:border-yellow-600 focus:outline-none text-yellow-900 bg-white" />
      </div>
      <div>
        <label for="password" class="block text-yellow-900 font-medium mb-1">Contraseña</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-2 rounded-md border border-yellow-300 focus:border-yellow-600 focus:outline-none text-yellow-900 bg-white" />
      </div>
      <button type="submit" herf ="Usuario.html"
        class="w-full bg-yellow-700 text-white font-bold py-2 rounded-md mt-2 hover:bg-yellow-800 transition">Ingresar</button>
    </form>
    <div class="flex items-center w-full my-3">
      <div class="flex-grow h-px bg-yellow-300"></div>
      <span class="mx-3 text-yellow-700 text-sm">o ingresa con</span>
      <div class="flex-grow h-px bg-yellow-300"></div>
    </div>
    <div class="flex flex-col gap-3 w-full">
      <button type="button"
        class="flex items-center justify-center gap-2 border border-yellow-300 bg-white py-2 rounded-md font-semibold text-yellow-900 hover:bg-yellow-200 transition">
        <img src="img/google.png" alt="Google icon" class="w-6 h-6" />
        Google
      </button>
      <button type="button"
        class="flex items-center justify-center gap-2 border border-yellow-700 bg-white py-2 rounded-md font-semibold text-blue-700 hover:bg-yellow-200 transition">
        <img src="img/facebook.png" alt="Facebook icon" class="w-6 h-6" />
        Facebook
      </button>
    </div>
  </div>
  <script src="js/login.js"></script>
</body>
</html>
