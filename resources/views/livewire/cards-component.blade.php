<div>
    <div class="my-8 flex justify-center items-center container rounded-lg bg-white shadow flex-col">
        @if($start)
            <div class="px-4 py-5 sm:p-6 text-3xl">
                Choose a number between 0 and 255
            </div>
            <div>
                <x-button wire:click="startGame">
                    Show Cards
                </x-button>
            </div>
        @endif
        @if(!$start && $cardIndex < 8)
            <div class="px-4 py-5 sm:p-6 text-3xl">
                Is your number here?
            </div>
            <div class="grid grid-cols-12 gap-4 pb-8 px-8">
                @foreach($this->generateCard($cardIndex) as $value)
                    <div
                        class="bg-purple-300 text-center p-4 rounded">
                        {{ $value }}
                    </div>
                @endforeach
                <x-button wire:click="nextCard(1)" class="col-span-2 bg-green-500 text-center p-4 rounded">Yes
                </x-button>
                <x-button wire:click="nextCard(0)" class="col-span-2 bg-red-500 text-center p-4 rounded">No</x-button>
            </div>
        @endif
        @if($cardIndex === 8)
            <div class="px-4 py-5 sm:p-6 text-3xl">
                Your number is {{ $this->result }}
            </div>
            <div>
                <x-button wire:click="startGame">
                    Play Again
                </x-button>
            </div>
        @endif
    </div>
</div>
