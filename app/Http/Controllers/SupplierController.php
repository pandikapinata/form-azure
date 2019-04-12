<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
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

    public function create()
    {
        return view('supplier.create');
    }

    public function store(SupplierRequest $request)
    {
        // return $request->all();
        $supplier = new Supplier;
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->telp = $request->telp;
        $supplier->save();
        // Supplier::create($input);
        return redirect('suppliers')->with('success', 'Berhasil menambahkan supplier');
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('supplier.edit', compact('supplier'));
    }


    public function update(SupplierRequest $request, $id)
    {
        $supplier = Supplier::find($id);
        // return $request->all();   
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->telp = $request->telp;
        $supplier->save();
        return redirect('suppliers')->with('success', 'Berhasil memperbaharui supplier');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('suppliers')->with('success', 'Berhasil menghapus supplier');
    }
}
