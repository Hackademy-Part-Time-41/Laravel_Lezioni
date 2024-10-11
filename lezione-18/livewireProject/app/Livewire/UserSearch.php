<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;

class UserSearch extends Component
{
    #[Url] 
    public $search='';
    public function render()
    {
        $users= User::search($this->search);
        return view('livewire.user-search',['users'=>$users]);
    }
}
