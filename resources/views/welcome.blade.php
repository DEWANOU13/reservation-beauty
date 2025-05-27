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
</head>
<body class="bg-gradient-to-br from-pink-100 via-purple-100 to-indigo-100 min-h-screen">
    <!-- Image de fond animée -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1604654894611-6973b376cbde?auto=format&fit=crop&q=80')] opacity-40 bg-fixed bg-cover animate-fade-in"></div>
    <div class="relative max-w-7xl mx-auto px-4 py-12 backdrop-blur-sm animate-fade-in">
        <header class="text-center mb-16 animate-slide-up">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logojacqueline.png') }}" alt="Line Nail's Logo" class="h-20 md:h-28 w-auto mx-auto drop-shadow-lg animate-zoom-in" style="max-width:320px;">
            </div>
            <h1 class="sr-only">Bienvenue chez Line Nail's</h1>
            <h1 class="text-5xl font-bold text-pink-700 mb-4 transition-all duration-700 hover:scale-105">Bienvenue chez Line Nail's</h1>
            <p class="text-pink-500 text-lg animate-fade-in" style="animation-delay:0.3s">Offrez à vos ongles le soin qu'ils méritent dans un cadre chic et relaxant.</p>
            <a href="{{ route('reservation.create') }}"
               class="inline-block mt-6 bg-gradient-to-r from-purple-500 to-pink-500 text-white py-3 px-8 rounded-full font-semibold shadow-lg hover:from-purple-600 hover:to-pink-600 transition-all duration-300 hover:scale-105 animate-fade-in animate-pulse-smooth"
               style="animation-delay:0.5s">
                Réserver votre soin 
            </a>
        </header>

        {{-- Services --}}
        <section class="mb-16 animate-fade-in" style="animation-delay:0.6s">
            <h2 class="text-center text-3xl font-bold text-purple-700 mb-10">Nos Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Pose en Acrylique -->
                <div class="bg-white/80 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-300 animate-slide-up">
                    <img src="{{ asset('images/pexels-cottonbro-5874874.jpg') }}" alt="Acrylique" class="w-full h-40 object-cover rounded-xl mb-4 animate-zoom-in hover:scale-110 transition-transform duration-500">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Pose en Acrylique</h3>
                    <ul class="text-gray-700 text-sm mb-2">
                        <li>Longues : <span class="font-semibold text-purple-600">70$</span></li>
                        <li>Moyennes : <span class="font-semibold text-purple-600">60$</span></li>
                        <li>Courtes : <span class="font-semibold text-purple-600">50$</span></li>
                    </ul>
                </div>
                <!-- Pose en Polygel -->
                <div class="bg-white/80 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-300 animate-slide-up" style="animation-delay:0.1s">
                    <img src="{{ asset('images/pexels-kpaukshtite-704815.jpg') }}" alt="Polygel" class="w-full h-40 object-cover rounded-xl mb-4 animate-zoom-in hover:scale-110 transition-transform duration-500">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Pose en Polygel</h3>
                    <ul class="text-gray-700 text-sm mb-2">
                        <li>Longues : <span class="font-semibold text-purple-600">70$</span></li>
                        <li>Moyennes : <span class="font-semibold text-purple-600">60$</span></li>
                        <li>Courtes : <span class="font-semibold text-purple-600">50$</span></li>
                    </ul>
                </div>
                <!-- Nail Art Personnalisé -->
                <div class="bg-white/80 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-300 animate-slide-up" style="animation-delay:0.2s">
                    <img src="{{ asset('images/pexels-rheza-aulia-1780651-3375254.jpg') }}" alt="Nail Art" class="w-full h-40 object-cover rounded-xl mb-4 animate-zoom-in hover:scale-110 transition-transform duration-500">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Nail Art Personnalisé</h3>
                    <ul class="text-gray-700 text-sm mb-2">
                        <li>Simple : <span class="font-semibold text-purple-600">25$</span></li>
                        <li>Extra : <span class="font-semibold text-purple-600">40$</span></li>
                    </ul>
                </div>
                <!-- Gel Polish -->
                <div class="bg-white/80 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-300 animate-slide-up" style="animation-delay:0.3s">
                    <img src="{{ asset('images/pexels-andreamostiphotography-17010953.jpg') }}" alt="Gel Polish" class="w-full h-40 object-cover rounded-xl mb-4 animate-zoom-in hover:scale-110 transition-transform duration-500">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Gel Polish</h3>
                    <ul class="text-gray-700 text-sm mb-2">
                        <li>Nature : <span class="font-semibold text-purple-600">30$</span></li>
                        <li>Complete :: <span class="font-semibold text-purple-600">15$</span></li>
                    </ul>
                </div>
                <!-- Dépose -->
                <div class="bg-white/80 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-300 animate-slide-up" style="animation-delay:0.4s">
                    <img src="{{ asset('images/pexels-cottonbro-5871834.jpg') }}" alt="Dépose" class="w-full h-40 object-cover rounded-xl mb-4 animate-zoom-in hover:scale-110 transition-transform duration-500">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Dépose</h3>
                    <div class="text-gray-700 text-sm mb-2">Retrait professionnel de vos ongles</div>
                    <div class="font-semibold text-purple-600 text-lg">20$</div>
                </div>
                <!-- Remplissage -->
                <div class="bg-white/80 rounded-3xl shadow-xl border border-purple-100 p-6 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-300 animate-slide-up" style="animation-delay:0.5s">
                    <img src="{{ asset('images/pexels-john-thon-1096879738-20694109.jpg') }}" alt="Remplissage" class="w-full h-40 object-cover rounded-xl mb-4 animate-zoom-in hover:scale-110 transition-transform duration-500">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Remplissage</h3>
                    <div class="text-gray-700 text-sm mb-2">Pour des ongles toujours parfaits</div>
                    <div class="font-semibold text-purple-600 text-lg">30$</div>
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
                <div class="animate-slide-up" style="animation-delay:1.2s">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=600" alt="Notre équipe" class="rounded-2xl shadow-lg w-full h-72 object-cover animate-zoom-in" style="animation-delay:1.2s">
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
                        ['name' => 'Jacqueline', 'text' => 'Une équipe professionnelle et attentionnée. Je reviendrai sans hésiter !'],
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
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10.5a8.38 8.38 0 0 1-1.9.5 3.48 3.48 0 0 0 1.5-1.9 7.72 7.72 0 0 1-2.2.8A3.48 3.48 0 0 0 16.5 7c-1.93 0-3.5 1.57-3.5 3.5 0 .28.03.56.09.82A9.94 9.94 0 0 1 3 8.1a3.5 3.5 0 0 0 1.08 4.67 3.48 3.48 0 0 1-1.58-.44v.04c0 1.7 1.21 3.13 2.82 3.45a3.52 3.52 0 0 1-1.57.06c.44 1.38 1.72 2.39 3.23 2.42A7 7 0 0 1 2 19.54a9.93 9.93 0 0 0 5.38 1.58c6.45 0 9.98-5.34 9.98-9.98 0-.15 0-.29-.01-.44A7.18 7.18 0 0 0 22 6.5a7.23 7.23 0 0 1-2.09.57A3.48 3.48 0 0 0 21 10.5z"></path></svg>
                    <span class="text-gray-700">514 608 9194 </span>
                </span>
            </div>
        </section>

        <footer class="text-center text-gray-500 py-6 animate-fade-in" style="animation-delay:2s">
            &copy; {{ date('Y') }} Line Nail's. Tous droits réservés.
        </footer>
    </div>
</body>
</html>
