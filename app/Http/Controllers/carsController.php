<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

use App\Make;

class carsController extends Controller
{
    public function loadHome(){
        return view('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cars = Car::all();
        $makes = Make::all();
        return view('index',compact('cars','makes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new car();

        $car->trim = $request['trim'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->price = $request['price'];
        $car->year = $request['year'];
        $car->mileage = $request['mileage'];
        $car->engine = $request['engine'];
        $car->transmission = $request['transmission'];
        $car->consumptionCity = $request['consumptionCity'];
        $car->consumptionHwy = $request['consumptionHwy'];
        $car->fuel = $request['fuel'];
        $car->desc = $request['desc'];

        $request->user()->cars()->save($car);




        /*Car::Create([
            'trim' => request('trim'),
            'make' => request('make'),
            'model' => request('model'),
            'year' => request('year'),
            'price' => request('price'),
            'mileage' => request('mileage')
        ]); */
        return redirect()->back()->with('message','Car Added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {
        return view('show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($car_id)
    {
        $car = Car::where('id',$car_id)->first();

            $car->delete();
            return redirect()->route('cars');

    }
}
