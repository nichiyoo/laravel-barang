<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();

        return view('viewbarang', compact(
            'data'
        ));
    }

    public function utama()
    {
        $data = Barang::all();

        return view('welcome', compact(
            'data'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Barang;
        return view('input',compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $model = new Barang;
        $model->nama_barang =$request->nama_barang;
        $model->harga_beli =$request->harga_beli;
        $model->harga_jual =$request->harga_jual;
        $model->stok =$request->stok;
        $model->gambar =$request->gambar;
        $model->save();

        if($request->hasFile('gambar')){
            $request->file('gambar')->move(public_path('gambarbarang/'), $request->file('gambar')->getClientOriginalName());
            $model->gambar = $request->file('gambar')->getClientOriginalName();
            $model->save();
        }
        
        return redirect('Barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        $model=Barang::find($id);
        $model->delete();
        return redirect('Barang');
    }
}
