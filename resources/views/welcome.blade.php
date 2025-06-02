<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Line Nail's- Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css') {{-- Si tu utilises Laravel Mix ou Vite pour Tailwind --}}
    <!-- Ajoute ce style dans le <head> pour les keyframes personnalisées -->
    <style>
        @layer utilities {
        .animate-fade-in {
            animation: fadeIn 1s ease-out both;
        }
        .animate-slide-up {
            animation: slideUp 1s cubic-bezier(.4,0,.2,1) both;
        }
        .animate-zoom-in {
            animation: zoomIn 0.8s cubic-bezier(.4,0,.2,1) both;
        }
          .animate-rotate-in {
            animation: rotateIn 0.8s cubic-bezier(.4,0,.2,1) both;
          }
          .animate-pulse-smooth {
            animation: pulseSmooth 2s infinite;
          }
          @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
          }
          @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px);}
            to   { opacity: 1; transform: translateY(0);}
          }
          @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.8);}
            to   { opacity: 1; transform: scale(1);}
          }
          @keyframes rotateIn {
            from { opacity: 0; transform: rotate(-6deg) scale(0.95);}
            to   { opacity: 1; transform: rotate(0deg) scale(1);}
          }
          @keyframes pulseSmooth {
            0%, 100% { box-shadow: 0 0 0 0 rgba(236, 72, 153, 0.4);}
            50% { box-shadow: 0 0 0 12px rgba(236, 72, 153, 0);}
          }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', Arial, sans-serif;
        }
        h1, h2, h3, .brand, .feminine-title {
            font-family: 'Pacifico', cursive, 'Quicksand', Arial, sans-serif;
            letter-spacing: 1px;
        }
        /* ...tes autres styles... */
    </style>
</head>
<body class="bg-gradient-to-br from-pink-100 via-purple-100 to-indigo-100 min-h-screen">
    <!-- Image de fond animée -->
    <div class="absolute inset-0 bg-center bg-no-repeat bg-fixed bg-cover opacity-20 animate-fade-in -z-10"
     style="background-image: url('{{ asset('images/fond.jpg') }}');"></div>
    <div class="relative max-w-7xl mx-auto px-2 sm:px-4 md:px-8 py-6 md:py-12 backdrop-blur-sm animate-fade-in">
        <header class="text-center mb-10 md:mb-16 animate-slide-up">
            <div class="flex justify-center mb-4 md:mb-6">
                <img src="{{ asset('images/logojacqueline.png') }}" alt="Line Nail's Logo"
                     class="h-16 sm:h-20 md:h-28 w-auto mx-auto drop-shadow-lg animate-zoom-in" style="max-width:320px;">
            </div>
            <h1 class="sr-only">Bienvenue chez Line Nail's</h1>
<h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-pink-700 mb-3 md:mb-4 transition-all duration-700 hover:scale-105">
    Bienvenue chez Line Nail's
</h1>
<p class="text-pink-500 text-base sm:text-lg animate-fade-in" style="animation-delay:0.3s">
    Offrez à vos ongles le soin qu'ils méritent dans un cadre chic et relaxant.
</p>
<a href="{{ route('reservation.create') }}"
   class="inline-block mt-4 md:mt-6 bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full font-semibold shadow-lg hover:from-purple-600 hover:to-pink-600 transition-all duration-300 hover:scale-105 animate-fade-in animate-pulse-smooth"
   style="animation-delay:0.5s">
    Réserver votre soin 
