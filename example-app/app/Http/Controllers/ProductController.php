<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * Method GET
     */
    public function index()
    {
        $productsList = Product::all();
        return view(view: 'products.index', data: compact(var_name: 'productsList'));
    }

    /**
     * Show the form for creating a new resource.
     * Method GET
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Method POST
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Method GET
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * method GET
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * put/patch
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
