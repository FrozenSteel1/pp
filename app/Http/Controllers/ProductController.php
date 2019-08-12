<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo __METHOD__;
        $all = Product::paginate(20);

        return view('product.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $id = Product::saveData($request->all());

        if ($id) {
            return redirect(route('product.edit', $id));

        } else {

            return redirect()->route('product.index');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        echo __METHOD__;
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $result=$product::updateData(request()->input(),$product);
        if ($result)
        {
            $request->session()->flash('msg','Данные изменены');
            return redirect()->route('product.index');
        }
        else
        {
            $request->session()->flash('msg','Все плохо');
            back();

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

       $result=Product::deleteData($product);
        if ($result)
        {
            return redirect()->route('product.index');
        }
        else
        {
            back();

        }
    }
}
