<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list(){
        return view('list_products');
    }
    public function addProduct(){
        return view('product_add');
    }
    public function store(Request $request){}
    public function update($id){}
    public function edit(Request $request){}
    public function delete($id){}
}
