<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class pelanggan0109Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plg1 = new Pelanggan0109();
        $plg1->id = "1";
        $plg1->nama_plg = "ade";
        $plg1->alamat = "surabaya";
        $plg1->save();

        $plg2 = new Pelanggan0109();
        $plg2->id = "2";
        $plg2->nama_plg = "zam";
        $plg2->alamat = "kalimantan";
        $plg2->save();

        $plg3 = new Pelanggan0109();
        $plg3->id = "1";
        $plg3->nama_plg = "arif";
        $plg3->alamat = "sidoarjo";
        $plg3->save();
    }
}
