@extends('layouts.app')

@section('title', 'Conócenos - Taekwondo Fabra')

@section('content')
    <div class="container mx-auto px-4 py-16 max-w-7xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-heading mb-6 text-cyan-brand">Quiénes Somos</h1>
            <div class="h-1 w-24 bg-gray-200 mx-auto rounded-full mb-8"></div>

            <!-- Nuestra Historia -->
            <!-- Nuestra Historia -->
            <!-- Nuestra Historia -->
            <div class="max-w-4xl mx-auto relative mt-12">
                <!-- Decorative Quotes -->
                <div class="absolute -top-10 -left-6 md:-left-12 text-cyan-brand transform -scale-x-100 opacity-10">
                    <svg width="80" height="80" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9H17.017C16.4647 9 16.017 8.55228 16.017 8V3H21.017V15C21.017 18.3137 18.3307 21 15.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9H8.0166C7.46432 9 7.0166 8.55228 7.0166 8V3H12.0166V15C12.0166 18.3137 9.33031 21 6.0166 21H5.0166Z" />
                    </svg>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-50 to-white p-8 md:p-12 rounded-3xl border border-gray-100 shadow-sm relative z-10 text-gray-700 text-lg leading-relaxed text-justify md:text-center space-y-6">
                    <p>
                        El <strong>Club Taekwondo Fabra</strong> fue fundado en el año 2000 por los hermanos Fabra. En
                        <strong>2013</strong>, Lidia Carbonell y Guillermo Tudela asumieron la dirección, aportando una
                        nueva
                        energía y visión al proyecto.
                    </p>

                    <div class="w-24 h-1 bg-cyan-brand mx-auto rounded-full my-6"></div>

                    <p>
                        Ambos iniciaron su camino marcial individualmente en 2007 en el club Chong Do Lee, alcanzando su
                        primer
                        gran hito, el Cinturón Negro 1º Dan, en 2011.
                    </p>
                    <p>
                        Desde entonces, su formación ha sido imparable. Su compromiso con la excelencia técnica les ha
                        llevado a
                        superar grado tras grado: 2º Dan en 2018, 3º Dan en 2020 y, recientemente, el <strong>4º Dan
                            en 2023</strong>. Esta constancia y superación personal es el mejor ejemplo que transmiten cada
                        día
                        a sus alumnos.
                    </p>
                    <p>
                        Más allá de los grados, ambos son <strong>Árbitros Nacionales</strong> y poseen la titulación
                        oficial de
                        <strong>Técnico Deportivo Nivel 2</strong> (Generalitat Valenciana & FTCV).
                    </p>

                    <p>
                        Gracias a esta dedicación, el club se enorgullece de haber formado a competidores que han alcanzado
                        <strong>podios nacionales</strong>, demostrando que la calidad técnica y los valores van de la mano.
                    </p>

                    <p class="font-medium text-cyan-brand font-bold italic pt-4">
                        "Con más de una década de experiencia docente, no solo enseñamos un arte marcial; formamos
                        personas a través de los valores del deporte."
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 max-w-5xl mx-auto">
            <!-- Guillermo -->
            <div
                class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                <div class="h-96 md:h-[500px] overflow-hidden relative">
                    <img src="/storage/img/FichaFabra_Guillo.png" alt="Guillermo Tudela"
                        class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-3xl font-heading mb-1">Guillermo Tudela</h3>
                        <p class="text-cyan-400 font-bold uppercase tracking-wider text-sm">Entrenador & Director Técnico
                        </p>
                    </div>
                </div>
                <div class="p-8">
                    <div class="text-gray-600 space-y-4 leading-relaxed">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-brand shrink-0 mt-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                            </svg>
                            <p>Competidor de la modalidad de <strong>«Combate»</strong>, siendo medallista autonómico y
                                nacional.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-brand shrink-0 mt-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                            <p><strong>Técnico Deportivo Nivel II</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lidia -->
            <div
                class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                <div class="h-96 md:h-[500px] overflow-hidden relative">
                    <img src="/storage/img/FichaFabra_Lidia.png" alt="Lidia Carbonell"
                        class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-3xl font-heading mb-1">Lidia Carbonell</h3>
                        <p class="text-cyan-400 font-bold uppercase tracking-wider text-sm">Entrenadora</p>
                    </div>
                </div>
                <div class="p-8">
                    <div class="text-gray-600 space-y-4 leading-relaxed">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-brand shrink-0 mt-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                            </svg>
                            <p>Competidora de la modalidad de <strong>«Poomsae»</strong>, siendo medallista autonómica y
                                nacional.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-brand shrink-0 mt-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                            <p><strong>Técnico Deportivo Nivel II</strong>.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-brand shrink-0 mt-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                            <p>Máster en <strong>Derecho Deportivo</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection