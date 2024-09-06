<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public $writers = [
        ['name'=>'Giacomo','surname'=>'Rossi','profession'=>'Ornitologo','abilitato'=>true],
        ['name'=>'Pietro','surname'=>'Grigio','profession'=>'Giornalista sportivo','abilitato'=>false],
        ['name'=>'Wanda','surname'=>'Verdi','profession'=>'Criminologo','abilitato'=>false],
        ['name'=>'Franco','surname'=>'Rossi','profession'=>'Web Developer','abilitato'=>true]
    ];

    public function writers(){
        return view('writers.writers',['writers'=>$this->writers]);
    }
}
