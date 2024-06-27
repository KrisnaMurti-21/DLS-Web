<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelTes;
use PhpParser\Node\Stmt\Echo_;

use Phpml\Clustering\KMeans;

class Hitung extends BaseController
{
    public function index()
    {
        $kelas = $this->request->getVar('namakelas');
        $jumlah = $this->request->getVar('jumlah');
        $tesModel = new ModelTes();
        $data = $tesModel->where('kodekelas', $kelas)->findAll();
        $i = 0;
        // $data = $tesModel->findAll();
        foreach ($data as $key) {
            $i++;
        }
        // print_r($i);
        if ($kelas == null) {
            session()->setFlashdata('msg', 'Anda belum memilih kelas');
            return redirect()->to('/admin/hasiltes');
        }
        if ($jumlah == null) {
            session()->setFlashdata('msg', 'Anda belum menentukan jumlah kelompok');
            return redirect()->to('/admin/hasiltes');
        }
        if ($jumlah > $i) {
            session()->setFlashdata('msg', 'Maaf Jumlah Kelompok terlalu banyak');
            return redirect()->to('/admin/hasiltes');
        }

        $samples = [];
        foreach ($data as $key) {
            $samples[$key['nama']] = [$key['aktif'], $key['sensing'], $key['visual'], $key['sequintal']];
        }

        $kmeans = new KMeans($jumlah);
        $hasil = '';
        $hasil = $kmeans->cluster($samples);

        // $kel = 1;
        // $a = 0;
        // $b = 0;
        // $c = 0;
        // $d = 0;
        // foreach ($hasil as $k) {
        //     echo '<br>';
        //     echo "kelompok " . $kel;
        //     $kel++;
        //     echo '<br>';
        //     foreach ($k as $v => $p) {
        //         echo $v . " : ";
        //         $a += $p[0];
        //         $b += $p[1];
        //         $c += $p[2];
        //         $d += $p[3];
        //         echo '[';

        //         foreach ($p as $i) {
        //             echo $i;
        //             if (next($p)) {
        //                 echo ',';
        //             }
        //         }
        //         echo ']';

        //         echo '<br>';
        //     }
        //     echo $a . '<br>';
        //     echo $b . '<br>';
        //     echo $c . '<br>';
        //     echo $d . '<br>';
        //     $a = 0;
        //     $b = 0;
        //     $c = 0;
        //     $d = 0;
        // }

        return view('admin/hasil', ['hasil' => $hasil]);
    }
}
