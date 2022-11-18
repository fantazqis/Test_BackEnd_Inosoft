<?php

namespace App\Repository;

use App\Models\Kendaraan;
use Illuminate\Support\Facades\DB;

class KendaraanRepository
{
    public function store($data)
    {
        $kendaraan = new kendaraan;

        $kendaraan->tahun_keluaran = $data['tahun_keluaran'];
        $kendaraan->warna = $data['warna'];
        $kendaraan->harga = $data['harga'];
        $kendaraan->stok = $data['stok'];
        $kendaraan->terjual = $data['terjual'];
        $kendaraan->tipe_kendaraan = $data['tipe_kendaraan'];
        $kendaraan->mesin = $data['mesin'];

        $kendaraan->save();
        return $kendaraan->fresh();
        //return Kendaraan::create($data);
    }

    public function getStokKendaraan()
    {
        return Kendaraan::all();
    }

    public function findWithid($data)
    {
        return Kendaraan::find($data);
    }

    public function deleteWithId($data)
    {
        return Kendaraan::destroy($data->id);
    }

    public function getStokMobil()
    {
        return Kendaraan::where(
            'tipe_kendaraan',
            'mobil',
        )->get();;
    }

    public function getStokMotor()
    {
        return Kendaraan::where(
            'tipe_kendaraan',
            'motor',
        )->get();;
    }
}
