<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Validasi Store
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3',

            'price' => 'required|numeric',

            'qty' => 'required|integer',

        ]);

        return "Store berhasil";
    }

    /**
     * Validasi Update
     */
    public function update(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3',

            'price' => 'required|numeric',

            'qty' => 'required|integer',

        ]);

        return "Update berhasil";
    }
}