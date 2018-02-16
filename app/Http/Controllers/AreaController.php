<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Area::where('state', '=', 'ACTIVO')->orderBy('id', 'ASC')->paginate(5);
        return view('template.areas.index')->with('areas', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('template.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos = new Area($request->all());

        $datos->state = "ACTIVO";
        $datos->save();

        flash::success("Se ha registrado " . $datos->name . " de forma correcta");
        return redirect()->route('areas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
        return view('template.areas.edit')->with('area', $area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        //
        $area->fill($request->all());
        $area->save();

        flash::warning("Se ha editado " .$area->name. " de forma correcta");
        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        //
        $area->state = "INACTIVO";
        $area->save();

        flash::error("Se ha eliminado " .$area->name. " de forma correcta");
        return redirect()->route('areas.index');
    }
}
