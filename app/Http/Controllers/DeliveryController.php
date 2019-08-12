<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dump(__METHOD__);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dump(__METHOD__);
        $viewData = Delivery::viewData(__METHOD__);

        return view('fillingForm',compact('viewData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(__METHOD__);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {

        dump(__METHOD__);
        $viewData = Delivery::viewData(__METHOD__);
        $id=$delivery->getAttribute('id');
        $viewData['id']=$id;
        return view('fillingForm',compact('viewData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {

        dd(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
       dd(__METHOD__);
    }
}
