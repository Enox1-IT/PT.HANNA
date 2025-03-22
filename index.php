<?php
session_start();
$isLoggedIn = isset($_SESSION['email']);
?>

<!-- Resten av HTML-en starter her -->
<!DOCTYPE html>
<html lang="no">
<head>
  <!-- (samme <head> som du allerede har) -->
  <!-- ... -->
</head>
<body class="bg-white">
  <!-- NAV -->
  <nav class="fixed w-full bg-white shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <div class="flex items-center">
          <span class="text-2xl font-['Pacifico'] text-primary">logo</span>
        </div>
        <div class="hidden md:flex space-x-8">
          <a href="#hjem" class="text-gray-700 hover:text-primary">Hjem</a>
          <a href="#om-meg" class="text-gray-700 hover:text-primary">Om meg</a>
          <a href="#tjenester" class="text-gray-700 hover:text-primary">Tjenester</a>
          <a href="#kontakt" class="text-gray-700 hover:text-primary">Kontakt</a>

          <?php if ($isLoggedIn): ?>
            <a href="videos.php" class="bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90">
              Mine videoer
            </a>
            <a href="logout.php" class="text-gray-600 hover:text-primary ml-2">Logg ut</a>
          <?php else: ?>
            <button onclick="showLoginModal()" class="bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90">
              Logg inn
            </button>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- Resten av siden er som du har skrevet -->

  <!-- Login-modalen -->
  <div class="modal-overlay" id="modalOverlay"></div>
  <div class="login-modal bg-white p-8 rounded-lg shadow-lg w-96" id="loginModal">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold">Logg inn</h2>
      <button onclick="hideLoginModal()" class="text-gray-500 hover:text-gray-700">
        <i class="ri-close-line text-2xl"></i>
      </button>
    </div>

    <!-- HER: ekte login-skjema -->
    <form class="space-y-4" method="post" action="login.php">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">E-post</label>
        <input
          type="email"
          name="email"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
          required
        />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Passord</label>
        <input
          type="password"
          name="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
          required
        />
      </div>
      <button
        type="submit"
        class="w-full bg-primary text-white py-2 rounded-button hover:bg-primary/90"
      >
        Logg inn
      </button>
    </form>
  </div>

  <!-- JS for modal -->
  <script>
    function showLoginModal() {
      document.getElementById("loginModal").style.display = "block";
      document.getElementById("modalOverlay").style.display = "block";
    }

    function hideLoginModal() {
      document.getElementById("loginModal").style.display = "none";
      document.getElementById("modalOverlay").style.display = "none";
    }

    document.getElementById("modalOverlay").addEventListener("click", hideLoginModal);
  </script>
</body>
</html>
