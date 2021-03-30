<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = array(
            array('MZA001', 'helm', 'perlengkapan riding', 1500000, 10),
            array('MZA002', 'wearpack', 'perlengkapan riding', 4500000, 50),
            array('MZA003', 'sarung tangan', 'perlengkapan riding', 1200000, 45),
            array('MZA004', 'sepatu', 'perlengkapan riding', 2500000, 30),
            array('MZA005', 'knalpot', 'aksesoris motor', 9000000, 45),
            array('MZA006', 'spion', 'aksesoris motor', 250000, 200),
            array('MZA007', 'handle ', 'aksesoris motor', 500000, 150),
            array('MZA008', 'visor', 'aksesoris motor', 200000, 25),
            array('MZA009', 'rantai', 'aksesoris motor', 150000, 75),
            array('MZA010', 'stabilizer stang', 'aksesoris motor', 1000000, 40),
            array('MZA011', 'ban motor', 'aksesoris motor', 3000000, 125),
            array('MZA012', 'single seat', 'aksesoris motor', 250000, 250),
            array('MZA013', 'tank pad', 'aksesoris motor', 200000, 55),
            array('MZA014', 'lampu 3 in 1', 'aksesoris motor', 600000, 20),
            array('MZA015', 'luimoto cover seat', 'aksesoris motor', 400000, 60),
            array('MZA016', 'klakson', 'aksesoris motor', 150000, 100),
            array('MZA017', 'hand bar', 'aksesoris motor', 170000, 250),
            array('MZA018', 'box motor', 'aksesoris motor', 3000000, 50),
            array('MZA019', 'carbon cover spido', 'aksesoris motor', 400000, 35),
            array('MZA020', 'carbon cover headlamp', 'aksesoris motor', 450000, 150)
        );

        for($i = 0; $i < 20; $i++){
            DB::table('barangs')->insert([
                'kode_barang'       => $barang[$i][0],
                'nama_barang'       => $barang[$i][1],
                'kategori_barang'   => $barang[$i][2],
                'harga'             => $barang[$i][3],
                'qty'               => $barang[$i][4]
            ]);
        }
    }
}
