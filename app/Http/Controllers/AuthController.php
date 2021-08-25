<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
    return ['NIS' => 3103119137,
        'Nama' => 'Nanda Fadillah Wulandari',
        'Jenis Kelamin' => 'Perempuan',
        'Telepon' => '08817623094',
        'Kelas' => 'XII RPL 4'];
  }
}