</a>
        </header>

        {{-- Services --}}
        <section class="mb-16 animate-fade-in" style="animation-delay:0.6s">
            {{-- <h2 class="text-center text-3xl font-bold text-purple-700 mb-10">Nos Services</h2> --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Pose en Acrylique -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/poseacrylique.jpg') }}" alt="Acrylique"
                         class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Pose en Acrylique</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">Ongles solides et élégants, parfaits pour un look sophistiqué et longue tenue.</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 2H</span>
                    </div>
                    <ul class="text-gray-700 text-sm mb-2 w-full">
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Longues</span>
                            <span class="font-semibold text-purple-600">50$</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Moyennes</span>
                            <span class="font-semibold text-purple-600">40$</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Courtes</span>
                            <span class="font-semibold text-purple-600">30$</span>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>
                <!-- Pose en Polygel -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden" style="animation-delay:0.1s">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/polygel.jpg') }}" alt="Polygel" class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Pose en Polygel</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">Un compromis parfait entre le gel et l’acrylique, pour des ongles légers et résistants.</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 2H</span>
                    </div>
                    <ul class="text-gray-700 text-sm mb-2 w-full">
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Longues</span>
                            <span class="font-semibold text-purple-600">50$</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Moyennes</span>
                            <span class="font-semibold text-purple-600">40$</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Courtes</span>
                            <span class="font-semibold text-purple-600">30$</span>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>
                 <!-- Pose Américaine -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden" style="animation-delay:0.6s">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/americaine.jpg') }}" alt="Pose Américaine" class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Pose Américaine</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">
                        Technique innovante pour des ongles ultra-fins, naturels et résistants, idéale pour un résultat rapide et élégant.
                    </p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 1h 30min</span>
                    </div>
                    <ul class="text-gray-700 text-sm mb-2 w-full">
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Longues</span>
                            <span class="font-semibold text-purple-600">40$</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Moyennes</span>
                            <span class="font-semibold text-purple-600">35$</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Courtes</span>
                            <span class="font-semibold text-purple-600">25$</span>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>
                <!-- Nail Art Personnalisé -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden" style="animation-delay:0.2s">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/nailart.jpg') }}" alt="Nail Art Personnalisé" class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Nail Art Personnalisé</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">Exprimez votre style avec des créations uniques, du plus simple au plus artistique.</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 30min à 1h</span>
                    </div>
                    <ul class="text-gray-700 text-sm mb-2 w-full">
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>Simple</span>
                            <span class="font-semibold text-purple-600">5$</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Extra</span>
                            <span class="font-semibold text-purple-600">15$</span>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>  
                <!-- Gel Polish -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden" style="animation-delay:0.3s">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/semi.jpg') }}" alt="Gel Polish" class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Vernis semi-permanent</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">Vernis semi-permanent pour une brillance et une tenue impeccable jusqu’à 3 semaines.</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 45min</span>
                    </div>
                    <ul class="text-gray-700 text-sm mb-2 w-full">
                        <li class="flex justify-between border-b border-gray-100 py-1">
                            <span>mains</span>
                            <span class="font-semibold text-purple-600">20$</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Pieds</span>
                            <span class="font-semibold text-purple-600">25$</span>
                        </li>
                    </ul>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>
                <!-- Dépose -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden" style="animation-delay:0.4s">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/depose.jpg') }}" alt="Dépose" class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Dépose</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">Retrait professionnel de vos anciens ongles ou vernis, tout en douceur.</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 30min</span>
                    </div>
                    <div class="font-semibold text-purple-600 text-lg">10$</div>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>
                <!-- Remplissage -->
                <div class="relative group bg-white/90 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden" style="animation-delay:0.5s">
                    <div class="absolute -top-8 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-pink-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11" stroke="#f3e8ff" stroke-width="2.5" fill="#fdf4ff"/>
                        </svg>
                    </div>
                    <img src="{{ asset('images/remplissage.jpg') }}" alt="Remplissage" class="w-full h-40 object-cover rounded-xl mb-4 shadow-md border-2 border-pink-100 group-hover:border-pink-300 transition-all duration-300">
                    <h3 class="text-xl font-bold text-pink-700 mb-2 tracking-wide group-hover:text-purple-700 transition-colors duration-300">Remplissage</h3>
                    <p class="text-gray-600 text-sm mb-2 text-center">Pour garder vos ongles parfaits plus longtemps, sans tout recommencer.</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Durée : 1h</span>
                    </div>
                    <div class="font-semibold text-purple-600 text-lg">30$</div>
                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 rounded-b-3xl opacity-80"></div>
                </div>

            </div>
        </section>

        {{-- About --}}
        <section class="mb-16 animate-fade-in" style="animation-delay:1s">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="animate-slide-up" style="animation-delay:1.1s">
                    <h2 class="text-3xl font-bold text-purple-700 mb-4">À propos de nous</h2>
                    <p class="text-gray-700 mb-4">Chez Line Nail's, chaque client est unique. Notre équipe passionnée vous accueille dans un espace chaleureux pour sublimer vos mains et vos pieds avec des soins personnalisés et des produits de qualité.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li>✔️ Expertise et créativité</li>
                        <li>✔️ Hygiène irréprochable</li>
                        <li>✔️ Conseils personnalisés</li>
                    </ul>
                </div>
                <div class="animate-slide-up flex items-center justify-center bg-white rounded-3xl shadow-lg w-full h-72 overflow-hidden" style="animation-delay:1.2s">
                    <img src="{{ asset('images/photo.jpg') }}"
                         alt="Notre équipe"
                         class="object-contain max-h-72 w-auto mx-auto animate-zoom-in"
                         style="animation-delay:1.2s">
                </div>
            </div>
        </section>

        {{-- Testimonials --}}
        <section class="mb-16 animate-fade-in" style="animation-delay:1.3s">
            <h2 class="text-center text-3xl font-bold text-purple-700 mb-10">Ce que disent nos clients</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        ['name' => 'Ericka', 'text' => 'Service exceptionnel ! Je recommande vivement Line Nail \'s pour une expérience digne d’un spa.'],
                        ['name' => 'Aïssatou', 'text' => 'Un accueil chaleureux et des résultats incroyables. Mes ongles n\'ont jamais été aussi beaux !'],
                        ['name' => 'viviane', 'text' => 'Une équipe professionnelle et attentionnée. Je reviendrai sans hésiter !'],
                    ];
                @endphp
                @foreach($testimonials as $testimonial)
                <div class="bg-white/80 rounded-2xl shadow-lg p-6 border border-purple-100 animate-rotate-in"
                     style="animation-delay:{{ 1.4 + $loop->index*0.1 }}s">
                    <p class="text-gray-700 italic mb-4">"{{ $testimonial['text'] }}"</p>
                    <div class="text-right font-semibold text-pink-600">– {{ $testimonial['name'] }}</div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Contact & horaires --}}
        <section class="mb-10 animate-fade-in" style="animation-delay:1.7s">
            <div class="bg-white/80 rounded-2xl shadow-lg p-8 flex flex-col md:flex-row items-center justify-between gap-8 border border-purple-100 animate-slide-up"
                 style="animation-delay:1.8s">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 12.414a2 2 0 0 0-2.828 0l-4.243 4.243a8 8 0 1 1 11.314 0z"></path><circle cx="12" cy="8" r="4"></circle></svg>
                    <span class="text-gray-700">3344 RUE FOUCHER TROIS RIVIÈRES, G8Z1M3, QUÉBEC, CANADA</span>
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"></path><circle cx="12" cy="12" r="10"></circle></svg>
                    <span class="text-gray-700">LUNDI-SAMEDI 8H-12H &bull; DIMANCHE 12H-17H</span>
                </span>
                <span class="flex items-center gap-2">
                    {{-- <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10.5a8.38 8.38 0 0 1-1.9.5 3.48 3.48 0 0 0 1.5-1.9 7.72 7.72 0 0 1-2.2.8A3.48 3.48 0 0 0 16.5 7c-1.93 0-3.5 1.57-3.5 3.5 0 .28.03.56.09.82A9.94 9.94 0 0 1 3 8.1a3.5 3.5 0 0 0 1.08 4.67 3.48 3.48 0 0 1-1.58-.44v.04c0 1.7 1.21 3.13 2.82 3.45a3.52 3.52 0 0 1-1.57.06c.44 1.38 1.72 2.39 3.23 2.42A7 7 0 0 1 2 19.54a9.93 9.93 0 0 0 5.38 1.58c6.45 0 9.98-5.34 9.98-9.98 0-.15 0-.29-.01-.44A7.18 7.18 0 0 0 22 6.5a7.23 7.23 0 0 1-2.09.57A3.48 3.48 0 0 0 21 10.5z"></path></svg> --}}
                    <span class="text-gray-700">514 608 9194 </span>
                </span>
            </div>
        </section>

        <!-- Galerie de réalisations -->
{{-- <section class="mb-16 animate-fade-in" style="animation-delay:0.8s">
    <h2 class="text-center text-3xl font-bold text-purple-700 mb-8">Nos réalisations</h2>
    <div class="relative">
        <div id="gallery-slider" class="flex overflow-x-auto gap-6 pb-2 snap-x snap-mandatory">
            @foreach(['real1.jpg','real2.jpg','real3.jpg','real4.jpg','real5.jpg'] as $img)
                <div class="min-w-[220px] sm:min-w-[260px] md:min-w-[320px] snap-center flex-shrink-0 rounded-2xl overflow-hidden shadow-lg border border-purple-100 bg-white">
                    <img src="{{ asset('images/realisations/'.$img) }}" alt="Réalisation" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                </div>
            @endforeach
        </div>
    </div>
    <p class="text-center text-gray-500 mt-4 text-sm">Faites défiler pour voir plus de créations</p>
</section> --}}

        <!-- Bouton WhatsApp flottant -->
<a href="https://wa.me/15146089194" target="_blank"
   class="fixed z-50 bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg p-4 flex items-center justify-center transition-all duration-300"
   style="box-shadow: 0 4px 24px 0 rgba(37, 211, 102, 0.25);">
    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
        <path d="M20.52 3.48A12 12 0 0 0 12 0C5.37 0 0 5.37 0 12a11.93 11.93 0 0 0 1.64 6.06L0 24l6.31-1.65A11.94 11.94 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.48-8.52zM12 22a9.94 9.94 0 0 1-5.09-1.39l-.36-.21-3.75.98.99-3.65-.23-.37A9.94 9.94 0 1 1 22 12c0 5.52-4.48 10-10 10zm5.2-7.6c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.18-.44-2.25-1.41-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.13-.13.28-.34.42-.51.14-.17.18-.29.28-.48.09-.19.05-.36-.02-.5-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.62-.47-.16-.01-.36-.01-.56-.01s-.5.07-.76.36c-.26.29-1 1.01-1 2.46 0 1.45 1.03 2.85 1.17 3.05.14.2 2.03 3.1 4.93 4.23.69.3 1.23.48 1.65.61.69.22 1.32.19 1.82.12.56-.08 1.65-.67 1.89-1.32.23-.65.23-1.21.16-1.32-.07-.11-.25-.18-.53-.32z"/>
    </svg>
</a>

        <footer class="text-center text-gray-500 py-6 animate-fade-in" style="animation-delay:2s">
            &copy; {{ date('Y') }} Line Nail's. Tous droits réservés.
        </footer>
    </div>
</body>
</html>
