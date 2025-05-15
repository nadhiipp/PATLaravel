<?php

namespace App\Http\Controllers;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Guru;
use App\Models\Murid;
use Illuminate\Http\Request;

class ControllerNilai extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        
        $search = $request->input('search');

     $nilai = Nilai::when($search, function ($query, $search) {
        return $query
                 ->whereHas('guru', function ($q) use ($search) {
                     $q->where('nama', 'like', "%{$search}%");
                 })
                 ->orWhereHas('murid', function ($q) use ($search) {
                     $q->where('nama', 'like', "%{$search}%");    
                 })
                 ->orWhereHas('mataPelajaran', function ($q) use ($search) {
                     $q->where('mata_pelajaran', 'like', "%{$search}%");
                 })
                 ->orWhere('nilai', 'like', "%{$search}%")
                 ->orWhere('predikat', 'like', "%{$search}%")
                 ->orWhere('semester', 'like', "%{$search}%");
    })->paginate(10);

    return view('nilai.nilai', 
        // 'guru' => Guru::get(),
        // 'murid' => murid::get(),
        // 'matapelajaran' => MataPelajaran::get(),
        compact('nilai', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
