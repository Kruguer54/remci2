<?php

namespace App\Http\Controllers;

use App\ServiceOrder;
use Illuminate\Http\Request;
use DB;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datos['serviceOrders']=ServiceOrder::paginate(10);
        //return view('serviceorders.index',$datos);

        $ordenes['serviceOrders']=DB::table('service_orders')
        ->join('departments', 'departments.id', '=', 'service_orders.department_id')
        ->join('equipment', 'equipment.id', '=', 'service_orders.equipment_id')
        ->join('technicals', 'technicals.id', '=', 'service_orders.technical_id')
        ->select('service_orders.id',
                 'departments.namedepto', 
                 'equipment.model', 
                 'equipment.serial_number', 
                 'technicals.name',
                 'technicals.a_pater', 
                 'service_orders.date', 
                 'service_orders.failure')
        ->get();

        return view('serviceorders.index',$ordenes);
    }



    public function paneltec()
    {
        //$datos['serviceOrders']=ServiceOrder::paginate(10);
        //return view('serviceorders.index',$datos);

        $ordenes['serviceOrders']=DB::table('service_orders')
        ->join('departments', 'departments.id', '=', 'service_orders.department_id')
        ->join('equipment', 'equipment.id', '=', 'service_orders.equipment_id')
        ->join('technicals', 'technicals.id', '=', 'service_orders.technical_id')
        ->select('service_orders.id',
                 'departments.namedepto', 
                 'equipment.model', 
                 'equipment.serial_number', 
                 'technicals.name',
                 'technicals.a_pater', 
                 'service_orders.date', 
                 'service_orders.failure')
        ->get();

        return view('serviceorders.paneltec',$ordenes);
    }



    public function orderpend()
    {
        //$datos['serviceOrders']=ServiceOrder::paginate(10);
        //return view('serviceorders.index',$datos);

        $ordenes['serviceOrders']=DB::table('service_orders')
        ->join('departments', 'departments.id', '=', 'service_orders.department_id')
        ->join('equipment', 'equipment.id', '=', 'service_orders.equipment_id')
        ->join('technicals', 'technicals.id', '=', 'service_orders.technical_id')
        ->select('service_orders.id',
                 'departments.namedepto', 
                 'equipment.model', 
                 'equipment.serial_number', 
                 'technicals.name',
                 'technicals.a_pater', 
                 'service_orders.date', 
                 'service_orders.failure')
        ->get();

        return view('serviceorders.orderpend',$ordenes);
    }

    public function history()
    {
        //$datos['serviceOrders']=ServiceOrder::paginate(10);
        //return view('serviceorders.index',$datos);

        $ordenes['serviceOrders']=DB::table('service_orders')
        ->join('departments', 'departments.id', '=', 'service_orders.department_id')
        ->join('equipment', 'equipment.id', '=', 'service_orders.equipment_id')
        ->join('technicals', 'technicals.id', '=', 'service_orders.technical_id')
        ->select('service_orders.id',
                 'departments.namedepto', 
                 'equipment.model', 
                 'equipment.serial_number', 
                 'technicals.name',
                 'technicals.a_pater', 
                 'service_orders.date', 
                 'service_orders.failure')
        ->get();

        return view('serviceorders.datatable',$ordenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceorders.create');
    }

    public function createclient()
    {
        return view('serviceorders.createclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosOrdernservice=request()->except('_token');
       ServiceOrder::insert($datosOrdernservice);
       return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceOrder $serviceOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serviceOrder = ServiceOrder::findOrFail($id);
        return view('serviceorders.edit', compact('serviceOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosOrdernservice=request()->except(['_token','_method']);
        $serviceOrder = ServiceOrder::findOrFail($id);

        ServiceOrder::where('id','=',$id)->update($datosOrdernservice);
        
        //return view('brands.edit', compact('brand'));
        return redirect('home/serviceorders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceOrder = ServiceOrder::findOrFail($id);
         
        ServiceOrder::destroy($id);
          
        return redirect('home/serviceorders');
    }
}
