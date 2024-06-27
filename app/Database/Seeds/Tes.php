<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tes extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create("id_ID");
        for ($i = 1; $i <= 10; $i++) {
            $id = $i;
            $kode_kelas = 'tjkt 1';
            // $nama = $faker->name();
            $nis = $faker->randomNumber(9, true);
            $nama = $faker->name();
            $aktif =
                $faker->randomElement([$faker->numberBetween(-11, -1), $faker->numberBetween(1, 11)]);
            $sensing =
                $faker->randomElement([$faker->numberBetween(-11, -1), $faker->numberBetween(1, 11)]);
            $visual =
                $faker->randomElement([$faker->numberBetween(-11, -1), $faker->numberBetween(1, 11)]);
            $sequintal =
                $faker->randomElement([$faker->numberBetween(-11, -1), $faker->numberBetween(1, 11)]);

            $email = $faker->freeEmail();
            $password = $faker->password();

            $data_tes[] = [
                'id' => $id,
                'kodekelas' => $kode_kelas,
                'kodesiswa' => $nis,
                'aktif' => $aktif,
                'sensing' => $sensing,
                'visual' => $visual,
                'sequintal' => $sequintal,
                'nama' => $nama
            ];
            $data_siswa[]=[
                'idsiswa' => $id,
                'nis'=> $nis,
                'nama' => $nama,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'wo_en' => $password
            ];
        }
        foreach ($data_tes as $tes) {
            $this->db->table("tes")->insert($tes);
        }
        foreach ($data_siswa as $siswa){
            $this->db->table("siswa")->insert($siswa);
        }
    }
}
