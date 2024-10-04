<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Extra;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function search(Request $request){

        $brands = Brand::where('name','LIKE','%'.$request->search.'%')->get();
        $brandcars = new Collection();
        foreach($brands as $brand){
            $brandcars = $brandcars->merge($brand->cars);
        }

        $cars = Car::where('price','<',$request->search)->orWhere('name','LIKE','%'.$request->search.'%')->get();
        $cars = $brandcars->merge($cars);

        // $cars = Car::where('name','LIKE','%'.$request->search.'%')->orderBy('price')->get();

        return view('cars.index',compact('cars'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $extras = Extra::all();
        return view('cars.create',compact('brands','extras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     Metodo di salvataggio relazione manuale
    //     $car=Car::create($request->all());
    //     $car->brand_id = $request->brand;
    //     $car->save();


        $brand = Brand::findOrFail($request->brand);
        $car= $brand->cars()->create($request->all());

        $car->extras()->attach($request->extras);

        return redirect()->back()->with('success','Macchine registrata correttamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        $total = 0;
        foreach($car->extras as $extra){
            $total += $extra->price;
        }
        $total += $car->price;
        return view('cars.show',compact('car','total'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $extras = Extra::all();
        return view('cars.edit',compact('car','brands','extras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());

        // $car->extras()->detach();
        // $car->extras()->attach($request->extras);

        $car->extras()->sync($request->extras);

        return redirect()->back()->with('success','Modifica eseguita con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->extras()->detach();
        $car->delete();
    }
}
