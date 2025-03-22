<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PersonligTrener - Din Vei til Bedre Helse</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
      rel="stylesheet"
    />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#2563eb",
              secondary: "#f97316",
            },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      .login-modal {
          display: none;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 1000;
      }
      .modal-overlay {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: rgba(0, 0, 0, 0.5);
          z-index: 999;
      }
    </style>
  </head>
  <body class="bg-white">
    <nav class="fixed w-full bg-white shadow-sm z-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
          <div class="flex items-center">
            <span class="text-2xl font-['Pacifico'] text-primary">logo</span>
          </div>
          <div class="hidden md:flex space-x-8">
            <a href="#hjem" class="text-gray-700 hover:text-primary">Hjem</a>
            <a href="#om-meg" class="text-gray-700 hover:text-primary"
              >Om meg</a
            >
            <a href="#tjenester" class="text-gray-700 hover:text-primary"
              >Tjenester</a
            >
            <a href="#kontakt" class="text-gray-700 hover:text-primary"
              >Kontakt</a
            >
            <button
              onclick="showLoginModal()"
              class="bg-primary text-white px-4 py-2 !rounded-button hover:bg-primary/90"
            >
              Logg inn
            </button>
          </div>
        </div>
      </div>
    </nav>

    <section class="pt-16 relative">
      <div
        class="h-[600px] bg-cover bg-center relative"
        style="background-image: url('https://public.readdy.ai/ai/img_res/ee95339ff7f6e6e66a1423258a32fae1.jpg')"
      >
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="max-w-7xl mx-auto px-4 relative h-full flex items-center">
          <div class="text-white max-w-2xl">
            <h1 class="text-5xl font-bold mb-6">
              Din Personlige Treningsreise Starter Her
            </h1>
            <p class="text-xl mb-8">
              La meg hjelpe deg med å nå dine treningsmål gjennom skreddersydd
              veiledning og støtte.
            </p>
            <button
              onclick="showLoginModal()"
              class="bg-primary text-white px-8 py-4 !rounded-button text-lg hover:bg-primary/90 whitespace-nowrap cursor-pointer"
            >
              Start Din Reise
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="tjenester" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-16">Våre Tjenester</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-lg shadow-sm">
            <div
              class="w-16 h-16 flex items-center justify-center bg-primary/10 rounded-full mb-6"
            >
              <i class="ri-user-heart-line text-primary text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Personlig Trening</h3>
            <p class="text-gray-600">
              Få skreddersydd treningsprogram og tett oppfølging for å nå dine
              mål raskere.
            </p>
          </div>
          <div class="bg-white p-8 rounded-lg shadow-sm">
            <div
              class="w-16 h-16 flex items-center justify-center bg-primary/10 rounded-full mb-6"
            >
              <i class="ri-group-line text-primary text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Gruppetimer</h3>
            <p class="text-gray-600">
              Delta i motiverende gruppetimer med fokus på styrke, kondisjon og
              bevegelighet.
            </p>
          </div>
          <div class="bg-white p-8 rounded-lg shadow-sm">
            <div
              class="w-16 h-16 flex items-center justify-center bg-primary/10 rounded-full mb-6"
            >
              <i class="ri-video-line text-primary text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Online Trening</h3>
            <p class="text-gray-600">
              Få tilgang til et omfattende bibliotek av treningsvideoer og økter
              du kan gjøre hjemme.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="videoer" class="py-20">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-16">Treningsvideoer</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="relative group cursor-pointer" onclick="showLoginModal()">
            <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
              <img
                src="https://public.readdy.ai/ai/img_res/27709d698a1411d1649dd8b4d88ddb14.jpg"
                alt="Treningsvideo 1"
                class="w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
              >
                <i class="ri-lock-line text-white text-4xl"></i>
              </div>
            </div>
            <h3 class="mt-4 font-semibold">Styrketrening for Nybegynnere</h3>
            <p class="text-gray-600 text-sm">30 min • Grunnleggende øvelser</p>
          </div>
          <div class="relative group cursor-pointer" onclick="showLoginModal()">
            <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
              <img
                src="https://public.readdy.ai/ai/img_res/2f13d06c8d037a6ba92c3a1d47395283.jpg"
                alt="Treningsvideo 2"
                class="w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
              >
                <i class="ri-lock-line text-white text-4xl"></i>
              </div>
            </div>
            <h3 class="mt-4 font-semibold">Yoga for Bedre Bevegelighet</h3>
            <p class="text-gray-600 text-sm">45 min • Middels nivå</p>
          </div>
          <div class="relative group cursor-pointer" onclick="showLoginModal()">
            <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
              <img
                src="https://public.readdy.ai/ai/img_res/ae370da769f20053e09a32c02f356754.jpg"
                alt="Treningsvideo 3"
                class="w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
              >
                <i class="ri-lock-line text-white text-4xl"></i>
              </div>
            </div>
            <h3 class="mt-4 font-semibold">HIIT Cardio Økt</h3>
            <p class="text-gray-600 text-sm">20 min • Intensiv trening</p>
          </div>
        </div>
      </div>
    </section>

    <section id="kontakt" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16">
          <div>
            <h2 class="text-3xl font-bold mb-8">Kontakt Meg</h2>
            <form class="space-y-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >Navn</label
                >
                <input
                  type="text"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                  required
                />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >E-post</label
                >
                <input
                  type="email"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                  required
                />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >Melding</label
                >
                <textarea
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary h-32"
                  required
                ></textarea>
              </div>
              <button
                type="submit"
                class="bg-primary text-white px-6 py-3 !rounded-button hover:bg-primary/90 whitespace-nowrap cursor-pointer"
              >
                Send Melding
              </button>
            </form>
          </div>
          <div>
            <h2 class="text-3xl font-bold mb-8">Finn Oss</h2>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="mb-6">
                <h3 class="font-semibold mb-2">Adresse</h3>
                <p class="text-gray-600">Treningsgata 123, 0123 Oslo</p>
              </div>
              <div class="mb-6">
                <h3 class="font-semibold mb-2">Telefon</h3>
                <p class="text-gray-600">+47 123 45 678</p>
              </div>
              <div>
                <h3 class="font-semibold mb-2">E-post</h3>
                <p class="text-gray-600">kontakt@personligtrener.no</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-gray-900 text-white py-12">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
          <div>
            <span class="text-2xl font-['Pacifico'] text-white mb-4 block"
              >logo</span
            >
            <p class="text-gray-400">
              Din partner for en sunnere livsstil og bedre fysisk form.
            </p>
          </div>
          <div>
            <h3 class="font-semibold mb-4">Lenker</h3>
            <ul class="space-y-2 text-gray-400">
              <li><a href="#" class="hover:text-white">Hjem</a></li>
              <li><a href="#" class="hover:text-white">Om oss</a></li>
              <li><a href="#" class="hover:text-white">Tjenester</a></li>
              <li><a href="#" class="hover:text-white">Kontakt</a></li>
            </ul>
          </div>
          <div>
            <h3 class="font-semibold mb-4">Følg Oss</h3>
            <div class="flex space-x-4">
              <a href="#" class="hover:text-primary">
                <i class="ri-facebook-fill text-xl"></i>
              </a>
              <a href="#" class="hover:text-primary">
                <i class="ri-instagram-fill text-xl"></i>
              </a>
              <a href="#" class="hover:text-primary">
                <i class="ri-youtube-fill text-xl"></i>
              </a>
            </div>
          </div>
          <div>
            <h3 class="font-semibold mb-4">Nyhetsbrev</h3>
            <form class="flex">
              <input
                type="email"
                placeholder="Din e-post"
                class="flex-1 px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary text-gray-900"
              />
              <button
                type="submit"
                class="bg-primary px-4 py-2 rounded-r-lg hover:bg-primary/90"
              >
                <i class="ri-send-plane-fill"></i>
              </button>
            </form>
          </div>
        </div>
        <div
          class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400"
        >
          <p>&copy; 2025 PersonligTrener. Alle rettigheter reservert.</p>
        </div>
      </div>
    </footer>

    <div class="modal-overlay" id="modalOverlay"></div>
    <div
      class="login-modal bg-white p-8 rounded-lg shadow-lg w-96"
      id="loginModal"
    >
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Logg inn</h2>
        <button
          onclick="hideLoginModal()"
          class="text-gray-500 hover:text-gray-700"
        >
          <i class="ri-close-line text-2xl"></i>
        </button>
      </div>
      <form class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2"
            >E-post</label
          >
          <input
            type="email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
            required
          />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2"
            >Passord</label
          >
          <input
            type="password"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
            required
          />
        </div>
        <button
          type="submit"
          class="w-full bg-primary text-white py-2 !rounded-button hover:bg-primary/90"
        >
          Logg inn
        </button>
        <div class="text-center text-sm">
          <a href="#" class="text-primary hover:underline">Glemt passord?</a>
        </div>
        <div class="text-center text-sm">
          <span class="text-gray-600">Ny bruker?</span>
          <a href="#" class="text-primary hover:underline ml-1"
            >Registrer deg her</a
          >
        </div>
      </form>
    </div>

    <script>
      function showLoginModal() {
        document.getElementById("loginModal").style.display = "block";
        document.getElementById("modalOverlay").style.display = "block";
      }

      function hideLoginModal() {
        document.getElementById("loginModal").style.display = "none";
        document.getElementById("modalOverlay").style.display = "none";
      }

      document
        .getElementById("modalOverlay")
        .addEventListener("click", hideLoginModal);
    </script>
  </body>
</html>
