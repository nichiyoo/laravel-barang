<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $barangs = Barang::orderBy('created_at', 'desc')->paginate(10);
        return view('barangs.index', compact('barangs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        // validate request
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'stok' => ['required', 'numeric', 'min:1'],
            'harga_beli' => ['required', 'numeric', 'min:1'],
            'harga_jual' => ['required', 'numeric', 'min:1', 'gt:harga_beli'],
            'gambar' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ])->validate();

        // save barang and gambar
        $barang = Barang::create($request->except('gambar'));

        // save gambar
        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->file('gambar')->extension();
            Storage::disk('public')->put('barang/' . $filename, file_get_contents($request->file('gambar')));
            $barang->gambar = $filename;
            $barang->save();
        }

        // redirect to index
        return redirect()->route('barangs.index')
            ->with('success', 'Barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find barang by id
        $barang = Barang::where('id', $id)->firstOrFail();
        return view('barangs.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        // find barang by id
        $barang = Barang::findOrfail($id);
        $barang->delete();

        return redirect()->route('barangs.index')
            ->with('success', 'Barang berhasil dihapus.');
    }
}
