<!-- https://buildwithangga.com/tips/tutorial-crud-laravel-11-mysql-8-breeze-bikin-projek-website-jual-beli-mobil -->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use APp\Models\ms_item;

class Item_ct extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = Item::with('category')->paginate(10);
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validasi data yang dikirimkan dari form
         $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Menyimpan produk baru ke database
        Product::create($request->all());

        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         // Cari produk berdasarkan ID
         $product = Product::findOrFail($id);

         // Ambil semua kategori untuk form select
         $categories = Category::all();
 
         // Return view dengan data produk yang akan di-edit
         return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validasi data dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update produk di database
        $product->update($request->all());

        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus produk dari database
        $product->delete();

        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
