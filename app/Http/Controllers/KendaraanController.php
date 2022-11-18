<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Service\KendaraanService;
use App\Service\MobilService;
use App\Service\MotorService;
use Exception;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    private $KendaraanService;

    public function __construct(KendaraanService $KendaraanService)
    {
        $this->KendaraanService = $KendaraanService;
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'tahun_keluaran',
            'warna',
            'harga',
            'stok',
            'terjual',
            'tipe_kendaraan',
            'mesin',
        ]);
        $result = $this->KendaraanService->store($data);
    }

    public function index()
    {
        return $this->KendaraanService->getStokKendaraan();
    }

    public function show(Kendaraan $kendaraan)
    {
        return $this->KendaraanService->FindWithId($kendaraan);
    }

    public function destroy(Kendaraan $kendaraan)
    {
        return $this->KendaraanService->deleteWithId($kendaraan);
    }

    public function getStokMobil()
    {
        return $this->KendaraanService->getStokMObil();
    }

    public function getStokMotor()
    {
        return $this->KendaraanService->getStokMotor();
    }
}
