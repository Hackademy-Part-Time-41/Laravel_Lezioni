<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class UserList extends Component
{

    public function edit($user_id){
        $this->dispatch('edit-user',$user_id);
    }

    public function destroy(User $user){
        $posts = $user->posts;
        foreach($posts as $post){
            // $post->user_id = NULL;
            // $post->save();

            $post->delete();
        }
        $user->delete();
    }

    #[On('edit-complete')]
    public function render()
    {
        return view('livewire.user-list',['users'=>User::all()]);
    }
}
