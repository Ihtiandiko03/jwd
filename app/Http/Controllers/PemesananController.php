<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemesanan.index', [
            'pemesanan' => Pemesanan::all()


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama_lengkap' => 'required',
        //     'nomor_identitas' => 'required',
        //     'nomor_hp' => 'required',
        //     'tempat_wisata' => 'required',
        //     'tanggal_kunjungan' => 'required',
        //     'pengunjung_dewasa' => 'required',
        //     'pengunjung_anak_anak' => 'required',
        //     'total_bayar'
        // ]);

        Pemesanan::create([
            'nama_lengkap'        => $request['nama_lengkap'],
            'nomor_identitas'    => $request['nomor_identitas'],
            'nomor_hp'       => $request['nomor_hp'],
            'tempat_wisata'       => $request['tempat_wisata'],
            'tanggal_kunjungan'       => $request['tanggal_kunjungan'],
            'pengunjung_dewasa'       => $request['pengunjung_dewasa'],
            'pengunjung_anak_anak'       => $request['pengunjung_anak_anak'],
            'total_bayar'     => $request['total_bayar']
        ]);
        return redirect('/pemesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
