@props(['title', 'items', 'category'])

@if(count($items) > 0)
<div class="bg-gray-50/50 dark:bg-gray-700/50 rounded-xl p-4 shadow-sm border border-gray-100 dark:border-gray-600 print:shadow-none print:border-none print:p-0 print:mb-4 transition-all hover:shadow-md">
    <h4 class="font-bold text-gray-800 dark:text-gray-200 print:text-black mb-3 border-b border-gray-200 dark:border-gray-600 pb-2 flex items-center justify-between">
        {{ $title }}
        
        <!-- Progress mini-badge -->
        <span class="no-print text-xs font-bold bg-cyan-100 dark:bg-gray-800 text-cyan-800 dark:text-cyan-400 px-2 py-1 rounded-md"
              x-text="(Object.keys(done).filter(k => k.startsWith('{{ $category }}_') && done[k]).length) + '/' + {{ count($items) }}">
        </span>
    </h4>
    <ul class="space-y-3">
        @foreach($items as $idx => $item)
        <li class="flex items-start gap-3 group">
            <button @click="toggle('{{ $category }}_{{ $idx }}')" class="mt-0.5 flex-shrink-0 focus:outline-none no-print transform transition-transform active:scale-90">
                <svg x-show="!isDone('{{ $category }}_{{ $idx }}')" class="w-5 h-5 text-gray-300 group-hover:text-cyan-brand transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <svg x-cloak x-show="isDone('{{ $category }}_{{ $idx }}')" class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
            </button>
            <span :class="isDone('{{ $category }}_{{ $idx }}') ? 'text-gray-400 line-through' : 'text-gray-700 dark:text-gray-300 print:text-black'" class="text-sm leading-snug transition-all duration-300">
                {{ $item }}
            </span>
            <!-- Botón del Ojo (Fase 3: Netflix de Técnicas) -->
            <button class="no-print ml-auto opacity-0 group-hover:opacity-100 transition-opacity text-cyan-brand hover:text-blue-800" title="Ver Técnica">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
            </button>
        </li>
        @endforeach
    </ul>
</div>
@endif
