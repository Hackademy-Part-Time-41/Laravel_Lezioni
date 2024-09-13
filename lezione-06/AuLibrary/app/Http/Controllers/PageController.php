<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public $categories = [
        'sport',
        'gossip',
        'economy',
    ];

    public function homepage(){
        // ci permette di raggiungere la homepage
        return view('homepage',['categories'=>$this->categories]);
    }

    public function feedback(){
        // ci permette di raggiungere la pagina feedback
        return view('feedback');
    }

    public function feedbackSend(Request $request){
        // ci permette di inviare i feedback
        $request->validate(['email'=>'required','name'=>'required']);

        try{
            Mail::to('admin@aulibrary.it')->send(new FeedbackMail($request->name,$request->email,$request->message));
        }catch(Exception $e){
            return redirect()->back()->with('fail','C\'è stato un errore nell\'invio del feedback, riprova più tardi!');
        }
        


        return redirect()->back()->with('success','Complimenti! Il tuo feedback è stato inviato correttamente!');
        
    }


}
