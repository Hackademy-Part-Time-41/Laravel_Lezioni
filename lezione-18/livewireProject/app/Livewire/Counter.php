<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $value = 1;

    public function increment($quantity){
        $this->count+=$quantity;
    }

    public function decrement($quantity){
        $this->count -= $quantity;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
