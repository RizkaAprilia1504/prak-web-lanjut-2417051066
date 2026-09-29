<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'Nama' => 'Rizka Aprilia',
            'NPM' => '2417051066',
            'Kelas' => 'Ilmu Komputer A'
        ];
        return view('profile', $data);
    }
}
