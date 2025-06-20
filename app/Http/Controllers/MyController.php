<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $arr = [
        ['id' => 1, 'nama' => 'faza', 'kelas' => 'Xii rpl 1'],
        ['id' => 2, 'nama' => 'Ubed', 'kelas' => 'Xii rpl 2'],
        ['id' => 3, 'nama' => 'Cemen', 'kelas' => 'Xii rpl 3'],
    ];

    public function index()
    {
        $siswa = session('siswa_data', $this->arr);
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function show($id)
    {
        $siswa = collect($this->arr)->firstwhere('id', $id);
        //jika tidak ada
        if (! $siswa) {
            abort(404);
        }

        //dd{$siswa}; untuk cek data
        return view('siswa.show', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('create_siswa');
    }

    public function store(Request $request)
    {
        $siswa = session('siswa_data', $this->arr);

        //membuat increment id otomatis
        $newId = collect($siswa)->max('id') + 1;

        // tambah data siswa
        $siswa[] = [
            'id'    => $newId,
            'kelas' => $request->kelas,
            'nama'  => $request->nama,
        ];

        //kembali ke array siswa
        session(['siswa_data' => $siswa]);

        //kembali ke halaman siswa
        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = session('siswa_data', $this->arr);
        $siswa = collect($this->arr)->firstwhere('id', $id);
        //jika tidak ada
        if (! $siswa) {
            abort(404);
        }

        // dd($siswa); //untuk cek data
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = session('siswa_data', $this->arr);

        //membuat increment id otomatis
        foreach ($siswa as &$item) {
            if ($item['id'] == $id) {
                $siswa['nama']  = $request->nama;
                $siswa['kelas'] = $request->kelas;
            }
        }

        //kembali ke array siswa
        session(['siswa_data' => $siswa]);
        //kembali ke halaman siswa
        return redirect('siswa');
    }

    public function destroy($id)
    {
        $siswa = session('siswa_data', $this->arr);
        $index = array_search($id, array_column($siswa, 'id'));

        //hapus
        array_splice($siswa, $index, 1);

        session(['siswa_data' => $siswa]);

        return redirect('siswa');
    }
}
