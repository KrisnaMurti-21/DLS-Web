<?php

namespace App\Controllers;

use App\Models\ModelSiswa;
use App\Models\ModelGuru;

use function PHPUnit\Framework\isEmpty;

class Login extends BaseController
{
    public function index()
    {
        return view('loginpilih');
    }

    public function logsiswa()
    {
        return view('loginsiswa');
    }

    public function logguru()
    {
        return view('loginguru');
    }

    public function sesisiswa()
    {
        $session = session();
        $model = new ModelSiswa();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verif = password_verify($password, $pass);
            if ($verif) {
                $ses_data = [
                    'idsiswa' => $data['idsiswa'],
                    'nama' => $data['nama'],
                    'nis' => $data['nis'],
                    'email' => $data['email']
                ];
                $session->set($ses_data);
                return redirect()->to('/siswa');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/loginsiswa');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/loginsiswa');
        }
    }

    public function sesiguru()
    {
        $session = session();
        $model = new ModelGuru();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verif = password_verify($password, $pass);
            if ($verif) {
                $ses_data = [
                    'idguru' => $data['idguru'],
                    'nama' => $data['nama'],
                    'nip' => $data['nip'],
                    'email' => $data['email']
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/loginguru');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/loginguru');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
