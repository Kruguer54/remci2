<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;
use DB;
class EquipmentController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datos['equipments']=Equipment::paginate(10);
        // return view('equipments.index',$datos);

        $equipos['equipments']=DB::table('equipment')
        ->join('departments', 'departments.id', '=', 'equipment.department_id')
        ->join('brands', 'brands.id', '=', 'equipment.brand_id')
        ->select('equipment.id', 
                 'departments.namedepto', 
                 'brands.namebrand', 
                 'equipment.model', 
                 'equipment.serial_number', 
                 'equipment.type', 
                 'equipment.physical_state')
        ->get();

        return view('equipments.index',$equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEquipo=request()->except('_token');
       Equipment::insert($datosEquipo);
       return redirect('home/equipments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::findOrFail($id);
        //$deptos['departments']=DB::table('departments.name');
        return view('equipments.edit', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEquipo=request()->except(['_token','_method']);
        $equipment = Equipment::findOrFail($id);

        Equipment::where('id','=',$id)->update($datosEquipo);
        
        //return view('brands.edit', compact('brand'));
        return redirect('home/equipments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
