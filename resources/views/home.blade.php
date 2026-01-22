@extends('layouts.app')
@section('title', 'Taekwondo Fabra Valencia | Clases de Taekwondo en Valencia')
@section('meta_description', 'Clases de Taekwondo en Valencia desde 3-4 años. Iniciación, cadete y junior/senior. Club federado y equipo de competición.')
@section('content')

    <!-- Hero Section -->
    <section id="hero-slider" class="relative h-[100dvh] md:h-[700px] overflow-hidden group">
        <div class="slides-container h-full w-full relative">
            @foreach($slides as $idx => $slide)
                <div class="slide flex flex-col md:flex-row h-full w-full absolute top-0 left-0 transition-opacity duration-1000 ease-in-out {{ $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none' }}"
                    data-index="{{ $idx }}">
                    <div
                        class="w-full md:w-1/2 h-[65%] md:h-full flex flex-col justify-start md:justify-center items-start p-8 pt-24 md:p-24 text-left text-white relative z-10 {{ $slide['bg'] }}">

                        <!-- Gradient Overlay for better contrast -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black/60 via-transparent to-transparent pointer-events-none">
                        </div>

                        <!-- Mobile Blend Gradient for Slide 3 (PNG) -->
                        @if(str_contains($slide['src'], 'slide3.png'))
                            <div
                                class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-b from-transparent to-cyan-500/50 md:hidden pointer-events-none">
                            </div>
                        @endif

                        <div class="relative z-20 max-w-2xl">
                            <h1
                                class="animate-fade-in text-4xl md:text-6xl lg:text-7xl mb-6 leading-none font-heading tracking-tight drop-shadow-md">
                                {!! $slide['title'] !!}
                            </h1>
                            <p
                                class="animate-fade-in delay-100 font-body text-lg md:text-xl mb-8 leading-relaxed text-gray-100 drop-shadow-sm max-w-lg {{ !empty($slide['bold']) ? 'font-bold' : '' }}">
                                {{ $slide['text'] }}
                            </p>

                            @if(!empty($slide['cta_text']))
                                <a href="{{ $slide['cta_link'] }}" @if(!empty($slide['cta_external'])) target="_blank" @endif
                                    class="animate-fade-in delay-200 inline-block bg-white text-cyan-brand font-heading font-bold text-lg px-8 py-3 rounded-full hover:bg-cyan-900 hover:text-white transition-all transform hover:scale-105 shadow-xl border-2 border-transparent hover:border-white">
                                    {{ $slide['cta_text'] }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 h-[35%] md:h-full relative overflow-hidden {{ $slide['bg'] }}">
                        @if($slide['type'] === 'video')
                            <video src="{{ $slide['src'] }}" autoplay muted loop playsinline preload="metadata"
                                class="absolute inset-0 w-full h-full object-cover"></video>
                        @else
                            <div class="w-full h-full bg-cover {{ $slide['bg_pos'] ?? 'bg-center' }} transform transition-transform duration-[10000ms] ease-linear scale-100 hover:scale-110"
                                style="background-image:url('{{ $slide['src'] }}')">
                            </div>
                        @endif
                        <!-- Overlay for visual consistency -->
                        <div class="absolute inset-0 bg-black/10 md:bg-transparent"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="absolute bottom-8 md:bottom-12 left-1/2 transform -translate-x-1/2 md:left-24 flex gap-3 z-20">
            @foreach($slides as $idx => $slide)
                <button
                    class="dot-indicator w-3 h-3 rounded-full {{ $idx === 0 ? 'bg-white' : 'border-2 border-white hover:bg-white/50' }} transition-all duration-300 transform hover:scale-125"
                    data-target="{{ $idx }}" aria-label="Ir al slide {{ $idx + 1 }}"></button>
            @endforeach
        </div>

        <!-- Arrows -->
        <button id="prevSlide"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white/50 hover:text-white z-20 hidden md:block transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="nextSlide"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white/50 hover:text-white z-20 hidden md:block transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </section>


    <!-- Instagram Feed Section -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <p class="text-gray-500 font-bold tracking-widest uppercase mb-2">Social Media</p>
                <h2 class="text-2xl font-heading text-cyan-brand inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-instagram">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                    @tkd_fitnessfabragym
                </h2>
                <a href="https://instagram.com/tkd_fitnessfabragym" target="_blank"
                    class="block mt-2 text-gray-400 hover:text-cyan-brand transition-colors text-sm font-semibold">Síguenos
                    para ver las últimas novedades</a>
            </div>

            <!-- Instagram Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @if(isset($posts) && count($posts) > 0)
                    @foreach($posts as $post)
                        @php
                            $alt = Str::limit(strip_tags($post['caption'] ?? 'Instagram Post'), 50);
                            $src = $post['media_type'] === 'VIDEO'
                                ? ($post['thumbnail_url'] ?? $post['media_url'])
                                : $post['media_url'];
                        @endphp
                        <a href="{{ $post['permalink'] }}" target="_blank"
                            class="group relative block overflow-hidden rounded-xl aspect-square bg-gray-100">
                            <img src="{{ $src }}" alt="{{ $alt }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 flex items-center justify-center bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </a>
                    @endforeach
                @else
                    <!-- Fallback Placeholders (If API fails or no token) -->
                    @for($i = 0; $i < 4; $i++)
                        <a href="https://instagram.com/tkd_fitnessfabragym" target="_blank"
                            class="group relative block overflow-hidden rounded-xl aspect-square bg-gray-100">
                            <div
                                class="absolute inset-0 flex items-center justify-center text-gray-300 group-hover:bg-black/20 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 opacity-0 group-hover:opacity-100 text-white transition-opacity duration-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </a>
                    @endfor
                @endif
            </div>

            <div class="mt-8 text-center">
                <a href="https://instagram.com/tkd_fitnessfabragym" class="btn btn-outline inline-flex items-center gap-2">
                    Ver todo en Instagram &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Stats / Features -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-heading text-cyan-brand mb-4">¿POR QUÉ ELEGIRNOS?</h2>
                <div class="h-1 w-24 bg-gray-200 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Club Federado -->
                <div
                    class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-3xl p-8 shadow-lg text-center hover:-translate-y-2 transition-transform duration-300 group">
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-cyan-50 rounded-full group-hover:bg-cyan-100 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-cyan-brand" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                <path d="M9 12l2 2 4-4"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-heading text-gray-800 mb-3">Club Federado</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Garantía de calidad y oficialidad. Pertenecemos a la <strong>FTCV</strong> y <strong>RFET</strong>,
                        asegurando una enseñanza homologada.
                    </p>
                </div>

                <!-- Docencia Experta -->
                <div
                    class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-3xl p-8 shadow-lg text-center hover:-translate-y-2 transition-transform duration-300 group">
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-cyan-50 rounded-full group-hover:bg-cyan-100 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-cyan-brand" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-heading text-gray-800 mb-3">Docencia Experta</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Entrenadores titulados con amplia trayectoria competitiva y pedagógica. Tu aprendizaje está en las
                        mejores manos.
                    </p>
                </div>

                <!-- Ambiente Familiar -->
                <div
                    class="bg-white/80 backdrop-blur-md border border-gray-200 rounded-3xl p-8 shadow-lg text-center hover:-translate-y-2 transition-transform duration-300 group">
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-cyan-50 rounded-full group-hover:bg-cyan-100 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-cyan-brand" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-heading text-gray-800 mb-3">Ambiente Familiar</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Más que un gimnasio, somos una familia. Un lugar donde cada alumno importa y se fomenta el
                        compañerismo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedules -->
    <section id="horarios" class="py-20 bg-gray-50">
        <div class=" container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-heading text-gray-900 mb-4">Horarios de Clase</h2>
                <p class="text-xl text-cyan-brand font-bold uppercase tracking-wider">Lunes, Miércoles y Viernes</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <!-- Desktop Schedule Table (Hidden on Mobile) -->
                <div class="hidden md:block bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100 mb-10">
                    <div class="overflow-x-auto">
                        <table class="w-full text-center border-collapse table-fixed min-w-[800px]">
                            <thead>
                                <tr class="bg-cyan-brand text-white">
                                    <th class="py-4 px-2 font-bold uppercase text-sm tracking-wider w-32">Horario</th>
                                    <th class="py-4 px-2 font-bold uppercase text-sm tracking-wider bg-black/10">Lunes</th>
                                    <th class="py-4 px-2 font-bold uppercase text-sm tracking-wider">Martes</th>
                                    <th class="py-4 px-2 font-bold uppercase text-sm tracking-wider bg-black/10">Miércoles
                                    </th>
                                    <th class="py-4 px-2 font-bold uppercase text-sm tracking-wider">Jueves</th>
                                    <th class="py-4 px-2 font-bold uppercase text-sm tracking-wider bg-black/10">Viernes
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700 text-sm md:text-base">
                                <!-- 17:30 -->
                                <tr class="hover:bg-cyan-50/30 transition-colors">
                                    <td class="py-4 px-2 font-bold bg-gray-50 text-cyan-brand">17:30 - 18:25</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Infantil</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Infantil</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Infantil</td>
                                </tr>

                                <!-- 18:30 -->
                                <tr class="hover:bg-cyan-50/30 transition-colors">
                                    <td class="py-4 px-2 font-bold bg-gray-50 text-cyan-brand">18:30 - 19:25</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Cadete B</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Cadete B</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Cadete B</td>
                                </tr>

                                <!-- 19:30 -->
                                <tr class="hover:bg-cyan-50/30 transition-colors">
                                    <td class="py-4 px-2 font-bold bg-gray-50 text-cyan-brand">19:30 - 20:25</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Cadete A</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Cadete A</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Cadete A</td>
                                </tr>

                                <!-- 20:30 -->
                                <tr class="hover:bg-cyan-50/30 transition-colors">
                                    <td class="py-4 px-2 font-bold bg-gray-50 text-cyan-brand">20:30 - 21:30</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Junior / Senior</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Junior / Senior</td>
                                    <td class="py-4 px-2 text-gray-300 font-light">-</td>
                                    <td class="py-4 px-2 font-bold text-gray-800 bg-cyan-50/20">Junior / Senior</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Mobile Schedule (Visible only on Mobile) -->
                <div class="md:hidden space-y-4 mb-10">
                    <!-- Infantil -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="bg-cyan-brand px-4 py-3 flex justify-between items-center text-white">
                            <span class="font-bold text-lg">Infantil</span>
                            <span class="bg-white/20 px-2 py-0.5 rounded text-sm font-medium">17:30 - 18:25</span>
                        </div>
                        <div class="p-4">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Lunes</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Miércoles</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Viernes</span>
                            </div>
                            <div
                                class="flex justify-between items-center text-sm text-gray-500 border-t border-gray-50 pt-3">
                                <span>3 - 7 años</span>
                                <span class="text-cyan-brand font-bold">40€ / mes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Cadete B -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="bg-cyan-brand px-4 py-3 flex justify-between items-center text-white">
                            <span class="font-bold text-lg">Cadete B</span>
                            <span class="bg-white/20 px-2 py-0.5 rounded text-sm font-medium">18:30 - 19:25</span>
                        </div>
                        <div class="p-4">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Lunes</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Miércoles</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Viernes</span>
                            </div>
                            <div
                                class="flex justify-between items-center text-sm text-gray-500 border-t border-gray-50 pt-3">
                                <span>8 - 11 años</span>
                                <span class="text-cyan-brand font-bold">40€ / mes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Cadete A -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="bg-cyan-brand px-4 py-3 flex justify-between items-center text-white">
                            <span class="font-bold text-lg">Cadete A</span>
                            <span class="bg-white/20 px-2 py-0.5 rounded text-sm font-medium">19:30 - 20:25</span>
                        </div>
                        <div class="p-4">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Lunes</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Miércoles</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Viernes</span>
                            </div>
                            <div
                                class="flex justify-between items-center text-sm text-gray-500 border-t border-gray-50 pt-3">
                                <span>12 - 14 años</span>
                                <span class="text-cyan-brand font-bold">40€ / mes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Junior/Senior -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="bg-cyan-brand px-4 py-3 flex justify-between items-center text-white">
                            <span class="font-bold text-lg">Junior / Senior</span>
                            <span class="bg-white/20 px-2 py-0.5 rounded text-sm font-medium">20:30 - 21:30</span>
                        </div>
                        <div class="p-4">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Lunes</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Miércoles</span>
                                <span
                                    class="px-3 py-1 bg-cyan-50 text-cyan-800 rounded-full text-xs font-bold border border-cyan-100">Viernes</span>
                            </div>
                            <div
                                class="flex justify-between items-center text-sm text-gray-500 border-t border-gray-50 pt-3">
                                <span>+14 años</span>
                                <span class="text-cyan-brand font-bold">45€ / mes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Legend / Prices (Hidden on Mobile) -->
                <div class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Infantil -->
                    <div
                        class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex flex-col h-full justify-between">
                            <div class="mb-3">
                                <h4 class="font-bold text-lg text-gray-900 group-hover:text-cyan-brand transition-colors">
                                    Infantil</h4>
                                <p class="text-sm text-gray-500">3 - 7 años</p>
                            </div>
                            <div class="pt-3 border-t border-gray-100 flex items-end justify-between">
                                <span class="text-xs text-gray-400 uppercase font-bold">Cuota</span>
                                <div>
                                    <span class="text-2xl font-bold text-cyan-brand">40€</span><span
                                        class="text-gray-400 text-sm">/mes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cadete B -->
                    <div
                        class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex flex-col h-full justify-between">
                            <div class="mb-3">
                                <h4 class="font-bold text-lg text-gray-900 group-hover:text-cyan-brand transition-colors">
                                    Cadete
                                    B</h4>
                                <p class="text-sm text-gray-500">8 - 11 años</p>
                            </div>
                            <div class="pt-3 border-t border-gray-100 flex items-end justify-between">
                                <span class="text-xs text-gray-400 uppercase font-bold">Cuota</span>
                                <div>
                                    <span class="text-2xl font-bold text-cyan-brand">40€</span><span
                                        class="text-gray-400 text-sm">/mes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cadete A -->
                    <div
                        class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex flex-col h-full justify-between">
                            <div class="mb-3">
                                <h4 class="font-bold text-lg text-gray-900 group-hover:text-cyan-brand transition-colors">
                                    Cadete
                                    A</h4>
                                <p class="text-sm text-gray-500">12 - 14 años</p>
                            </div>
                            <div class="pt-3 border-t border-gray-100 flex items-end justify-between">
                                <span class="text-xs text-gray-400 uppercase font-bold">Cuota</span>
                                <div>
                                    <span class="text-2xl font-bold text-cyan-brand">40€</span><span
                                        class="text-gray-400 text-sm">/mes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Junior/Senior -->
                    <div
                        class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div class="flex flex-col h-full justify-between">
                            <div class="mb-3">
                                <h4 class="font-bold text-lg text-gray-900 group-hover:text-cyan-brand transition-colors">
                                    Junior
                                    / Senior</h4>
                                <p class="text-sm text-gray-500">+14 años</p>
                            </div>
                            <div class="pt-3 border-t border-gray-100 flex items-end justify-between">
                                <span class="text-xs text-gray-400 uppercase font-bold">Cuota</span>
                                <div>
                                    <span class="text-2xl font-bold text-cyan-brand">45€</span><span
                                        class="text-gray-400 text-sm">/mes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section id="programas" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-4xl mb-16 font-heading text-gray-900">Nuestras Guías de Examen</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Iniciacion -->
                <div
                    class="bg-white rounded-3xl p-8 shadow-md border-t-8 border-red-600 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl text-red-600 font-bold mb-2">Iniciación</h3>
                    <p class="text-gray-500 font-bold mb-4">3 - 7 años</p>
                    <p class="mb-6 text-gray-600">Desarrollo psicomotriz y primeros pasos en el taekwondo. Aprender jugando.
                    </p>
                    <a href="/storage/pdf/Guia_examen_Infantil.pdf"
                        class="btn btn-outline border-red-600 text-red-600 hover:bg-red-600 w-full text-center">Descargar
                        Guía</a>
                </div>

                <!-- Cadete -->
                <div
                    class="bg-white rounded-3xl p-8 shadow-md border-t-8 border-blue-600 hover:shadow-xl transition-all duration-300 transform scale-105">
                    <h3 class="text-2xl text-blue-600 font-bold mb-2">Cadete</h3>
                    <p class="text-gray-500 font-bold mb-4">8 - 13 años</p>
                    <p class="mb-6 text-gray-600">Perfeccionamiento técnico, disciplina y valores. Preparación para
                        competición.</p>
                    <a href="/storage/pdf/Guia_Examen_8-13anos_V2.pdf"
                        class="btn btn-primary bg-blue-600 hover:bg-blue-700 w-full text-center">Descargar Guía</a>
                </div>

                <!-- Junior -->
                <div
                    class="bg-white rounded-3xl p-8 shadow-md border-t-8 border-black hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl text-black font-bold mb-2">Junior / Senior</h3>
                    <p class="text-gray-500 font-bold mb-4">+14 años</p>
                    <p class="mb-6 text-gray-600">Alto rendimiento, defensa personal y mantenimiento físico.</p>
                    <a href="/storage/pdf/Guia_examen_JuniorAdulto.pdf"
                        class="btn btn-outline border-black text-black hover:bg-black w-full text-center">Descargar
                        Guía</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Resources -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-4xl mb-16 font-heading text-gray-900">Recursos Técnicos</h2>

            <div class="mb-8 border-b-2 border-cyan-brand inline-block pr-8">
                <h3 class="text-2xl font-bold font-heading text-cyan-brand">Los Kichos</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Kicho Il Bo -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                    <h4 class="font-bold text-xl mb-4 text-cyan-brand">Kicho Il Bo</h4>
                    <div class="aspect-video w-full rounded-lg overflow-hidden bg-gray-100">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/nTkV6czDYBU" title="Kicho Il Bo"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <p class="mt-3 text-gray-600 text-sm">Primer Kicho</p>
                </div>

                <!-- Kicho I Bo -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                    <h4 class="font-bold text-xl mb-4 text-cyan-brand">Kicho I Bo</h4>
                    <div class="aspect-video w-full rounded-lg overflow-hidden bg-gray-100">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/VOxJzFbPKGE" title="Kicho I Bo"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <p class="mt-3 text-gray-600 text-sm">Segundo Kicho</p>
                </div>
            </div>

            <div class="mb-8 border-b-2 border-cyan-brand inline-block pr-8">
                <h3 class="text-2xl font-bold font-heading text-cyan-brand">Los Poomsaes</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('poomsae') as $poomsae)
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col h-full">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-bold text-xl text-cyan-brand">{{ $poomsae['name'] }}</h4>
                            <span
                                class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ $poomsae['korean_name'] }}</span>
                        </div>

                        <div class="aspect-video w-full rounded-lg overflow-hidden bg-gray-100 mb-4">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $poomsae['video_id'] }}"
                                title="{{ $poomsae['name'] }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        @if ($poomsae['has_detail_page'])
                            <div class="mt-auto text-right">
                                <a href="{{ route('poomsae.show', $poomsae['id']) }}"
                                    class="inline-flex items-center gap-1 text-sm font-bold text-cyan-brand hover:underline">
                                    Ver paso a paso &rarr;
                                </a>
                            </div>
                        @else
                            <div class="mt-auto text-right">
                                <span class="text-xs text-gray-400 italic">Paso a paso próximamente</span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection