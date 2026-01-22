<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Taekwondo Fabra Valencia')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Permanent+Marker&display=swap"
        rel="stylesheet">

    <!-- SEO -->
    <meta name="description"
        content="@yield('meta_description', 'Taekwondo en Valencia: clases desde 3-4 años, competición, valores, disciplina y diversión. Taekwondo Fabra Valencia.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-cyan-brand text-white py-4 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 max-w-8xl flex justify-between items-center">
            <div class="flex items-center gap-3 md:gap-4">
                <!-- Logo -->
                <img src="/storage/img/slide3.png" alt="Logo" class="h-14 md:h-24 drop-shadow-md">
                <a href="{{ route('home') }}" class="flex flex-col leading-none">
                    <span class="font-heading text-lg md:text-2xl me-2">TAEKWONDO FABRA VALENCIA</span>
                    <span class="text-[0.6rem] md:text-xs tracking-widest mt-0.5 md:mt-1">SOMOS TAEKWONDO. FORMAMOS
                        PERSONAS.</span>
                </a>
            </div>

            <nav class="hidden md:block">
                <ul class="flex gap-8 items-center">
                    <li><a href="{{ route('home') }}"
                            class="font-heading text-lg hover:underline decoration-2 underline-offset-4">HOME</a></li>
                    <li><a href="{{ route('conocenos') }}"
                            class="font-heading text-lg hover:underline decoration-2 underline-offset-4">CONÓCENOS</a>
                    </li>
                    <li><a href="https://federacion.tkdcv.es/federacion/app/nosession.php?permiso=campeonato"
                            target="_blank"
                            class="font-heading text-lg hover:underline decoration-2 underline-offset-4">COMPETICIONES</a>
                    </li>
                    <li><a href="{{ route('faq') }}"
                            class="font-heading text-lg hover:underline decoration-2 underline-offset-4">PREGUNTAS
                            FRECUENTES</a></li>
                    <!-- Social Icons -->
                    <li class="flex gap-4 items-center">
                        <a href="https://www.instagram.com/tkd_fitnessfabragym/" target="_blank"
                            class="text-white hover:text-cyan-100 transition-colors" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/tkdfitnessfabragym" target="_blank"
                            class="text-white hover:text-cyan-100 transition-colors" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UC3v-Ds9KTlSBNnR4E3x5DeQ" target="_blank"
                            class="text-white hover:text-cyan-100 transition-colors" aria-label="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                                </path>
                                <polygon points="9.75 15.02 15.75 11.75 9.75 8.48 9.75 15.02"></polygon>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <button id="mobileMenuBtn" class="md:hidden text-white p-2" aria-expanded="false" aria-controls="mobileMenu"
                aria-label="Abrir menú">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden fixed inset-0 z-50 hidden">
        <!-- Backdrop -->
        <div id="mobileMenuBackdrop" class="absolute inset-0 bg-black/40"></div>

        <!-- Panel -->
        <div
            class="absolute right-0 top-0 h-full w-80 max-w-[85%] bg-cyan-brand text-white shadow-2xl p-6 flex flex-col">
            <div class="flex items-center justify-between mb-8">
                <span class="font-heading text-xl">Menú</span>
                <button id="mobileMenuClose" class="text-white/80 hover:text-white text-2xl leading-none"
                    aria-label="Cerrar menú">
                    &times;
                </button>
            </div>

            <nav>
                <ul class="flex flex-col gap-4">
                    <li><a href="{{ route('home') }}" class="font-heading text-lg hover:underline">HOME</a></li>
                    <li><a href="{{ route('conocenos') }}" class="font-heading text-lg hover:underline">CONÓCENOS</a>
                    </li>
                    <li><a href="https://federacion.tkdcv.es/federacion/app/nosession.php?permiso=campeonato"
                            target="_blank" class="font-heading text-lg hover:underline">COMPETICIONES</a></li>
                    <li><a href="{{ route('faq') }}" class="font-heading text-lg hover:underline">PREGUNTAS
                            FRECUENTES</a></li>
                </ul>
            </nav>

            <div class="mt-auto pt-8 border-t border-white/20">
                <div class="flex gap-6 justify-center">
                    <a href="https://www.instagram.com/tkd_fitnessfabragym/" target="_blank"
                        class="text-white hover:text-cyan-100 transition-colors" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/tkdfitnessfabragym" target="_blank"
                        class="text-white hover:text-cyan-100 transition-colors" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UC3v-Ds9KTlSBNnR4E3x5DeQ" target="_blank"
                        class="text-white hover:text-cyan-100 transition-colors" aria-label="YouTube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                            </path>
                            <polygon points="9.75 15.02 15.75 11.75 9.75 8.48 9.75 15.02"></polygon>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="bg-cyan-brand text-white py-16 mt-20">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="space-y-4">
                <img src="/storage/img/logo.png" alt="Taekwondo Fabra" class="h-24 w-auto">
                <div>
                    <h3 class="font-heading text-2xl mb-2">Taekwondo Fabra</h3>
                    <p class="opacity-80 leading-relaxed text-sm">Somos Taekwondo. Formamos personas.</p>
                    <div class="opacity-90 mt-2 text-sm">
                        Carrer dels Rosers, 27<br>
                        46025 València
                    </div>
                </div>
            </div>
            <div>
                <h4 class="font-heading text-xl mb-4">Enlaces de Interés</h4>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('home') }}"
                        class="opacity-80 hover:opacity-100 hover:pl-2 transition-all">Home</a>
                    <a href="{{ route('conocenos') }}"
                        class="opacity-80 hover:opacity-100 hover:pl-2 transition-all">Conócenos</a>
                    <a href="{{ route('faq') }}"
                        class="opacity-80 hover:opacity-100 hover:pl-2 transition-all">Preguntas Frecuentes</a>
                    <div class="border-t border-white/20 my-1"></div>
                    <a href="https://tkdcv.es" target="_blank"
                        class="opacity-80 hover:opacity-100 hover:pl-2 transition-all text-sm leading-tight">
                        Fed. Taekwondo C.V.
                    </a>
                    <a href="https://www.fetaekwondo.net" target="_blank"
                        class="opacity-80 hover:opacity-100 hover:pl-2 transition-all text-sm leading-tight">
                        Real Fed. Española de Taekwondo
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-heading text-xl mb-4">Contacto</h4>
                <div class="flex flex-col gap-2">
                    <a href="mailto:guillo@taekwondofabra.com"
                        class="opacity-80 hover:opacity-100">guillo@taekwondofabra.com</a>
                    <a href="tel:676362738" class="opacity-80 hover:opacity-100">676 362 738</a>
                </div>
            </div>
        </div>
        <div class="container mx-auto text-center mt-12 pt-8 border-t border-white/20 opacity-60 text-sm">
            &copy; {{ date('Y') }} Taekwondo Fabra Valencia. All rights reserved.
        </div>
    </footer>
</body>

</html>