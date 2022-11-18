<?php

namespace App\Service;

use App\Repository\KendaraanRepository;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class KendaraanService
{
    protected $KendaraanRepository;

    public function __construct(KendaraanRepository $KendaraanRepository)
    {
        $this->KendaraanRepository = $KendaraanRepository;
    }

    public function store($data)
    {
        return $this->KendaraanRepository->store($data);
    }

    public function getStokKendaraan()
    {
        return $this->KendaraanRepository->getStokKendaraan();
    }

    public function findWithId($data)
    {
        return $this->KendaraanRepository->findWithid($data);
    }

    public function deleteWithId($data)
    {
        return $this->KendaraanRepository->deleteWithId($data);
    }

    public function getStokMobil()
    {
        return $this->KendaraanRepository->getStokMobil();
    }

    public function getStokMotor()
    {
        return $this->KendaraanRepository->getStokMotor();
    }
}
