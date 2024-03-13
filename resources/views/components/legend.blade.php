@props(['letters'])
<div>
    @php
        $lettersTop = array_slice($letters, 0, 13, true); // First 13 elements
        $lettersBottom = array_slice($letters, 13, null, true); // Remaining elements
    @endphp
    <div class="flex flex-wrap mt-auto">
        @foreach ($lettersTop as $letter => $symbol)
            <div class="flex flex-col items-center border border-white/10 print:border-gray-400 p-2">
                <span class="mb-2 font-bold text-4xl">{{ ucwords($letter) }}</span>
                <span class="material-symbols-outlined character" style="font-size: 40px;">{{ $symbol }}</span>
            </div>
        @endforeach
    </div>
    <div class="flex flex-wrap mt-auto">
        @foreach ($lettersBottom as $letter => $symbol)
            <div class="flex flex-col items-center border border-white/10 print:border-gray-400 p-2">
                <span class="mb-2 font-bold text-4xl">{{ ucwords($letter) }}</span>
                <span class="material-symbols-outlined character" style="font-size: 40px;">{{ $symbol }}</span>
            </div>
        @endforeach
    </div>
</div>
