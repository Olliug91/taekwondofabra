@extends('layouts.app')
@section('title', 'Taekwondo Fabra Valencia | Clases de Taekwondo en Valencia')
@section('meta_description', 'Clases de Taekwondo en Valencia desde 3-4 años. Iniciación, cadete y junior/senior. Club federado y equipo de competición.')
@section('content')

    <!-- Hero Section -->
    <section id="hero-slider" class="relative h-[100dvh] md:h-[700px] overflow-hidden group">
        <div class="slides-container h-full w-full relative">
            @foreach($slides as $idx => $slide)
                <div class="slide h-full w-full absolute top-0 left-0 transition-opacity duration-1000 ease-in-out {{ $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none' }}"
                    data-index="{{ $idx }}">
                    
                    <div class="flex flex-col md:flex-row h-full w-full relative">
                        <!-- Content Container -->
                        {{-- 60% height on mobile, 50% width on desktop --}}
                        <div class="relative w-full h-[60%] md:h-full md:w-1/2 flex flex-col justify-end md:justify-center items-start p-6 pb-12 md:p-24 text-left text-white z-20 {{ $slide['bg'] }}">
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black/60 via-transparent to-transparent pointer-events-none"></div>

                            <div class="relative z-30 max-w-2xl">
                                <h1 class="animate-fade-in text-3xl md:text-6xl lg:text-7xl mb-4 md:mb-6 leading-tight md:leading-none font-heading tracking-tight drop-shadow-md">
                                    {!! $slide['title'] !!}
                                </h1>
                                <p class="animate-fade-in delay-100 font-body text-base md:text-xl mb-6 md:mb-8 leading-relaxed text-gray-100 drop-shadow-sm max-w-lg {{ !empty($slide['bold']) ? 'font-bold' : '' }}">
                                    {{ $slide['text'] }}
                                </p>

                                @if(!empty($slide['cta_text']))
                                    <a href="{{ $slide['cta_link'] }}" @if(!empty($slide['cta_external'])) target="_blank" @endif
                                        class="animate-fade-in delay-200 inline-block bg-white text-cyan-brand font-heading font-bold text-sm md:text-lg px-6 md:px-8 py-2.5 md:py-3 rounded-full hover:bg-cyan-900 hover:text-white transition-all transform hover:scale-105 shadow-xl border-2 border-transparent hover:border-white">
                                        {{ $slide['cta_text'] }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Image/Video Container -->
                        {{-- 40% height on mobile, 50% width on desktop --}}
                        <div class="relative w-full h-[40%] md:h-full md:w-1/2 overflow-hidden {{ $slide['bg'] }}">
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
                <div class="mt-4 inline-flex items-center gap-2 bg-green-50 border border-green-200 text-green-700 font-bold text-sm px-4 py-2 rounded-full">
                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    Sin matrícula — solo pagas la cuota mensual
                </div>
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
    <!-- Innovation / BasicSoft -->
    <section class="py-20 bg-gray-900 text-white overflow-hidden relative">
        <!-- Background decorative elements -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-cyan-brand/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-blue-600/20 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10 w-full">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <!-- Left: Club Management / Members -->
                <div class="flex-1 text-center lg:text-left space-y-6">
                    <div
                        class="inline-block px-4 py-1.5 rounded-full bg-cyan-900/50 border border-cyan-500/30 text-cyan-300 text-sm font-bold tracking-wider uppercase mb-2">
                        Innovación Tecnológica
                    </div>
                    <h2 class="text-3xl md:text-5xl font-heading leading-tight">
                        Gestionamos nuestro club con la última tecnología
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed max-w-xl mx-auto lg:mx-0">
                        Gracias a <strong>BasicSoft Club</strong>, ofrecemos a nuestros alumnos una experiencia digital
                        completa: inscripciones online, control de asistencia y un área privada para gestionar sus pagos y
                        progreso.
                    </p>
                    <div class="pt-4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="https://federados.taekwondofabra.com" target="_blank"
                            class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold py-4 px-8 rounded-xl shadow-lg shadow-cyan-500/25 transition-all transform hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Acceso Alumnos
                        </a>

                        <a href="https://federados.taekwondofabra.com/formulariodatos" target="_blank"
                            class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 border border-white/30 text-white font-bold py-4 px-8 rounded-xl transition-all transform hover:scale-105 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0 1 1 0 002 0z" />
                            </svg>
                            Alta Nueva
                        </a>
                    </div>

                    <!-- App Badges -->
                    <div class="pt-6 border-t border-white/10 max-w-md mx-auto lg:mx-0">
                        <div class="flex flex-col gap-4">
                            <div>
                                <p class="text-sm text-gray-400 mb-2 font-medium">Ya disponible en:</p>
                                <a href="https://play.google.com/store/apps/details?id=com.basicsoft.tkdfabra" target="_blank" class="inline-block transform transition-transform hover:scale-105">
                                    <img src="https://play.google.com/intl/es/badges/static/images/badges/es_badge_web_generic.png"
                                        alt="Disponible en Google Play"
                                        class="h-14">
                                </a>
                            </div>
                            <div>
                                <p class="text-sm text-gray-400 mb-2 font-medium">Próximamente en:</p>
                                <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                    alt="Consíguelo en el App Store"
                                    class="h-10 opacity-50 grayscale cursor-not-allowed">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Tool Promotion / SaaS -->
                <div
                    class="flex-1 w-full max-w-md lg:max-w-lg bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 lg:p-10 relative group hover:border-cyan-500/30 transition-colors duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="relative space-y-6 text-center">
                        <img src="https://basicsoftclub.es/storage/web/logo1.png" alt="BasicSoft Club"
                            class="h-16 h-20 mx-auto object-contain drop-shadow-lg">

                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold text-white">¿Eres un Club Deportivo?</h3>
                            <p class="text-gray-400 leading-relaxed text-sm">
                                Descubre la herramienta que usamos nosotros. <strong>BasicSoft Club</strong> es el SaaS
                                definitivo para digitalizar tu escuela: menos burocracia, más tiempo para enseñar.
                            </p>

                            <ul class="text-left text-sm text-gray-300 space-y-3 pl-4">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-400 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Gestión integral de alumnos y pagos
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-400 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    App propia para el club
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-400 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Crea tu propia web en minutos
                                </li>
                            </ul>
                        </div>

                        <a href="https://basicsoftclub.es" target="_blank"
                            class="block w-full py-3 px-6 rounded-lg bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold transition-all hover:tracking-wide">
                            Más Información &rarr;
                        </a>
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

    {{-- ===================== STATS ANIMADOS ===================== --}}
    <section id="stats" class="py-20 bg-cyan-brand text-white overflow-hidden relative">
        {{-- Decorative blobs --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-16 -left-16 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-16 -right-16 w-72 h-72 bg-black/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-14">
                <p class="text-white/60 uppercase tracking-widest text-sm font-bold mb-2">Taekwondo Fabra en cifras</p>
                <h2 class="text-3xl md:text-5xl font-heading">Nuestra trayectoria habla por sí sola</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto" id="stats-grid">
                {{-- Años --}}
                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/10 mb-4 group-hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="text-5xl md:text-6xl font-heading font-bold leading-none mb-2">
                        <span class="stat-counter" data-target="12" data-suffix="+">0</span>
                    </div>
                    <p class="text-white/70 text-sm font-semibold uppercase tracking-wider">Años de historia</p>
                </div>

                {{-- Alumnos --}}
                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/10 mb-4 group-hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="text-5xl md:text-6xl font-heading font-bold leading-none mb-2">
                        <span class="stat-counter" data-target="70" data-suffix="+">0</span>
                    </div>
                    <p class="text-white/70 text-sm font-semibold uppercase tracking-wider">Alumnos activos</p>
                </div>

                {{-- Cinturones negros --}}
                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/10 mb-4 group-hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <div class="text-5xl md:text-6xl font-heading font-bold leading-none mb-2">
                        <span class="stat-counter" data-target="15" data-suffix="+">0</span>
                    </div>
                    <p class="text-white/70 text-sm font-semibold uppercase tracking-wider">Cinturones negros formados</p>
                </div>

                {{-- Podios --}}
                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/10 mb-4 group-hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <div class="text-5xl md:text-6xl font-heading font-bold leading-none mb-2">
                        <span class="stat-counter" data-target="30" data-suffix="+">0</span>
                    </div>
                    <p class="text-white/70 text-sm font-semibold uppercase tracking-wider">Podios autonómicos y nacionales</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CTA FORMULARIO ===================== --}}
    <section id="primera-clase" class="py-24 bg-gray-50 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-50 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl opacity-60"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-cyan-50 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl opacity-60"></div>
        </div>

        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- Left: textos y beneficios --}}
                <div class="space-y-6">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-cyan-100 text-cyan-800 text-sm font-bold tracking-wider uppercase">
                        Sin compromiso
                    </div>
                    <h2 class="text-4xl md:text-5xl font-heading text-gray-900 leading-tight">
                        Ven a tu <span class="text-cyan-brand">primera clase</span> gratis
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        ¿Tienes dudas? La mejor forma de conocernos es venir y verlo en persona.
                        Escríbenos y te reservamos una clase de prueba sin ningún coste ni compromiso.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            Apto para todas las edades, desde 3 años
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            No necesitas equipación previa
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            Club federado FTCV &amp; RFET
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-cyan-100 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            Entrenadores con 4º Dan y certificación WT
                        </li>
                    </ul>

                    <div class="pt-2 flex items-center gap-4 text-sm text-gray-500">
                        <a href="tel:676362738" class="flex items-center gap-2 hover:text-cyan-brand transition-colors font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            676 362 738
                        </a>
                        <span class="text-gray-300">|</span>
                        <a href="mailto:guillo@taekwondofabra.com" class="flex items-center gap-2 hover:text-cyan-brand transition-colors font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            guillo@taekwondofabra.com
                        </a>
                    </div>
                </div>

                {{-- Right: formulario --}}
                <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 md:p-10 relative">
                    {{-- Decorative corner accent --}}
                    <div class="absolute top-0 right-0 w-24 h-24 bg-cyan-50 rounded-bl-3xl rounded-tr-3xl pointer-events-none"></div>

                    <div id="cta-form-success" class="hidden flex-col items-center justify-center text-center py-10 gap-4">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h3 class="text-2xl font-heading text-gray-900">¡Mensaje enviado!</h3>
                        <p class="text-gray-500">Te contactaremos lo antes posible para confirmar tu clase de prueba.</p>
                    </div>

                    <form id="cta-form" class="space-y-5 relative z-10"
                          action="mailto:guillo@taekwondofabra.com"
                          method="post"
                          enctype="text/plain"
                          novalidate>

                        <div>
                            <h3 class="text-xl font-heading text-gray-900 mb-1">Reserva tu clase gratuita</h3>
                            <p class="text-sm text-gray-400">Te responderemos en menos de 24 horas.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cta-nombre" class="block text-sm font-semibold text-gray-700 mb-1.5">Nombre *</label>
                                <input type="text" id="cta-nombre" name="nombre" required
                                    placeholder="Tu nombre"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-brand/30 focus:border-cyan-brand transition-colors text-sm">
                            </div>
                            <div>
                                <label for="cta-edad" class="block text-sm font-semibold text-gray-700 mb-1.5">Edad del alumno *</label>
                                <input type="number" id="cta-edad" name="edad" required min="3" max="99"
                                    placeholder="Ej: 8"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-brand/30 focus:border-cyan-brand transition-colors text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="cta-telefono" class="block text-sm font-semibold text-gray-700 mb-1.5">Teléfono de contacto *</label>
                            <input type="tel" id="cta-telefono" name="telefono" required
                                placeholder="Ej: 612 345 678"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-brand/30 focus:border-cyan-brand transition-colors text-sm">
                        </div>

                        <div>
                            <label for="cta-mensaje" class="block text-sm font-semibold text-gray-700 mb-1.5">¿Algo más que quieras comentarnos? <span class="text-gray-400 font-normal">(opcional)</span></label>
                            <textarea id="cta-mensaje" name="mensaje" rows="3"
                                placeholder="Experiencia previa, horario preferido..."
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-brand/30 focus:border-cyan-brand transition-colors text-sm resize-none"></textarea>
                        </div>

                        {{-- Honeypot: invisible para humanos, los bots lo rellenan --}}
                        <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none;" aria-hidden="true">
                            <label for="cta-hp">No rellenar</label>
                            <input type="text" id="cta-hp" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        {{-- Math captcha --}}
                        <div>
                            <label id="cta-captcha-label" for="cta-captcha" class="block text-sm font-semibold text-gray-700 mb-1.5">Verificación: ¿cuánto es …? *</label>
                            <input type="number" id="cta-captcha" name="captcha" required
                                placeholder="Tu respuesta"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-brand/30 focus:border-cyan-brand transition-colors text-sm">
                        </div>

                        <button type="submit" id="cta-submit-btn"
                            class="w-full bg-[#25D366] hover:bg-[#1ebe5d] text-white font-bold py-4 px-8 rounded-xl transition-all transform hover:scale-[1.02] shadow-lg shadow-green-500/20 text-base flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Contactar por WhatsApp
                        </button>

                        <p class="text-xs text-gray-400 text-center">
                            Al enviar este formulario aceptas que nos pongamos en contacto contigo.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    // ====== Stats counter animation ======
    (function () {
        const counters = document.querySelectorAll('.stat-counter');
        if (!counters.length) return;

        const animateCounter = (el) => {
            const target = parseInt(el.dataset.target, 10);
            const suffix = el.dataset.suffix || '';
            const duration = 1800;
            const step = Math.ceil(target / (duration / 16));
            let current = 0;

            const tick = () => {
                current = Math.min(current + step, target);
                el.textContent = current + suffix;
                if (current < target) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(el => observer.observe(el));
    })();

    // ====== CTA Form handling (WhatsApp) ======
    (function () {
        const form = document.getElementById('cta-form');
        const successMsg = document.getElementById('cta-form-success');
        if (!form) return;

        // --- Math captcha setup ---
        const a = Math.floor(Math.random() * 9) + 1;
        const b = Math.floor(Math.random() * 9) + 1;
        const captchaAnswer = a + b;
        const label = document.getElementById('cta-captcha-label');
        if (label) label.textContent = `Verificación: ¿cuánto es ${a} + ${b}? *`;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const nombre   = document.getElementById('cta-nombre').value.trim();
            const edad     = document.getElementById('cta-edad').value.trim();
            const telefono = document.getElementById('cta-telefono').value.trim();
            const mensaje  = document.getElementById('cta-mensaje').value.trim();
            const honeypot = document.getElementById('cta-hp').value;
            const captcha  = parseInt(document.getElementById('cta-captcha').value, 10);

            // Honeypot check — bot detected if filled
            if (honeypot) return;

            // Required fields
            if (!nombre || !edad || !telefono) {
                [document.getElementById('cta-nombre'), document.getElementById('cta-edad'), document.getElementById('cta-telefono')].forEach(input => {
                    if (!input.value.trim()) {
                        input.classList.add('border-red-400', 'ring-2', 'ring-red-200');
                        setTimeout(() => input.classList.remove('border-red-400', 'ring-2', 'ring-red-200'), 2000);
                    }
                });
                return;
            }

            // Math captcha check
            if (captcha !== captchaAnswer) {
                const captchaInput = document.getElementById('cta-captcha');
                captchaInput.classList.add('border-red-400', 'ring-2', 'ring-red-200');
                captchaInput.value = '';
                captchaInput.placeholder = 'Respuesta incorrecta, inténtalo de nuevo';
                setTimeout(() => {
                    captchaInput.classList.remove('border-red-400', 'ring-2', 'ring-red-200');
                    captchaInput.placeholder = 'Tu respuesta';
                }, 3000);
                return;
            }

            let text = `Hola! Me gustaría reservar una clase gratuita.%0A%0A`
                      + `*Nombre:* ${nombre}%0A`
                      + `*Edad del alumno:* ${edad} años%0A`
                      + `*Teléfono:* ${telefono}`;
            if (mensaje) text += `%0A*Comentario:* ${mensaje}`;

            window.open(`https://wa.me/34676362738?text=${text}`, '_blank');

            setTimeout(() => {
                form.classList.add('hidden');
                successMsg.classList.remove('hidden');
                successMsg.classList.add('flex');
            }, 600);
        });
    })();
    </script>
@endsection