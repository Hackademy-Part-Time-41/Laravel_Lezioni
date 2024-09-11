<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public $articles = [
        ['image'=>'https://picsum.photos/200','title'=>'Articolo 1','body'=>'siamo contenti di essere qui'],
        ['image'=>'https://picsum.photos/200','title'=>'Articolo 1','body'=>'siamo contenti di essere qui'],
        ['image'=>'https://picsum.photos/200','title'=>'Articolo 1','body'=>'siamo contenti di essere qui'],
    ];

    public $mail = [];

    
    public function homepage() {
        return view('homepage',['titolo'=>'Homepage del sito','articles'=>$this->articles]);
    }

    public function contacts(){
        return view('contacts');
    }

    // Per ricevere i dati inviati tramite request sfrutto la dependency injection 
    // per dire a laravel di passare la richiesta al paramatro della funzione
    public function contactSend(Request $request){

        // $data = $request->validate([
        //     'messaggio' => 'required',
        //     'email'=> 'required'
        // ]);


        Mail::to('admin@example.com')->send(new ContactMail($request->username,$request->email,$request->messaggio));
        
        // return redirect()->to('/');
        // return redirect()->route('home');
        return redirect()->back()->with('success','Il form è stato inviato correttamente');
    }


}
