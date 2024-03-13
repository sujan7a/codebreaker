<div class="my-8 flex flex-col items-center gap-10 flex-1">

    <form class="print:hidden w-full">
        <div class="mb-4 flex justify-end">
            <button type="button" @disabled(!$message) @click="window.print()"
                class="bg-blue-500 px-6 pt-3 pb-1 text-lg font-semibold rounded-md disabled:bg-gray-300">
                <span class="material-symbols-outlined">
                    print
                </span>
            </button>
        </div>
        <textarea wire:model.live="message" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded-xl w-full"></textarea>

    </form>

    <x-code :message="$message" :letters="$this->letters" />

    @if ($message)
        <x-legend :letters="$this->letters" />
    @endif
</div>
