<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Tamu implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('nip')) {
            return redirect()->to('/admin');
        } elseif (session()->get('nis')) {
            return redirect()->to('/siswa');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
