<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class UserForm extends Component
{
    // #[Validate('required|max:20')]
    #[Validate]
    public $name;

    // #[Validate('required|unique:users,email')]
    #[Validate]
    public $email;

    // #[Validate('required|min:5')]
    #[Validate]
    public $password;

    public $title = 'Crea il tuo utente';
    // public $counter = 0;

    // public function updated($property){
    //     $this->counter++;
    // }

    public $function = 'create';
    public $id ='';

    #[On('edit-user')]
    public function edit($user_id){
        $user = User::find($user_id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';
        $this->function = 'update';
        $this->id = $user->id;
    }

    public function update(){
        $this->validate();
        if($this->id){
           $user =  User::find($this->id);
           $user->update($this->only(['name','email','password']));
           session()->flash('success','Hai modificato correttamente l\' utente');

           if($this->password != ''){
            $user->password = $this->password;
            $user->save();
           }

           $this->reset(['name','email','password','id']);
        }
        $this->dispatch('edit-complete');
    }

    public function rules(){
        if($this->id==''){
            return [
                'name'=>'required','email'=>'required|unique:users,email','password'=>'required|min:5'
            ];
        }else{
            return ['name'=>'required','email'=>'required','password'=>'min:5'];
        }
    }

    public function create(){
        $this->validate();

       User::create($this->only(['name','email','password']));

        session()->flash('success','Hai inserito correttamente il tuo utente');

        // $this->cleanForm();
        $this->reset(['name','email','password','id']);
    }

    public function render()
    {
        return view('livewire.user-form');
    }

    // public function cleanForm(){
    //     $this->name = '';
    //     $this->email = '';
    //     $this->password ='';
    // }
}
