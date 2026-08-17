<div>

    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        
        <!-- Controles de Selección (Se ocultan al imprimir) -->
        <div class="no-print bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-xl rounded-2xl p-6 mb-8 border border-gray-100 dark:border-gray-700">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white flex items-center gap-2">
                <svg class="w-6 h-6 text-cyan-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                Consulta tu Programa de Examen
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">1. Selecciona tu Grupo de Edad</label>
                    <select wire:model.live="ageGroup" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-cyan-brand focus:ring-cyan-brand dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-base p-3 transition-colors">
                        <option value="">-- Elige una opción --</option>
                        <option value="iniciacion">Iniciación (3-7 años)</option>
                        <option value="cadete">Cadete (8-13 años)</option>
                        <option value="junior_adulto">Junior / Adultos (+14 años)</option>
                    </select>
                </div>

                @if(count($availableBelts) > 0)
                <div class="animate-fade-in">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">2. Selecciona el Cinturón</label>
                    <select wire:model.live="selectedBelt" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-cyan-brand focus:ring-cyan-brand dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-base p-3 transition-colors">
                        <option value="">-- Elige tu cinturón actual --</option>
                        @foreach($availableBelts as $belt)
                            <option value="{{ $belt }}">{{ $belt }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
            </div>
            
            @if($currentExam)
            <div class="mt-6 flex justify-end">
                <a href="{{ route('examenes.pdf', ['ageGroup' => $ageGroup, 'belt' => $currentExam['belt']]) }}" target="_blank" class="inline-flex items-center gap-2 bg-cyan-brand hover:bg-[#007bb5] text-white font-semibold py-2 px-6 rounded-xl transition-all shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                    Descargar / Imprimir Temario (PDF)
                </a>
            </div>
            @endif
        </div>

        <!-- Ficha de Examen (Visible siempre, optimizada para imprimir) -->
        @if($currentExam)
        <div class="exam-card bg-white dark:bg-gray-800 shadow-2xl rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 transition-all duration-300">
            <!-- Header -->
            <div class="bg-gradient-to-r from-cyan-brand to-[#004f74] p-6 md:p-8 text-center" style="-webkit-print-color-adjust: exact; print-color-adjust: exact;">
                <div class="flex justify-center mb-4">
                    <img src="/storage/img/logo.png" alt="Taekwondo Fabra" class="h-16 w-auto drop-shadow-md">
                </div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-2">
                    Examen: {{ $currentExam['belt'] }}
                </h1>
                <p class="text-cyan-100 text-lg font-medium">
                    Grupo: {{ 
                        $ageGroup == 'iniciacion' ? 'Iniciación (3-7 años)' : 
                        ($ageGroup == 'cadete' ? 'Cadete (8-13 años)' : 'Junior / Adultos (+14 años)') 
                    }}
                </p>
            </div>

            <!-- Body -->
            <div class="p-8 space-y-8 print:p-4 print:space-y-4">
                
                @if(isset($currentExam['physical']) && $currentExam['physical'] !== '-')
                <div class="exam-section">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white print:text-black border-b-2 border-cyan-100 dark:border-gray-600 pb-2 mb-4 flex items-center gap-2">
                        <span class="bg-cyan-100 text-cyan-800 p-1.5 rounded-lg">💪</span> 1. Físico
                    </h3>
                    <ul class="text-gray-600 dark:text-gray-300 print:text-black space-y-3 leading-relaxed">
                        @foreach(explode("\n", $currentExam['physical']) as $fis)
                            @php $fis = trim($fis); @endphp
                            @if($fis != '')
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-cyan-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>{{ preg_replace('/^[-·]\s*/u', '', $fis) }}</span>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="exam-section">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white print:text-black border-b-2 border-cyan-100 dark:border-gray-600 pb-2 mb-4 flex items-center gap-2">
                        <span class="bg-cyan-100 text-cyan-800 p-1.5 rounded-lg">🥋</span> 2. Técnica
                    </h3>
                    <div class="grid grid-cols-1 gap-6 print:gap-4">
                        @if(isset($currentExam['stances']) && $currentExam['stances'] !== '-')
                            <x-technique-list title="Posiciones" :items="$this->parseTechniques($currentExam['stances'])" />
                        @endif

                        @if(isset($currentExam['defenses']) && $currentExam['defenses'] !== '-')
                            <x-technique-list title="Defensas" :items="$this->parseTechniques($currentExam['defenses'])" />
                        @endif

                        @if(isset($currentExam['attacks']) && $currentExam['attacks'] !== '-')
                            <x-technique-list title="Ataques" :items="$this->parseTechniques($currentExam['attacks'])" />
                        @endif

                        @if(isset($currentExam['kicks']) && $currentExam['kicks'] !== '-')
                            <x-technique-list title="Patadas" :items="$this->parseTechniques($currentExam['kicks'])" />
                        @endif
                    </div>
                </div>

                @if(isset($currentExam['poomsae']) && $currentExam['poomsae'] !== '-' && $currentExam['poomsae'] !== 'No procede')
                <div class="exam-section">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white print:text-black border-b-2 border-cyan-100 dark:border-gray-600 pb-2 mb-4 flex items-center gap-2">
                        <span class="bg-cyan-100 text-cyan-800 p-1.5 rounded-lg">☯️</span> 3. Poomsae
                    </h3>
                    <div class="text-gray-600 dark:text-gray-300 print:text-black whitespace-pre-line mb-4">
                        {{ $currentExam['poomsae'] }}
                    </div>
                    
                    @if(count($this->poomsaeVideos) > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 no-print">
                        @foreach($this->poomsaeVideos as $video)
                        <div class="bg-gray-50 dark:bg-gray-700/50 p-3 rounded-xl border border-gray-200 dark:border-gray-600">
                            <h4 class="font-bold text-sm text-cyan-brand mb-2 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                {{ $video['title'] }}
                            </h4>
                            <div class="aspect-video w-full rounded-lg overflow-hidden bg-black shadow-sm">
                                <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $video['id'] }}" title="{{ $video['title'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                @endif

                <div class="exam-section">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white print:text-black border-b-2 border-cyan-100 dark:border-gray-600 pb-2 mb-4 flex items-center gap-2">
                        <span class="bg-cyan-100 text-cyan-800 p-1.5 rounded-lg">🎯</span> 4. Aplicación
                    </h3>
                    <div class="grid grid-cols-1 gap-6 print:gap-4">
                        
                        @if(isset($currentExam['application_kicks']) && $currentExam['application_kicks'] !== '-' && $currentExam['application_kicks'] !== 'No procede')
                            <x-technique-list title="Patadas en Pao (3 repeticiones por guardia)" :items="$this->parseTechniques($currentExam['application_kicks'])" />
                        @endif

                        @if(isset($currentExam['application_combination']) && $currentExam['application_combination'] !== '-' && $currentExam['application_combination'] !== 'No procede')
                            <x-technique-list title="Combinación" :items="$this->parseTechniques($currentExam['application_combination'])" />
                        @endif

                        @if(isset($currentExam['application_kyorugi']) && $currentExam['application_kyorugi'] !== '-' && $currentExam['application_kyorugi'] !== 'No procede')
                            <x-technique-list title="Kyorugi" :items="$this->parseTechniques($currentExam['application_kyorugi'])" />
                        @endif

                    </div>
                </div>

            </div>
            
            <div class="bg-gray-50 dark:bg-gray-900 p-4 text-center text-sm text-gray-500 border-t border-gray-200 dark:border-gray-700" style="-webkit-print-color-adjust: exact; print-color-adjust: exact;">
                <strong class="text-cyan-brand">taekwondofabra.com</strong> - Estudia y prepárate bien. ¡Tú puedes!
            </div>
        </div>
        @else
        <!-- Placeholder Empty State -->
        <div class="no-print text-center py-16 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border-2 border-dashed border-gray-300 dark:border-gray-700">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            </svg>
            <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Ningún examen seleccionado</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Selecciona tu grupo de edad y cinturón para ver el temario.</p>
        </div>
        @endif
        
    </div>
</div>
