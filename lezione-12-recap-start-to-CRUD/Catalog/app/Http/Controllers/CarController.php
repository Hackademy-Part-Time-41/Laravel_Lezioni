<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\Storage;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('car.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {

        $car = Car::create($request->validated());

        $car->image='';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            $fileName = 'coverimage.'.$file->extension();
            $file->storeAs('images/'.$car->id,$fileName,'public');

            $car->image = 'images/'.$car->id.'/'.$fileName;
            
        }
        $car->save();

        return redirect()->back()->with('success','Macchina inserita correttamente!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit',compact('car'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        Storage::delete($car->image);

        $car->update($request->validated());

        $car->image='';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            $fileName = 'coverimage.'.$file->extension();
            $file->storeAs('images/'.$car->id,$fileName,'public');

            $car->image = 'images/'.$car->id.'/'.$fileName;
            
        }
        $car->save();

        return redirect()->back()->with('success','Macchina '. $car->model.' modificata correttamente!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('succes','Macchina eliminata correttamente');
    }
}
