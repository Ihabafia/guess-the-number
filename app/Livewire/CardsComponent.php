<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CardsComponent extends Component
{
    public bool $start = true;

    public array $results = [];

    public array $cards = [];

    public array $card = [];

    public int $cardIndex = 0;

    public function mount()
    {
        $this->cards = [
            0 => 1,
            1 => 2,
            2 => 4,
            3 => 8,
            4 => 16,
            5 => 32,
            6 => 64,
            7 => 128,
        ];
    }

    public function startGame(): void
    {
        $this->start = false;
        $this->cardIndex = 0;
        //$this->card = $this->generateCard($this->cardIndex);
    }

    public function nextCard(bool $answer)
    {
        if ($this->cardIndex <= 7) {
            $this->results[$this->cardIndex] = $answer ? $this->cards[$this->cardIndex] : 0;
            $this->card = $this->generateCard($this->cardIndex);
        }
        $this->cardIndex++;
    }

    public function generateCard(int $card): array
    {
        $result = [];
        for ($i = 1; $i < 256; $i++) {
            // $i & $this->>cards[$card] will return 0 if the card is not in the current card
            // by checking the number by bitwise operation
            if ($i & $this->cards[$card]) {
                $result[] = $i;
            }
        }

        return $result;
    }

    #[Computed]
    public function result(): int
    {
        return array_sum($this->results);
    }

    public function render(): View
    {
        return view('livewire.cards-component');
    }
}
