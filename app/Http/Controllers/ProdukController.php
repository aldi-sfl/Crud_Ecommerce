<?php

namespace App\Http\Controllers;

use App\Models\produk;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data = DB::table('product')->paginate(15);

        return view('crudproduk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Session::flash('nama_produk', $request->nama_produk);
        Session::flash('deskripsi', $request->deskripsi);
        Session::flash('harga', $request->harga);
        Session::flash('jumlah', $request->jumlah);

        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
        ],[
            'nama_produk.required' => 'nama produk harus diisi',
            'deskripsi.required' => 'deskripsi produk harus diisi',
            'harga.required' => 'harga produk harus diisi',
            'jumlah.required' => 'jumlah produk harus diisi',
        ]);

        $data = [
            'nama_produk' =>$request->nama_produk,
            'deskripsi' =>$request->deskripsi,
            'harga' =>$request->harga,
            'jumlah' =>$request->jumlah,
        ];

        Produk::create($data);
        return redirect()->to('produk')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = produk::where('id_produk', $id)->first();
        return view('edit')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data =[
            'nama_produk' =>$request->nama_produk,
            'deskripsi' =>$request->deskripsi,
            'harga' =>$request->harga,
            'jumlah' =>$request->jumlah,
        ];
        produk::where('id_produk',$id)->update($data);
        return redirect()->to('produk')->with('success', 'Berhasil melakukan update data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produk::where('id_produk', $id)->delete();
        return redirect()->to('produk')->with('success', 'Berhasil melakukan hapus data');
    }
}
