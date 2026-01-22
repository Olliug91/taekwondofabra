@extends('layouts.app')

@section('title', $poomsae['name'] . ' - Taekwondo Fabra Valencia')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">

            <!-- Header & Video -->
            <div class="mb-12">
                <a href="{{ route('home') }}#programas"
                    class="inline-flex items-center text-gray-500 hover:text-cyan-brand mb-6 transition-colors font-semibold">
                    &larr; Volver a Recursos Técnicos
                </a>

                <h1 class="text-4xl font-heading text-gray-900 mb-2">{{ $poomsae['name'] }}</h1>
                <p class="text-xl text-gray-500 mb-8">{{ $poomsae['korean_name'] }}</p>

                <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-xl bg-black">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $poomsae['video_id'] }}"
                        title="{{ $poomsae['name'] }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <!-- Steps List -->
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 md:p-12">
                <h2 class="text-2xl font-heading text-cyan-brand mb-8 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Guía Paso a Paso
                </h2>

                <div class="space-y-6">
                    @foreach($poomsae['steps'] as $index => $step)
                        <div
                            class="flex gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors border-b border-gray-50 last:border-0 last:pb-0">
                            <div
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-cyan-brand text-white flex items-center justify-center font-bold text-sm">
                                {{ $index + 1 }}
                            </div>
                            <div>
                                @php
                                    // Try to split Korean vs Spanish part if separated by "|"
                                    $parts = explode('|', $step);
                                    $korean = trim($parts[0] ?? '');
                                    $spanish = trim($parts[1] ?? '');
                                @endphp

                                @if(!empty($spanish))
                                    <h4 class="font-bold text-gray-900 text-lg mb-1">{{ $korean }}</h4>
                                    <p class="text-gray-600">{{ $spanish }}</p>
                                @else
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $step }}</h4>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection