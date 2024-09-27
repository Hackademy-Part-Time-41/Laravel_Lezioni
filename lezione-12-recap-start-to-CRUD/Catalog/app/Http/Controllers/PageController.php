<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function contact(){
        return view('contact');
    }

    public function contactSend(Request $request){

        Mail::to('admin@example.com')->send(new ContactMail(auth()->user(),$request->messaggio));

        return redirect()->route('contact')->with('success','Mail inviata correttamente');

    }

    public function search(Request $request){
        $search = $request->search;

        $cars = Car::where('brand','LIKE',"%$search%")->orWhere('model','LIKE',"%$search%")->get();

        return view('car.index',compact('cars'));
    }
}
