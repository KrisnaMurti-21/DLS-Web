<?php

namespace App\Controllers;

use App\Models\ModelTes;
use App\Models\ModelKelas;
use App\Models\ModelSoal;

class Uji extends BaseController
{
    protected $tesModel;
    protected $kelasModel;
    protected $soalModel;
    public function __construct()
    {
        $this->soalModel =  new ModelSoal();
        $this->tesModel = new ModelTes();
        $this->kelasModel = new ModelKelas();
    }

    public function index()
    {
        $nis = session()->get('nis');
        $model = new ModelTes();
        $datasiswa = $model->where('kodesiswa', $nis)->first();
        if ($datasiswa) {
            # code...
            $datakelas = $this->kelasModel->where('namakelas', $datasiswa['kodekelas'])->first();
        }
        // dd($datakelas);
        if (empty($datasiswa)) {
            return view('siswa/cclass');
        }
        if (empty($datakelas)) {
            return view('siswa/cclass');
        } else {
            return view('siswa/reenter');
        }
        // return view('cclass');
    }

    public function ceks()
    {
        $session = session();
        $kodekelas = $this->request->getVar('codeclass');
        $dataclass = $this->kelasModel->where('kodekelas', $kodekelas)->first();
        // dd($dataclass);
        if (empty($dataclass)) {
            $session->setFlashdata('msg', 'Kode Kelas Salah');
            return view('siswa/cclass');
        } else {
            $data = [
                'id' => session()->get('idsiswa'),
                'kodekelas' => $dataclass['namakelas'],
                'kodesiswa' => session()->get('nis'),
                'nama' => session()->get('nama')
            ];
            $this->tesModel->save($data);
            return redirect()->to('/uji');
        }
    }

    public function uji1()
    {
        $data['result'] = $this->soalModel->findAll();
        return view('siswa/tes1', $data);
    }

    public function simpan1()
    {
        // $tes = $this->tesModel;
        // $hasil = 0;
        // for ($i = 1; $i < 12; $i++) {
        //     $p = $this->request->getVar($i);
        //     echo session()->get('nama');
        //     echo session()->get('nis');
        //     echo "Jawaban no " . $i . " adalah : ";
        //     echo $p;
        //     echo "<br>";
        //     echo "Jumlah : ";
        //     $hasil += $this->request->getVar($i);
        //     var_dump($hasil);
        //     echo "<br>";
        // }
        // echo "Totalnya adalah " . $hasil;
        // $data = [
        //     'id' => session()->get('idsiswa'),
        //     'aktif' => $hasil
        // ];
        // $tes->save($data);
        // return redirect()->to('/uji2');
        $nilaiSebelum = $this->tesModel->where('kodesiswa', session()->get('nis'))->first();

        $soal_a = [1, 5, 9, 13, 17, 21, 25, 29, 33, 37, 41];
        $soal_b = [
            2, 6, 10, 14, 18, 22, 26, 30, 34, 38, 42
        ];
        $soal_c = [3, 7, 11, 15, 19, 23, 27, 31, 35, 39, 43];
        $soal_d = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44];
        $nilai_a = 0;
        $nilai_b = 0;
        $nilai_c = 0;
        $nilai_d = 0;

        for ($i = 1; $i <= 44; $i++) {
            echo "Ini adalah jawaban untuk no " . $i;
            echo "<br>";
            $jawab = $this->request->getVar($i);
            echo "Jawabannya adalah " . $jawab;
            echo "<br>";
            if (in_array($i, $soal_a)) {
                $nilai_a += $jawab;
            } elseif (in_array($i, $soal_b)) {
                $nilai_b += $jawab;
            } elseif (in_array($i, $soal_c)) {
                $nilai_c += $jawab;
            } else {
                $nilai_d += $jawab;
            }
            echo "<br>";
        }

        echo "Nilai Sebelum adahal " . $nilaiSebelum['aktif'];
        echo "<br>";
        echo "Total nilai A: " . $nilai_a;
        echo "<br>";
        echo "Total nilai B: " . $nilai_b;
        echo "<br>";
        echo "Total nilai C: " . $nilai_c;
        echo "<br>";
        echo "Total nilai D: " . $nilai_d;
        echo "<br>";
        $nilaiSekarang = $nilaiSebelum['aktif'] + $nilai_a;
        echo "Nilai Sekarang adalah : " . $nilaiSekarang;
    }

    public function uji2()
    {
        return view('siswa/tes2');
    }

    public function simpan2()
    {
        $tes = $this->tesModel;
        $hasil = 0;
        for ($i = 1; $i < 12; $i++) {
            $p = $this->request->getVar($i);
            $hasil += $this->request->getVar($i);
        }
        $data = [
            'id' => session()->get('idsiswa'),
            'sensing' => $hasil
        ];
        $tes->save($data);
        return redirect()->to('/uji3');
    }

    public function uji3()
    {
        return view('siswa/tes3');
    }

    public function simpan3()
    {
        $tes = $this->tesModel;
        $hasil = 0;
        for ($i = 1; $i < 12; $i++) {
            $p = $this->request->getVar($i);
            $hasil += $this->request->getVar($i);
        }
        $data = [
            'id' => session()->get('idsiswa'),
            'visual' => $hasil
        ];
        $tes->save($data);
        return redirect()->to('/uji4');
    }

    public function uji4()
    {
        return view('siswa/tes4');
    }

    public function simpan4()
    {
        $tes = $this->tesModel;
        $hasil = 0;
        for ($i = 1; $i < 12; $i++) {
            $p = $this->request->getVar($i);
            $hasil += $this->request->getVar($i);
        }
        $data = [
            'id' => session()->get('idsiswa'),
            'sequintal' => $hasil
        ];
        $tes->save($data);
        // echo "selesai";
        return redirect()->to('/siswa/hasil');
    }

    public function uji()
    {
        $data['result'] = $this->soalModel->findAll();
        return view('/siswa/uji', $data);
    }

    public function save()
    {
        $soal_a = [1, 5, 9, 13, 17, 21, 25, 29, 33, 37, 41];
        $soal_b = [2, 6, 10, 14, 18, 22, 26, 30, 34, 38, 42];
        $soal_c = [3, 7, 11, 15, 19, 23, 27, 31, 35, 39, 43];
        $soal_d = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44];
        $nilai_a = 0;
        $nilai_b = 0;
        $nilai_c = 0;
        $nilai_d = 0;

        for ($i = 1; $i <= 44; $i++) {
            echo "Ini adalah jawaban untuk no " . $i;
            echo "<br>";
            $jawab = $this->request->getVar($i);
            echo "Jawabannya adalah " . $jawab;
            echo "<br>";
            if (in_array($i, $soal_a)) {
                $nilai_a += $jawab;
            } elseif (in_array($i, $soal_b)) {
                $nilai_b += $jawab;
            } elseif (in_array($i, $soal_c)) {
                $nilai_c += $jawab;
            } else {
                $nilai_d += $jawab;
            }
            echo "<br>";
        }

        echo "Total nilai A: " . $nilai_a;
        echo "<br>";
        echo "Total nilai B: " . $nilai_b;
        echo "<br>";
        echo "Total nilai C: " . $nilai_c;
        echo "<br>";
        echo "Total nilai D: " . $nilai_d;

        $data = [
            'id' => session()->get('idsiswa'),
            'aktif' => $nilai_a,
            'sensing' => $nilai_b,
            'visual' => $nilai_c,
            'sequintal' => $nilai_d
        ];
        $this->tesModel->save($data);
        return redirect()->to('siswa/hasil');
    }
}
