<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class TestMount extends Component
{
    use WithPagination;

    public $title = 'Ciao';
    public $descrizione = 'Come stai';


    public function mount($titolo,$pietro){
        $this->title = $titolo;
        $this->descrizione  = $pietro;
    }

    public function render()
    {
        return view('livewire.test-mount',['posts'=>Post::paginate(10)]);
    }
}
