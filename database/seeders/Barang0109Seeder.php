<?php

namespace Database\Seeders;

use App\Models\Barang0109;
use Illuminate\Database\Seeder;

class Barang0109Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $br1 = new Barang0109();
        $br1->id = "1";
        $br1->nama_brg = "sepatu";
        $br1->harga = "10000";
        $br1->save();

        $br2 = new Barang0109();
        $br2->id = "2";
        $br2->nama_brg = "baju";
        $br2->harga = "5000";
        $br2->save();
    }
}
