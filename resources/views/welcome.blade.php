<x-layout>
    <section class="container mx-auto px-6 h-full flex flex-col" style="max-width: 1000px;">
        <header class="flex">
            <h1>
                <img src="/logo.svg" alt="Codebreaker" aria-label="Codebreaker" class="print:invert w-52 print:w-36">
            </h1>
            {{-- <div class="mt-2 flex justify-end">
                <button type="button" @disabled(!$message) @click="window.print()"
                    class="bg-blue-500 px-4 py-1 text-sm font-semibold rounded-md disabled:bg-gray-300">Print</button>
            </div> --}}
        </header>

        <livewire:create-code />
    </section>
</x-layout>
