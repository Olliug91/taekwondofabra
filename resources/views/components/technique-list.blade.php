@props(['title', 'items'])

@if(!empty($items))
<div class="bg-cyan-50/50 dark:bg-gray-700/50 rounded-xl p-5 print:mb-4" style="-webkit-print-color-adjust: exact; print-color-adjust: exact;">
    <h4 class="font-bold text-gray-800 dark:text-gray-200 print:text-black mb-4 text-lg border-b border-cyan-200/50 dark:border-gray-600 pb-2 print:border-b print:border-black">{{ $title }}</h4>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 print:grid-cols-2">
        @foreach($items as $item)
            <div class="flex flex-col bg-white dark:bg-gray-800 p-3 rounded-lg border border-cyan-100 dark:border-gray-600 shadow-sm print:border-gray-300 print:shadow-none print:bg-transparent">
                <span class="font-bold text-gray-900 dark:text-white print:text-black text-sm">
                    {{ $item['korean'] }}
                </span>
                @if(!empty($item['spanish']))
                <span class="text-xs text-gray-700 dark:text-gray-300 print:text-gray-800 mt-0.5">
                    {{ $item['spanish'] }}
                </span>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endif
