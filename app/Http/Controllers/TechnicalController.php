<?php

namespace App\Http\Controllers;

use App\Technical;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['technicals']=Technical::paginate(10);
        return view('technicians.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('technicians.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosTecnico=request()->except('_token');
       Technical::insert($datosTecnico);
       return redirect('home/technicals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function show(Technical $technical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technical = Technical::findOrFail($id);
        return view('technicians.edit', compact('technical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosTecnico=request()->except(['_token','_method']);
        $technical = Technical::findOrFail($id);

        Technical::where('id','=',$id)->update($datosTecnico);
        
        //return view('brands.edit', compact('brand'));
        return redirect('home/technicals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technical = Technical::findOrFail($id);
         
        Technical::destroy($id);
          
        return redirect('home/technicals');
    }
}
