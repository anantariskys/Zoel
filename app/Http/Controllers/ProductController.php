<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image'
        ]);

        $product = new Product;
        $product->nama = $request->nama;
        $product->role = $request->role;
        $product->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $product->gambar = $request->file('gambar')->store('images', 'public');
        }

        $product->save();

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image'
        ]);

        $product->nama = $request->nama;
        $product->role = $request->role;
        $product->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
      
            if ($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $product->gambar = $request->file('gambar')->store('images', 'public');
        }

        $product->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

   
        if ($product->gambar) {
            Storage::disk('public')->delete($product->gambar);
        }

        $product->delete();

        return redirect()->route('admin.index');
    }
}
