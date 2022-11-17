<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $vehicle_type = array('mobil', 'motor');

        $random_key = array_rand($vehicle_type);

        if ($vehicle_type[$random_key] == 'mobil'){
            return [
                'tahun_keluaran' => $this->faker->year($max = 'now'),
                'warna' => $this->faker->safeColorName(),
                'harga' => $this->faker->randomNumber(8, true),
                'stok' => $this->faker->randomNumber(3, true),
                'terjual' => $this->faker->randomNumber(2, true),
                'tipe_kendaraan' => $vehicle_type[$random_key],
                'mesin' => $this->faker->streetName(),
                'kapaistas_penumpang' => $this->faker->randomNumber(1, true),
                'tipe' => $this->faker->company(),
            ];
        }
        else {
            return [
                'tahun_keluaran' => $this->faker->year($max = 'now'),
                'warna' => $this->faker->safeColorName(),
                'harga' => $this->faker->randomNumber(8, true),
                'stok' => $this->faker->randomNumber(3, true),
                'terjual' => $this->faker->randomNumber(2, true),
                'tipe_kendaraan' => $vehicle_type[$random_key],
                'mesin' => $this->faker->streetName(),
                'tipe_suspensi' => $this->faker->company(),
                'tipe_transmisi' => $this->faker->city(),
            ];
        }
    }
}
