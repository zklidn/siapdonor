<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Urutan HARUS sesuai urutan migration karena ada foreign key
        $this->call('UserSeeder');             
        $this->call('PermintaanDarahSeeder');   
        $this->call('PasienSeeder');           
        $this->call('DetailPermintaanSeeder');  
        $this->call('DonorSeeder');             
        $this->call('LogAktivitasSeeder');     
        $this->call('NotifikasiSeeder');        
    }
}