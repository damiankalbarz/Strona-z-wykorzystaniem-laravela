<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("cars.index", ['cars' => Car::paginate(12)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $v = $request->validate([
            'name' => 'required|in:Audi A7,Audi A6,Audi A5,Audi A4,Audi A3',
            'own_name' => 'required|max:30|min:3',

        ]);
        $car = new Car($v);
        $car->save();
        return redirect(route('cars.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  Car $car
     * @return View
     */
    public function edit(Car $car) :View
    {
        return view("cars.edit", ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Car  $car
     * @return View
     */

    public function update(Request $request, Car $car): View
    {
        $car->fill($request->all());
        $car->save();
        return view('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return View
     */
    public function destroy($id): View
    {
        $flight = Car::find($id);
        if($flight!=NULL)
        {
            $flight->delete();
        }

        return view("welcome");

    }
}
