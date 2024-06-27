<?php

namespace App\Controllers;

use App\Models\ModelGuru;
use App\Models\ModelSiswa;

class Register extends BaseController
{
    public function index()
    {
        return view('registerpilih');
    }

    public function regguru()
    {
        return view('registerguru');
    }

    public function regsiswa()
    {
        return view('registersiswa');
    }

    public function savesiswa()
    {
        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom nama harus diisi.'
                ]
            ],
            'nis' => [
                'rules' => 'required|min_length[5]|is_unique[siswa.nis]',
                'errors' => [
                    'required' => 'Kolom NIS harus diisi.',
                    'min_length' => 'Panjang NIS minimal 5 karakter.',
                    'is_unique' => 'NIS sudah digunakan, silahkan gunakan NIS yang berbeda.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[siswa.email]',
                'errors' => [
                    'required' => 'Kolom email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah digunakan, silahkan gunakan email yang berbeda.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Kolom password harus diisi.',
                    'min_length' => 'Panjang password minimal 8 karakter.'
                ]
            ],
            'confpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Kolom konfirmasi password harus diisi.',
                    'matches' => 'Konfirmasi password tidak sesuai.'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new ModelSiswa();
            $data = [
                'nama' => $this->request->getVar('nama'),
                'nis' => $this->request->getVar('nis'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/loginsiswa');
        } else {
            $data['validation'] = $this->validator;
            echo view('registersiswa', $data);
        }
    }

    public function saveguru()
    {
        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom nama harus diisi.'
                ]
            ],
            'nip' => [
                'rules' => 'required|min_length[10]|is_unique[guru.nip]',
                'errors' => [
                    'required' => 'Kolom NIP harus diisi.',
                    'min_length' => 'Panjang NIP minimal 8 karakter.',
                    'is_unique' => 'NIS sudah digunakan, silahkan gunakan NIS yang berbeda.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[guru.email]',
                'errors' => [
                    'required' => 'Kolom email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah digunakan, silahkan gunakan email yang berbeda.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Kolom password harus diisi.',
                    'min_length' => 'Panjang password minimal 8 karakter.'
                ]
            ],
            'confpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Kolom konfirmasi password harus diisi.',
                    'matches' => 'Konfirmasi password tidak sesuai.'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new ModelGuru();
            $data = [
                'nama' => $this->request->getVar('nama'),
                'nip' => $this->request->getVar('nip'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/loginguru');
        } else {
            $data['validation'] = $this->validator;
            echo view('registerguru', $data);
        }
    }
}
