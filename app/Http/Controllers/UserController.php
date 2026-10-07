<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $kelasModel = new Kelas(); 
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        User::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id')
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil ditambahkan!');
    }

    public function index()
    {
        $userModel = new User();
        $data = [
            'title' => 'List User',
            'users' => $userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data user berhasil dihapus!');
    }
}