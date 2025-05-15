<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\MataPelajaran;
use App\Models\Guru;
use App\Models\Murid;

class ControllerDashboard extends Controller
{
    public function index()
    {
        // Hitung total data
        $siswa = Murid::count();
        $guru = Guru::count();
        $mapel = MataPelajaran::count();
        $totalHistory = 0; // misal kamu belum punya tabel history

        return view('DashboardAdmin', compact('siswa', 'guru', 'mapel', 'totalHistory'));
    }

    // ... method lain tidak perlu diubah kalau tidak digunakan

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
