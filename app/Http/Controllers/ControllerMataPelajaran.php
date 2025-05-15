<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\MataPelajaran;
use Illuminate\Routing\Controller;
use App\Models\Guru;
use App\Models\Nilai;


class ControllerMataPelajaran extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
         // Ambil data dengan pagination, 10 per halaman

        $mataPelajaran = MataPelajaran::when($search, function ($query, $search) {
        return $query->where('kode', 'like', "%{$search}%")
                     ->orWhere('mata_pelajaran', 'like', "%{$search}%");
                    
    })->paginate(5);

    return view('mataPelajaran.mataPelajaran', compact('mataPelajaran', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mataPelajaran.create', [
            'mataPelajaran' => MataPelajaran::get(),
            'guru' => Guru::get(),
            'nilai' => Nilai::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'kode' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
        ]);


        MataPelajaran::create([
            'kode' => $request->kode,
            'mata_pelajaran' => $request->mata_pelajaran,
        ]);
        return redirect()->route('mataPelajaran.index')->with('success', 'Mata Pelajaran Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('mataPelajaran.update', [
            'mataPelajaran' => MataPelajaran::findOrFail($id),
            'guru' => Guru::get(),
            'nilai' => Nilai::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'kode' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
        ]);

        $mataPelajaran = MataPelajaran::findOrFail($id);
        
        $mataPelajaran->update([
            'kode' => $request->kode,
            'mata_pelajaran' => $request->mata_pelajaran,
        ]);
        return redirect()->route('mataPelajaran.index')->with('success', 'Data mata pelajaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);

        // Hapus user yang terkait
        

        // Hapus murid
        $mataPelajaran->delete();

        return redirect()->route('mataPelajaran.index')->with('success', 'Data guru dan user berhasil dihapus.');
    }
}
