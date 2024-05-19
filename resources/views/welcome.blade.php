<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irkham Herdiyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">
    <style>
        .gradient{
            background: linear-gradient(90deg, #303030 0%, #054325 100%);
        }
    </style>
</head>
<body class="gradient leading-normal tracking-normal text-red" style="font-family: 'Source Sans Pro',sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 ">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a href="#" class="toggleColour  no-underline hover:no-underline font-bold text-2xl lg:text-4xl  text-white -400">Ham</a>
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->

                    .
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-white -700 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-black lg:bg-transparent text-white -600 -4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-yellow-800 hover:text-underline py-2 px-4" href="#home">HOME</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-yellow-800 hover:text-underline py-2 px-4" href="#about">ABOUTME</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-yellow-800 hover:text-underline py-2 px-4" href="#service">SERVICES</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline font-bold hover:text-yellow-800 hover:text-underline py-2 px-4" href="#porto">PORTOFOLIO</a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
      <!--Hero-->
    <div id="home" class="pt-24">
        <div class="container px-10 mx-auto flex flex-wrap flex-col md:flex-row items-center ">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left px-10">
                <p class="uppercase tracking-loose w-full"></p>
                <h1 class="my-4 text-5xl text-white font-bold leading-tight">
                   Hello,I'm Ham
                   Web Development
                </h1>
                <p class="leading-normal text-1xl text-white mb-8">
                   Lorem ipsum dolor sit amet, comsectetur adipiscing elit, sed do eisus mod tempor incididunt ut labore et dolore maga aliqua
                </p>
                <button class="mx-auto lg:mx-0 hover:underline bg-black text-white -800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    My Portofolio
                </button>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-3/5 z-50 shadow-lg " src="daam1.png" />
            </div>
        </div>
    </div>
    
   <section id="about" class="max-w-7xl mx-auto px-5 my-6 text-white" id="Services">
  <div class="text-center">
    <h2 class="text-primary text-3xl font-bold mb-16">AboutMe</h2>
  </div>

  <div class="pt-24">
    <div class="container px-10 mx-auto flex flex-wrap md:flex-nowrap items-center">
      <!-- Left Col -->
      <div class="w-full md:w-3/5 flex justify-center items-center mb-10 md:mb-0">
        <div class="w-[300px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl">
          <img src="img/gambar.jpg" alt="" class="w-[230px] mx-auto" />
        </div>
      </div>

      <!-- Right Col -->
      <div class="w-full md:w-2/5">
        <h1 class="text-5xl font-bold mb-4">
          Hello, 
        </h1>
        <p class="text-2xl leading-relaxed">
            Saya Muhamad irkham herdiyawan saya berasal dari Ds.Balapulang Kab.Tegal. lahir pada 16 Januari 2004 saya dari dua bersaudara dan sekarang saya masih menjadi mahasiwa di Politeknik Harapan Bersama mengambil jurusan D3 Teknik Komputer .
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- service section -->
    <section id="service" class="max-w-7xl mx-auto px-5 my-6 text-white" id="Services">
      <div class="text-center">
       
        <h3 class="text-primary text-3xl font-bold mb-16">MY SERVICES</h3>
      </div>
      <!-- service cards -->
      <div
        class="my-16 flex flex-col md:flex-row justify-around items-center gap-12"
      >
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
            src="ui.png"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl font-bold">UI & UX Design</h5>
          <p class="text-justify">
            Menciptakan Website yang menarik dan terkini
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
            src="grp.png"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl font-bold">Web Marketing</h5>
          <p class="text-justify">
           promosi strategis menaikan trafik yang relevan
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
            src="app.png"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl font-bold">Web Develovment</h5>
          <p class="text-justify">
            Menggunakan bahasa pemograman kekinian seperti Java Script,CSS,HTML,PYTHON
          </p>
        </div>
      </div>
    </section>

    <!-- projects -->
    <section id="porto" class="px-5 my-32 mx-auto max-w-7xl" id="projects">
      <div class="text-center text-white">
        <h3 class="text-3xl font-bold mb-5">
           <span class="text-primary">PORTOFOLIO</span>
        </h3>
       
      </div>
      <div
        class="flex md:flex-row flex-col items-center justify-between gap-8 my-20"
      >
        <div
          class=" md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0"
        >
          <img src="image.png" alt="" class="p-5 w-full" />
        </div>
        <div
          class=" md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0"
        >
          <img src="image.png" alt="" class="w-full p-5" />
        </div>
      </div>
    </section>
    <section id="contact" class=" h-42 w-full">
      <div class="py-8 lg:py-10 px-20 mx-auto max-w-screen-md">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-center text-white">Contact <span class="text-primary">Me</span></h2>
          <form method='POST' class="space-y-8">
            @csrf
              <div>
                  <label for="text" class="block mb-2 text-sm font-medium text-white">Nama</label>
                  <input type="text" id="nama" name="nama" class="shadow-sm bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nama..." value="{{ (isset($bukutamu)) ? $bukutamu->nama:"" }}" required>
              </div>
              <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                  <input type="email" id="email" name="email" class="block p-3 w-full text-sm text-white bg-gray-800 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Email..." value="{{ (isset($bukutamu)) ? $bukutamu->email:"" }}" required>
              </div>
              <div class="sm:col-span-2">
                  <label for="pesan" class="block mb-2 text-sm font-medium text-white">Pesan</label>
                  <textarea id="pesan" rows="4" name="pesan" class="block p-2.5 w-full text-sm text-white bg-gray-800 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..." value="{{ (isset($bukutamu)) ? $bukutamu->pesan:"" }}"></textarea>
              </div>
              <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-800 sm:w-fit hover:bg-blue-900">Send message</button>
          </form>
      </div>
    </section>


  {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-[#00000]");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-blue-700");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });

    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>

    
<footer class="bg-black -500 text-white py-4">
  <div class="flex justify-center items-center">
      <a href="https://wa.me/6285225364969"><img src="whatsapp.png" alt="GitHub" class="h-8 w-8 mr-4"></a>
      <a href="https://www.instagram.com/irkham_herdiyawan"><img src="instagram.png" alt="GitHub" class="h-8 w-8 mr-4"></a>
      <a href="https://github.com/Irkham01"><img src="github1.png" alt="GitHub" class="h-8 w-8 mr-4"></a>
  </div>
  <p class="text-center mt-4" style="font-size: smaller;">&copy; Copyright By ham</p>
</footer>
<script>
function clickEffect(element) {
  element.style.opacity = 0.5;
  setTimeout(function() {
    element.style.opacity = 1;
  }, 100);
}
</script>

    
    <!-- script tags -->
    <script src="src/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="src/review.js"></script>
  </body>
</html>