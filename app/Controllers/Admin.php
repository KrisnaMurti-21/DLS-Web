<?php

namespace App\Controllers;

use App\Models\ModelKelas;
use App\Models\ModelCustom;
use App\Models\ModelGuru;
use App\Models\ModelSiswa;
use App\Models\ModelTes;

class Admin extends BaseController
{
    protected $modelKelas;
    public function __construct()
    {
        $this->modelKelas = new ModelKelas();
    }
    public function index()
    {
        $model = new ModelCustom();
        $data['result'] = $model->getKelas();
        return view('admin/admin', $data);
    }

    public function tambah()
    {
        $namakelas = $this->request->getVar('namakelas');
        $unique_string = substr(uniqid(), -6);

        // lakukan looping hingga unique_string tidak ditemukan dalam database
        while ($this->modelKelas->where('kodekelas', $unique_string)->countAllResults() > 0) {
            $unique_string = substr(uniqid(), -6);
        }

        $idguru = session()->get('nip');
        $data = [
            'idguru' => $idguru,
            'namakelas' => $namakelas,
            'kodekelas' => $unique_string
        ];
        $this->modelKelas->save($data);
        return redirect()->to("/admin");
    }

    public function datasiswa()
    {
        $model = new ModelSiswa();
        $data['result'] = $model->findAll();
        // var_dump($data);
        return view('admin/datasiswa', $data);
    }

    public function hasiltes()
    {
        // Mengambil nilai unik dari kolom "kota" menggunakan DISTINCT
        $db = \Config\Database::connect();
        $query = $db->query("SELECT DISTINCT kodekelas FROM tes");

        // Memasukkan nilai unik dari kolom "kota" ke dalam array
        $kelas = [];
        foreach ($query->getResultArray() as $row) {
            $kelas[] = $row['kodekelas'];
        }

        //Mengabmil data dari Model Tes
        $model = new ModelTes();
        $tes = $model->findAll();
        // var_dump($data);
        $data = [
            'tes' => $tes,
            'kelas' => $kelas
        ];
        return view('admin/hasiltes', $data);
    }

    public function profile()
    {
        return view('admin/profile');
    }

    public function update()
    {

        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Kolom nama harus diisi.']
            ],
            'nip' => [
                'rules' => 'required|min_length[10]|is_unique[guru.nip,nip,{nip},idguru,{idguru}]',
                'errors' => [
                    'required' => 'Kolom NIP harus diisi.',
                    'min_length' => 'Panjang NIP minimal 10 karakter.',
                    'is_unique' => 'NIP sudah digunakan, silahkan gunakan NIP yang sesuai dengan milik anda.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[guru.email,email,{email},idguru,{idguru}]',
                'errors' => [
                    'required' => 'Kolom email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah digunakan, silahkan gunakan email yang berbeda.'
                ]
            ]
        ];

        // melakukan validasi data sebelum penyimpanan
        if ($this->validate($rules)) {
            $modelGuru = new ModelGuru();
            $modelKelas = new ModelKelas();
            $data = [
                'idguru' => session()->get('idguru'),
                'nama' => $this->request->getVar('nama'),
                'nip' => $this->request->getVar('nip'),
                'email' => $this->request->getVar('email')
            ];
            $nip = session()->get('nip');
            $isiKelas = $modelKelas->where('idguru', $nip)->findAll();
            // dd($isiKelas);
            $nipBaru = $this->request->getVar('nip');
            foreach ($isiKelas as $kelas) {
                $modelKelas->update($kelas['idkelas'], ['idguru' => $nipBaru]);
            }

            // menyimpan data siswa baru ke database
            $modelGuru->save($data);

            // menghapus data session lama
            session()->remove(['nama', 'nip', 'email']);

            // menyimpan data session yang baru
            $isi = $modelGuru->find(session()->get('idguru'));
            $ses_data = [
                'idguru' => $isi['idguru'],
                'nama' => $isi['nama'],
                'nip' => $isi['nip'],
                'email' => $isi['email']
            ];
            session()->set($ses_data);

            // redirect ke halaman profil siswa
            return redirect()->to('admin/profile');
        } else {
            $data['validation'] = $this->validator;
            return view('admin/profile', $data);
        }
    }

    public function editSiswa($id)
    {
        $model = new ModelSiswa();
        $siswa = $model->find($id);

        // Ambil data siswa yang akan di-update dari request POST
        $nama = $this->request->getPost('nama');
        $nis = $this->request->getPost('nis');
        $email = $this->request->getPost('email');

        // Update data siswa
        $data = [
            'nama' => $nama,
            'nis' => $nis,
            'email' => $email
        ];
        $model->update($id, $data);

        // Redirect ke halaman data siswa setelah berhasil melakukan update
        return redirect()->to('/admin/datasiswa');
    }

    public function removeSiswa($id)
    {
        $model = new ModelSiswa();
        $model->delete($id);
        return redirect()->to('/admin/datasiswa');
    }

    public function editKelas($id)
    {
        $model = new ModelKelas();
        $dataguru = $model->find($id);

        if ($dataguru['idguru'] != session()->get('nip')) {
            session()->setFlashdata('msg', 'Anda tidak bisa mengubah nama kelas ini! Harap menghubungi guru terkait');
            return redirect()->to('/admin');
        } else {
            // Ambil data kelas yang akan di-update dari request POST
            $kelas = $this->request->getPost('kelas');

            // Update data kelas
            $data = [
                'idguru' => session()->get('nip'),
                'namakelas' => $kelas
            ];
            $model->update($id, $data);

            // Redirect ke halaman data kelas setelah berhasil melakukan update
            return redirect()->to('/admin');
        }
    }

    public function removeClass($id)
    {
        $model = new ModelKelas();
        $dataguru = $model->find($id);

        if ($dataguru['idguru'] != session()->get('nip')) {
            session()->setFlashdata('msg', 'Anda tidak bisa menghapus kelas ini! Harap menghubungi guru terkait');
            return redirect()->to('/admin');
        } else {
            $model->delete($id);
            return redirect()->to('/admin');
        }
    }
    
    public function viewSiswa($id)
    {
        $model = new ModelTes();
        $siswa = $model->find($id);
        if ($siswa) {
            // Tampilkan data siswa ke dalam view
            $data['siswa'] = $siswa;
            return view('admin/detail_siswa', $data);
        } else {
            // Jika data siswa tidak ditemukan, lakukan tindakan yang sesuai
            session()->setFlashdata('msg', 'Siswa belum mengisi kuesioner');
            return redirect()->to('admin/datasiswa');
        }
    }
}
