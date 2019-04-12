<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all(['id','name','telp','address']);
        // return $suppliers;
        return view('supplier.index', compact('suppliers'));
    }
}
