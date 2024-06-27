<?php

namespace App\Controllers;

use App\Models\ModelTes;
use App\Models\ModelSiswa;

class Siswa extends BaseController
{
    public function index()
    {
        return view('siswa/index');
    }

    public function jenis()
    {
        return view('siswa/jenis');
    }

    public function manfaat()
    {
        return view('siswa/manfaat');
    }

    public function hasil()
    {
        $model = new ModelTes();
        $nis = session()->get('nis');
        $value = $model->where('kodesiswa', $nis)->first();
        if (empty($value)) {
            return redirect()->to('/tes');
        } else {
            $hasil = [
                'value' => $value
            ];
            return view('siswa/hasilind', $hasil);
        }
    }

    public function profile()
    {
        return view('siswa/profile');
    }

    public function update()
    {

        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Kolom nama harus diisi.']
            ],
            'nis' => [
                'rules' => 'required|min_length[5]|is_unique[siswa.nis,nis,{nis},idsiswa,{idsiswa}]',
                'errors' => [
                    'required' => 'Kolom NIS harus diisi.',
                    'min_length' => 'Panjang NIS minimal 5 karakter.',
                    'is_unique' => 'NIS sudah digunakan, silahkan gunakan NIS yang yang sesuai dengan milik anda.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[siswa.email,email,{email},idsiswa,{idsiswa}]',
                'errors' => [
                    'required' => 'Kolom email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah digunakan, silahkan gunakan email yang berbeda.'
                ]
            ]
        ];

        // melakukan validasi data sebelum penyimpanan
        if ($this->validate($rules)) {
            $model = new ModelSiswa();
            $data = [
                'idsiswa' => session()->get('idsiswa'),
                'nama' => $this->request->getVar('nama'),
                'nis' => $this->request->getVar('nis'),
                'email' => $this->request->getVar('email')
            ];

            // menyimpan data siswa baru ke database
            $model->save($data);

            // menghapus data session lama
            session()->remove(['nama', 'nis', 'email']);

            // menyimpan data session yang baru
            $isi = $model->find(session()->get('idsiswa'));
            $ses_data = [
                'idsiswa' => $isi['idsiswa'],
                'nama' => $isi['nama'],
                'nis' => $isi['nis'],
                'email' => $isi['email']
            ];
            session()->set($ses_data);

            // redirect ke halaman profil siswa
            return redirect()->to('siswa/profile');
        } else {
            $data['validation'] = $this->validator;
            return view('siswa/profile', $data);
        }
    }
}
